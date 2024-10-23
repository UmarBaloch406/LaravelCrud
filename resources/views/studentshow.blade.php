@extends('layouts.main')
@section('main-section')
<!DOCTYPE html>
<html>
<head>
    <title>Students List</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
</head>
<body>
<div class="container mt-5">
    <h2>All Students</h2>
    
    <!-- Success message -->
    @if(session('success'))
        <div class="alert alert-success">
            {{ session('success') }}
        </div>
    @endif

    <table class="table table-bordered">
        <thead>
            <tr>
                <th>ID</th>
                <th>Name</th>
                <th>Email</th>
                <th>Father Name</th>
                <th>Class Name</th>
                <th>Roll No</th>
                <th>Edit</th>
                <th>Delete</th>

            </tr>
        </thead>
        <tbody>
        @foreach($students as $student)
            <tr>
                <td>{{ $student->id }}</td>
                <td>{{ $student->name }}</td>
                <td>{{ $student->email }}</td>
                <td>{{ $student->father_name }}</td>
                <td>{{ $student->class_name }}</td>
                <td>{{ $student->roll_no }}</td>
              <td> <a href="{{route('students.edit', $student->id)}}" class="btn btn-warning btn-sm">Edit</a></td>
             <td> <form action="{{ route('students.del', $student->id) }}" method="POST" style="display:inline-block;">
                @csrf
                @method('DELETE')
                <button type="submit" class="btn btn-danger btn-sm" onclick="return confirm('Are you sure you want to delete this student?')">Delete</button>
            </form>
             </td>
            
            </tr>
        @endforeach
        </tbody>
    </table>
</div>
</body>
</html>
@endsection