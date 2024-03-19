<?php

// Author: Diego Ballestero


namespace Opdracht6b\classes;

// Importing the classes.
use PDO;
use PDOException;

class Database {
    private static $instance = null;
    private $connection;

    private function __construct() {
        $host = 'localhost';
        $dbname = 'login';
        $username = 'root';
        $password = ''; // Password is empty.

        try {
            $this -> connection = new PDO("mysql:host=$host;dbname=$dbname", $username, $password);
            $this -> connection -> setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        } catch (PDOException $e) {
            exit("Error: " . $e -> getMessage());
        }
    }

    public static function getInstance() {
        if (!self::$instance) {
            self::$instance = new Database();
        }
        return self::$instance;
    }

    public function getConnection() {
        return $this -> connection;
    }
}

?>