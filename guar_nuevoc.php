<?php 
include('conexion.php');
$desc=$_POST['desc'];
$sql="insert into categoria(descripcion) values('$desc')";
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


header('location: categoria.php');

 ?>