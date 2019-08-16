<?php session_start();?>
<!DOCTYPE html>
<html>
<link rel="stylesheet" type="text/css" href="stylefinal.css">
<head>
	<title></title>
</head>
<body style="background: url('final.jpg'); background-size: 100%; overflow: hidden;">
<center>
<div id="contorno"><div id="xxx"></div></div>
	<div id="info" style="position: relative; bottom: 300px;">


		<div id="logo">
	<?php
	echo $_SESSION['fortnite'];
	?>
		</div>
				<div id="email">
	<?php
	echo $_SESSION['login'];
	?>
		</div>

</
<div>
	
</center>
	<fieldset>
	<br>
	<center><div id="respostas" style="position: relative; bottom: 210px;">
		<table><td>
		<?php 

	echo "1: ";
	echo $_SESSION['r1'];
	if ($_SESSION['r1']=="d") {
	echo " - Correta";
	}
	else{
	echo " - Errada";
	}
	echo "<br>";

	echo "2: ";
	echo $_SESSION['r2'];
	if ($_SESSION['r2']=="a") {
	echo " - Correta";
	}
	else{
	echo " - Errada";
	}
	echo "<br>";

	echo "3: ";
	echo $_SESSION['r3'];
	if ($_SESSION['r3']=="b") {
	echo " - Correta";
	}
	else{
	echo " - Errada";
	}
	echo "<br>";

	echo "4: ";
	echo $_SESSION['r4'];
	if ($_SESSION['r4']=="d") {
	echo " - Correta";
	}
	else{
	echo " - Errada";
	}
	echo "<br>";

	echo "5: ";
	echo $_SESSION['r5'];
	if ($_SESSION['r5']=="c") {
	echo " - Correta";
	}
	else{
	echo " - Errada";
	}
	echo "<br>";

	echo "<br>";
	echo "Acertos: ";
	echo $_SESSION['Resultado'];
	echo "<br>";
	echo "Erros: ";
	echo $_SESSION['Erro'];
	echo "<br>";
	echo "NOTA: ";
if ($_SESSION['Resultado']<=2) {
	echo "I";
}
else if($_SESSION['Resultado']==3){
	echo "R";
}

else if($_SESSION['Resultado']==4){
	echo "B";
}

else if($_SESSION['Resultado']==5){
	echo "MB";
}

	?>
</td>
	</table>
</div>
	</fieldset>
		<footer><form method="POST">
			<center>
			<input type="button" id="next" name="voltar" value="Voltar" onclick="window.location.href='index.html';">
			</center>
		</form>
			
		</footer>
</center>
</body>

<?php
session_destroy();
?>
</html>