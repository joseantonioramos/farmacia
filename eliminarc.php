<?php 
require_once('conexion.php');
$id=$_GET['id_categoria'];
$sql="delete from categoria where id_categoria=$id";
echo $sql;
$resul=mysqli_query($conn,$sql) or die ('error en index de conexion a la base de datos');
if($resul){
   echo "<script>
         window:alert('eliminado exitisamente');
         location.href='index.php';
         </script>";
   }else{
   echo "<script>
         window:alert('error de eliminar.php');
         location.href='index.php';
         </script>"	;
   }
   header('location: categoria.php');


 ?>