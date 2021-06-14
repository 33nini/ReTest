<?php
$dbc = mysqli_connect('localhost', 'root', '', 'admin1') OR DIE('Ошибка подключения к базе данных');
if(isset($_POST['submit'])){
	$username = mysqli_real_escape_string($dbc, trim($_POST['username']));
	$password1 = mysqli_real_escape_string($dbc, trim($_POST['password1']));
	$password2 = mysqli_real_escape_string($dbc, trim($_POST['password2']));
	if(!empty($username) && !empty($password1) && !empty($password2) && ($password1 == $password2)) {
		$query = "SELECT * FROM `signup` WHERE username = '$username'";
		$data = mysqli_query($dbc, $query);
		if(mysqli_num_rows($data) == 0) {
			$query ="INSERT INTO `signup` (username, password) VALUES ('$username', SHA('$password2'))";
			mysqli_query($dbc,$query);
			echo 'Всё готово, можете авторизоваться';
			mysqli_close($dbc);
			exit();
		}
		else {
			echo 'Логин уже существует';
		}

	}
}
?>
<!DOCTYPE HTML><html>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<link rel="stylesheet" href="./css/login.css">
<?php
include "header.php"; ?>
<body>
<div class="blok1">
   
<content>
	<form method="POST" action="<?php echo $_SERVER['PHP_SELF']; ?>">
	<label for="username">Введите ваш логин:</label>
	<input type="text" name="username">
	<label for="password">Введите ваш пароль:</label>
	<input type="password" name="password1">
	<label for="password">Введите пароль еще раз:</label>
	<input type="password" name="password2">
	<button type="submit" name="submit">Вход</button>
	</form>
</content>

</section>
</div>
</head>
<body>
</body>
</html>