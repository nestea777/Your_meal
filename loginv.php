<?php
require_once('db.php');
session_start();
$login = $_POST['login'];
$password = $_POST['password'];
if (empty($login) || empty($password)) {
    echo  "Заполните все поля";
} else {
    $sql = "SELECT * FROM  `users` WHERE login = '$login' AND password = '$password'";
    $result = $conn->query($sql);

    if ($result->num_rows > 0) {
        while ($row = $result->fetch_assoc()) {

            $_SESSION['users'] = [
                'id' => $row['id'],
                'login' => $row['login'],
                'password' => $row['password'],
                'email' => $row['email'],
                'isAdmin' => $row['isAdmin']
            ];
            header("Location:index.php");
        }
    } else {
        echo '<script>alert("Такого пользователя не существует");
            window.location.href = "login.php";</script>';
    }
}