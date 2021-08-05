<?php

namespace App\Http\Controllers;

use App\Department;
use App\Events\send_notification;
use App\PatientRequest;
use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Crypt;
use Illuminate\Support\Str;


use App\Patient_Request;

class PatientController extends Controller
{


    function __construct()
    {
        $this->middleware('permission:اظهار الطلبات', ['only' => ['index', 'store']]);
        $this->middleware('permission:اضافة طلب', ['only' => ['create', 'store']]);
        $this->middleware('permission:اظهار الطلبات', ['only' => ['edit', 'update']]);
        $this->middleware('permission:اظهار الطلبات', ['only' => ['destroy']]);
    }



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

        return view('Patient.create', compact('patients', 'departments'));
    }

    public function store(Request $request)
    {
        Patient_Request::create($request->all());

        return redirect()->back()->with(['success' => 'the Request Added Successfully.']);
    }

    public function Accept_Request($request_id)
    {

        $request = Patient_Request::find($request_id);

        $request->update([
            'status' => '1'
        ]);

        $random = Str::random(8);

        User::create([
           'name' => $request->name,
           'email' => $request->email,
           'password' => bcrypt($random),
        ]);

         $decryptedPassword = decrypt(User::first()->password);


        $data =[
            'user_name'  => $request -> name,
            'description' => $request -> description,
            'birthday' =>$request -> birthday ,

        ];

        Notification::send(auth()->user() , new send_notification($data) );


    }

    public function update(Request $request, $doctor_id)
    {
    }

    public function delete($doctor_id)
    {
    }
}
