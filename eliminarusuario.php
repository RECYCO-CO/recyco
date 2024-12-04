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
			font-weight: 600;
			background-color: black;
			color: white;
		}
		.regresar{
			background-color: grey;
			border-radius: 30px;
			width: 30%;
			border: none;
			 padding: 10px;
		}
		.regresar:hover{
			background-color: lightgrey;
		}

.regresar a{
	color: black;
	text-decoration: none;
	font-weight: 600;
}
h1{
		color: white;	 
}

input[name='enviar'] {
	border: none;
    padding: 10px;
    -webkit-border-radius: 30px;
	background-color:red ;
	width: 30%;
	font-weight: 600;

	
}

input[name='enviar']:hover {

	background-color:darkred;


	
}

input[name='cancelar'] {
	border: none;
    padding: 10px;
    -webkit-border-radius: 30px;
	background-color:grey ;
	width: 30%;
	font-weight: 600;

	
}
input[name='cancelar']:hover{
	background-color: lightgrey;
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
<h1> ELIMINAR SESION</h1>
	<form method="POST" action="eliminarusuario2.php">
		<p class="texto"> Ingresa el número del usuario correctamente </p>
		
				<label for="usuario" class="texto"> Usuario:  </label>
				<input type="text" name="usuario" required>
				<label for="contraseña" class="texto"> Contraseña:  </label>
				<input type="text" name="contraseña" maxlength="10" required>
			<br>
			<br>


					<input type="submit" name="enviar" value="Eliminar"><br><br>
		<input type="submit" name="cancelar" value="Cancelar">	
	</form>
	<br>
	<button class="regresar"><a href="inicio.php">Ir al inicio</a></button>
</center>
<footer>
    <h3>Síguenos</h3>
    <a href='https://facebook.com/CBTis164Oficial?mibextid=LQQJ4d'>Facebook CBTis 164</a><br>
    <a href='https://cbtis164.edu.mx/web/?' >Pagina oficial CBTis 164</a>
    <!-- Otros enlaces a redes sociales -->
</footer>
</body>
</html>