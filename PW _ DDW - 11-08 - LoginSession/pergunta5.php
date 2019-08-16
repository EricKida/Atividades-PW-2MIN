<?php session_start(); ?>

<link rel="stylesheet" type="text/css" href="stylecss.css">
<!DOCTYPE html>
<html>
<meta charset="utf-8">

<head>
	<title>Pergunta 5</title>
</head>
<body style="background: url('p5.jpg'); background-size: 100%; overflow: hidden;">
    <center>
    <div id="contorno">
    <div id="caixa"></div>
    </div>
<center><fieldset><form method="post">
	<h3>Pergunta 5: Qual dessas não é uma skin da Season 8</h3><br>
        <table style="position: relative; bottom: 35px;">
        <td>
	<input type="radio" name="r5" id="a" value="a" checked>a) Peely    <br>
	<input type="radio" name="r5" id="b" value="b">b) Luxe <br>
	<input type="radio" name="r5" id="c" value="c">c) The Reaper <br>
	<input type="radio" name="r5" id="d" value="d">d) Blackheart <br>
	<input type="radio" name="r5" id="e" value="e">e) Ember <Br>
    </td>
    <br><br>
    </table>

	<input type="submit" name="Próxima" id="next">


</form></fieldset></center>
</body>
</html>	<?php 
		
if(isset($_POST['r5'])) 
{
    if($_POST['r5'] == "c")
     { $_SESSION['r5'] = $_POST['r5'];
        $_SESSION['Resultado']++;
        header('location:final.php');
     }
    else
     { 
        $_SESSION['r5'] = $_POST['r5'];
        header('location:final.php');
        $_SESSION['Erro'] ++;
     }
 }
     ?>