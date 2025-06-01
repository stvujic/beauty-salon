<?php

namespace App\Http\Controllers;

use App\Http\Requests\AppointmentRequest;
use App\Models\Appointment;
use Illuminate\Support\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\Package;


class AppointmentController extends Controller
{
    public function store(AppointmentRequest $request)
    {
        $package = Package::findOrFail($request->package_id);

        $date = $request->appointment_date;
        $time = $request->appointment_time;

        // Spoj datum i vreme u jedan datetime objekat
        $appointmentDateTime = Carbon::createFromFormat('Y-m-d H:i', "$date $time");
        Appointment::create([
            'user_id' => Auth::id(),
            'package_id' => $package->id,
            'appointment_date' => $appointmentDateTime,
            'note' => $request->note,
            'price' => $package->price,
            'status' => 'pending',
        ]);

        return redirect()->route('appointments.index')->with('success', 'Uspesno ste zakazali tretman.');
    }

    public function create()
    {
        $packages = Package::all();
        return view('appointments.create', compact('packages'));
    }

    public function index()
    {
        $appointments = Appointment::where('user_id', Auth::id())
            ->with('package')
            ->latest()
            ->get();

        return view('appointments.index', compact('appointments'));
    }

    public function getAvailableSlots(Request $request)
    {
        $request->validate([
            'date' => 'required|date',
            'package_id' => 'required|exists:packages,id',
        ]);

        $package = Package::findOrFail($request->package_id);
        $date = $request->date;

        // Pravimo sve moguće termine u danu sa razmakom od 30 minuta, npr. od 9h do 17h, ovo promeni na 23 mozda
        $start = Carbon::parse($date . ' 09:00');
        $end = Carbon::parse($date . ' 17:00');
        $duration = $package->duration;
        $allSlots = [];

        while ($start->lt($end)) {
            $slotStart = $start->copy();
            $slotEnd = $start->copy()->addMinutes($duration);

            // Provera da li se već koristi ovaj termin
            $conflict = Appointment::where('appointment_date', '>=', $slotStart)
                ->where('appointment_date', '<', $slotEnd)
                ->exists();

            if (!$conflict) {
                $allSlots[] = $slotStart->format('H:i');
            }

            $start->addMinutes(30);
        }

        return response()->json($allSlots);
    }

    public function availableTimes(Request $request)
    {
        $request->validate([
            'date' => 'required|date',
            'package_id' => 'required|exists:packages,id',
        ]);

        $date = $request->date;
        $package = Package::findOrFail($request->package_id);
        $duration = $package->duration;

        $start = Carbon::createFromFormat('Y-m-d H:i', $date . ' 09:00');
        $end = Carbon::createFromFormat('Y-m-d H:i', $date . ' 20:00');

        // Svi zauzeti termini
        $appointments = Appointment::whereDate('appointment_date', $date)->get();

        $availableTimes = [];

        while ($start->lte($end)) {
            $conflict = $appointments->first(function ($appointment) use ($start, $duration) {
                $existingStart = Carbon::parse($appointment->appointment_date);
                $existingEnd = $existingStart->copy()->addMinutes($appointment->package->duration ?? 60);

                $newEnd = $start->copy()->addMinutes($duration);

                return $start->between($existingStart, $existingEnd->subMinute()) ||
                    $newEnd->between($existingStart->addMinute(), $existingEnd);
            });

            if (!$conflict) {
                $availableTimes[] = $start->format('H:i');
            }

            $start->addMinutes(30); // sledeci slot
        }

        return response()->json($availableTimes);
    }


}
