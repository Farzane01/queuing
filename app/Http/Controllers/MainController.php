<?php

namespace App\Http\Controllers;

use App\Models\Appointment;
use App\Models\Doctor;
use App\Models\User;
use Illuminate\Http\Request;

class MainController extends Controller
{
    public function index()
    {
        $doctors = Doctor::all();
        $appointments = Appointment::all();
        return view('main' , compact(['doctors', 'appointments']));
    }
}
