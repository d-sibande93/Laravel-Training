<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Zathu</title>
</head>
<body>
    <form action="form.php" method="POST">
        <label for="intro">Personal Information:</label><br>
        <input type="name" name="name" required><br>
        <input type="class" name="class" required><br>
        <input type="subject" name="subject" required><br>
        <input type="marks" name="marks" required><br>
        <button type="submit">Submit</button><br>

    </form>

    <?php

    require_once "connect2.php";

    $name =$conn->real_escape_string($_POST['name']);
    $class =$conn->real_escape_string($_POST['class']);
    $subject =$conn->real_escape_string($_POST['subject']);
    $marks =$conn->real_escape_string($_POST['marks']);

    $sql = "INSERT INTO performance (name, class, subject, marks) VALUES ('$name', '$class', '$subject', '$marks')";

    if ($conn->query($sql) === TRUE){
        echo "<p style='color: green;'>Results Added Successfully</p>";
    } else {
        echo "<p style='color: red;'>Error: " . $conn->error . "</p>";
    }

    $conn->close();

    ?>
</body>
</html>