<?php
//    Проверка ajax
    if(!empty($_SERVER['HTTP_X_REQUESTED_WITH']) && strtolower($_SERVER['HTTP_X_REQUESTED_WITH']) == 'xmlhttprequest') {
    }else{
        header("Location: ../start.php");
        die();
    }

    session_start();
    setcookie($_SESSION['user']['login'],"");
    unset($_SESSION['user']);
    $response = ['status' => true];
    echo json_encode($response);
    die();
?>