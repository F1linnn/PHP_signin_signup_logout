<?php
    session_start();
    if(isset($_SESSION['user']))
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
    <h1>Форма авторизации</h1>
    <form>
        <label>Логин</label>
        <input type= "text" class= "" name="login"
               id="login" placeholder="Введите логин">
        <label>Пароль</label>
        <input type="password" class="" name="password"
               id="password" placeholder="Введите пароль">
        <button type="submit" class="log_in">Вход</button>
        <p>
            Нет аккаунта? - <a href="reg.php"> зарегистрируйся</a>
        </p>
        <p class="msg nothing">some text</p>

        <script src = assets/js/jquery-3.6.3.js></script>
        <script src = assets/js/main.js></script>
    </form>
</div>
</body>
</html>