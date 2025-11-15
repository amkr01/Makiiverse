<?php
// auth.php

$usersFile = "users.txt";

$user = trim($_POST['user']);
$pass = trim($_POST['pass']);

if ($user == "" || $pass == "") {
    die("Error: All fields are required.");
}

// Leer usuarios
if (!file_exists($usersFile)) {
    die("Error: User database not found.");
}

$users = file($usersFile, FILE_IGNORE_NEW_LINES);

$loginSuccess = false;

foreach ($users as $line) {
    list($existingUser, $existingPass) = explode(":", $line);

    if ($existingUser === $user && $existingPass === $pass) {
        $loginSuccess = true;
        break;
    }
}

if ($loginSuccess) {
    // Guardamos el usuario en la sesión:
    session_start();
    $_SESSION['user'] = $user;

    // Redirigir a la pantalla principal
    header("Location: home.php");
    exit();
} else {
    echo "Incorrect username or password.";
}
?>
