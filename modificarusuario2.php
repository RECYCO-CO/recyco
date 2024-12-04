<?php
	include("conexion_bd.php");
	$nombres=trim($_POST["nombres"] );
	$paterno=trim($_POST["paterno"]);
	$materno=trim($_POST["materno"]);
	$nacimiento=$_POST["nacimiento"];
	$correo=trim($_POST["correo"]);
	$telefono=trim($_POST['telefono']);
	$direccion=trim($_POST['direccion']);
	$usuario=trim($_POST["usuario"]);
	$contraseña=trim($_POST["contraseña"]);

	$verifica_usuario= mysqli_query($conexion, "SELECT  * FROM usuarios WHERE usuario = '$usuario' ");
	
	if (mysqli_num_rows($verifica_usuario)<1) {
		echo "<script>alert('ESTE USUARIO NO EXISTE');  window.history.go(-1); </script>";
	}
	else{
		$actualizar="UPDATE usuarios set nombres='$nombres', paterno='$paterno', materno='$materno', nacimiento='$nacimiento', correo='$correo', telefono='$telefono' , direccion='$direccion', contraseña='$contraseña' where usuario='$usuario'";
		$resultado=mysqli_query($conexion,$actualizar);  
		if(!$resultado){
			echo "ERROR";
		}
		else {
			echo "<script>alert('ACTUALIZACIÓN REALIZADA CORRECTAMENTE');  window.location='inicio.php'</script>";
		}
	}
	
	mysqli_free_result($resultado);  
	mysqli_close($conexion);
?>
