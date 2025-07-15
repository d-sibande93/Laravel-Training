<?php

//our code /
$marks = 98;
$students = array("Mateyu", "Philipo", "Moses", "John", "Jane");



?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Laravel Project</title>
</head>
<body>
    

<h1>About User </h1>
<p> 
    <?php
    if($marks>80){
        echo "Distinction<br>";
    }elseif($marks>=70){ 
        echo "This is a Credit";
    }else{ 
        echo "This is a Fail";
    }

    foreach($students as $index => $name) {
        echo "Student $index: $name<br>";
    }
    

echo "<table border='1'>";
    echo "<tr><th>Index</th><th>Name</th></tr>";

    foreach($students as $key => $val){
        echo "<tr><td>" . ($key+1) . "</td> <td>" . $val . "</td></tr>";
    }
    echo "</table>";

    ?>
</p>


</body>
</html>