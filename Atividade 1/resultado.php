<!DOCTYPE html>
<html>
<head>
	<title>Resultado</title>
</head>
<center>
<body style="background: gray">
	<fieldset style="background: black; width: 100px; height: 80px; top: 100px; position: relative; border-radius: 50px">
		<div style="color: white; font-family: 'arial'">
	<?php
echo "<meta charset=utf-8>";
?>
<div id="resposta" style="font-size: 50px; color: #118584">
<?php
echo "Resposta";
?>
</div>
<?php
echo $_POST['pergunta'];
echo ": 99%";

?>
	</div>
	<button onclick="window.location.href='Index.html';">Voltar</button>
	</fieldset>
</body>
</center>
</html>

