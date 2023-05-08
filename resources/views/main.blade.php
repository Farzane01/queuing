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
                <div class="col-xl-2">
                    <div class="card">
                        <div class="card-body profile-card pt-4 d-flex flex-column align-items-center">
                            <img src="assets/img/profile-img.jpg" alt="Profile" class="rounded-circle">
                            <div class="pt-3 text-center">
                                <div class="fw-bold">Dr. Behrooz Gharib</div>
                                Hematologist
                            </div>
                            <div class="pt-2 mt-2">
                                <button type="button" class="btn btn-outline-primary">Reserve</button>
                                <button type="button" class="btn btn-outline-info">View</button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="row ">
            <div class="col-6">
                <div class="card top-selling overflow-auto">

                    <div class="card-body pt-3">
                        <h5 class="card-title">Recent appointments <span>| Today</span></h5>

                        <table class="table table-borderless">
                            <tbody>
                            <tr>
                                <td><a href="#" class="text-primary fw-bold">Dr. Daneshmand</a></td>
                                <td class="fw-bold">Atfal</td>
                                <td>1402.03.10</td>
                                <td>10:00</td>
                            </tr>
                            <tr>
                                <td><a href="#" class="text-primary fw-bold">Dr. Gharib</a></td>
                                <td class="fw-bold">Khoon</td>
                                <td>1402.03.10</td>
                                <td>09:00</td>
                            </tr>
                            <tr>
                                <td><a href="#" class="text-primary fw-bold">Dr. Ezzati</a></td>
                                <td class="fw-bold">Zanan</td>
                                <td>1402.03.10</td>
                                <td>08:30</td>
                            </tr>
                            <tr>
                                <td><a href="#" class="text-primary fw-bold">Dr. Ezzati</a></td>
                                <td class="fw-bold">Zanan</td>
                                <td>1402.03.10</td>
                                <td>08:00</td>
                            </tr>
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
