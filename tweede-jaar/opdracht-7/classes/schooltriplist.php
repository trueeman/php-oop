<?php

require_once 'student.php';

class SchoolTripList {
    private $students = [];

    public function addStudent(Student $student) {
        $this -> students[] = $student;
    }

    public function render() {
        echo '<table border="1">';
        echo '<tr>
                <th>Docent</th>
                <th>Student</th>
                <th>Klas</th>
                <th>Betaald</th>
            </tr>';
        foreach ($this -> students as $student) {
            echo $student -> render();
        }
        echo '</table>';
    }
}

?>