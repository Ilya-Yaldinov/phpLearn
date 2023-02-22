<?php
    require_once('connection.php');
    require_once('sqlCommands.php');

    $login =  htmlspecialchars(trim($_POST['login']));
    $name =  htmlspecialchars(trim($_POST['name']));
    $password =  htmlspecialchars(trim($_POST['password'])); 

    if(mb_strlen($login) < 5 || mb_strlen($login) > 50){
        echo "Недопустимая длина логина";
        exit();
    }
    
    else if(mb_strlen($name) < 2 || mb_strlen($name) > 50){
        echo "Недопустимая длина имени.";
        exit();
    } 

    $password = password_hash($password, PASSWORD_DEFAULT, ['cost' => 5]);

    $user = getUserByLogin($login, $mysql)->fetch_assoc();

    if(!empty($user)){
        echo "Данный логин уже используется!";
        exit();
    }

    insertUser($login, $password, $name, $mysql);

    $mysql->close();

    header('Location: /phpLearn');
    exit();
?>