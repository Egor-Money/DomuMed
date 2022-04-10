<?php
session_start();
?>

<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="stylesheet" type="text/css" href="css/reg.css">
	<title>Domu med</title>
</head>

<body>
	<div>

		<form action="vender/loginAction.php" method="POST">
			
			<h1 title="Форма регистрации на сайте">Регистрация</h1>

			<div class="group">
				<label for="">ФИО:</label>
				<input type="text" name="FIO" required placeholder="Введите ваше ФИО">
			</div>

			<div class="group">
				<label for="">Логин:</label>
				<input type="text" name="login" required placeholder="Введите логин">
			</div>

			<div class="group">
				<label for="">E-mail:</label>
				<input type="email" name="email" required placeholder="Введите ваш адрес эл. почты">
			</div>

			<div class="group">
				<label for="">Пароль:</label>
				<input type="password" name="password" required placeholder="Введите пароль">
			</div>

			<div class="group">
				<label for="">Пароль еще раз:</label>
				<input type="password" name="confpassword" required placeholder="Введите ещё раз пароль">
			</div>

			<div class="group">
				<label for="">Дата рождения:</label>
				<input type="date" name="date" required>
			</div>

			<label><a href="./login.php">Уже зарегистрированы</a></label>

			<button class="btn btn-success" type="submit">Зарегистрироваться</button>
			
		</form>

		<?php
		if ($_SESSION["message"]) {
			$alert = $_SESSION["message"];
			echo "<p style = 'color:red;'> $alert</p>";
		}
		unset($_SESSION["message"]);
		?>

	</div>

</body>
</html>