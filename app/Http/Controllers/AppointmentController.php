<?php

namespace App\Http\Controllers;

use App\Models\Appointment;
use App\Models\Doctor;
use App\Models\User;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AppointmentController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index($doctorId)
    {
        $doctor = User::find($doctorId);
        return view('appointment.index', compact('doctor'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('appointment.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $appointmentsCount = (Carbon:: $request->endTime - $request->startTime)/ $request->duration;
        dd($appointmentsCount);
//        foreach ()
//        {
//            $appointment = Appointment::create([
//                'doctor_id' => Auth::user()->id,
//                'date' => $request->date,
//                'start_time' => $request->,
//                'end_time' ,
//                ]
//            );
//        }
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
