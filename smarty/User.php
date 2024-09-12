<?php
class User {
    private $username;
    private $email;
    private $password;

    // Constructor
    public function __construct($username, $email, $password) {
        $this->username = $username;
        $this->email = $email;
        $this->password = $password;
    }

    // Validate username
    public function validateUsername() {
        return preg_match('/^[a-zA-Z0-9]{3,20}$/', $this->username);
    }

    // Validate email
    public function validateEmail() {
        return filter_var($this->email, FILTER_VALIDATE_EMAIL);
    }

    // Validate password (minimum 8 characters, including at least one number and one special character)
    public function validatePassword() {
        return preg_match('/^(?=.*\d)(?=.*[a-zA-Z])(?=.*[@$!%*?&])[A-Za-z\d@$!%*?&]{8,}$/', $this->password);
    }

    // Create a new user (for example purposes, just returning true)
    public function createUser() {
        if ($this->validateUsername() && $this->validateEmail() && $this->validatePassword()) {
            // Save user to database (this is just an example, so we will skip actual DB operations)
            return true;
        } else {
            return false;
        }
    }
}
