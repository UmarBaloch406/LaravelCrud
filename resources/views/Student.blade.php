@extends('layouts.main')
@section('main-section')
<html>
{{-- <head>
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">

    <title>Laravel</title>
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
  </head> --}}
  <body>
  
  <div class="container mt-4">
    
    <!-- Success message -->
    @if(session('success'))
    <div class="alert alert-success">
      {{ session('success') }}
    </div>
    @endif
    
    <div class="card">
      <div class="card-header text-center font-weight-bold">
        Student Form
    </div>
    <div class="card-body">
      <form action="{{ url('/student/store') }}" method="POST">
        @csrf
        
        <!-- Name Field -->
        <div class="form-group">
          <label for="name">Name</label>
          <input type="text" id="name" name="name" class="form-control @error('name') is-invalid @enderror" value="{{ old('name') }}">
          @error('name')
            <div class="invalid-feedback">{{ $message }}</div>
          @enderror
        </div>
        
        <!-- Email Field -->
        <div class="form-group">
            <label for="email">Email</label>
            <input type="text" id="email" name="email" class="form-control @error('email') is-invalid @enderror" value="{{ old('email') }}">
            @error('email')
              <div class="invalid-feedback">{{ $message }}</div>
            @enderror
        </div>

        <!-- Father Name Field -->
        <div class="form-group">
            <label for="father_name">Father Name</label>
            <input type="text" id="father_name" name="father_name" class="form-control @error('father_name') is-invalid @enderror" value="{{ old('father_name') }}">
            @error('father_name')
              <div class="invalid-feedback">{{ $message }}</div>
            @enderror
        </div>

        <!-- Class Name Field -->
        <div class="form-group">
            <label for="class_name">Class Name</label>
            <input type="text" id="class_name" name="class_name" class="form-control @error('class_name') is-invalid @enderror" value="{{ old('class_name') }}">
            @error('class_name')
              <div class="invalid-feedback">{{ $message }}</div>
            @enderror
        </div>

        <!-- Roll No Field -->
        <div class="form-group">
            <label for="roll_no">Roll No</label>
            <input type="text" id="roll_no" name="roll_no" class="form-control @error('roll_no') is-invalid @enderror" value="{{ old('roll_no') }}">
            @error('roll_no')
              <div class="invalid-feedback">{{ $message }}</div>
            @enderror
        </div>
        
        <button type="submit" class="btn btn-primary">Submit</button>
      </form>
    </div>
  </div>
</div>  
</body>
</html>
@endsection