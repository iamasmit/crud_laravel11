<?php

namespace App\Http\Controllers;

use App\Models\Student;
use App\Models\User;
use Illuminate\Http\Request;

class StudentController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
        $students = Student::orderBy('id', 'desc')->get();
        return view('home', compact('students'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create(Request $request)
    {
        //

        return view('adduser');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        // //Method 1
        // $student = new Student();
        // first name came from database table and last one came from from name=name
        // $student->name = $request->input('name');
        // $student->email = $request->input('email');
        // $student->age = $request->input('age');
        // $student->city = $request->input('city');
        // $student->save();

        // Method 2
        Student::create([
            'name'=>$request->name,
            'email'=>$request->email, 
            'age'=>$request->age,
            'city'=>$request->city,
        ]);        
        return redirect()->route('student.index')->with('status', 'New Student Added Successfully');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
        $students = Student::find($id);
        return view('viewuser', compact('students'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
        $students = Student::find($id);
         return view('updateuser', compact('students'));

    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //Method 1
        // $students = Student::find($id);
        // $students->name = $request->name;
        // $students->email = $request->email;
        // $students->age = $request->age;
        // $students->city = $request->city;
        // $students->save();

        // Method 2
        Student::find($id)->update([
            'name'=>$request->name,
            'email'=>$request->email,
            'age'=>$request->age,
            'city'=>$request->city,
        ]);


        return redirect()->route('student.index')->with('status', 'Student Updated Successfully');

       
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Student $student)
    {
        //
    }
}
