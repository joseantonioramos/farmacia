<?php 
session_start();
if($_SESSION['login']=='ok'){
 ?>
<!DOCTYPE html>
<html>
<head>
	<title>pagina de inicio</title>
</head>
<body>
<?php 	include('cabecera.php') ?>
<form>
	<table border="1">
	    <tr>
	    	<td>ID</td>
	    	<td>DESCRIPCION</td>
	    	<td>PRODUCTO MAS VENDIDO</td>
	    	<td>USUARIO CON MAYOR VENTA</td>	
	    </tr>
		
	</table>
</form>
</body>
</html>
<?php 
}else{

	header('location: index.php');

}
 ?>