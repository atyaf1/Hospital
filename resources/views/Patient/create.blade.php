@extends('layouts.main')

@section('content')

    <!-- add doctor form -->
    <div class="container">
        <div class="add-doctor p-5 mt-4 mb-4 rounded text-white" style="background-color: #203647">
            @if (Session::has('success'))
            <div class="alert alert-success text-center" role="alert">
                {{Session::get('success')}}
            </div>
            @endif
            <form action="{{ route('patient.store') }}" method="post">
                @csrf
                <div class="h3 mb-3" style="color: #ffc107">Add New Request</div>
                <div class="row">
                    <div class="col">
                        <div class="form-group">
                            <label for="exampleFormControlInput1">Full Name</label>
                            <input type="text" class="form-control" id="exampleFormControlInput1" placeholder="Full Name"
                                name="name" />
                            @error('name')
                                <small class="form-text text-danger">{{ $message }}</small>
                            @enderror
                        </div>
                        <div class="form-group">
                            <label for="exampleFormControlInput2">Email</label>
                            <input type="email" class="form-control" id="exampleFormControlInput2" placeholder="Email"
                                name="email" />
                            @error('email')
                                <small class="form-text text-danger">{{ $message }}</small>
                            @enderror
                        </div>
                        <div class="form-group">
                            <label for="exampleFormControlInput3">Birth Day</label>
                            <input type="date" class="form-control" id="exampleFormControlInput3" placeholder="Birth Day"
                                name="birthday" />
                            @error('birthday')
                                <small class="form-text text-danger">{{ $message }}</small>
                            @enderror
                        </div>
                        <div class="form-group">
                            <label for="exampleFormControlInput4">Phone Number</label>
                            <input type="number" class="form-control" id="exampleFormControlInput4" placeholder="Phone Number"
                                name="phone" />
                            @error('phone')
                                <small class="form-text text-danger">{{ $message }}</small>
                            @enderror
                        </div>
                    </div>
                    <div class="col">
                        <div class="form-group">
                            <label for="exampleFormControlInput5">Address</label>
                            <input type="text" class="form-control" id="exampleFormControlInput5" placeholder="Address"
                                name="address" />
                            @error('address')
                                <small class="form-text text-danger">{{ $message }}</small>
                            @enderror
                        </div>
                        <div class="form-group">
                            <label for="exampleFormControlSelect6">Select Department</label>
                            <select class="form-control" id="exampleFormControlSelect6" name="department_id">
                                @foreach ($departments as $dep)
                                    <option value="{{ $dep->id }}">{{ $dep->name }}</option>
                                @endforeach
                            </select>
                            @error('department_id')
                                <small class="form-text text-danger">{{ $message }}</small>
                            @enderror
                        </div>
                        <div class="form-group">
                            <label for="exampleFormControlSelect7">Add Description</label>
                            <textarea name="description" id="exampleFormControlSelect7" cols="50" rows="6"></textarea>
                        </div>
                    </div>
                </div>

                <div class="form-group d-flex justify-content-center mt-4">
                    <button type="submit" class="btn btn-outline-warning btn-lg fs-2 px-5">Submit</button>
                </div>
            </form>
        </div>
    </div>
@endsection
