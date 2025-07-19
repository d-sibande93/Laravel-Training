<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Student Management System</title>
</head>
<body>
    @if(session('success'))
            <div>
                {{ session('success')}}
            </div>
        @endif

        @yield('content') 
</body>
</html>