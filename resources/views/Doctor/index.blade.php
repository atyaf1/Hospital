@extends('layouts.app')
@section('content')

    <div class="container">
        <div class="index mt-4">
            @if (Session::has('success'))
                <div class="alert alert-success text-center" role="alert">
                    {{ Session::get('success') }}
                </div>
            @endif
            <table class="table table-striped text-center">
                <tr style="background-color: #203647; color: #ffc107">
                    <th scope="col">#</th>
                    <th scope="col">Name</th>
                    <th scope="col">Age</th>
                    <th scope="col">Phone</th>
                    <th scope="col">Address</th>
                    <th scope="col">Department</th>
                    <th scope="col">Salary</th>
                    <th scope="col">Photo</th>
                    <th scope="col">Operations</th>
                </tr>

                @foreach ($doctors as $doctor)
                    <tr>
                        <td scope="col">{{ $doctor->id }}</td>
                        <td scope="col">{{ $doctor->name }}</td>
                        <td scope="col">{{ $doctor->birthday }}</td>
                        <td scope="col">{{ $doctor->phone }}</td>
                        <td scope="col">{{ $doctor->address }}</td>
                        <td scope="col">{{ $doctor->department_id }}</td>
                        <td scope="col">{{ $doctor->salary }}</td>
                        <td><img src="{{asset('images/doctors/'.$doctor->photo)}}" width="70px" height="70px" alt=""></td>
                        <td>
                            <a href="{{ route('doctor.edit', $doctor->id) }}" class="btn btn-primary">Edit Doctor</a>
                            <a href="{{ route('doctor.delete', $doctor->id) }}" class="btn btn-danger">Delete</a>
                            <a href="{{ route('doctor.show', $doctor->id) }}" class="btn btn-success">Show</a>
                        </td>
                    </tr>
                @endforeach


            </table>
        </div>
    </div>
@endsection
