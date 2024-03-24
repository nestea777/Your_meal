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
                    <form action="loginv.php" method="post">
                        <input type="hidden">
                        <label for="phone">Укажите имя пользователя</label>
                    <div class="contentBody__inputWrapper">
                    <input id="phone" class="contentBody__input" type="text" placeholder="Логин" name="login"required>
                    <input id="password" type="password" name="password" class="contentBody__input" placeholder="Пароль"required>
                    </div>
                <ul>
                  <button class="button contentBody__button hideOnMobile" type="submit" >Войти</button>
                  <a class="button contentBody__button hideOnMobile" href="registration.php">Зарегистрироваться</a>
                </ul>
            </form>
        </div>
    </main>
  </div>
</body>
</html>