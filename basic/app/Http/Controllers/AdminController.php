<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Student;
use Illuminate\Support\Facades\DB;
class AdminController extends Controller
{
    public function index()
    {
        $students = Student::all();
//        $students = DB::table('students')->get();
//        $students = DB::table('students')->paginate(5);
//        $students = DB::table('students')->simplePaginate(5);
//        $students = Student::paginate(5);
//        $students = Student::latest()->paginate(5);
        return view('student', compact('students'));
    }

    public function create()
    {
        return view('form');
    }

    public function insert(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'email' => 'required',
            'phone' => 'required',
            'address' => 'required',

        ],
        [
            'name.required' => 'Name is required',
            'email.required' => 'Email is required',
            'phone.required' => 'Phone is required',
            'address.required' => 'Address is required',
        ]

        );

        $student = new Student();
        $student->name = $request->name;
        $student->email = $request->email;
        $student->phone = $request->phone;
        $student->address = $request->address;
        $student->save();
        return redirect()->route('student')->with('success', 'Student added successfully');
    }

    public function edit($id)
    {
        $student = Student::find($id);
        return view('edit', compact('student'));
    }

    public function delete($id) {
        $student = Student::find($id);
        $student->delete();
        return redirect()->route('student')->with('success', 'Student deleted successfully');
    }
}
