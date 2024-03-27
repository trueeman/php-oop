<?php

class Student {
    private $teacher;
    private $studentName;
    private $class;
    private $paid;

    public function __construct($teacher, $studentName, $class, $paid) {
        $this -> teacher = $teacher;
        $this -> studentName = $studentName;
        $this -> class = $class;
        $this -> paid = $paid;
    }

    public function render() {
        return sprintf(
            '<tr><td>%s</td><td>%s</td><td>%s</td><td>%s</td></tr>',
            htmlspecialchars($this -> teacher),
            htmlspecialchars($this -> studentName),
            htmlspecialchars($this -> class),
            htmlspecialchars($this -> paid)
        );
    }
}

?>
