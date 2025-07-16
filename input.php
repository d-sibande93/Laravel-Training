<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Add A New Student</h1>
    <form action="add_student.php" method="POST">
        <label for="name">Name:</label>
        <input type="text" id="name" name="name" required>
        <br>
        <label for="class">Class:</label>
        <input type="text" id="class" name="class" required>
        <label for="gender">Gender:</label>
        <input type="text" id="gender" name="gender" required>
        <label for="age">Age:</label>
        <input type="text" id="age" name="age" required>
        <br>
        <button type="submit">Add Student</button><br>
</form>



</body>
</html>