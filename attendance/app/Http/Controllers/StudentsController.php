<?php

namespace App\Http\Controllers;

use App\Models\Students;
use Illuminate\Http\Request;

class StudentsController extends Controller
{
    //Show all students
    public function index()
    {
        $students = Students::all();
        return view('day6.index' , ['students'=> $students]);
    }

    //Show the create form
    public function create()
    {
        return view('day6.create');
    }

    //Store a new student
    public function store(Request $request)
    {
       $request->validate([
        'name' => 'required|string|max:255',
        'class' => 'required|string|max:255',
        'gender' => 'required|string|in:Male,Female,Other',
        'age' => 'required|integer|min:5|max:25',
       ]); 

        Students::create($request->all());

        return redirect('/day6')->with('success', 'Student added successfully!');


    }
}
