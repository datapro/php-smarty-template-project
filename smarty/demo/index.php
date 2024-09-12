<?php
require_once('../libs/Smarty.class.php');

class User {
    private $username;
    private $email;
    private $password;

    public function __construct($username, $email, $password) {
        $this->username = $username;
        $this->email = $email;
        $this->password = $password;
    }

    public function validate() {
        if (!$this->isValidUsername($this->username)) {
            return "Invalid username.";
        }
        if (!$this->isValidEmail($this->email)) {
            return "Invalid email format.";
        }
        if (!$this->isValidPassword($this->password)) {
            return "Password must be at least 8 characters long and include a mix of letters and numbers.";
        }
        return true;
    }

    private function isValidUsername($username) {
        return preg_match('/^[a-zA-Z0-9]{3,20}$/', $username);
    }

    private function isValidEmail($email) {
        return filter_var($email, FILTER_VALIDATE_EMAIL);
    }

    private function isValidPassword($password) {
        return strlen($password) >= 8 && preg_match('/[A-Za-z]/', $password) && preg_match('/[0-9]/', $password);
    }
}

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $user = new User($_POST['username'], $_POST['email'], $_POST['password']);
    $validationResult = $user->validate();

    $smarty = new Smarty();
    if ($validationResult === true) {
        $smarty->assign('message', "User registered successfully: Username: {$user->username}, Email: {$user->email}");
    } else {
        $smarty->assign('error', $validationResult);
    }
    $smarty->display('./templates/result.tpl');
}
?>