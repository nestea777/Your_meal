<?php
session_start();
include "db.php";

if ($_SERVER["REQUEST_METHOD"] === "POST") {
    $title = $_POST['title'];
    $price = $_POST['price'];
    $weight = $_POST['weight'];
    $calories = $_POST['calories'];
    $description = $_POST['description'];
    $ingredients = $_POST['ingredients'];

    // Обработка загруженного изображения
    $img = $_FILES['image'];

    // Проверяем, является ли загруженный файл изображением
    $image_info = getimagesize($img['tmp_name']);
    if ($image_info === false) {
        echo '<script>alert("Вы выбрали неподдерживаемый формат изображения");
        window.location.href = "adminpanel.php";</script>';
    } else {
        // Создаем уникальное имя для файла
        $name = uniqid() . '.' . pathinfo($img['name'], PATHINFO_EXTENSION);

        // Загружаем файл в нужный каталог
        $upload_path = "img/img_new/";
        if (move_uploaded_file($img['tmp_name'], $upload_path . $name)) {
            // Заносим имя файла в базу данных
            $conn->query("INSERT INTO `burgers`(`title`, `price`, `weight`, `calories`, `description`, `ingredients`, `image`) 
            VALUES ('$title','$price','$weight','$calories','$description','$ingredients','$name')");
            header('Location: adminpanel.php');
        } else {
            echo '<script>alert("Ошибка при загрузке изображения");
                window.location.href = "adminpanel.php";</script>';
        }
    }
}
?>