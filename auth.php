<?php
    session_start();
    require_once('connection.php');
    require_once('sqlCommands.php');
    
    $login =  htmlspecialchars(trim($_POST['login']));
    $password =  htmlspecialchars(trim($_POST['password'])); 

    $user = getUserByLogin($login, $mysql)->fetch_assoc();

    if(empty($user) || !password_verify($password, $user["password"])){
        echo "Неверный логин или пароль.";
	    exit();
    }

    $_SESSION['user_login'] = $user['login'];
    $_SESSION['user_id'] = $user['id'];

    $mysql->close();
    header('Location: /phpLearn/page.php');
?>