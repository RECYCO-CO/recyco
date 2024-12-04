<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" type="text/css" href="navbar.css">
	<title>RECYCO</title>
	<style type="text/css">
		body{
			color: white;
			font-family: arial;
			background-color: black;
			font-weight: 600;
		}
		input[name='enviar']{
			border-radius: 30px;
			background-color: darkgrey;
			color: white;
			font-weight: 600;
			border: none;
		}
h1{
	color: white;
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
    <br>
    <br>
    <br>
    <br>
    <br>
	<center>
	<h1> CONFIRMAR LA MODIFICACION DE LOS DATOS </h1>
	<form method="POST" action="validacionconsulta.php">
		<p class="texto"> Esto permite mantener sus datos seguros </p>
		
				<label for="usuario" class="texto"> Usuario: </label>
				<input type="text" name="usuario" required>

				<label for="contraseña" class="texto"> Contraseña: </label>
				<input type="text" name="contraseña" maxlength="10" required>

			
		<p><input type="submit" name="enviar" value="Modificar"></p>
		
	</form>
	</CENTER>
	<footer>
    <h3>Síguenos</h3>
    <a href='https://facebook.com/CBTis164Oficial?mibextid=LQQJ4d'>Facebook CBTis 164</a><br>
    <a href='https://x.com/cbtis164Oficial?t=wCR1ES31xfjTdoRU4NZDqA&s=09' >X oficial CBTis 164</a>
    <!-- Otros enlaces a redes sociales -->
</footer>
</body>
</html>