<?php
include("conexion_bd.php");
if (isset($_POST["enviar"])){
	$usuario=trim($_POST["usuario"]);
	$contraseña=trim($_POST["contraseña"]);
		
		$consulta = "SELECT  * FROM usuarios WHERE usuario = '$usuario' and contraseña = '$contraseña' " ;
		$resultado = mysqli_query($conexion,$consulta);
			
			if (mysqli_num_rows($resultado)>0) {
				$eliminar="DELETE from usuarios where usuario='$usuario'";
				$resultado=mysqli_query($conexion,$eliminar);  
				if(!$resultado){
					echo "ERROR";
				}
				else {
					echo "<script>alert('SESION ELIMINADA CON ÉXITO'); window.location='inicio.php'</script>";
				}
			}
			else{
				echo "<script>alert('ESTE USUARIO NO EXISTE');  window.history.go(-1); </script>";
				exit;
			}
}
else{
	echo "<script>alert('ACCIÓN CANCELADA');  window.location='perfil.php'</script>";
}
mysqli_free_result($resultado);  
mysqli_close($conexion);
?>