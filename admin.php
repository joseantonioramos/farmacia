<?php 
session_start();
if($_SESSION['login']=='ok'){
 ?>
 <!DOCTYPE html>
 <html>
 <head>
 	<title>pagina de administracion</title>
 </head>
 <body>
 <?php 	include('cabecera.php') ?>
  <div>
  	<a href="inicio.php">INICIO</a>
  	<a href="ventas.php">VENTAS</a>
  	<a href="producto.php">PRODUCTOS</a>
  	<a href="categoria.php">CATEGORIAS</a>
  </div>

  <br><a href="loguin.php">Cerrar sesion</a>}
  
 </body>
 </html>
 <?php 
}else{

	header('location: index.php');

}
 ?>
