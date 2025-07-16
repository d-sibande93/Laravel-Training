<?php


session_start();

$_SESSION['name'] = $_POST['name'];
$_SESSION['class'] = $_POST['class'];
$_SESSION['subject'] = $_POST['subject'];
$_SESSION['marks'] = $_POST['marks'];


echo "Your name is " . $_SESSION['name'] . " and your class is " . $_SESSION['class'] . " and your subject is " . $_SESSION['subject'] . " and your marks is ". $_SESSION['marks'];

 
