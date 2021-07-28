<?php

namespace App\Http\Controllers;

use App\Department;
use App\Patient;
use Illuminate\Http\Request;

class PatientController extends Controller
{

    public function index()
    {
    }

    public function create()
    {
        $patients = Patient::all();
        $departments = Department::all();

        return view('Patient.create', compact('patients', 'departments'));
    }

    public function store(Request $request)
    {
        Patient::create($request->all());

        return redirect()->back()->with(['success' => 'the Request Added Successfully.']);
    }

    public function edit($doctor_id)
    {
    }

    public function update(Request $request, $doctor_id)
    {
    }

    public function delete($doctor_id)
    {
    }
}
