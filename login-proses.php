<?php

require_once 'require.php';

$auth = new Auth();

if (isset($_POST['submit'])) {
    $username = $_POST['username'];
    $password = $_POST['password'];

    $request = [
        'username' => $username,
        'password' => $password
    ];

    $login = $auth->login($request);

    if ($login) {
        header('Location: index.php');
    }else{
        header('Location: login.php');
    }
}