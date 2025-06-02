<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreStudentRequest;
use App\Http\Requests\UpdateStudentRequest;
use App\Models\Student;
use App\Models\Department;
use App\Models\Faculty;


class StudentController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $students = Student::with('department','faculty')->latest()->get();

        return view('students.index',[
            'students' => $students
        ]);
        
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $departments = Department::all();
        $faculties   = Faculty::all();

        return view('students.create',compact('departments','faculties'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreStudentRequest $request)
    {
        $validated = $request->validated();

        Student::create($validated);

        return redirect()->route('students.index')->with('message', 'Added successfully.')->withInput();
    }

    /**
     * Display the specified resource.
     */
    public function show(Student $student)
    {
        // $students = Student::all();
        // return view('students.show');
        return view('students.show', \compact('student'));
    
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Student $student)
    {
        $departments = Department::all();
        $faculties   = Faculty::all();

        return view('students.edit', [
            'student' => $student,
            'departments' => $departments,
            'faculties' => $faculties,
        ]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateStudentRequest $request, Student $student)
    {
        $student->update($request->validated());

        return redirect()->route('students.index')->with('message', 'Student updated successfully.')->withInput();
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Student $student)
    {
        $student->delete();

        return redirect()->route('students.index')->with('message', 'Student deleted successfully.')->withInput();
    }
}
