@extends('layouts.main')


@section('content')


    <div class="back" style="height: 90vh; background-color: #eee;">

        <div class="show d-flex justify-content-center ">
            <div class="card mt-5" style="width: 18rem; box-shadow: rgba(0, 0, 0, 0.3) 0px 19px 38px, rgba(0, 0, 0, 0.22) 0px 15px 12px;">
                <img src="{{ asset('images/doctors/'.$doctor->photo) }}">
                <div class="card-body">
                    <div class="d-flex">
                        <b class="text-muted">Name:</b>
                        <p class="mb-2 mx-2 font-weight-bold">{{ $doctor->name }}</p>
                    </div>
                    <div class="d-flex">
                        <b class="text-muted">Age:</b>
                        <p class="mb-2 mx-2 font-weight-bold">{{ $doctor->birthday }}</p>
                    </div>
                    <div class="d-flex">
                        <b class="text-muted">Phone Number:</b>
                        <p class="mb-2 mx-2 font-weight-bold">{{ $doctor->phone }}</p>
                    </div>
                    <div class="d-flex">
                        <b class="text-muted">Salary:</b>
                        <p class="mb-2 mx-2 font-weight-bold">{{ $doctor->salary }}</p>
                    </div>
                    <div class="d-flex">
                        <b class="text-muted">Address:</b>
                        <p class="mb-2 mx-2 font-weight-bold">{{ $doctor->address }}</p>
                    </div>
                    <div class="d-flex">
                        <b class="text-muted">Department:</b>
                        <p class="mb-2 mx-2 font-weight-bold">{{ $department->name }}</p>
                    </div>
                </div>
            </div>
        </div>


    </div>


@endsection
