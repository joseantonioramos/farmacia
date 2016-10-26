<?php 
require_once('conexion.php');
$sql="select * from productos ";
$sql1="select * from categoria";
$resul=mysqli_query($conn,$sql) or die ('error en index de conexion a la base de datos');
$resul1=mysqli_query($conn,$sql1) or die ('error en index de conexion a la base de datos');
 ?>
 <!DOCTYPE html>
<html>
<head>
	<title> index pagina principal
	</title>
</head>
<body>
<?php 	include('cabecera.php') ?>
<h1>Pagina principal de producto</h1>

<a href="nuevop.php">Ingresar Nuevo registro</a><br>
<form>
	<table border="1">
	<tr>
		<td>id productos</td>
		<TD>descripcion</TD>
		<td>costo unitario</td>
		<td>cantidad</td>
		<td>cantidad minima</td>
		<td>id categoria</td>
		<td>EDITAR</td>
		<td>ELIMINAR</td>
	</tr>
	<?php 
	while($r=mysqli_fetch_assoc($resul))
    {
	 ?>
		<tr>
		   <td><?php echo $r['id_productos']; ?></td>
		   <td><?php echo $r['descripcion']; ?></td>
		   <td><?php echo $r['costo_unitario']; ?></td>
		   <td><?php echo $r['cantidad']; ?></td>
		   <td><?php echo $r['stock_minimo']; ?></td>
		   <td><?php echo $r['id_categoria']; ?></td>
		   <td><a href="editarp.php?id_productos=<?php echo $r['id_productos']; ?>">Editar</a></td>
		   <td><a href="eliminarp.php?id=<?php echo $r['id_productos']; ?>">Eliminar</a></td>
			
		</tr>
		<?php
		} 

		 ?>

	</table>
</form>
<a href="inicio.php">Ir a pag. principal</a>
</body>
</html>