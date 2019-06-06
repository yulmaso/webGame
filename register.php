<?php require_once("includes/connection.php"); ?>
<?php include("includes/header.php"); ?>


<?php

if(isset($_POST["register"])){


if(!empty(!empty($_POST['email']) && !empty($_POST['username']) && !empty($_POST['password']))) {
	
	$email=$_POST['email'];
	$username=$_POST['username'];
	$password=$_POST['password'];
	

		
	$query=mysqli_query($mysqli, "SELECT * FROM users WHERE nickname='".$username."'");
	$numrows=mysqli_num_rows($query);
	
	if($numrows==0)
	{
	$sql="INSERT INTO users
			(email, nickname, password) 
			VALUES('$email', '$username', '$password')";

	$result=mysqli_query($mysqli, $sql);


	if($result){
	 $message = "Account Successfully Created";
	} else {
	 $message = "Failed to insert data information!";
	}

	} else {
	 $message = "That username already exists! Please try another one!";
	}

} else {
	 $message = "All fields are required!";
}
}
?>


<?php if (!empty($message)) {echo "<p class=\"error\">" . "MESSAGE: ". $message . "</p>";} ?>
	
<div class="container mregister">
			<div id="login">
	<h1>Регистрация</h1>
<form name="registerform" id="registerform" action="register.php" method="post">
	
	<p>
		<label for="user_pass">Email<br />
		<input type="email" name="email" id="email" class="input" value="" size="32" /></label>
	</p>
	
	<p>
		<label for="user_pass">Имя пользователя<br />
		<input type="text" name="username" id="username" class="input" value="" size="20" /></label>
	</p>
	
	<p>
		<label for="user_pass">Пароль<br />
		<input type="password" name="password" id="password" class="input" value="" size="32" /></label>
	</p>	
	

		<p class="submit">
		<input type="submit" name="register" id="register" class="button" value="Регистрация" />
	</p>
	
	<p class="regtext"> Уже есть аккаунт? <a href="login.php" >Залогиньтесь</a>!</p>
</form>
	
	</div>
	</div>
</body>
</html>