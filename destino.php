<html>
<head>
</head>
<body>
<?php
	$numero = $_POST["num"];
	$total = 0;
	$contador = 1;
	while ($total < 100) {
		$total = $numero * $contador;
		//echo $numero . " x " . $contador . " = " . $total . "</br>";
		echo "$numero x $contador = $total </br>";
		$contador  = $contador + 1;
	}
?>
</body>
</html>

