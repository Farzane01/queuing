@extends('layouts.main')

@section('content')
    <div class="text-center">
        <img src="/assets/img/777.jpg">
    </div>
    <div class="pagetitle text-center">
        <br><h1>Find your doctor and book an appointment!</h1><br>
    </div>
    <div class="section">
        <div class="">
            <div class="row">
                @foreach($doctors as $doctor)
                    <div class="col-xl-2">
                        <div class="card">
                            <div class="card-body profile-card pt-4 d-flex flex-column align-items-center">
                                <img src="@if($doctor->user->avatar == null) assets/img/noavatar.jpg @else {{$doctor->user->avatar}} @endif" alt="Profile" class="rounded-circle">
                                <div class="pt-3 text-center">
                                    <div class="fw-bold">{{$doctor->user->name}}</div>
                                    {{$doctor->field}}
                                </div>
                                <div class="pt-2 mt-2">
                                    <a class="btn btn-outline-primary" href="{{route('appointment.index',$doctor->user->id)}}">Reserve</a>
                                    <!-- Basic Modal -->
                                    <button type="button" class="btn btn-outline-info" data-bs-toggle="modal" data-bs-target="#basicModal">
                                        View
                                    </button>
                                    <div class="modal fade" id="basicModal" tabindex="-1">
                                        <div class="modal-dialog">
                                            <div class="modal-content">
                                                <div class="modal-header">
                                                    <h5 class="modal-title">Doctor Information</h5>
                                                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                                </div>
                                                <div class="modal-body">
                                                    <h5>Phone: {{$doctor->phone}}</h5>
                                                    <h5>Address: {{$doctor->address}}</h5>
                                                </div>
                                                <div class="modal-footer">
                                                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                                                </div>
                                            </div>
                                        </div>
                                    </div><!-- End Basic Modal-->
{{--                                    <button type="button" class="btn btn-outline-info">View</button>--}}
                                </div>
                            </div>
                        </div>
                    </div>
                @endforeach

            </div>
        </div>
        <div class="row ">
            <div class="col-6">
                <div class="card top-selling overflow-auto">

                    <div class="card-body pt-3">
                        <h5 class="card-title">Recent appointments <span>| Today</span></h5>

                        <table class="table table-borderless">
                            <tbody>
                            @foreach($appointments as $appointment)
                                <tr>
                                    <td>{{$appointment->doctor_id}}</td>
                                    <td class="fw-bold"></td>
                                    <td>{{$appointment->date}}</td>
                                    <td>{{$appointment->start_time}}</td>
                                </tr>
                            @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
            <div class="col-6">
                <div class="card">
                    <div class="card-body profile-card pt-3 d-flex flex-column ">
                        <h5 class="card-title">Appointment Tracking</h5>
                        <div class=" ">
                            If you forget the appointment, enter your confirmation code and <strong>check it now!</strong>
                        </div>
                        <div class="pt-3 mt-2">
                            <span class="col-form-label">
                                <h5>Confirmation code:</h5>
                            </span>
                            <input type="text" class="form-control mb-3">
                            <div class="text-center">
                                <button type="button" class="btn btn-primary">Check</button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection
