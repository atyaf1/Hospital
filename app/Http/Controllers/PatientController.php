<?php

namespace App\Http\Controllers;

use App\Department;
use App\PatientRequest;
use App\User;
use Illuminate\Http\Request;

use App\Patient_Request;

class PatientController extends Controller
{

    public function index()
    {
        return view('Patient.index',[
            'patients' => Patient_Request::all()
        ]);
    }

    public function create()
    {
        $patients = Patient_Request::all();
        $departments = Department::all();

        return view('PatientRequest.create', compact('patients', 'departments'));
    }

    public function store(Request $request)
    {
        PatientRequest::create($request->all());

        return redirect()->back()->with(['success' => 'the Request Added Successfully.']);
    }

    public function Accept_Request($request_id)
    {
        $request = Patient_Request::find($request_id);

        $request->update([
            'status' => '1'
        ]);

        User::create([
           'name' => $request->name,
           'email' => $request->email,
           'password' => bcrypt(''),
        ]);




    }

    public function update(Request $request, $doctor_id)
    {
    }

    public function delete($doctor_id)
    {
    }
}
