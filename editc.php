<?php 
include('conexion.php');
$id=$_POST['id_categoria'];
$cat=$_POST['desc'];
$sql="update categoria set descripcion='$cat' where id_categoria=$id";
$resul=mysqli_query($conn,$sql)or die('error en la coneccion con la db de editar');
 if($resul){
   echo "<script>
         window:alert('insertado exitisamente');
         location.href='index.php';
         </script>";
   }else{
   echo "<script>
         window:alert('error de edit.php');
         location.href='index.php';
         </script>"	;
   }

 header('location: categoria.php');

 ?>
 <!DOCTYPE html>
 <html>
 <head>
    <title></title>
 </head>
 <body>
 <a href="inicio.php">Ir a pag. principal</a>
 </body>
 </html>