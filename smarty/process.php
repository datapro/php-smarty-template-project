<?php
require_once('User.php');
require('./libs/Smarty.class.php');

// Initialize Smarty
$smarty = new Smarty;

$errors = [];
$success = false;

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $username = $_POST['username'];
    $email = $_POST['email'];
    $password = $_POST['password'];

    $user = new User($username, $email, $password);

    if (!$user->validateUsername()) {
        $errors[] = "Username must be alphanumeric and between 3-20 characters.";
    }

    if (!$user->validateEmail()) {
        $errors[] = "Invalid email format.";
    }

    if (!$user->validatePassword()) {
        $errors[] = "Password must be at least 8 characters long, with at least one number and one special character.";
    }

    if (empty($errors)) {
        if ($user->createUser()) {
            $success = true;
            $smarty->assign('username', $username);
            $smarty->assign('email', $email);
        } else {
            $errors[] = "Failed to create user.";
        }
    }
}

$smarty->assign('errors', $errors);
$smarty->assign('success', $success);
$smarty->display('./templates/index.tpl');
$smarty->display('./templates/process.tpl');
?>
