<?php

require_once "connect2.php";

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Get Results</title>
</head>
<body>
    <form method="GET" action="nzika.php">
        <button type="submit">Get Results</button>
    </form>

<?php

        //fetching data from the database attendance

$sql = "SELECT * FROM performance";
$result = $conn->query($sql);

if ($result->num_rows >0 ){
    echo "<table border ='1'>";
    echo "<tr><th>id</th><th>name</th><th>class</th><th>subject</th><th>marks</th></tr>";
    while ($row = $result->fetch_assoc()) {
        echo "<tr>";
        echo "<td>" . $row['id'] . "</td>";
        echo "<td>" . $row['name'] . "</td>";
        echo "<td>" . $row['class'] . "</td>";
        echo "<td>" . $row['subject'] . "</td>";
        echo "<td>" . $row['marks'] . "</td>";
        echo "</tr>";
    }
    echo "</table>";
} else {
    echo "No records found.";
}

?>



</body>
</html>

