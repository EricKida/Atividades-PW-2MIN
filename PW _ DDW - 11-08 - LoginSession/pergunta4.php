<?php session_start(); ?>

<link rel="stylesheet" type="text/css" href="stylecss.css">
<!DOCTYPE html>
<html>
<meta charset="utf-8">

<head>
	<title>Pergunta 4</title>
</head>
<body style="background: url('p6.jpg'); background-size: 100%; overflow: hidden;">
	<center>
	    <div id="contorno">
    <div id="caixa"></div>
    </div>
<center><fieldset><form method="post">
	<h3>Pergunta 4: Quantas armas existem em Fortnite?</h3><br>
    <table style="position: relative; bottom: 35px;">
        <td>
	<input type="radio" name="r4" id="a" value="a" checked>a) 29 <br>
	<input type="radio" name="r4"  id="b" value="b">b) 30 <br>
	<input type="radio" name="r4" id="c" value="c">c) 34 <br>
	<input type="radio" name="r4" id="d" value="d">d) 32 <br>
	<input type="radio" name="r4" id="e" value="e">e) 31 <br>
	    </td>
	<br><br>
    </table>
	<input type="submit" name="Próxima" id="next">

</form></fieldset></center>
</body></html><?php 
		
	

if(isset($_POST['r4'])) 
{
    if($_POST['r4'] == "d")
     { $_SESSION['r4'] = $_POST['r4'];
        $_SESSION['Resultado']++;
        header('location:pergunta5.php');
     }
    else
     { 
        $_SESSION['r4'] = $_POST['r4'];
        header('location:pergunta5.php');
         $_SESSION['Erro'] ++;
     }
 }
?>
