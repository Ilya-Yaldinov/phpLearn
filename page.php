<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Document</title>
</head>
<body>
	<?php
		session_start();
		echo $_SESSION['user_login'];
		echo "\n";
		echo $_SESSION['user_id'];
	?>
	<h1>Привет!</h1>
	<h3>Вы можете добавить пост</h3>
	<form action="newPost.php" method="post" autocomplete="off">
		<textarea name="post" id="post" cols="40" rows="3"></textarea>
		<p>
			<input type="submit" value="Создать пост">
			<input type="reset" value="Очистить">
		</p>
	</form>
	<br>
	<h3>Ваши посты</h3>
	<?php
		session_start();
		require_once('connection.php');
		require_once('sqlCommands.php');
	
		$posts = listOfUserPosts($_SESSION['user_id'], $mysql)->fetch_all(MYSQLI_ASSOC);
	
		$mysql->close();

		foreach($posts as $value){
			printf("<p><h4>%s<h4>", $value['post']);
			printf("<input type='reset' value='Изменить'></p>");
		}
	?>
	<br>
	<a href="exit.php">Чтобы выйти нажмите сюда</a> 
</body>
</html>