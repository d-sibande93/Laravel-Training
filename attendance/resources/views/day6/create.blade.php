@extends('layouts.app')

@section('content')

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Add New Student</h1>

    <form method="POST" action="/day6">
        @csrf 

                <div>
                    <label for="name">Name:</label>
                    <input type="text" id="name" name="name" required>
                </div>

                <div>
                    <label for="class">Class:</label>
                    <input type="text" id="class" name="class" required>
                </div>

                <div>
                    <label for="class">Gender:</label>
                    <input type="text" id="gender" name="gender" required>
                </div>

                <div>
                    <label for="class">age:</label>
                    <input type="int" id="age" name="age" required>
                </div>

                <button type="submit">Add Student</button>

            </form>

        <a href="/day6">Back to List</a>
    @endsection
</body>
</html>