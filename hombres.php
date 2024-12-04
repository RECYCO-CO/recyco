<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>RECYCO</title>
    <link rel="stylesheet" type="text/css" href="navbar.css">
    <style type="text/css">
        p {
            font-family: arial;
            color: black;
            font-weight: normal;
        }
        .contenidohombres {
            display: flex;
            margin-bottom: 30px;
        }
        .contenidohombres2 {
            display: flex;
            margin-top: 50px;
            margin-bottom: 50px;
        }
        .ropahombres1, .ropahombres2, .ropahombres3, .ropahombres4, .ropahombres5, .ropahombres6 {
            display: flex;
            background-color: lightgrey;
            border-radius: 30px;
            margin-left: 10px;
        }
        img {
            width: 40%;
            border-radius: 30px;
        }
        .contenedor {
            margin-left: 10px;
        }
        .cesta {
            background-color: black;
            color: white;
            font-weight: 600;
            border-radius: 30px;
        }
        .cesta:hover {
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
        <li><a href="iniciarsesion.php">Iniciar sesión</a></li>
        <li><a href="registro.php">Registro</a></li>
        <li><a href="#">Categorías</a>
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
<div class="contenidohombres">
    <div class="ropahombres1">
        <img src="13.jpg">
        <div class="contenedor">
            <p>Conjunto azul claro libre fresco</p>
            <p style="font-weight:bold;">$280</p>
            <p class="texto">Elija una talla:</p>
            <select class="talla" name="talla">
                <option value="extrachico">EX-CH</option>
                <option value="chico">CH</option>
                <option value="mediano">M</option>
                <option value="grande">G</option>
                <option value="extragrande">EX-G</option>
            </select>
            <br><br>
            <button class="cesta" onclick="añadirAlCarrito('Conjunto azul claro libre fresco', 280, this)">Añadir al carrito</button>
        </div>
    </div>
    <div class="ropahombres2">
        <img src="14.jpg">
        <div class="contenedor">
            <p>Chaqueta con tonos verdes y parches</p>
            <p style="font-weight:bold;">$300</p>
            <p class="texto">Elija una talla:</p>
            <select class="talla" name="talla">
                <option value="extrachico">EX-CH</option>
                <option value="chico">CH</option>
                <option value="mediano">M</option>
                <option value="grande">G</option>
                <option value="extragrande">EX-G</option>
            </select>
            <br><br>
            <button class="cesta" onclick="añadirAlCarrito('Chaqueta con tonos verdes y parches', 300, this)">Añadir al carrito</button>
        </div>
    </div>
    <div class="ropahombres3">
        <img src="15.jpg">
        <div class="contenedor">
            <p>Camisa naranja oscuro con estilo cortado y bolsillo superior</p>
            <p style="font-weight:bold;">$190</p>
            <p class="texto">Elija una talla:</p>
            <select class="talla" name="talla">
                <option value="extrachico">EX-CH</option>
                <option value="chico">CH</option>
                <option value="mediano">M</option>
                <option value="grande">G</option>
                <option value="extragrande">EX-G</option>
            </select>
            <br><br>
            <button class="cesta" onclick="añadirAlCarrito('Camisa naranja oscuro con estilo cortado y bolsillo superior', 190, this)">Añadir al carrito</button>
        </div>
    </div>
</div>

<div class="contenidohombres2">
  <div class="ropahombres4">
        <img src="16.jpg">
        <div class="contenedor">
            <p>Camisa en tonos azules y grises de manga corta con cierre</p>
            <p style="font-weight:bold;">$200</p>
            <p class="texto">Elija una talla:</p>
            <select class="talla" name="talla">
                <option value="extrachico">EX-CH</option>
                <option value="chico">CH</option>
                <option value="mediano">M</option>
                <option value="grande">G</option>
                <option value="extragrande">EX-G</option>
            </select>
            <br><br>
            <button class="cesta" onclick="añadirAlCarrito('Camisa en tonos azules y grises de manga corta con cierre', 200, this)">Añadir al carrito</button>
        </div>
    </div>
    <div class="ropahombres5">
        <img src="17.jpg">
        <div class="contenedor">
            <p>Pantalon de mezclilla con diseño difuminado en el centro</p>
            <p style="font-weight:bold;">$190</p>
            <p class="texto">Elija una talla:</p>
            <select class="talla" name="talla">
                <option value="extrachico">EX-CH</option>
                <option value="chico">CH</option>
                <option value="mediano">M</option>
                <option value="grande">G</option>
                <option value="extragrande">EX-G</option>
            </select>
            <br><br>
            <button class="cesta" onclick="añadirAlCarrito('Pantalon de mezclilla con diseño difuminado en el centro', 190, this)">Añadir al carrito</button>
        </div>
    </div>
    <div class="ropahombres6">
        <img src="18.jpg">
        <div class="contenedor">
            <p>Pantalon negro con diseño ondeado claro</p>
            <p style="font-weight:bold;">$150</p>
            <p class="texto">Elija una talla:</p>
            <select class="talla" name="talla">
                <option value="extrachico">EX-CH</option>
                <option value="chico">CH</option>
                <option value="mediano">M</option>
                <option value="grande">G</option>
                <option value="extragrande">EX-G</option>
            </select>
            <br><br>
            <button class="cesta" onclick="añadirAlCarrito('Pantalon negro con diseño ondeado claro', 150, this)">Añadir al carrito</button>
        </div>
    </div>
</div>

<footer>
    <h3>Síguenos</h3>
    <a href='https://facebook.com/CBTis164Oficial?mibextid=LQQJ4d'>Facebook CBTis 164</a><br>
    <a href='https://x.com/cbtis164Oficial?t=wCR1ES31xfjTdoRU4NZDqA&s=09'>X CBTis 164</a>
</footer>

<script>
    // Función para añadir productos al carrito
    function añadirAlCarrito(nombre, precio, btn) {
        let carrito = JSON.parse(localStorage.getItem('carrito')) || [];
        let talla = btn.parentElement.querySelector('.talla').value;
        
        let producto = {
            nombre: nombre,
            precio: precio,
            talla: talla
        };
        
        carrito.push(producto);
        localStorage.setItem('carrito', JSON.stringify(carrito));
        
        alert(nombre + ' añadido al carrito');
    }
</script>

</body>
</html>
