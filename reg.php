<!DOCTYPE html>
<html lang="ru">
<head>
	<meta charset="utf-8">
	<title>Вход/Регистрация</title>
</head>
<body>
	<div class="container mt-4">
		<div class="row">
			<div>
				<h1>Регистрация</h1>
				<form action="check.php" method="post" autocomplete="off">
					<input type="text" name="login" id="login" placeholder="Логин"><br>
					<input type="text" name="name" id="name" placeholder="Имя"><br>
					<input type="password" name="password" id="password" placeholder="Пароль"><br>
					<button>Зарегистрироваться</button><br>
				</form> 
			</div>
			
			<div>
				<h1>Авторизация</h1>
				<form action="auth.php" method="post" autocomplete="off">
					<input type="text" name="login" id="login" placeholder="Логин"><br>
					<input type="password" name="password" id="password" placeholder="Пароль"><br>
					<input type="submit" value="Авторизоваться"><br>
				</form> 
			</div>

		</div>
	</div>
	
</body>
</html>