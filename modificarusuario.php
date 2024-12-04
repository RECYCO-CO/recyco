<?php
include("conexion_bd.php");

if (isset($_POST['enviar'])) {
    $paterno = trim($_POST["paterno"]);
    $materno = trim($_POST["materno"]);
    $nacimiento = $_POST["nacimiento"];
    $correo = trim($_POST["correo"]); // Aunque no lo muestres, lo recibes
    $telefono = trim($_POST['telefono']);
    $direccion = trim($_POST['direccion']);
    $usuario = trim($_POST["usuario"]);
    $contraseña = trim($_POST["contraseña"]);
    $verifica_usuario = mysqli_query($conexion, "SELECT * FROM usuarios WHERE usuario = '$usuario'");

    if (mysqli_num_rows($verifica_usuario) < 1) {
        echo "<script>alert('ESTE USUARIO NO EXISTE'); window.history.go(-1); </script>";
    } else {
        $actualizar = "UPDATE usuarios SET nombres='$nombres', paterno='$paterno', materno='$materno', nacimiento='$nacimiento', telefono='$telefono', direccion='$direccion', contraseña='$contraseña' WHERE usuario='$usuario'";
        $resultado = mysqli_query($conexion, $actualizar);  

        if (!$resultado) {
            echo "ERROR";
        } else {
            echo "<script>alert('ACTUALIZACIÓN REALIZADA CORRECTAMENTE'); window.location='inicio.php'</script>";
        }
    }

    mysqli_free_result($resultado);
    mysqli_close($conexion);
}
?>

<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" href="navbar.css">
    <title>RECYCO</title>
   <style type="text/css">
    body {
        font-weight: 600;
        font-family: arial;
    }
    h1 {
        text-align: center;
        color: grey;
        text-shadow: 2px 2px 0px rgba(0, 0, 0, 1);
    }
    .registro {
        padding-left: 60px;
        padding-right: 60px;
        padding-bottom: 30px;
        font-weight: 600;
        text-align: left;
        margin-left: 398px;
        margin-right: 400px;
        margin-bottom: 50px;
        background-color: #eeefef;
        border-radius: 30px;
        border-style: dotted;
    }
    input[type="submit"] {
        border: none;
        padding: 10px;
        -webkit-border-radius: 10px;
        background-color: #b0e777;
        width: 30%;
        font-weight: 600;
        margin-right: 30px;
    }
    input[type="reset"] {
        border: none;
        padding: 10px;
        -webkit-border-radius: 10px;
        background-color: #acadac;
        width: 30%;
        font-weight: 600;
    }
    input[type="submit"]:hover {
        background-color: #cbf999;
    }
    input[type="reset"]:hover {
        background-color: #bcbcbc;
    }

    /* Nuevo estilo para los campos de entrada */
    input[type="text"], input[type="number"], input[type="date"], input[type="password"], input[type="email"] {
        width: 100%; /* Ajusta todos los campos al 100% del contenedor */
        max-width: 400px; /* Limita el ancho máximo */
        padding: 10px; /* Espaciado interno */
        margin-bottom: 10px; /* Separación entre campos */
        font-size: 16px; /* Tamaño de la fuente */
        border-radius: 10px; /* Bordes redondeados */
        border: 1px solid #ccc; /* Color del borde */
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

    <br><br><br><br><br><br>

    <div class="registro">
        <h1>MODIFICAR MIS DATOS</h1>
        <form method="POST" action="">
            <label for=nom class="texto"> NOMBRES: </label>
            <input type="text" name="nombres" >
            <br>
            <label for=ap class="texto"> APELLIDO PATERNO: </label>
            <input type="text" name="paterno" >
            <br>
            <label for=am class="texto"> APELLIDO MATERNO: </label>
            <input type="text" name="materno" >
            <br>
            <label for=nac class="texto"> FECHA DE NACIMIENTO: </label>
            <input type="date" name="nacimiento" placeholder="0" >
            <br>
            <!-- No mostramos el campo de correo electrónico -->
            <input type="hidden" name="correo" value="<?php echo $correo; ?>">
            <br>
            <label for=tel class="texto"> TELEFONO: </label>
            <input type="number" name="telefono" maxlength="15" >
            <br>
            <label for=dir class="texto">DIRECCION: </label>
            <input type="text" name="direccion" maxlength="150" size="60" placeholder="Ej.Calle Luna #000 Col.Lunas C.P 33333 Tampico, Tamaulipas" >
            <br>
            <br>
            <label>CONFIRME LOS CAMBIOS </label>
            <br>
            <br>
            <label for=user class="texto">USUARIO: </label>
            <input type="text" name="usuario" maxlength="10" >
            <br>
            <label for=pass class="texto">CONTRASEÑA: </label>
            <input type="password" name="contraseña" maxlength="10" >
            <br>
            <br>
            <input type="submit" name="enviar" value="Modificar">
            <input type="reset" name="borrar" value="Borrar">
        </form>
    </div>

    <footer>
        <h3>Síguenos</h3>
        <a href='https://facebook.com/CBTis164Oficial?mibextid=LQQJ4d'>Facebook CBTis 164</a><br>
        <a href='https://x.com/cbtis164Oficial?t=wCR1ES31xfjTdoRU4NZDqA&s=09' >X oficial CBTis 164</a>
        <!-- Otros enlaces a redes sociales -->
    </footer>

</body>
</html>
