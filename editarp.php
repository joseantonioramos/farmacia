<?php 
include_once('conexion.php');
$id=$_GET['id_productos'];
echo $id;
$sql="select* from productos where id_productos=$id";
$resul=mysqli_query($conn,$sql)or die('error en editar la bd editarp.php');
$re=mysqli_fetch_assoc($resul);

 ?>
<!DOCTYPE html>
<html>
<head>
	<title>nuevo</title>
</head>
<body>
<?php 	include('cabecera.php') ?>
<h1> pagina editar</h1>
<form action="guar_editp.php" method="post" >
<input type="hidden" name="id_productos" id="$id" value="<?php echo $id; ?>">
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