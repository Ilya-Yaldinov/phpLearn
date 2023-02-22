<!DOCTYPE html>
<html lang="ru">
<head>
	<meta charset="utf-8">
	<title>Вход/Регистрация</title>
</head>
<body>
	<form action="reg.php" method="post" autocomplete="off">
		<input type="submit" value="Перейти к регистрации"><br>
	</form> 
	<?php
        require_once('connection.php');
        require_once('sqlCommands.php');

        $posts = getAllPosts($mysql)->fetch_all(MYSQLI_ASSOC);
	
		$mysql->close();

        foreach($posts as $value){
			printf("<h2>%s<h2>", $value['login']);
			printf("<h3>%s<h3>", $value['post']);
            printf("<br>");
		}
    ?>
</body>
</html>