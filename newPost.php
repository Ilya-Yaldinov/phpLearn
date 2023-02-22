<?php
    session_start();
    require_once('connection.php');
    require_once('sqlCommands.php');

    $post = htmlspecialchars(trim($_POST['post']));

    insertBlog($post, $_SESSION['user_id'], $mysql);

    $mysql->close();

    header('Location: /phpLearn/page.php');
    exit();
?>