<?php
session_start();
include("conexion_bd.php");

if (isset($_POST['enviar'])) {
    $usuario = $_POST['usuario'];
    $contraseña = $_POST['contraseña'];

    $sql = "SELECT * FROM usuarios WHERE usuario = '$usuario' AND contraseña = '$contraseña'";
    $resultado = mysqli_query($conexion, $sql);

    if (mysqli_num_rows($resultado) > 0) {
        $usuario_data = mysqli_fetch_array($resultado);
        $_SESSION['usuario'] = $usuario_data['usuario'];

        $sql_carrito = "SELECT * FROM carrito WHERE usuario = '$usuario'";
        $resultado_carrito = mysqli_query($conexion, $sql_carrito);

        if (mysqli_num_rows($resultado_carrito) > 0) {
            $carrito_data = mysqli_fetch_array($resultado_carrito);
            $_SESSION['carrito'] = json_decode($carrito_data['productos'], true);
        } else {
            $_SESSION['carrito'] = [];
        }

        header("Location: perfil.php");
    } else {
        echo "<script>alert('Usuario o contraseña incorrectos'); window.location='iniciarsesion.php';</script>";
    }
}
?>
