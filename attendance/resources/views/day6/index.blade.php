@extends('layouts.app')

@section('content')
    <h1>Students List</h1>
    <a href="students/create">Add New Students</a>

        <table border="1">
            <thead>
                <tr>
                    <th>name</th>
                    <th>class</th>
                    <th>gender</th>
                    <th>age</th>
                <tr>
            </thead>
            <tbody>
                @foreach($students as $student)
                <tr>
                    <td>{{ $student->name }}</td>
                    <td>{{ $student->class }}</td>
                    <td>{{ $student->gender }}</td>
                    <td>{{ $student->age }}</td>
                </tr>
                @endforeach
            </tbody>
        </table>
    @endsection