<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>RECYCO</title>
    <link rel="stylesheet" type="text/css" href="navbar.css">
    <script type="text/javascript" src="cesta.js"></script>
    <style type="text/css">
        body{
            font-family: arial;
        }
        h1 {
            color: grey;
            text-shadow:  2px 2px 0px rgba(0, 0, 0, 1) ;
        }
        .contenidoniño{
            display: flex;
            margin-bottom: 30px;
        }
        .contenidoniño2{
            display: flex;
            margin-top: 50px;
            margin-bottom: 50px;
        }
        .ropaniño1, .ropaniño2, .ropaniño3, .ropaniño4, .ropaniño5, .ropaniño6 {
            display: flex;
            background-color: lightgrey;
            border-radius: 30px;
            margin-left:10px;
        }
        img{
            width: 40%;
            border-radius: 30px;
        }
        .contenedor{
            margin-left: 10px;
        }
        button{
            background-color: black;
            color: white;
            font-weight: 600;
            border-radius: 30px;
        }
        button:hover{
            background-color: lightgoldenrodyellow;
            color: black;
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
    <h1>NIÑOS</h1>
<div class="contenidoniño">
    <div class="ropaniño1">
        <img src="1.png">
        <div class="contenedor">
            <p>Camisa a rayas con bolsillos de colores</p>
            <p style="font-weight:bold;">$180</p>
            <p class="texto">Elija una talla:</p>
            <select name="talla" id="talla1">
                <option value="extrachico">EX-CH</option>
                <option value="chico">CH</option>
                <option value="mediano">M</option>
                <option value="grande">G</option>
                <option value="extragrande">EX-G</option>
            </select>
            <br><br>
            <button class="cesta" onclick="añadirCarrito('Camisa a rayas con bolsillos de colores', 180, document.getElementById('talla1').value)">Añadir al carrito</button>
        </div>
    </div>
    <div class="ropaniño2">
        <img src="2.png">
        <div class="contenedor">
            <p>Conjunto para invierno beige con mangas bicolor</p>
            <p style="font-weight:bold;">$230</p>
            <p class="texto">Elija una talla:</p>
            <select name="talla" id="talla2">
                <option value="extrachico">EX-CH</option>
                <option value="chico">CH</option>
                <option value="mediano">M</option>
                <option value="grande">G</option>
                <option value="extragrande">EX-G</option>
            </select>
            <br><br>
            <button class="cesta" onclick="añadirCarrito('Conjunto para invierno beige con mangas bicolor', 230, document.getElementById('talla2').value)">Añadir al carrito</button>
        </div>
    </div>
    <div class="ropaniño3">
        <img src="3.png">
        <div class="contenedor">
            <p>Camisa básica gris de manga corta</p>
            <p style="font-weight:bold;">$100</p>
            <p class="texto">Elija una talla:</p>
            <select name="talla" id="talla3">
                <option value="extrachico">EX-CH</option>
                <option value="chico">CH</option>
                <option value="mediano">M</option>
                <option value="grande">G</option>
                <option value="extragrande">EX-G</option>
            </select>
            <br><br>
            <button class="cesta" onclick="añadirCarrito('Camisa básica gris de manga corta', 100, document.getElementById('talla3').value)">Añadir al carrito</button>
        </div>
    </div>
</div>

<h1>NIÑAS</h1>
<div class="contenidoniño2">
    <div class="ropaniño4">
        <img src="4.jpg">
        <div class="contenedor">
            <p>Vestido de mezclilla largo</p>
            <p style="font-weight:bold;">$130</p>
            <p class="texto">Elija una talla:</p>
            <select name="talla" id="talla4">
                <option value="extrachico">EX-CH</option>
                <option value="chico">CH</option>
                <option value="mediano">M</option>
                <option value="grande">G</option>
                <option value="extragrande">EX-G</option>
            </select>
            <br><br>
            <button class="cesta" onclick="añadirCarrito('Vestido de mezclilla largo', 130, document.getElementById('talla4').value)">Añadir al carrito</button>
        </div>
    </div>
    <div class="ropaniño5">
        <img src="5.jpg">
        <div class="contenedor">
            <p>Vestido rosa neon con cinta azul en la cintura</p>
            <p style="font-weight:bold;">$110</p>
            <p class="texto">Elija una talla:</p>
            <select name="talla" id="talla5">
                <option value="extrachico">EX-CH</option>
                <option value="chico">CH</option>
                <option value="mediano">M</option>
                <option value="grande">G</option>
                <option value="extragrande">EX-G</option>
            </select>
            <br><br>
            <button class="cesta" onclick="añadirCarrito('Vestido rosa neon con cinta azul en la cintura', 110, document.getElementById('talla5').value)">Añadir al carrito</button>
        </div>
    </div>
    <div class="ropaniño6">
        <img src="6.jpg">
        <div class="contenedor">
            <p>Vestido rosa claro mediano con mangas cortas</p>
            <p style="font-weight:bold;">$150</p>
            <p class="texto">Elija una talla:</p>
            <select name="talla" id="talla6">
                <option value="extrachico">EX-CH</option>
                <option value="chico">CH</option>
                <option value="mediano">M</option>
                <option value="grande">G</option>
                <option value="extragrande">EX-G</option>
            </select>
            <br><br>
            <button class="cesta" onclick="añadirCarrito('Vestido rosa claro mediano con mangas cortas', 150, document.getElementById('talla6').value)">Añadir al carrito</button>
        </div>
    </div>
</div>
 <footer>
        <h3>Síguenos</h3>
        <a href='https://facebook.com/CBTis164Oficial?mibextid=LQQJ4d'>Facebook CBTis 164</a><br>
        <a href='https://x.com/cbtis164Oficial?t=wCR1ES31xfjTdoRU4NZDqA&s=09'>X oficial CBTis 164</a>
</footer>
<script>
// Función para añadir productos al carrito
function añadirCarrito(nombre, precio, talla) {
    const producto = {
        nombre: nombre,
        precio: precio,
        talla: talla
    };
    let carrito = JSON.parse(localStorage.getItem('carrito')) || [];
    carrito.push(producto);
    localStorage.setItem('carrito', JSON.stringify(carrito));
    alert(`${nombre} añadido al carrito`);
}
</script>

</body>
</html>

