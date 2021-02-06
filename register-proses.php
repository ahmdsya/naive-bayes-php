<?php

require_once 'require.php';

$auth = new Auth();

if (isset($_POST['submit'])) {
    $username = $_POST['username'];
    $password = $_POST['password'];
    $confirm  = $_POST['confirm'];

    $request = [
        'username' => $username,
        'password' => $password,
        'confirm'  => $confirm
    ];

    $register = $auth->register($request);
    
    if ($register) {
        header('Location: index.php');
    }else {
        header('Location: register.php');
    }
}