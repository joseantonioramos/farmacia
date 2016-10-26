<?php 
$id=$_POST['id_productos'];
echo $id;
$desc=$_POST['desc'];
$cuni=$_POST['c_uni'];
$cant=$_POST['cant'];
$stock=$_POST['stock'];
require_once('conexion.php');
$sql="update productos set descripcion='$desc', costo_unitario='$cuni',cantidad='$cant',stock_minimo='$stock' where id_productos=$id ";
$resul=mysqli_query($conn,$sql)or die('error en editar la bd guar_editp.php');
  if($resul){
   echo "<script>
         window:alert('insertado exitisamente');
         location.href='index.php';
         </script>";
   }else{
   echo "<script>
         window:alert('error de edit.php');
         location.href='index.php';
         </script>"  ;
   }

header('location: producto.php');


 ?>