<?php

namespace App\Http\Controllers;

use App\Department;
use App\Http\Requests\ValidateRequest;
use Illuminate\Http\Request;

class DepartmentController extends Controller
{

    function __construct()
    {
        $this->middleware('permission:اظهار الاقسام', ['only' => ['index', 'store']]);
        $this->middleware('permission:اضافة قسم', ['only' => ['create', 'store']]);
        $this->middleware('permission:اظهار الاقسام', ['only' => ['edit', 'update']]);
        $this->middleware('permission:اظهار الاقسام', ['only' => ['destroy']]);
    }



    public function index()
    {
        $department = Department::all();
        return view('department.index',compact('department'));
    }

    public function create()
    {
        return view('department.create');
    }

    public function store(Request $request)
    {
        Department::create($request->all());

        // Department::create([
        //     'name'=> $request->name,
        // ]);
        return redirect()->back()->with(['success' => 'the Department added successfully.']);
    }

    public function update()
    {
    }

    public function delete()
    {
    }
}
