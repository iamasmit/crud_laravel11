@extends('layout')

@section('title')
All Users Data
@endsection
@section('content')
 <a href="{{route('student.create')}}" class="btn btn-primary btn-sm ml-6">Add New</a>
                <table class="table table-bordered table-striped">
                    <tr>
                        <th>ID</th>
                        <th>Name</th>
                        <th>Email</th>
                        <th>Age</th>
                        <th>City</th>
                        <th>View</th>
                        <th>Delete</th>
                        <th>Update</th>
                    </tr>
                    {{-- Showing the Table data --}}
                    @foreach ($students as $data )
                    <tr>
                        <td>{{ $data->id }}</td>
                        <td>{{ $data->name }}</td>
                        <td>{{ $data->email }}</td>
                        <td>{{ $data->age }}</td>
                        <td>{{ $data->city }}</td>
                        <td ><a href="{{route('student.show', $data->id)}}" class="btn btn-primary btn-sm">view</a></td>
                        <td ><a href="" class="btn btn-danger btn-sm">Delete</a></td>
                        <td ><a href="{{route('student.update', $data->id)}}" class="btn btn-warning btn-sm">Update</a></td>
                    </tr>
                      @endforeach

                </table>
                @endsection