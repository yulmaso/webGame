<?php require_once("includes/connection.php"); ?>
<?php include("includes/header.php"); ?>
<body>
	<div class="container mregister">
		<div id="login">
 			<h1>Регистрация</h1>
			<form action="register.php" id="registerform" method="post"name="registerform">
 				<p><label for="user_login">Полное имя<br>
 				<input class="input" id="full_name" name="full_name"size="32"  type="text" value=""></label></p>
				<p><label for="user_pass">E-mail<br>
				<input class="input" id="email" name="email" size="32"type="email" value=""></label></p>
				<p><label for="user_pass">Имя пользователя<br>
				<input class="input" id="username" name="username"size="20" type="text" value=""></label></p>
				<p><label for="user_pass">Пароль<br>
				<input class="input" id="password" name="password"size="32"   type="password" value=""></label></p>
				<p class="submit"><input class="button" id="register" name= "register" type="submit" value="Зарегистрироваться"></p>
	  			<p class="regtext">Уже зарегистрированы? <a href= "login.php">Введите имя пользователя</a>!</p>
 			</form>
		</div>
	</div>
	<!-- <footer>
		© 2014 <ahref="http://www.1stwebdesigner.com/">1stwebdesigner</a>. Все права защищены.
 	</footer> -->
</body>
</html>