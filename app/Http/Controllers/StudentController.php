<?php

namespace App\Http\Controllers;

use App\Models\Student;
use Illuminate\Http\Request;

class StudentController extends Controller
{
    public function student()
    {
        return view('student');
    }
    public function store(Request $req)
{
    // Validation rules
    $req->validate([
        'name' => 'required|string|max:255',
        'email' => 'required|email|unique:students,email',
        'father_name' => 'required|string|max:255',
        'class_name' => 'required|string|max:100',
        'roll_no' => 'required|integer|unique:students,roll_no',
    ]);

    // Creating a new student record after validation
    $student = new Student();
    $student->name = $req->name;
    $student->email = $req->email;
    $student->father_name = $req->father_name;
    $student->class_name = $req->class_name;
    $student->roll_no = $req->roll_no;
    $student->save();
    
    // Redirect with success message
    return redirect('student')->with('success', 'Data has been successfully submitted');
}


public function show()
{
//fetch all students
$students = Student::all();
//pass the students data to the view
return view('studentshow')->with('students', $students);
}

public function edit($id)
{
//fetch student by id
$student = Student::findorFail($id);
//return the edit view and pass the student data
return view('edit', compact('student'));
}
public function update(Request $req, $id)
{
    // Validate the request data
    $req->validate([
        'name' => 'required|string|max:255',
        'email' => 'required|email|unique:students,email,' . $id,  // Exclude current student's email
        'father_name' => 'required|string|max:255',
        'class_name' => 'required|string|max:100',
        'roll_no' => 'required|integer|unique:students,roll_no,' . $id,  // Exclude current student's roll_no
    ]);

    // Find the student by ID and update the information
    $student = Student::findOrFail($id);
    $student->name = $req->name;
    $student->email = $req->email;
    $student->father_name = $req->father_name;
    $student->class_name = $req->class_name;
    $student->roll_no = $req->roll_no;
    $student->save();

    // Redirect to the list of all students with a success message
    return redirect()->route('students.show')->with('success', 'Student data has been successfully updated');
}

public function del($id)
{
    //find stud by id
$student = Student::findorfail($id);
$student->delete();
//redirect back to msg 
return redirect()->route('students.show')->with('success','Student has been successfully deleted');
}

}

