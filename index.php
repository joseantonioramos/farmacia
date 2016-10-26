
<?php 
session_start();
define('USUARIO','admin');
define('PASSWORD','123');

if(isset($_POST['usuario'])){
	if($_POST['usuario'] == USUARIO 
		&& $_POST['clave'] == PASSWORD){
        $_SESSION['login']= 'ok';
        header('Location: admin.php');
	}
}
	
 ?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="utf-8">
	<title>loguin</title>
</head>
<body>
<?php 	include('cabecera.php') ?>
<h1>LOGUIN</h1>

<form action="" method="POST">
<label>Usuario</label> 
<input type="text" name="usuario" required >
<br>
<br>
<br>
<label>Contraseña</label>
<input type="password" name="clave" required >	
<br>
<br>
<input type="submit" value="ingresar">
</form>

</body>
</html>