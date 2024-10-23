@extends('layouts.main')
@section('main-section')
<!DOCTYPE html>
<html>
<head>
    <title>Teachers List</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
</head>
<body>
<div class="container mt-5">
    <h2>All Teachers</h2>
    
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
                <th>Age</th>
                <th>CNIC</th>
                <th>Email</th>
                <th>Teach Subject</th>
                <th>Edit</th>
                <th>Delete</th>

            </tr>
        </thead>
        <tbody>
        @foreach($teachers as $teacher)
            <tr>
                <td>{{ $teacher->id }}</td>
                <td>{{ $teacher->name }}</td>
                <td>{{ $teacher->age }}</td>
                <td>{{ $teacher->cnic }}</td>
                <td>{{ $teacher->email }}</td>
                <td>{{ $teacher->teach_subject }}</td>
              <td> <a href="{{route('teachers.edit', $teacher->id)}}" class="btn btn-warning btn-sm">Edit</a></td>
             <td> <form action="{{ route('teachers.del', $teacher->id) }}" method="POST" style="display:inline-block;">
                @csrf
                @method('DELETE')
                <button type="submit" class="btn btn-danger btn-sm" onclick="return confirm('Are you sure you want to delete this teacher?')">Delete</button>
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