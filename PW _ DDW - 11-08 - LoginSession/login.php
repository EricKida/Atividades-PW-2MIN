<?php session_start();


 ?>

<!DOCTYPE html>
<style>
@import url('https://fonts.googleapis.com/css?family=Oswald&display=swap');

#botao{
	bottom: 60px;
	position: relative;
	color: white;
	background: cyan;
	border-color: white;
	outline: none;
	width: 170px;
	font-family: 'Oswald';
	font-size: 25px;
	transition: 0.5s;
	animation: aparece 2s ease;
	animation-iteration-count: initial;
	height: 40px;
	border-color: white;
	border-radius: 5px;
	left: 50px;
}

#botao:hover{
	transition: 0.4s;
	color: darkblue;
	background: yellow;
	width: 350px;
	height: 40px;
	border-color: black;

}
@keyframes aparece{
	from{ background: black; color: black; height: 0px;}
	to{ background: cyan; color: white; height: 40px;}
}

	#fundo{
		position:  relative;
		top: 55px;
		height: 300px;
		width: 470px;
		background: purple;
		opacity: 0.85;
		border-radius: 20px;
		animation: fundo 4s ease;
		animation-iteration-count: initial;
	}
@keyframes fundo{
	from{opacity: 0;}
	to{opacity: 0.85;}
}

#personagens{
	position: relative;
	right: 50px;
}

h3{
	position: relative;
	color: white;
	font-family: 'Oswald';
}

#login{
	background: cyan;
	border-color: white;
	border-radius: 5px;
	font-family: 'Oswald';
	animation: estica 2s ease;
	animation-iteration-count: initial;
	width: 150px;
	transition: 0.4s;
}

@keyframes estica{
	from{ width: 0px; }
	to{ width: 150px; }
}

#login:hover{
	width: 200px;
	transition: 0.4s;
	color: black;
	background: yellow;
	border-color: black;
	color: black;

}

#login:focus{
	width: 200px;
	transition: 0.4s;
	color: black;
	background: yellow;
	border-color: black;
	color: black;

}

</style>
<html>
<?php

		if(isset($_POST['login'])){
			$_SESSION['login'] = $_POST['login'];
			header('location:pergunta1.php');
		};


?>
<head>
	<title>Login</title>
</head>
<body style="background: url('login.png'); background-repeat: no-repeat; background-size: 100%;">
	<center>
		<div id="fundo">
		<form method="post">

<div id="a" style="font-family: 'Oswald'; color: white;">E-MAIL</div><input required type="email" name="login" id="login" placeholder="Insira seu e-mail">

<h3>SELECIONE SEU AVATAR</h3>
	<div id="personagens">
		<input type="radio" name="fortnite" id="icone1" required 
		value="<img src='p (1).png' style='height: 100px; border-radius: 100%; left: 20px; position: relative;'>">
		<img src="p (1).png" style="height: 100px; border-radius: 100%; right: 10px; position: relative;" required>

		<input type="radio" name="fortnite" id="icone2" 
		value="<img src='p (2).png' style='height: 100px; border-radius: 100%;  left: 20px; position: relative;'>">
		<img src="p (2).png" style="height: 100px; border-radius: 100%;  right: 16px; position: relative;">

		<input type="radio" name="fortnite" id="icone3" 
		value="<img src='p (3).png' style='height: 100px; border-radius: 100%;  left: 20px; position: relative;'>"
		style="position: relative; left: 32px;"><img src="p (3).png" style="height: 100px; border-radius: 100%;  left: 10px; position: relative;">

		<input type="radio" name="fortnite" id="icone4" 
		value="<img src='p (4).png' style='height: 100px; border-radius: 100%;  left: 20px; position: relative;'>" 
		style="position: relative; left: 32px;"><img src="p (4).png" style="height: 100px; border-radius: 100%;  left: 250px; bottom: 102px; position: relative;"><br><br>
		<input type="submit" value="Entrar" id="botao">

	</div>
	</div>

</form>
</center>
</body>

<?php 
if(isset($_POST['fortnite'])){
	$_SESSION['fortnite'] = $_POST['fortnite'];
	header("location.pergunta1.php");
}
?>
</html>