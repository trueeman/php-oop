<?php 

// Author: Diego Ballestero.
// Opdracht 5: Ziekenhuis

    abstract class Person {
        private $name;
        private $eyeColor;
        private $hairColor;
        private $height;
        private $weight;

        public function __construct($name, $eyeColor, $hairColor, $height, $weight) {
            $this -> name = $name;
            $this -> eyeColor = $eyeColor;
            $this -> hairColor = $hairColor;
            $this -> height = $height;
            $this -> weight = $weight;
        }

        public function getName() {
            return $this -> name;
        }

        public function getEyeColor() {
            return $this -> eyeColor;
        }

        public function getHairColor() {
            return $this -> hairColor;
        }

        public function getHeight() {
            return $this -> height;
        }

        public function getWeight() {
            return $this -> weight;
        }

        abstract public function determineRole();
    }

    class Patient extends Person {
        public function determineRole() {
            return "Patient";
        }
    }

    abstract class Staff extends Person {
        abstract public function calculateSalary($hoursWorked);
    }

    class Doctor extends Staff {
        private $hourlyRate;

        public function __construct($name, $eyeColor, $hairColor, $height, $weight, $hourlyRate) {
            parent::__construct($name, $eyeColor, $hairColor, $height, $weight);
            $this -> hourlyRate = $hourlyRate;
        }

        public function calculateSalary($hoursWorked) {
            return $hoursWorked * $this -> hourlyRate;
        }

        public function determineRole() {
            return "Doctor";
        }
    }

    class Nurse extends Staff {
        private $weeklySalary;

        public function __construct($name, $eyeColor, $hairColor, $height, $weight, $weeklySalary) {
            parent::__construct($name, $eyeColor, $hairColor, $height, $weight);
            $this -> weeklySalary = $weeklySalary;
        }

        public function calculateSalary($hoursWorked) {
            return $hoursWorked * $this -> getHourlyRate();
        }

        public function getHourlyRate() {
            return $this -> weeklySalary / 38; 
        }

        public function determineRole() {
            return "Nurse";
        }
    }

    class Appointment {
        private $doctor;
        private $patient;
        private $nurse;
        private $startTime;
        private $endTime;

        public function __construct($doctor, $patient, $startTime, $endTime, $nurse = null) {
            $this -> doctor = $doctor;
            $this -> patient = $patient;
            $this -> nurse = $nurse;
            $this -> startTime = $startTime;
            $this -> endTime = $endTime;
        }

        public static function calculateDuration($startTime, $endTime) {
            // Calculate the length of the appointment.
            $duration = $endTime -> diff($startTime) -> h;
            
            return $duration;
        }

        public function calculateCost() {
            $duration = self::calculateDuration($this -> startTime, $this -> endTime);
            $doctorSalary = $this -> doctor -> calculateSalary($duration);
            $nurseBonus = 0;
            if ($this -> nurse) {
                $nurseBonus = $this -> nurse -> calculateSalary($duration);
            }

            return array($doctorSalary, $nurseBonus);
        }
    }


    $doctor = new Doctor("Dr. Will", "Brown", "Black", 180, 75, 50);
    $patient = new Patient("Mickey Mouse", "Black", "Brown", 175, 70);
    $nurse = new Nurse("Nurse Jennifer", "Green", "White", 165, 60, 1000);

    $startTime = new DateTime("2024-03-07 09:00:00");
    $endTime = new DateTime("2024-03-07 11:00:00");

    $appointment = new Appointment($doctor, $patient, $startTime, $endTime, $nurse);
    $cost = $appointment -> calculateCost();

    echo "Doctor's salary: $" . $cost[0] . "\n";
    echo "Nurse's salary: $" . $cost[1] . "\n";
    
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Appointment Details</title>
</head>
<body>
    <h1>Appointment Details</h1>

    <?php
        // Inclusion of the PHP Code.
        // Class Definition.
    ?>

    <h2>Doctor</h2>
    <p>Name: <?php echo $doctor -> getName(); ?></p>
    <p>Role: <?php echo $doctor -> determineRole(); ?></p>

    <h2>Patient</h2>
    <p>Name: <?php echo $patient -> getName(); ?></p>
    <p>Role: <?php echo $patient -> determineRole(); ?></p>

    <h2>Nurse</h2>
    <p>Name: <?php echo $nurse -> getName(); ?></p>
    <p>Role: <?php echo $nurse -> determineRole(); ?></p>

    <h2>Appointment Cost</h2>
    
    <?php
        // Calculates the costs of the appointments.
        $cost = $appointment -> calculateCost();
    ?>

    <p>Doctor's Salary: $<?php echo $cost[0]; ?></p>
    <p>Nurse's Salary: $<?php echo $cost[1]; ?></p>
</body>
</html>

