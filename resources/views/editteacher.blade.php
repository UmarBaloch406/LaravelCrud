@extends('layouts.main')
@section('main-section')
<!DOCTYPE html>
<html>
{{-- <head>
    <title>Edit Teacher</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
</head> --}}
<body>
<div class="container mt-5">
    <h2>Edit Teacher</h2>
    
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
    <form action="{{ route('teachers.update', $teacher->id) }}" method="POST">
        @csrf
        @method('PUT')
        
        <div class="form-group">
            <label for="name">Name</label>
            <input type="text" id="name" name="name" class="form-control" value="{{ old('name', $teacher->name) }}" required>
        </div>
        <div class="form-group">
            <label for="age">Age</label>
            <input type="text" id="age" name="age" class="form-control" value="{{ old('age', $teacher->age) }}" required>
        </div>
        <div class="form-group">
            <label for="cnic">CNIC</label>
            <input type="text" id="cnic" name="cnic" class="form-control" value="{{ old('cnic', $teacher->cnic) }}" required>
        </div>
        
        <div class="form-group">
            <label for="email">Email</label>
            <input type="email" id="email" name="email" class="form-control" value="{{ old('email', $teacher->email) }}" required>
        </div>



        <div class="form-group">
            <label for="teach_subject">Teach Subject</label>
            <input type="text" id="teach_subject" name="teach_subject" class="form-control" value="{{ old('teach_subject', $teacher->teach_subject) }}" required>
        </div>

        <button type="submit" class="btn btn-primary">Update</button>
    </form>
</div>
</body>
</html>
@endsection