<!DOCTYPE html>
<html lang="pt">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="img/logo.png" rel="icon">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <title>Prova</title>
</head>
<body>
<form action="parouimpar.php" method="GET">
	<h1>Par ou Impar</h1>
	<p>Digite o número:<input type="number" name="n1" required></p>
	<p><input type="submit" name="bt" value="Descobrir"></p>
</form>
<?php
	if(isset($_GET['bt'])){
		$n1=$_GET['n1'];
        if($n1 % 2 == 0){
			echo "<p>O número é Par</p>";
		}else{
			echo "<p>O número é Impar</p>";
	}}
?>
</body>
</html>
