<?php
session_start();
if (!isset($_SESSION['usuario'])) {
    header("Location: inicio.php");
    exit();
}

$carrito = isset($_SESSION['carrito']) ? $_SESSION['carrito'] : [];
?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>RECYCO</title>
    <link rel="stylesheet" type="text/css" href="navbar.css">
    <style type="text/css">
        body {
            background-color: beige;
            font-family: arial;
        }
        .contenido {
            padding-left: 60px;
            padding-right: 60px;
            padding-bottom: 30px;
            font-weight: 600;
            text-align: left;
            margin-left: 398px;
            margin-right: 400px;
            margin-bottom: 50px;
            background-color: whitesmoke;
            border-radius: 30px;
            border-style: dotted;
        }
        button {
            background-color: black;
            color: white;
            font-weight: 600;
            border-radius: 30px;
        }
        button:hover {
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
<br>
<br>
<br>
<br>
<br>
<div class="contenido">
    <h2>Tu Cesta</h2>
    <ul id="listaCarrito"></ul>
    <p><strong>Total: $<span id="totalCarrito">0</span></strong></p>
    <button onclick="procederPago()">Proceder al pago</button>
</div>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>

<script>
function mostrarCarrito() {
    let carrito = JSON.parse(localStorage.getItem('carrito')) || [];
    let listaCarrito = document.getElementById('listaCarrito');
    let total = 0;
    listaCarrito.innerHTML = '';

    carrito.forEach(function(producto, index) {
        let item = document.createElement('li');
        item.innerHTML = `${producto.nombre} - $${producto.precio} - Talla: ${producto.talla} <button onclick="eliminarProducto(${index})">Eliminar</button>`;
        listaCarrito.appendChild(item);
        total += producto.precio;
    });

    document.getElementById('totalCarrito').textContent = total;
}

function eliminarProducto(index) {
    let carrito = JSON.parse(localStorage.getItem('carrito')) || [];
    carrito.splice(index, 1); 
    localStorage.setItem('carrito', JSON.stringify(carrito));
    mostrarCarrito(); 
}
function procederPago() {
    let carrito = JSON.parse(localStorage.getItem('carrito')) || [];

    if (carrito.length === 0) {
        alert("Tu carrito está vacío. Añade productos para proceder con el pago.");
    } else {
        localStorage.setItem('carrito', JSON.stringify(carrito));

        let total = 0;
        carrito.forEach(producto => {
            total += producto.precio;
        });
        localStorage.setItem('totalCarrito', total);

        window.location.href = 'pago.php';
    }
}
mostrarCarrito();
</script>
<footer>
   <h3>Síguenos</h3>
        <a href='https://facebook.com/CBTis164Oficial?mibextid=LQQJ4d'>Facebook CBTis 164</a><br>
        <a href='https://x.com/cbtis164Oficial?t=wCR1ES31xfjTdoRU4NZDqA&s=09'>X oficial CBTis 164</a>  
</footer>

</body>
</html>
