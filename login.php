<?php
session_start();
?>

<?php require_once("includes/connection.php"); ?>
<?php include("includes/header.php"); ?>

<?php
	if(isset($_SESSION["session_username"])){
		// echo "Session is set"; // for testing purposes
		header("Location: intropage.php");
	}

	if(isset($_POST['login'])){
		if(!empty($_POST['username']) && !empty($_POST['password'])) {
    		$username=$_POST['username'];
    		$password=$_POST['password'];

    		$query = mysqli_query($mysqli, "SELECT * FROM users WHERE nickname='".$username."' AND password='".$password."'");

    		$numrows=mysqli_num_rows($query);
    		if($numrows!=0){
    			while($row=mysqli_fetch_assoc($query)){
    				$dbusername=$row['nickname'];
    				$dbpassword=$row['password'];
    			}

    			if($username == $dbusername && $password == $dbpassword){
	    			$_SESSION['session_username']=$username;
	    			/* Redirect browser */
    				header("Location: intropage.php");
    			}
    		} else {
				$message =  "Invalid username or password!";
    		}
		} else {
    		$message = "All fields are required!";
		}
	}
?>

<?php if (!empty($message)) {echo "<p class=\"error\">" . "MESSAGE: ". $message . "</p>";} ?>

<body>
	<div class="container mlogin">
		<div id="login">
			<h1>Вход</h1>
			<form action="" id="loginform" method="post"name="loginform">
				<p><label for="user_login">Имя пользователя<br>
				<input class="input" id="username" name="username"size="20"
				type="text" value=""></label></p>
				<p><label for="user_pass">Пароль<br>
 				<input class="input" id="password" name="password"size="20"
  				type="password" value=""></label></p> 
				<p class="submit"><input class="button" name="login"type= "submit" value="Войти"></p>
				<p class="regtext">Еще не зарегистрированы?<a href= "register.php">Зарегестрируйтесь</a>!</p>
   			</form>
 		</div>
  	</div>
	<!-- <footer>
		© 2014 <ahref="http://www.1stwebdesigner.com/">1stwebdesigner</a>. Все права защищены.
	</footer> -->
</body>
</html>

