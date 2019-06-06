<?php 
session_start();
if(!isset($_SESSION["session_username"])) {
	header("location:login.php");
} else {
?>

<?php require_once("includes/connection.php"); ?>

<?php
	if(isset($_POST['play'])){
		//echo "<p class=\"error\">" . "MESSAGE: ". "ОТКРЫВАЕТСЯ ИГРА" . "</p>";
		header("location:myGame/index.php");
	}

	if(isset($_POST['refreshTable'])){
		
	}
?>


<?php include("includes/header.php"); ?>
<div id="welcome">	
	<h2>Добро пожаловать, <span><?php echo $_SESSION['session_username'];?>! </span></h2>
	<p><a href="logout.php">Выход</a> здесь!</p>
	<form action="" id="buttonform" method="post"name="loginform">
		<p class="submit"><input class="button" name="play"type= "submit" value="ИГРАТЬ"></p>
		<p class="submit"><input class="playbutton" name="refreshTable"type= "submit" value="Обновить таблицу"></p>
	</form>
</div>

	

<?php
}
?>
