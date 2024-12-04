<?php
	include("conexion_bd.php");
	$usuario = trim($_POST["usuario"]);
	$contraseña = trim($_POST['contraseña']);
	$consulta = "SELECT  * FROM usuarios WHERE usuario = '$usuario' and contraseña = '$contraseña'";
	$resultado = mysqli_query($conexion,$consulta);
			
			if (mysqli_num_rows($resultado)>0) {
				echo "<script> window.location='modificarusuario.php'; </script>";
				exit;
			}
			else{
				echo "<script>alert('EL USUARIO NO EXISTE');  window.history.go(-1); </script>";
				exit;
			}
			
	mysqli_free_result($resultado);  
	mysqli_close($conexion);
?>
<?php