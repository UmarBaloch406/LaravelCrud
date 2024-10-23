<?php

namespace App\Http\Controllers;

use App\Models\Teacher;
use Illuminate\Http\Request;

class TeacherController extends Controller
{
    public function teacher()
    {
        return view('teacher');
    }

    public function store(Request $req)
    {
        // Validations
        $req->validate([
            'name' => 'required|string|max:255',
            'age' => 'required|integer|min:18|max:70', // Age must be between 18 and 70
            'cnic' => 'required|string', // Assuming CNIC is 13 digits in length
            'email' => 'required|email|unique:teachers,email', // Ensure email is unique
            'teach_subject' => 'required|string|max:100'
        ]);
    
        // Create new teacher record
        $teacher = new Teacher();
        $teacher->name = $req->name;
        $teacher->age = $req->age;
        $teacher->cnic = $req->cnic;
        $teacher->email = $req->email;
        $teacher->teach_subject = $req->teach_subject;
        $teacher->save();
    
        // Redirect with success message
        return redirect('teacher')->with('success', 'Data has been successfully submitted');
    }

    public function show()
    {
        $teacher = Teacher::all();
        return view('teachershow')->with('teachers',$teacher);
    }
    
public function edit($id)
{
$teacher = Teacher::findorfail($id);
return view('editteacher',compact('teacher'));
}


public function update(Request $req , $id)
{
    $req->validate([
        'name' => 'required|string|max:255',
        'age' => 'required|string|max:255',
        'cnic' => 'required|string|max:100',
        'email' => 'required|email|unique:teachers,email,' . $id, 
        'teach_subject' => 'required|string|max:255'  
    ]);

    $teacher = Teacher::findOrFail($id);
    $teacher->name = $req->name;
    $teacher->age = $req->age;
    $teacher->cnic = $req->cnic;
    $teacher->email = $req->email;
    $teacher->teach_subject = $req->teach_subject;
    $teacher->save();
    return redirect()->route('teacher.show')->with('success', 'Teacher data has been successfully updated');

}

public function del($id)
{
   $teacher = Teacher::findorfail($id);
   $teacher->delete();
   return redirect()->route('teacher.show')->with('success', 'Teacher data has been deleted');
}

    }
