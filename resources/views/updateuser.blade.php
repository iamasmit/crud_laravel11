@extends('layout')

@section('title')
Add New User
@endsection

@section('content')

<form action="{{route('student.update', $students->id)}}" method="POST">
    @csrf
    @method('PUT')
    <div class="mb-3">
        <label class="form-label">Name</label>
        <input type="text" value="{{$students->name}}" class="form-control" name="name">
    </div>
    <div class="mb-3">
        <label class="form-label">Email</label>
        <input type="email" value="{{$students->email}}" class="form-control" name="email">
    </div>
    <div class="mb-3">
        <label class="form-label">Age</label>
        <input type="number" value="{{$students->age}}" class="form-control" name="age">
    </div>
    <div class="mb-3">
        <label class="form-label">City</label>
        <input type="text" value="{{$students->city}}" class="form-control" name="city">
    </div>
    <button type="submit" class="btn btn-primary btn-sm">Update</button>
    <td ><a href="{{route('student.index')}}" class="btn btn-danger btn-sm">Back</a></td>
    </form>
@endsection
