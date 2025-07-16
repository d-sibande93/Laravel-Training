<?php

session_start();

echo "Welcome to this page ina" . $_SESSION['username'] . "<br>";
echo "We know that you are " . $_SESSION['age'] . " years old.<br>";