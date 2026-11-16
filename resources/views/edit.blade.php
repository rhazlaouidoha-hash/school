@extends('layout')
@section('content')

<h3> Edit Student </h3>

@if ($errors->any())
    <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif

<form method="POST" action="{{ route('students.update', $student->id) }}" enctype="multipart/form-data">
    @csrf
    @method('PUT')

    <div class="form-group">
        <label for="name">Name: </label>
        <input type="text" class="form-control" name="name" value="{{ $student->name }}" />
    </div>

    <div class="form-group">
        <label for="email">Email: </label>
        <input type="text" class="form-control" name="email" value="{{ $student->email }}" />
    </div>

    <div class="form-group">
        <label for="phone">Phone: </label>
        <input type="text" class="form-control" name="phone" value="{{ $student->phone }}" />
    </div>

    <div class="form-group">
        <label for="section">Section: </label>
        <input type="text" class="form-control" name="section" value="{{ $student->section }}" />
    </div>

    <div class="form-group">
        <label for="image">Image: </label><br>
        <img src="/image/{{ $student->image }}" width="96" height="96"><br>
        <input type="file" class="form-control" name="image" />
    </div>

    <button type="submit" class="btn btn-primary"> Update Student </button>
</form>

@endsection