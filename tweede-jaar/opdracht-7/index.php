<?php

require_once 'classes/schooltriplist.php';

$schoolTripList = new SchoolTripList();
$schoolTripList -> addStudent(new Student('Koningstein', '', '', ''));
$schoolTripList -> addStudent(new Student('', 'Piet', 'sod2a', 'Nee'));
$schoolTripList -> addStudent(new Student('', 'Jan', 'sod2a', 'Ja'));
$schoolTripList -> addStudent(new Student('', 'Kees', 'sod2b', 'Ja'));
$schoolTripList -> addStudent(new Student('Brugge', '', '', ''));
$schoolTripList -> addStudent(new Student('', 'Klaas', 'sod2b', 'Ja'));
$schoolTripList -> addStudent(new Student('', 'Mohammed', 'sod2a', 'Nee'));
$schoolTripList -> addStudent(new Student('', 'Eefje', 'sod2b', 'Ja'));
$schoolTripList -> addStudent(new Student('Drimmelen', '', '', ''));
$schoolTripList -> addStudent(new Student('', 'Martijn', 'sod2b', 'Nee'));
$schoolTripList -> addStudent(new Student('', 'Pieter', 'sod2a', 'Ja'));

$schoolTripList -> render();

?>