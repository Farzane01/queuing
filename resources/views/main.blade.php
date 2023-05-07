@extends('layouts.main')

@section('content')
    <div class="text-center">
        <img src="/assets/img/777.jpg">
    </div>
    <div class="pagetitle text-center">
        <br><h1>Find your doctor and book an appointment!</h1><br>
    </div>
    <div class="section">
        <div class="row">
            <div class="col-xl-2">
                <div class="card">
                    <div class="card-body profile-card pt-4 d-flex flex-column align-items-center">
                        <img src="assets/img/profile-img.jpg" alt="Profile" class="rounded-circle">
                        <h2>Kevin Anderson</h2>
                        <h3>Web Designer</h3>
                        <div class="social-links mt-2">
                            <a href="#" class="twitter"><i class="bi bi-twitter"></i></a>
                            <a href="#" class="facebook"><i class="bi bi-facebook"></i></a>
                            <a href="#" class="instagram"><i class="bi bi-instagram"></i></a>
                            <a href="#" class="linkedin"><i class="bi bi-linkedin"></i></a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-xl-2">
                <div class="card">
                    <div class="card-body profile-card pt-4 d-flex flex-column align-items-center">
                        <img src="assets/img/profile-img.jpg" alt="Profile" class="rounded-circle">
                        <h2>Kevin Anderson</h2>
                        <h3>Web Designer</h3>
                        <div class="social-links mt-2">
                            <a href="#" class="twitter"><i class="bi bi-twitter"></i></a>
                            <a href="#" class="facebook"><i class="bi bi-facebook"></i></a>
                            <a href="#" class="instagram"><i class="bi bi-instagram"></i></a>
                            <a href="#" class="linkedin"><i class="bi bi-linkedin"></i></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="card col-xl-8">
            <div class="card-body">
                <h5 class="card-title">Appointment tracking</h5>
                <div class="d-grid gap-2 mt-3">
                    <button class="btn btn-primary" type="button">Check it now</button>
                </div>
            </div>
        </div>
    </div>

@endsection
