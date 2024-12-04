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
            font-size: 20px;
        }
        h1{
            color: black;
            text-shadow:  2px 2px 0px white ;
        }
        .iniciarsesion{
            padding-left: 60px;
            padding-right: 60px;
            padding-bottom: 30px;
            font-weight: 600;
            text-align: left;
            margin-left: 398px;
            margin-right: 400px;
            margin-bottom: 50px;
            background-color: lightgray;
        }
        input[type='submit'] {
            color: white;
            border: none;
            padding: 10px;
            -webkit-border-radius: 10px;
            background-color: black;
            width: 30%;
            font-weight: 600;
            margin-right: 30px;
        }
        input[type='submit']:hover{
            background-color: grey;
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
    <div class="iniciarsesion">
         <h1>INICIA SESION</h1>
        <form method="POST" action="validacion.php">
            <p class="texto" style="font-weight: 600;">INGRESE SU NOMBRE DE USUARIO: <input type="text" name="usuario" required></p>
            <p class="texto" style="font-weight:600;">INGRESE SU CONTRASEÑA: <input type="password" name="contraseña" required></p>
            <input type="submit" name="enviar" value="Ingresar"><br><br>
        </form>
        <label for="mensaje" class="texto">¿No tienes una cuenta? </label>
        <a href="registro.php" style="font-weight:600; color: black;">Registrarse</a>
     </div>
      <footer>
        <h3>Síguenos</h3>
        <a href='https://facebook.com/CBTis164Oficial?mibextid=LQQJ4d'>Facebook CBTis 164</a><br>
        <a href='https://x.com/cbtis164Oficial?t=wCR1ES31xfjTdoRU4NZDqA&s=09'>oficial CBTis 164</a>
        <a href=''>X oficial CBTis 164</a>
        <!-- Otros enlaces a redes sociales -->
    </footer>
</body>
</html>
