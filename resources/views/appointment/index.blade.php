@extends('layouts.main')

@section('content')
    <br>
    <section class="section">
        <div class="row">
            <div class="col-lg-3 pt-5 ps-5">
                <!-- Card with an image on top -->
                <div class="card">
                    <img src="{{($doctor->avatar == null) ? asset('assets/img/noavatar.jpg') : asset($doctor->avatar)}}" class="card-img-top" alt="...">
                    <div class="card-body">
                        <h5 class="card-title">{{$doctor->name}}</h5>
                        <p class="card-text"><strong>Address: </strong>{{$doctor->doctor->address}}</p>
                        <p class="card-text"><strong>Phone Number: </strong>{{$doctor->doctor->phone}}</p>
                    </div>
                </div><!-- End Card with an image on top -->
            </div>
            <div class="col-lg-8 pt-5">
                <!-- Default Card -->
                <div class="card">
                    <div class="card-body">
                        <h5 class="card-title">Reservation</h5>
                        <div class="row">
                            <label for="inputDate" class="col-sm-2 col-form-label">Select the Date</label>
                            <div class="col-sm-3">
                                <input type="date" class="form-control">
                            </div>
                        </div>
                        <div class="pt-3">
                            <button class="btn btn-success col-sm-3">Submit</button>
                        </div>
                    </div>
                </div><!-- End Default Card -->
            </div>
        </div>
    </section>

@endsection
