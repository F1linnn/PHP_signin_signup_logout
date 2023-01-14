<?php
if(!empty($_SERVER['HTTP_X_REQUESTED_WITH']) && strtolower($_SERVER['HTTP_X_REQUESTED_WITH']) == 'xmlhttprequest') {
}else{
    header("Location: ../start.php");
    die();
}
    session_start();
    require_once 'json_crud.php';
    require_once 'validation.php';
    $database = new Json();
    $validation = new Validation();
    $name = $_POST["your_name"];
    $login = $_POST["login"];
    $email = $_POST["email"];
    $password = $_POST["password"];
    $conf_pass = $_POST["confirm_pass"];
    $errors = [];


    $response = $validation->check_empty($name,$login, $email, $password, $conf_pass);
    if(!empty($response))
    {
        echo json_encode($response);
        die();
    }

    $response = $validation ->check_login($login);
    if(!empty($response))
    {
        echo json_encode($response);
        die();
    }

    $response = $validation ->check_individual_login($login, $database);
    if(!empty($response))
    {
        echo json_encode($response);
        die();
    }

    $response = $validation ->check_email($email);
    if(!empty($response))
    {
        echo json_encode($response);
        die();
    }

    $response = $validation ->check_individual_email($email, $database);
    if(!empty($response))
    {
        echo json_encode($response);
        die();
    }

    $response = $validation->check_len($password,6, 'password');
    if(!empty($response))
    {
        echo json_encode($response);
        die();
    }

    $response = $validation->check_len($login,6, 'login');
    if(!empty($response))
    {
        echo json_encode($response);
        die();
    }

    $response = $validation->check_len($name,2, 'your_name');
    if(!empty($response))
    {
        echo json_encode($response);
        die();
    }

    $response = $validation->check_name($name);
    if(!empty($response))
    {
        echo json_encode($response);
        die();
    }

    $response = $validation->check_pass($password);
    if(!empty($response))
    {
        echo json_encode($response);
        die();
    }


    $response = $validation->equal_passwords($password,$conf_pass);
    if(!empty($response))
    {
        echo json_encode($response);
        die();
    }





    $userData = array('name'=>$name, 'login'=>$login,'email' => $email, 'password'=> sha1($password));
    $add = $database->add_new_user($userData);
    $_SESSION['user'] = ["name"=>$name, "login"=>$login, "email"=>$email];
    setcookie($login,$name,time()+3600);
    echo json_encode(['status' => true]);

?>