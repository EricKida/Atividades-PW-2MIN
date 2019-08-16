<?php session_start(); ?>

<link rel="stylesheet" type="text/css" href="stylecss.css">
<!DOCTYPE html>
<html>
<head>
	<title>Pergunta 1</title>
</head>
<body style="background: url('p1.jpg'); background-size: 100%; overflow: hidden;">
<center>
    <div id="contorno">
    <div id="caixa"></div>
    </div>
    <fieldset><form method="post">

	<h3>Pergunta 1: Em qual Temporada de Fortnite estamos atualmente?</h3><br>
    <table style="position: relative; bottom: 35px;">
        <td>
	<input type="radio" name="r1" id="a" value="a" checked>a) 6       <br>
	<input type="radio" name="r1" id="b" value="b">b) 8       <br>
	<input type="radio" name="r1" id="c" value="c">c) 9       <br>
	<input type="radio" name="r1" id="d" value="d">d) 10      <br>
	<input type="radio" name="r1" id="e" value="e">e) 12      <br>
    </td>
	<br><br>
    </table>
	<input type="submit" name="Próxima" id="next" >
     
</form></fieldset></center>
<?php 
$Resultado = 0;
$Erro = 0;
$_SESSION['Erro'] = $Erro;
$_SESSION['Resultado'] = $Resultado;
if(isset($_POST['r1'])) 
{
    if($_POST['r1'] == "d")
     { $_SESSION['r1'] = $_POST['r1'];
        $_SESSION['Resultado']++;
        header('location:pergunta2.php');
     }
    else
     { 
        $_SESSION['r1'] = $_POST['r1'];
        header('location:pergunta2.php');
        $_SESSION['Erro'] ++;
     }
}

?>
</body>
</html>