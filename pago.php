<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulario de Pago</title>
    <link rel="stylesheet" type="text/css" href="navbar.css">
    <style type="text/css">
        body {
            background-color: beige;
            font-family: Arial, sans-serif;
            padding: 20px;
        } 
         button {
            background-color: black;
            color: white;
            font-weight: 600;
            border-radius: 30px;
            padding: 10px 20px;
        }

        button:hover {
            background-color: lightgoldenrodyellow;
            color: black;
        }

        .container {
            font-weight: 600;
            max-width: 600px;
            margin: 0 auto;
            background-color: whitesmoke;
            padding: 20px;
            border-radius: 30px;
            border: 2px dotted #ddd;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
        }

        h3 {
            text-align: center;
            font-weight: bold;
            color: #333;
        }

        label {
            font-weight: bold;
            display: block;
            margin-bottom: 5px;
            color: #333;
        }

        input[type="text"], input[type="month"], input[type="submit"] {
            width: 100%;
            padding: 10px;
            margin-bottom: 15px;
            border: 1px solid #ddd;
            border-radius: 4px;
            font-size: 16px;
        }

        input[type="submit"] {
            background-color: black;
            color: white;
            border: none;
            font-weight: 600;
            border-radius: 30px;
            cursor: pointer;
        }

        input[type="submit"]:hover {
            background-color: lightgoldenrodyellow;
            color: black;
        }

        .alert {
            background-color: #f8d7da;
            color: #721c24;
            padding: 15px;
            margin-bottom: 20px;
            border: 1px solid #f5c6cb;
            border-radius: 5px;
            display: none;
        }

    </style>
    <style type="text/css">
    .cuadro {
        background-color: #f8f9fa;
        border: 2px solid #ddd;    
        border-radius: 10px;       
        padding: 20px;             
        width:  50%;                
        margin: 0 auto;            
        box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1); 
        font-family: Arial, sans-serif;
    }

    .cuadro h3, .cuadro h4 {
        color: #333; 
        text-align: center;
    }

    .cuadro p {
        font-size: 16px;
        margin: 10px 0; 
        line-height: 1.6; 
    }

    .cuadro .error {
        background-color: #f8d7da; 
        color: #721c24;             
        border-color: #f5c6cb;      
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
<br>
<br>
<br>
    <div class="container">
        <h3>Formulario de Pago</h3>
        <?php if (isset($error)) { ?>
            <div class="alert">
                <?php echo $error; ?>
            </div>
        <?php } ?>
        <form method="POST" action="pago.php">
            <label for="nombre">Nombre en la tarjeta:</label>
            <input type="text" id="nombre" name="nombre" required><br><br>

            <label for="numero">Número de tarjeta:</label>
            <input type="text" id="numero" name="numero" required pattern="\d{16}" maxlength="16" placeholder="Número de tarjeta (16 dígitos)"><br><br>

            <label for="fecha">Fecha de expiración:</label>
            <input type="date" id="fecha" name="fecha" required><br><br>

            <label for="cvv">CVV:</label>
            <input type="text" id="cvv" name="cvv" required pattern="\d{3}" maxlength="3" placeholder="CVV (3 dígitos)"><br><br>

            <input type="submit" value="Realizar el pago">
        </form>
    </div>
    <?php
$servername = "localhost";
$username = "root";
$password="12345678";        
$dbname = "recyco"; 
$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
    die("Conexión fallida: " . $conn->connect_error);
}
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $nombre = $_POST['nombre'];
    $numero = $_POST['numero'];
    $fecha = $_POST['fecha'];
    $cvv = $_POST['cvv'];


    if (empty($nombre) || empty($numero) || empty($fecha) || empty($cvv)) {
        $error = "Todos los campos son obligatorios.";
    } else {
        $sql = "INSERT INTO pagos (nombre, numero, fecha_expiracion, cvv)
                VALUES ('$nombre', '$numero', '$fecha', '$cvv')";

if ($conn->query($sql) === TRUE) {
    echo "<div class='cuadro'>";
    echo "<h3>Pago procesado con éxito</h3>";
    echo "<p><strong>Nombre:</strong> $nombre </p>";
    echo "<p><strong>Número de tarjeta:</strong> $numero </p>";
    echo "<p><strong>Fecha de expiración:</strong> $fecha </p>";
    echo "<p><strong>CVV:</strong> $cvv </p>";
    echo "<h4>¡Gracias por tu compra!</h4>";

    $ticket_number = $conn->insert_id;  
    echo "<h4><strong>Tu número de ticket es:</strong> $ticket_number</h4>";
    echo "</div>";
} else {
    echo "<div class='cuadro error'>";
    echo "Error al procesar el pago: " . $conn->error;
    echo "</div>";
        }
    }
}


$conn->close();
?>

</body>
</html>
