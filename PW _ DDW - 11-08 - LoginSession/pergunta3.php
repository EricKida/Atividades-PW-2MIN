<?php session_start(); ?>

<link rel="stylesheet" type="text/css" href="style.css">
<!DOCTYPE html>
<html>

<head>
	<title>Pergunta 3</title>
	<meta charset="utf-8">
</head>
<body style="background: url('p3.png'); background-size: 100%; overflow: hidden;">
	<center>
		    <div id="contorno">
    <div id="caixa"></div>
    </div>
<center><fieldset><form method="post">

	<h3>Pergunta 3: Quais deles é um integrante do time de Fortnite denomiado de Cloud9?</h3><br>
	    <table style="position: relative; bottom: 35px;">
        <td>
	<input type="radio" name="r3" id="a" value="a" checked>a) Myth		<Br>
	<input type="radio" name="r3" id="b" value="b">b) Nickss	<br>
	<input type="radio" name="r3" id="c" value="c">c) Tefu	<br>
	<input type="radio" name="r3" id="d" value="d">d) Ninja	<br>
	<input type="radio" name="r3" id="e" value="e">e) Fallen <br>
    </td>
	<br><br>
    </table>
    
    <input type="submit" name="Próxima" id="next">
</form>


</fieldset>

</center>
</body></html><?php 
		

		

if(isset($_POST['r3'])) 
{
    if($_POST['r3'] == "b")
     { $_SESSION['r3'] = $_POST['r3'];
        $_SESSION['Resultado']++;
        header('location:pergunta4.php');
     }
    else
     { 
        $_SESSION['r3'] = $_POST['r3'];
        header('location:pergunta4.php');
         $_SESSION['Erro'] ++;
     }

 }
?>
