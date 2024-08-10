@extends('layout')

@section('title')
Add New User
@endsection

@section('content')
<form action="" method="POST">
                    @csrf
                    @method('PUT')
                    <div class="mb-3">
                        <label class="form-label">Name</label>
                        <input type="text" value="" class="form-control" name="name">
                    </div>
                    <div class="mb-3">
                        <label class="form-label">Email</label>
                        <input type="email" value="" class="form-control" name="email">
                    </div>
                    <div class="mb-3">
                        <label class="form-label">Age</label>
                        <input type="number" value="" class="form-control" name="age">
                    </div>
                    <div class="mb-3">
                        <label class="form-label">City</label>
                        <input type="text" value="" class="form-control" name="city">
                    </div>
                    <button type="submit" class="btn btn-primary btn-sm">Update</button>
                </form>
@endsection
