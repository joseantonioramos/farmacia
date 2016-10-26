<?php 
include('conexion.php');
$id=$_GET['id_categoria'];
$sql="select* from categoria where id_categoria=$id";
$resul=mysqli_query($conn,$sql)or die('error en editar la bd');
$re=mysqli_fetch_assoc($resul);
 ?>
<!DOCTYPE html>
<html>
<head>
	<title>pagina de editar de categoria</title>
</head>
<body>
<?php 	include('cabecera.php') ?>
<form action="editc.php" method="post">
    <input type="hidden" name="id_categoria" id="$id" value="<?php echo $id; ?>">
	<table >
	   <tr>
	   	   <td>CATEGORIA</td>
	   	   <td><input type="text" name="desc" value="<?php echo $re['descripcion']; ?>"> </td>
	   </tr>
		
	</table>
	<input type="submit" name"" value="modificar">
</form>
</body>
</html>