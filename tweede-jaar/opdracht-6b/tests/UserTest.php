<?php

// Author: Diego Ballestero


namespace Opdracht6b\classes;


use PHPUnit\Framework\TestCase;


class UserTest extends TestCase {
    private $username;
    private $db;

    public function testRegisterUser(): void {
        // Testing a registrated user.
        $this -> assertTrue($this -> user -> registerUser('Diego', 'Ballestero'));

        // Testing a registrated user that isn't in the system.
        $this -> assertFalse($this -> user -> registerUser('Diego', 'Rietveldt'));
    }

    public function testLoginUser(): void {
        $this -> assertTrue($this -> user -> loginUser('Callé', 'Thomer'));
        $this -> assertFalse($this -> user -> loginUser('Freddy', 'Fazbear'));
        $this -> assertFalse($this -> user -> loginUser('Buster', 'Odeholm'));
    }

    public function testIsLoggedin(): void {
        $this -> assertFalse($this -> user -> isLoggedin());
        $this -> user -> loginUser('Chosen', 'Undead');
        $this -> assertTrue($this -> user -> isLoggedin());
    }

    public function testLogoutUser() {
        $this -> username -> Logout();

        $isDeleted = (session_status() == PHP_SESSION_NONE && empty(session_id()));
        $this -> assertTrue($isDeleted);
    }  
}

?>