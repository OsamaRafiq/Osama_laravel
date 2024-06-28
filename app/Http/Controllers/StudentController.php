<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Students;
class StudentController extends Controller
{
    public function create()
    {
        return view('create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'email' => 'required|email',
            'image' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
            'age' => 'required|integer',
        ]);
        $imageName = time().'.'.$request->image->extension();
        $request->image->move(public_path('images'),$imageName);
        
        Students::create([
            'name' => $request->name,
            'email' => $request->email,
            'image_path' =>$imageName,
            'age' => $request->age, 
        ]);

        return redirect()->route('show')->with('success','Student Added Successfully');
    }

    public function show()
    {
        $student=Students::all();
        return view('show',['abc'=>$student]);
    }

    public function edit($id)
    {
        $student=Student::find($id);
        return view('edit',['student'=>$student]);
    }

    
}
