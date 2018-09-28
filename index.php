<html lang="es">
<head>
	<meta charset="UTF-8">
	<title>Calendario</title>
	<h1 align="center">Calendario</h1>
</head>
<body>
	<link rel="stylesheet" type="text/css" href="calendario.css" />
<table align="center">
	<tr align="center">
		<td><b>Lunes</b></td>
		<td><b>Martes</b></td>
		<td><b>Miercoles</b></td>
		<td><b>Jueves</b></td>
		<td><b>Viernes</b></td>
		<td><b>Sábado</b></td>
		<td><b>Domingo</b></td>
	</tr>
	<?php
	$filas=6;
	$columnas=7;
	$num=1;

		for($f=0;$f<$filas;$f++){
			echo "<tr align='center'>";
			for($c=0;$c<$columnas;$c++){
				if($num<=31){
					echo "<td>$num</td>";
					$num+=1;
				}
			}
			echo "</tr>";
		}
	?>
</table>
</body>
</html>