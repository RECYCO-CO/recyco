<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>RECYCO</title>
    <link rel="stylesheet" type="text/css" href="navbar.css">
    <style type="text/css">
        p{
            font-family: arial;
        }

        .contenidomujer{
            display: flex;
            margin-bottom: 30px;
        }
        .contenidomujer2{
            display: flex;
            margin-top: 50px;
            margin-bottom: 50px;
        }
        .ropamujer1{
            display: flex;
            background-color:darkolivegreen;
            border-radius: 30px;
            margin-left:10px;
        }
        .ropamujer2{
            display: flex;
            background-color: lightgray;
            border-radius: 30px;
            margin-left:10px;
        }
        .ropamujer3{
            display: flex;
            background-color: #264747;
            border-radius: 30px;
            margin-left:10px;
        }
        .ropamujer4{
            display: flex;
            background-color: rosybrown;
            border-radius: 30px;
            margin-left:10px;
        }
        .ropamujer5{
            display: flex;
            background-color: aliceblue;
            border-radius: 30px;
            margin-left:10px;
        }
        .ropamujer6{
            display: flex;
            background-color: beige;
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
        .cesta{
            background-color: black;
            color: white;
            font-weight: 600;
            border-radius: 30px;
        }
        .cesta:hover{
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

    <br><br><br><br><br><br>

    <div class="contenidomujer">
        <div class="ropamujer1">
            <img src="7.jpg">
            <div class="contenedor">
                <p>Vestido verde largo con listones a la cintura</p>
                <p style="font-weight:bold;">$200</p>
                <p class="texto">Elija una talla:</p>
                <select class="talla">
                    <option value="extrachico">EX-CH</option>
                    <option value="chico">CH</option>
                    <option value="mediano">M</option>
                    <option value="grande">G</option>
                    <option value="extragrande">EX-G</option>
                </select>
                <br><br>
                <button class="cesta" onclick="añadirAlCarrito(1, 'Vestido verde largo con listones a la cintura', 200)">Añadir al carrito</button>
            </div>
        </div>
        <div class="ropamujer2">
            <img src="8.jpg">
            <div class="contenedor">
                <p>Vestido largo de tirantes cuadriculado colores azules</p>
                <p style="font-weight:bold;">$250</p>
                <p class="texto">Elija una talla:</p>
                <select class="talla">
                    <option value="extrachico">EX-CH</option>
                    <option value="chico">CH</option>
                    <option value="mediano">M</option>
                    <option value="grande">G</option>
                    <option value="extragrande">EX-G</option>
                </select>
                <br><br>
                <button class="cesta" onclick="añadirAlCarrito(2, 'Vestido largo de tirantes cuadriculado colores azules', 250)">Añadir al carrito</button>
            </div>
        </div>
        <div class="ropamujer3">
            <img src="9.jpg">
            <div class="contenedor">
                <p>Falda larga de mezclilla con diseño difuminado</p>
                <p style="font-weight:bold;">$140</p>
                <p class="texto">Elija una talla:</p>
                <select class="talla">
                    <option value="extrachico">EX-CH</option>
                    <option value="chico">CH</option>
                    <option value="mediano">M</option>
                    <option value="grande">G</option>
                    <option value="extragrande">EX-G</option>
                </select>
                <br><br>
                <button class="cesta" onclick="añadirAlCarrito(3, 'Falda larga de mezclilla con diseño difuminado', 140)">Añadir al carrito</button>
            </div>
        </div>
    </div>

    <div class="contenidomujer2">
        <div class="ropamujer4">
            <img src="10.jpg">
            <div class="contenedor">
                <p>Vestido mediano de tirantes cadriculado colores claros</p>
                <p style="font-weight:bold;">$120</p>
                <p class="texto">Elija una talla:</p>
                <select class="talla">
                    <option value="extrachico">EX-CH</option>
                    <option value="chico">CH</option>
                    <option value="mediano">M</option>
                    <option value="grande">G</option>
                    <option value="extragrande">EX-G</option>
                </select>
                <br><br>
                <button class="cesta" onclick="añadirAlCarrito(4, 'Vestido mediano de tirantes cadriculado colores claros', 120)">Añadir al carrito</button>
            </div>
        </div>
        <div class="ropamujer5">
            <img src="11.jpg">
            <div class="contenedor">
                <p>Camisa larga de mezclilla con diseños circulares</p>
                <p style="font-weight:bold;">$200</p>
                <p class="texto">Elija una talla:</p>
                <select class="talla">
                    <option value="extrachico">EX-CH</option>
                    <option value="chico">CH</option>
                    <option value="mediano">M</option>
                    <option value="grande">G</option>
                    <option value="extragrande">EX-G</option>
                </select>
                <br><br>
                <button class="cesta" onclick="añadirAlCarrito(5, 'Camisa larga de mezclilla con diseños circulares', 200)">Añadir al carrito</button>
            </div>
        </div>
        <div class="ropamujer6">
            <img src="12.jpg">
            <div class="contenedor">
                <p>Vestido largo blanco con mangas largas fresco</p>
                <p style="font-weight:bold;">$100</p>
                <p class="texto">Elija una talla:</p>
                <select class="talla">
                    <option value="extrachico">EX-CH</option>
                    <option value="chico">CH</option>
                    <option value="mediano">M</option>
                    <option value="grande">G</option>
                    <option value="extragrande">EX-G</option>
                </select>
                <br><br>
                <button class="cesta" onclick="añadirAlCarrito(6, 'Vestido largo blanco con mangas largas fresco', 100)">Añadir al carrito</button>
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
        function añadirAlCarrito(id, nombre, precio) {
            let carrito = JSON.parse(localStorage.getItem('carrito')) || [];
            let talla = document.querySelectorAll('.ropamujer' + id + ' .talla')[0].value;
            let producto = {
                id: id,
                nombre: nombre,
                precio: precio,
                talla: talla
            };
            carrito.push(producto);
            localStorage.setItem('carrito', JSON.stringify(carrito));
            alert(nombre+ 'añadido al carrito');
        }
    </script>
</body>
</html>
