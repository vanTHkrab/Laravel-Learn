@extends('layouts.app')
@section('title', 'Student')
@section('content')
    <table class="table table-bordered">
        <thead>
            <tr>
                <th>Student ID</th>
                <th>Student Name</th>
                <th>Student Email</th>
                <th>Student Phone</th>
                <th>Student Address</th>
                <th>Update At</th>
                <th>Delete Student</th>
                <th>Edit Student</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($students as $student)
                <tr>
                    <td>{{ $student->id }}</td>
                    <td>{{ $student->name }}</td>
                    <td>{{ $student->email }}</td>
                    <td>{{ $student->phone }}</td>
                    <td>{{ $student->address }}</td>
                    <td>{{ $student->updated_at }}</td>
                    <td>
                        <a href="{{route('delete', $student->id)}}" class="btn btn-danger">Delete</a>
                    </td>
                    <td>
                        <a href="{{route('edit', $student->id)}}" class="btn btn-primary">Edit</a>
                    </td>
                </tr>
            @endforeach
        </tbody>
@endsection
