<?php
    session_start();
    if(isset($_SESSION['user']) && isset($_COOKIE[$_SESSION['user']['login']]))
        header('Location: ../account_enter.php');
?>

<!doctype html>
<html lang="ru">
<head>
    <meta charset="utf-8">
    <title>Тестовое задание</title>
    <link rel="stylesheet" href="assets/css/main.css">
</head>
<body>

    <div>
        <form>
            <h1>Форма регистрации</h1>
            <label>Логин</label>
            <input type= "text" class= "form-control" name= "login"
               id= "login" placeholder="Введите логин">
            <label>Имя</label>
            <input type= "text" class= "form-control" name= "your_name"
               id= "your_name" placeholder="Введите свое Имя">
            <label>Email</label>
            <input type= "text" class= "form-control" name= "email"
               id= "email" placeholder="Введите email">
            <label>Пароль</label>
            <input type= "password" class= "form-control" name= "password"
               id= "pass" placeholder="Введите пароль">
            <label>Подтвердите пароль</label>
            <input type= "password" class= "form-control" name= "confirm_pass"
                   id= "confirm_pass" placeholder="Подтвердите пароль">
            <button type="submit" class="but_reg"> Зарегистрироваться</button>
            <p>
                Уже есть аккаунт? - <a href="start.php"> авторизоваться</a>
            </p>

            <p class="msg nothing"> some text</p>

            <script src = assets/js/jquery-3.6.3.js></script>
            <script src = assets/js/main.js></script>
        </form>
    </div>
</body>
</html>