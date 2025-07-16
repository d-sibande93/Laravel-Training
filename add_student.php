<?php
$host = "localhost";
$user = "root";
$password = "";
$database = "attendance";

$conn = new mysqli("$host", "$user", "", "$attendance");
if ($conn->connect_error){
    die("Connection failed: " . $conn->connect_error);
}

$name = $_POST['student'];
$class = $_POST['class'];
$gender = $_POST['gender'];
$age = $_POST['age'];

$sql ="INSERT INTO students (name,gender,class,age) VALUES ($name, $gender, $class, $age)";

if ($conn->query($sql) === TRUE) {
    echo "Student Added Successfully";
} else {
    echo "Error: " .$sql . "<br>" . $conn->error;

}

$conn->close();
?>

