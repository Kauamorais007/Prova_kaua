<!DOCTYPE html>
<html lang="pt">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="icon" href="vendas/resources/img/logo.png">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <title>Prova</title>
</head>
<body>
<form action="100a100.php" method="GET">
	<h1>Conte até 100</h1>
    <p>Digite o numero inicial<input type="number" max="99" name="n1" required></p>
	<p><input type="submit" name="bt" value="Contar"></p>
</form>
<?php
	if(isset($_GET['bt'])){
		$n1=$_GET['n1'];
		if($n1<100){
			echo "<p>Contando ate 100</p>";
            for($i = $n1;$i<= 100;$i+=3){
                echo $i." + ";
            }}else {
			echo "<p>Insira um valor menor que 100</p>";
        }
	}
?>
</body>
</html>