<?php
    function getUserByLogin($login, $mysql){
        $sql = "SELECT * FROM users WHERE login=?";
        $getUserByLogin = $mysql->prepare($sql);
        $getUserByLogin->bind_param("s", $login);
        $getUserByLogin->execute();
        $result = $getUserByLogin->get_result();
        return $result;
    }

    function insertUser($login, $password, $name, $mysql){
        $sql = "INSERT INTO users (login, password, name) VALUES (?,?,?)";
        $addUser = $mysql->prepare($sql);
        $addUser->bind_param("sss", $login, $password, $name);
        $addUser->execute();
    }

    function insertBlog($post, $userId, $mysql){
        $sql = "INSERT INTO blogs (post, user_id) VALUES (?,?)";
        $addBlog = $mysql->prepare($sql);
        $addBlog->bind_param("si", $post, $userId);
        $addBlog->execute();
    }

    function listOfUserPosts($userId ,$mysql){
        $sql = "SELECT * FROM blogs WHERE user_id=?";
        $posts = $mysql->prepare($sql);
        $posts->bind_param("i", $userId);
        $posts->execute();
        $result = $posts->get_result();
        return $result;
    }

    function getAllPosts($mysql){
        $sql = "SELECT post, login FROM blogs JOIN users On user_id = users.id";
        $posts = $mysql->prepare($sql);
        $posts->execute();
        $result = $posts->get_result();
        return $result;
    }
?>