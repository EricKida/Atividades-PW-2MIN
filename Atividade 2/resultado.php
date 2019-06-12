<!DOCTYPE html>
<html>
<head>
	<title>Resultado</title>
</head>
<center>
<body style="background: gray">
	<fieldset style="background: black; width: 500px; height: 300px; top: 100px; position: relative; border-radius: 50px">
		<div style="color: white; font-family: 'arial'">
	<?php
echo "<meta charset=utf-8>";
?>
<div id="resposta" style="font-size: 50px; color: #118584">
<?php
echo "LOGIN";
?>
</div>
<?php
$login = 0;
if($_POST['username']=="Kinho"){
	echo "Username Correto: Kinho";
	$login ++;
}
else{
	echo "Username: Falha na autenticação";
}

echo "<br>";

if($_POST['password']=="erickida123"){
	echo "Password Correto: erickida123";
	$login ++;
}
else{
	echo "Password: Falha na autenticação";
}
echo "<br>";
if($login=="2"){
	echo "<br><br>";
	echo "Parabéns! Você conseguiu";
}
else{
	echo "<br><br>";
	echo "Você não conseguiu conectar com o login certo";
}
?>
	</div>
	<button onclick="window.location.href='Index.html';" style="top: 150px; position: relative;">Voltar</button>
	</fieldset>
</body>
</center>
</html>

