@extends('layouts.main')
@section('main-section')
<!DOCTYPE html>
<html>
{{-- <head>
    <title>Edit Student</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
</head> --}}
<body>
<div class="container mt-5">
    <h2>Edit Student</h2>
    
    <!-- Display validation errors -->
    @if ($errors->any())
        <div class="alert alert-danger">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif

    <!-- Edit Form -->
    <form action="{{ route('students.update', $student->id) }}" method="POST">
        @csrf
        @method('PUT')
        
        <div class="form-group">
            <label for="name">Name</label>
            <input type="text" id="name" name="name" class="form-control" value="{{ old('name', $student->name) }}" required>
        </div>

        <div class="form-group">
            <label for="email">Email</label>
            <input type="email" id="email" name="email" class="form-control" value="{{ old('email', $student->email) }}" required>
        </div>

        <div class="form-group">
            <label for="father_name">Father's Name</label>
            <input type="text" id="father_name" name="father_name" class="form-control" value="{{ old('father_name', $student->father_name) }}" required>
        </div>

        <div class="form-group">
            <label for="class_name">Class Name</label>
            <input type="text" id="class_name" name="class_name" class="form-control" value="{{ old('class_name', $student->class_name) }}" required>
        </div>

        <div class="form-group">
            <label for="roll_no">Roll No</label>
            <input type="number" id="roll_no" name="roll_no" class="form-control" value="{{ old('roll_no', $student->roll_no) }}" required>
        </div>

        <button type="submit" class="btn btn-primary">Update</button>
    </form>
</div>
</body>
</html>
@endsection