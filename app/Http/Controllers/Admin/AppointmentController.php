<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Appointment;
use App\Models\Package;
use Illuminate\Http\Request;

class AppointmentController extends Controller
{
    public function index(Request $request)
    {
        $appointments = Appointment::with(['user', 'package'])
            ->when($request->user, fn($query) =>
            $query->whereHas('user', fn($q) =>
            $q->where('name', 'like', '%' . $request->user . '%')
                ->orWhere('email', 'like', '%' . $request->user . '%')
            )
            )
            ->when($request->date, fn($query) =>
            $query->whereDate('appointment_date', $request->date)
            )
            ->when($request->package_id, fn($query) =>
            $query->where('package_id', $request->package_id)
            )
            ->latest()
            ->get();

        $packages = Package::all();

        return view('admin.appointments.index', compact('appointments', 'packages'));
    }


    public function destroy($id)
    {
        $appointment = Appointment::findOrFail($id);
        $appointment->delete();

        return redirect()->back()->with('success', 'Termin je uspešno obrisan.');
    }

    public function updateStatus(Request $request, Appointment $appointment)
    {
        $request->validate([
            'status' => 'required|in:pending,approved,rejected',
        ]);

        $appointment->status = $request->status;
        $appointment->save();

        return redirect()->route('admin.appointments')->with('success', 'Status uspešno izmenjen.');
    }

}
