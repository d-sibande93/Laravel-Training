<?php

require_once 'connect.php';

class Learners {

    private $id;
    private $name;
    private $class;
    private $subject;
    private $marks;

    public function __construct($id, $name, $class, $subject, $marks) {
        
        $this->id = $id;
        $this->name = $name;
        $this->class = $class;
        $this->subject = $subject;
        $this->marks = $marks;
        
    }

    public function displayRow() {
        echo "<tr>
                <td>{$this->id}</td>
                <td>{$this->name}</td>
                <td>{$this->class}</td>
                <td>{$this->subject}</td>
                <td>{$this->marks}</td>
            </tr>";
    }

    public static function getAllLearners($conn) {
        $learners = [];
        $sql = "SELECT * FROM performance";
        $result =$conn->query($sql);

        if ($result->num_rows > 0) {
            while($row = $result->fetch_assoc()) {
                $learners[] = new learners(
                    $row['id'],
                    $row['name'],
                    $row['class'],
                    $row['subject'],
                    $row['marks']
                );
            }
        }
        return $learners;
    }
}
?>
        