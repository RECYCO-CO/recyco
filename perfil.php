<?php
session_start();
if (isset($_GET['cerrar_sesion'])) {
    session_unset();
    session_destroy();
    header("Location: inicio.php");
    exit;
}
if (!isset($_SESSION['usuario'])) {
    $datos_mostrar = false;
} else {
    $datos_mostrar = true;
}
?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>RECYCO</title>
    <link rel="stylesheet" type="text/css" href="navbar.css">
    <style type="text/css">
        body{
            font-family: arial;
        }

        .perfilydatos{
            border-style: solid;
            background-color: beige;
            border-color: black;
            box-shadow: 5px 5px 0px rgba(0, 0, 0, 1.0);
            margin-left: 20%;
            margin-right: 20%;
            margin-bottom: 100px;
            border-radius: 30px;
            display: flex;
            font-weight: 600;
        }
        .perfilydatos img{
            margin-left: 30px;
            margin-top: 30px;
            clip-path: circle(50%);
            width: 100px;
            height: 100px;
        }
        .datos{
            margin-left: 50px;
            margin-bottom: 50px;
        }
        .datos h1{
            color: lightgrey;
            text-shadow:  2px 2px 0px rgba(0, 0, 0, 1);
        }
        input[type='submit']{
            background-color: lightgrey;
            color: black;
            border-radius: 30px;
            border: none;
            font-weight: 600;
            cursor: pointer;
        }

        .cerrar{
            border-radius: 30px;
            background-color: lightblue;
            border:none;
        }
        .cerrar a{
            font-weight: 600;
            color: black;
            text-decoration: none;
        }

        .modificar{
            border-radius: 30px;
            background-color: grey;
            border:none;
        }
        .modificar a{
            font-weight: 600;
            color: white;
            text-decoration: none;
        }
    </style>
</head>
<body>

    <nav>
        <ul class="menu">
            <label for="" class="logo">
                <a href="inicio.php"><img src="logo.png"></a>
                <a class="empresa" href="inicio.php">RECYCO</a>
            </label>
            <li><a href="inicio.php">Inicio</a>
                <ul class="menu-vertical-1">
                    <li><a href="nosotros.php">Sobre nosotros</a></li>
                    <li><a href="Recycotips.php">Recycotips</a></li>
                </ul>
            </li>
            <li><a href="iniciarsesion.php">Iniciar sesion</a></li>
            <li><a href="registro.php">Registro</a></li>
            <li><a href="#">Categorias</a>
                <ul class="menu-vertical">
                    <li><a href="niños.php">NIÑOS</a></li>
                    <li><a href="mujeres.php">MUJER</a></li>
                    <li><a href="hombres.php">HOMBRE</a></li>
                </ul>
            </li>
            <ul class="menu-derecha">
                <li><a href="perfil.php">Mi perfil</a></li>
                <li><a href="cesta.php">Cesta</a></li>
            </ul>
        </ul>
    </nav>
<br><br><br><br><br><br><br>
    <div class="perfilydatos">
        <img src="pfp.jpg">
        <div class="datos">
            <h1>-----MI PERFIL-----</h1>
            <form method="POST" name="consultar">
                <p><input type="submit" name="enviar" value="Consultar mis datos"> </p>
            </form>
            <label for="perfil" class="texto">
            <?php
                if ($datos_mostrar) {
                    include("conexion_bd.php");
                    if (isset($_POST["enviar"])){
                        $usuario = $_SESSION['usuario'];






                        
                        $consultar = "SELECT * FROM usuarios WHERE usuario = '$usuario'";      
                        $resultado = mysqli_query($conexion, $consultar);  
                        
                        if (!$resultado) {
                            echo "<script>alert('¡ERROR!');  window.history.go(-1); </script>";
                        } else {
                            while ($extraer = mysqli_fetch_array($resultado)) {  
                                echo 'Nombres: '.$extraer['nombres'].'<br>';  
                                echo 'Apellido paterno: '.$extraer['paterno'].'<br>';  
                                echo 'Apellido materno: '.$extraer['materno'].'<br>';
                                echo 'Fecha de nacimiento: '.$extraer['nacimiento'].'<br>'; 
                                echo 'Correo electronico: '.$extraer['correo'].'<br>';  
                                echo 'Telefono: '.$extraer['telefono'].'<br>';  
                                echo 'Direccion: '.$extraer['direccion'].'<br>';  
                                echo 'Usuario: '.$extraer['usuario'].'<br>';  
                                echo 'Contraseña: '.$extraer['contraseña'];  
                            }
                        }
                    }
                    mysqli_free_result($resultado);  
                    mysqli_close($conexion);
                } else {
                    echo "Por favor, inicie sesión para ver los datos.";
                }
            ?>
            </label>
            <br>
            <br>
            <button class="cerrar"><a href="eliminarusuario.php">Eliminar sesion</a></button>
            <button class="modificar"><a href="confirmarmodificacion.php">Modificar mis datos</a></button>
            <!-- Cerrar sesión -->
            <button class="cerrar"><a href="perfil.php?cerrar_sesion=true">Cerrar sesión</a></button> <!-- Nuevo botón -->
        </div>
    </div>

    <footer>
        <h3>Síguenos</h3>
        <a href='https://facebook.com/CBTis164Oficial?mibextid=LQQJ4d'>Facebook CBTis 164</a><br>
       
        <a href='https://x.com/cbtis164Oficial?t=wCR1ES31xfjTdoRU4NZDqA&s=09' >X oficial CBTis 164</a>
    </footer>
</body>
</html>
