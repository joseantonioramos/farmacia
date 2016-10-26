<?php 
include('conexion.php');
$desc=$_POST['desc'];
$cuni=$_POST['c_uni'];
$cant=$_POST['cant'];
$stock=$_POST['stock'];
$sql="insert into productos(descripcion,costo_unitario,cantidad,stock_minimo) values('$desc','$cuni','$cant','$stock')";
$resul= mysqli_query($conn,$sql)or die('error de conexion en guardar_nue_php con la db');
   if($resul){
   echo "<script>
         window:alert('insertado exitisamente');
         location.href='index.php';
         </script>";
   }else{
   echo "<script>
         window:alert('errorrrrr');
         location.href='index.php';
         </script>"	;
   }


header('location: producto.php');

 ?>