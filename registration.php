<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="style_login.css">
</head>
<body>
    <div class="page">
        <main class="content">
            <header class="content__header"> Вход в системы ресторана Your Meal</header>
                <div class="content__body"> 
                    <h1>Укажите логин</h1>
                    <form action="register.php" method="post">
                        <input type="hidden">
                        <label for="phone">Укажите имя пользователя(login)</label>
                    <div class="contentBody__inputWrapper">
                    <input class="contentBody__input" type="text" placeholder="Логин" name="login"required>
                    <input type="pass" name="pass" class="contentBody__input" placeholder="Пароль"required>
                    <input type="text" placeholder="Повторите пароль" name="repeatpass" class="contentBody__input"required>
                    <input type="email" placeholder="Почта" name="email" class="contentBody__input" required>
                    </div>
                    <ul>
                <button type="submit"  class="button contentBody__button hideOnMobile">Зарегистрироваться</button>
                <a class="button contentBody__button hideOnMobile" href="login.php">Войти</a>
                </ul>
            </form>
        </div>
    </main>
    </div>
</body>
</html>