<?php

namespace App\Http\Controllers;

use App\Department;
use App\Doctor;
use App\Http\Requests\ValidateRequest;
use App\Traits\OfferTrait;
use Illuminate\Http\Request;
use PHPUnit\Util\Json;

use function Ramsey\Uuid\v1;

class DoctorController extends Controller
{

    function __construct()
    {
        $this->middleware('permission:اظهار الدكاترة', ['only' => ['index', 'store']]);
        $this->middleware('permission:اضافة دكتور', ['only' => ['create', 'store']]);
        $this->middleware('permission:اظهار الدكاترة', ['only' => ['edit', 'update']]);
        $this->middleware('permission:اظهار الدكاترة', ['only' => ['destroy']]);
    }


    use OfferTrait;


    public function index()
    {
        $doctors=Doctor::all();
        $departments = Department::all();

        return view('Doctor.index', compact('doctors', 'departments'));
    }

    public function show($doctor_id)
    {
        $doctor=Doctor::find($doctor_id);
        $department = Department::find($doctor_id);
        return view('Doctor.show', compact('doctor', 'department'));
    }

    public function create()
    {
        $departments = Department::all();
        return view('Doctor.create', compact('departments'));
    }

    public function store(ValidateRequest $request)
    {

        $file_name = $this->saveImage($request->photo, 'images/doctors');

        Doctor::create([
            'name'=> $request->name,
            'birthday'=> $request->birthday,
            'phone'=> $request->phone,
            'address'=> $request->address,
            'department_id'=> $request->department_id,
            'salary'=> $request->salary,
            'photo'=> $file_name,
        ]);

        return redirect()->back()->with(['success' => 'the Doctor added successfully.']);

    }

    public function edit($doctor_id)
    {
        if(! Doctor::find($doctor_id)){
            return redirect()->back();
        }

        $doctor = Doctor::find($doctor_id);
        $departments = Department::all();

        //$doctor = Doctor::find($id);
        return view('Doctor.edit', compact('doctor', 'departments'));
    }

    public function update(ValidateRequest $request, $doctor_id)
    {
        $doctor = Doctor::find($doctor_id);
        if(! $doctor){
            return redirect()->back();
        }
        $doctor->update($request->all());
        return redirect()->back()->with(['success'=>'updated successfully']);
    }

    public function delete($doctor_id)
    {
        $doctor = Doctor::find($doctor_id);
        $doctor->delete();
        return redirect()->back()->with(['success'=> 'Deleted Successfully']);
    }
}
