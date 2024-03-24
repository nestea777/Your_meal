<?php
    require_once('db.php');
    session_start();
    $login = $_POST['login'];
    $pass = $_POST['pass'];
    $repeatpass = $_POST['repeatpass'];
    $email = $_POST['email'];

    if (empty($login) || empty($pass) || empty($repeatpass) || empty($email)) {
        echo "Заполните все поля";
    } else {
        if ($pass != $repeatpass) {
            echo '<script>alert("Пароли не совпадают");
            window.location.href = "registration.php";</script>';
        } else {
            
            $checkLoginQuery = "SELECT * FROM `users` WHERE login='$login'";
            $result = $conn->query($checkLoginQuery);

            if ($result->num_rows > 0) {
                echo '<script>alert("Пользователь с таким логином уже существует");
            window.location.href = "registration.php";</script>';
            } else {
            
                $sql = "INSERT INTO `users` (login, password, email) VALUES ('$login', '$pass', '$email')";

                if ($conn->query($sql) === TRUE) {
                    echo '<script>alert("успешная регистрация");</script>';
                    header("Location: index.php");
                } else {
                    echo "Ошибка: " . $conn->error;
                }
            }
        }
    }
?>