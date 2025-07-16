<?php

session_start();

$_SESSION['username'] = $_POST['username'];
$_SESSION['age'] = $_POST['age'];
$_SESSION['email'] = $_POST['email'];


echo "Your name is " . $_SESSION['username'] . " and your age is " . $_SESSION['age'];

