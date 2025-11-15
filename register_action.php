<?php
// register_action.php

// Archivo donde se guardan los usuarios
$usersFile = "users.txt";

// Obtener datos del formulario
$user = trim($_POST['user']);
$pass = trim($_POST['pass']);

// Validación básica
if ($user == "" || $pass == "") {
    die("Error: All fields are required.");
}

// Si el archivo no existe, lo creamos
if (!file_exists($usersFile)) {
    file_put_contents($usersFile, "");
}

// Revisar si el usuario ya existe
$users = file($usersFile, FILE_IGNORE_NEW_LINES);

foreach ($users as $line) {
    list($existingUser, $existingPass) = explode(":", $line);

    if ($existingUser === $user) {
        die("Error: Username already taken.");
    }
}

// Guardar el nuevo usuario
$newEntry = $user . ":" . $pass . "\n";
file_put_contents($usersFile, $newEntry, FILE_APPEND);

// Redirigir al login
header("Location: login.php");
exit();
?>
