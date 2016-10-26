<!DOCTYPE html>
<html>
<head>
	<title>nuevo</title>
</head>
<body>
<?php 	include('cabecera.php') ?>
<form action="guar_nuevop.php" method="post" >
	<table>
	<tr>
		<td>descripcion</td>
		<td><input type="text" name="desc" value=""></td>
	</tr>
	<tr>
		<td>costo unitario</td>
		<td><input type="text" name="c_uni" value=""></td>
	</tr>	
	<tr>
		<td>cantidad</td>
		<td><input type="int" name="cant" value=""></td>
	</tr>
	<tr>
		<td>stock minimo</td>
		<td><input type="int" name="stock" value=""></td>
	</tr>		
	</table>
	<input type="submit" name="ACEPTAR">
</form>
</body>
</html>