<html lang="es">
<head>
	<meta charset="UTF-8">
	<title>Calendario</title>
	<h1 align="center">Calendario</h1>
</head>
<body>
<table align="center">
	<tr>
		<td>Lunes</td>
		<td>Martes</td>
		<td>Miercoles</td>
		<td>Jueves</td>
		<td>Viernes</td>
		<td>Sábado</td>
		<td>Domingo</td>
	</tr>
	<?php
	$filas=6;
	$columnas=7;
	$num=1;

		for($f=0;$f<$filas;$f++){
			echo "<tr>";
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