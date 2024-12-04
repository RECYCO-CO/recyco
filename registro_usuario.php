<?php 

 include("conexion_bd.php");
    if(isset($_POST['enviar'])){
            $nombres=trim($_POST["nombres"]);
            $paterno=trim($_POST["paterno"]);
            $materno=trim($_POST["materno"]);
            $nacimiento=$_POST["nacimiento"];
            $correo=$_POST["correo"];
            $telefono=$_POST["telefono"];
            $direccion=trim($_POST["direccion"]);
            $usuario=trim($_POST["usuario"]);
            $contraseña=trim($_POST["contraseña"]);

            $verifica_usuario= mysqli_query($conexion, "SELECT  * FROM usuarios WHERE usuario = '$usuario'");
             
            if (mysqli_num_rows($verifica_usuario)>0) {
                echo "<script>alert('ESTE USUARIO YA EXISTE');  window.history.go(-1); </script>";
                exit;
            }
            else{

                $insertar="INSERT INTO usuarios (nombres, paterno, materno, nacimiento, correo, telefono, direccion, usuario, contraseña) VALUES ('$nombres','$paterno','$materno','$nacimiento', '$correo','$telefono}','$direccion', '$usuario', '$contraseña')";

                $resultado=mysqli_query($conexion,$insertar);  

                if(!$resultado){
                    echo "ERROR";
                }
                else {
                    echo "<script>alert('REGISTRO COMPLETADO EXITOSAMENTE');  window.location='inicio.php'; </script>";
                }
            }
        
        }
    
    mysqli_free_result($resultado);  
    mysqli_close($conexion);

 ?>