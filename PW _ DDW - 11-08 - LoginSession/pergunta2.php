<?php session_start(); ?>

<link rel="stylesheet" type="text/css" href="stylecss.css">
<!DOCTYPE html>
<html>

<head>
	<meta charset="utf-8">
	<title>Pergunta 1</title>
</head>
<body style="background: url('p2.png'); background-size: 100%; overflow: hidden;">
	<center>
    <div id="contorno">
    <div id="caixa"></div>
    </div>
<center><fieldset><form method="post">
	<h3>Pergunta 2: Qual dessas skins pertence a Season 3?</h3><br>
	    <table style="position: relative; bottom: 35px;">
	    	<td>
	<input type="radio" name="r2" id="a" value="a" checked>a) The Reaper	<br>
 	<input type="radio" name="r2" id="b" value="b">b) Omega	<br>
	<input type="radio" name="r2" id="c" value="c">c) Master Key <br>
	<input type="radio" name="r2" id="d" value="d">d) Singularity <br>
	<input type="radio" name="r2" id="e" value="e">e) John Wick <br>
</td>
	<br><br>
</table>
	<input type="submit" name="Próxima" id="next">
</form></fieldset></center>
</body></html><?php 
		
		
if(isset($_POST['r2'])) 
{
    if($_POST['r2'] == "a")
     { $_SESSION['r2'] = $_POST['r2'];
        $_SESSION['Resultado']++;
        header('location:pergunta3.php');
     }
    else
     { 
        $_SESSION['r2'] = $_POST['r2'];
        header('location:pergunta3.php');
         $_SESSION['Erro'] ++;
     }
 }
?>
