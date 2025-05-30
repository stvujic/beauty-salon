<?php

namespace App\Http\Controllers;

use App\Http\Requests\AppointmentRequest;
use App\Models\Appointment;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AppointmentController extends Controller
{
    public function store(AppointmentRequest $request)
    {
        Appointment::create([
            'user_id' => Auth::id(),
            'package' => $request->package,
            'appointment_date' => $request->appointment_date,
            'note' => $request->note,
            'price' => $request->price,
            'status' => 'pending',
        ]);

        return redirect()->back()->with('success', 'Uspesno ste zakazali tretman.');
    }

    public function create()
    {
        return view('appointments.create');
    }

}
