<?php 

require_once('conexion.php');
$id=$_GET['id'];
$sql="delete from productos where id_productos=$id";
echo $sql;
$resul=mysqli_query($conn,$sql) or die ('error en index de conexion a la base de datos');
if($resul){
   echo "<script>
         window:alert('iliminado exitisamente');
         location.href='index.php';
         </script>";
   }else{
   echo "<script>
         window:alert('error de eliminar.php');
         location.href='index.php';
         </script>"	;
   }
   header('location: producto.php');


 ?>