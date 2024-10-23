@extends('layouts.main')
@section('main-section')
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home</title>
    <!-- Include Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
    <div class="container text-center mt-5">
        <h1>Welcome to School Form</h1>
        <div class="mt-4">
            <a href="{{ route('student') }}" class="btn btn-primary">Students</a>
            <a href="{{ route('teacher') }}" class="btn btn-secondary">Teachers</a>
        </div>
    </div>

    <!-- Bootstrap JS (Optional if you need JS functionality) -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
@endsection
