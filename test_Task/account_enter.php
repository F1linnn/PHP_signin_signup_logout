<?php
session_start();
if(!isset($_SESSION['user']) && !isset($_COOKIE[$_SESSION['user']['login']]))
    header('Location: ../start.php');
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
    <h1>
        <?php echo "Hello ".$_SESSION['user']['name']; ?>
    </h1>
    <button class="out">Выход</button>

    <script src = assets/js/jquery-3.6.3.js></script>
    <script src = assets/js/main.js></script>

</div>
</body>
</html>
