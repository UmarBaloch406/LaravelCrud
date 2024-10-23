@extends('layouts.main')
@section('main-section')
<html>
{{-- <head>
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
        Teacher Form
    </div>
    <div class="card-body">
      <form action="{{ url('/teacher/store') }}" method="POST">
        @csrf
        
        <!-- Name Field -->
        <div class="form-group">
          <label for="name">Name</label>
          <input type="text" id="name" name="name" class="form-control @error('name') is-invalid @enderror" value="{{ old('name') }}">
          @error('name')
            <div class="invalid-feedback">{{ $message }}</div>
          @enderror
        </div>
        
        <!-- Age Field -->
        <div class="form-group">
            <label for="age">Age</label>
            <input type="text" id="age" name="age" class="form-control @error('age') is-invalid @enderror" value="{{ old('age') }}">
            @error('age')
              <div class="invalid-feedback">{{ $message }}</div>
            @enderror
        </div>
        
        <!-- CNIC Field -->
        <div class="form-group">
            <label for="cnic">CNIC</label>
            <input type="text" id="cnic" name="cnic" class="form-control @error('cnic') is-invalid @enderror" value="{{ old('cnic') }}">
            @error('cnic')
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
        


        <!-- teach_subject Field -->
        <div class="form-group">
            <label for="teach_subject">Teach_subject</label>
            <input type="text" id="teach_subject" name="teach_subject" class="form-control @error('teach_subject') is-invalid @enderror" value="{{ old('teach_subject') }}">
            @error('teach_subject')
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