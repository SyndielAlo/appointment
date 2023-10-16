<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Appointment;

class AppointmentController extends Controller
{
    public function index()
    {
        $appointments = Appointment::all();
        return view('appointments', compact('appointments'));
    }

    public function approve($id)
    {
        $appointment = Appointment::find($id);
        
        if (!$appointment) {
            return redirect()->route('appointments.index')->with('error', 'Appointment not found.');
        }
        
        $appointment->update(['status' => 'Approved']);
        return redirect()->route('appointments.index')->with('success', 'Appointment approved successfully.');
    }

    public function destroy($id)
    {
        $appointment = Appointment::find($id);
        
        if (!$appointment) {
            return redirect()->route('appointments.index')->with('error', 'Appointment not found.');
        }
        
        $appointment->delete();
        return redirect()->route('appointments.index')->with('success', 'Appointment deleted successfully.');
    }
}
