<link rel="stylesheet" type="text/css" href="phpazul.css">
<!DOCTYPE html>
<html>
<head>
	<title>Atividade 3</title>
	<meta charset="utf-8">
</head>
<body style="background-image: url(fundoazul.png);">
	<center>
	<div id="caixa">
		<marquee><h2>Verifique as informações</h2></marquee>
		<hr>
		<h3>Cor Escolhida</h3>
		<img src="imgazul.png" style="width: 200px; border-radius: 10px;">
		<?php
		echo "<h3>Nome</h3>" ;
		echo $_POST['nome'];
		echo "<h3>E-Mail</h3>";
		echo $_POST['email'];
		echo "<h3>CPF</h3>";
		echo $_POST['cpf'];
		echo "<h3>RG</h3>";
		echo $_POST['rg'];
		echo "<h3>Nº Cartão: </h3>";
		echo $_POST['cartao'];
		echo "<h3>Bandeira</h3>";
		echo $_POST['lvl'];
		echo "<h3>Validade</h3>";
		echo $_POST['validade']
		?>
		<br><br>
		<a href="fimazul.html"><button id="x">Finalizar Pedido</button></a>

	</div>
	</center>
</body>
</html>