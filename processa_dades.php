<!DOCTYPE html>
<html lang="es">
<head>
	<meta charset="UTF-8">
	<title>HOLA</title>
</head>
<body>
	<?php
		$var2=$_REQUEST['mytext'];
		$var3=$_REQUEST['myradio'];
		$var4=$_REQUEST['mycheckbox[]'];
		$var5=$_REQUEST['myselect'];
		$var6=$_REQUEST['mytextarea'];

		echo "mytext es: $var2\n</br>";
		echo "myradio es: $var3\n</br>";
		echo "mycheckbox es: $var4\n</br>";
		echo "myselect es: $var5\n</br>";
		echo "mytextarea es: $var6\n</br>";
		
		print_r($var2.'<br>');
		print_r($var3.'<br>');
		print_r($var4.'<br>');
		print_r($var5.'<br>');
		print_r($var6.'<br>');

	?>	
</body>
</html>