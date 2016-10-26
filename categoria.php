<?php 
require_once('conexion.php');
$sql="select * from categoria ";
$resul=mysqli_query($conn,$sql) or die ('error en index de conexion a la base de datos');
 ?>
 <!DOCTYPE html>
<html>
<head>
	<title> 
	</title>
</head>
<body>
<?php 	include('cabecera.php') ?>
<h1>Pagina categoria</h1>
<a href="nuevoc.php">Nuevo registro</a><br>

<form>
	<table border="1">
	<tr>
		<td>id categoria</td>
		<td>descripcion</td>
		<td>editar</td>
		<td>eliminar</td>
	</tr>
	<?php 
	while($r=mysqli_fetch_assoc($resul))
    {
	 ?>
		<tr>
		   <td><?php echo $r['id_categoria']; ?></td>
		   <td><?php echo $r['descripcion']; ?></td>
		   <td><a href="editarc.php?id_categoria=<?php echo $r['id_categoria']; ?>">Editar</a></td>
		   <td><a href="eliminarc.php?id_categoria=<?php echo $r['id_categoria']; ?>">Eliminar</a></td>
			
		</tr>
		<?php
		} 

		 ?>

	</table>
</form>
<a href="inicio.php">Ir a pag. principal</a>
</body>
</html>