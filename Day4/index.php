<?php
require_once 'mid_term.php';

$ana = Learners::getALLLearners($conn);

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=, initial-scale=1.0">
    <title>Learner Management System</title>
    
    <style>
    table { border-collapse: collapse; width: 100%;}
    th {
        background-color: red;
    }
    th, td {border: 1px solid #ddd; padding: 8px; }
    </style>

    </head>
    <body>
        <h1>Display All Learners</h1>
    <table>
        <thead>
            <tr>
                <th>id</th>
                <th>name</th>
                <th>class</th>
                <th>subject</th>
                <th>marks</th>
            </tr>
        </thead>
        <tbody>
                <?php
                foreach ($ana as $learners) {
                $learners->displayRow();
                }
            ?>
        </tbody>
    </table>
</body>
</html>