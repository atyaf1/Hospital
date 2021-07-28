@extends('layouts.main')

@section('content')

    <!-- add doctor form -->
    <div class="container">
        <div class="add-doctor p-5 mt-4 mb-4 rounded text-white" style="background-color: #203647">
            @if (Session::has('success'))
                <div class="alert alert-success" role="alert">
                    {{ Session::get('success') }}
                </div>
            @endif
            <form action="{{ route('department.store') }}" method="post">
                @csrf
                <div class="h3 mb-3" style="color: #ffc107">Add New Department</div>
                <div class="form-group">
                    <label for="exampleFormControlInput1">Department Name</label>
                    <input type="text" class="form-control" id="exampleFormControlInput1" placeholder="Full Name"
                        required name="name" />
                    @error('name')
                        <small class="form-text text-danger">{{ $message }}</small>
                    @enderror
                </div>
                <div class="form-group d-flex justify-content-center">
                    <button type="submit" class="btn btn-outline-warning btn-lg fs-2 px-5">Add</button>
                </div>
            </form>
        </div>
    </div>
@endsection
