<?php

namespace App\Http\Controllers;

use App\Http\Requests\AppointmentRequest;
use App\Models\Appointment;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\Package;


class AppointmentController extends Controller
{
    public function store(AppointmentRequest $request)
    {
        $package = Package::findOrFail($request->package_id);

        Appointment::create([
            'user_id' => Auth::id(),
            'package_id' => $package->id,
            'appointment_date' => $request->appointment_date,
            'note' => $request->note,
            'price' => $package->price,
            'status' => 'pending',
        ]);

        return redirect()->back()->with('success', 'Uspesno ste zakazali tretman.');
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



}
