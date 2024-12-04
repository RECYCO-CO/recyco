<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>RECYCO</title>
    <link rel="stylesheet" type="text/css" href="navbar.css">
    <style type="text/css">
        body { background: linear-gradient(to bottom, white, gray); margin: 0; height: 100%;}


nav{
  z-index: 1000;
  position: fixed;
  float: left;
   background: palegoldenrod;
   width: 100%;
 
}
.logo img{
  display: block;
  width: 50px;
  height: 50px;
float: left;
cursor: pointer;
margin-right: 15px;
}
.logo .empresa{
  text-shadow:  2px 2px 0px rgba(0, 0, 0, 0.5) ;
  text-decoration: none;
  float: left;
  font-weight: 600 ;
  color: white;
  font-family: arial;
  font-size: 30px;
  cursor: pointer;
  margin-top: 7px;
  margin-right: 15px;
}
nav ul {
  list-style: none;
  overflow: hidden; 
}

nav ul li {
  float: left;
  font-family: Arial;
  font-size: 15px;
}
nav ul li a {
  display: block;
  padding: 15px;
  color: black;
  text-decoration: none;
  font-weight: 600;
  
}
nav ul li:hover {
  background: lightgoldenrodyellow;
 
}

.menu-vertical-1{
  position: absolute;
display: none;
list-style: none;
width: 100px;
background-color: rgba(0, 0, 0, 0.5);
}
li:hover .menu-vertical-1{
display: block;
}
.menu-vertical-1 li:hover{
  background-color: black;
}
.menu-vertical-1 li a{
  display: block;
  color: white;
  padding: 15px 15px 15px ;
  text-decoration: none;
}

.menu-vertical{
  position: absolute;
display: none;
list-style: none;
width: 100px;
background-color: rgba(0, 0, 0, 0.5);
}
li:hover .menu-vertical{
display: block;
}
.menu-vertical li:hover{
  background-color: black;
}
.menu-vertical li a{
  display: block;
  color: white;
  padding: 15px 15px 15px ;
  text-decoration: none;
}
.menu-derecha{
  float: right;
  margin-right: 30px;
}
/*SLIDER DE TEXTO*/
p{
   font-weight: 600;
   color: gray;
}
#slider {
  padding-top: 90px;
   margin: 0 auto;
   width: 800px;
   max-width: 100%;
   text-align: center;
}
#slider input[type=radio] {
   display: none;
}
#slider label {
   cursor:pointer;
   text-decoration: none;
}
#slides {
   padding: 10px;
   border: 3px solid black;
   background: white;
   position: relative;
   z-index: 1;
}
#overflow {
   width: 100%;
   overflow: hidden;
}
#slide1:checked ~ #slides .inner {
   margin-left: 0;
}
#slide2:checked ~ #slides .inner {
   margin-left: -100%;
}
#slide3:checked ~ #slides .inner {
   margin-left: -200%;
}
#slide4:checked ~ #slides .inner {
   margin-left: -300%;
}
#slides .inner {
   transition: margin-left 800ms cubic-bezier(0.770, 0.000, 0.175, 1.000);
   width: 400%;
   line-height: 0;
   height: 300px;
}
#slides .slide {
   width: 25%;
   float:left;
   display: flex;
   justify-content: center;
   align-items: center;
   height: 100%;
   color: black;
   font-family: arial;
}
#slides .slide_1 {
   background:#f1f8e9;
   background-size: 100%;
   
 }
#slides .slide_2 {
   background: #dcedc8;
   background-size: 100%;
}
#slides .slide_3 {
   background: #c5e1a5;
}
#slides .slide_4 {
   background:#aed581 ;
}
#controls {
   margin: -180px 0 0 0;
   width: 100%;
   height: 50px;
   z-index: 3;
   position: relative;
}
#controls label {
   transition: opacity 0.2s ease-out;
   display: none;
   width: 50px;
   height: 50px;
   opacity: .4;
}
#controls label:hover {
   opacity: 1;
}

#bullets {
   margin: 150px 0 0;
   text-align: center;
}
#bullets label {
   display: inline-block;
   width: 30px;
   height: 30px;
   border-radius:100%;
   background: white;
   margin: 0 10px;
}
#slide1:checked ~ #bullets label:nth-child(1),
#slide2:checked ~ #bullets label:nth-child(2),
#slide3:checked ~ #bullets label:nth-child(3),
#slide4:checked ~ #bullets label:nth-child(4) {
   background: black;
}
@media screen and (max-width: 900px) {
   #slide1:checked ~ #controls label:nth-child(2),
   #slide2:checked ~ #controls label:nth-child(3),
   #slide3:checked ~ #controls label:nth-child(4),
   #slide4:checked ~ #controls label:nth-child(1),
   #slide1:checked ~ #controls label:nth-last-child(2),
   #slide2:checked ~ #controls label:nth-last-child(3),
   #slide3:checked ~ #controls label:nth-last-child(4),
   #slide4:checked ~ #controls label:nth-last-child(1) {
      margin: 0;
   }
   #slides {
      max-width: calc(100% - 140px);
      margin: 0 auto;
   }
}

/* SLIDER DE IMAGENES */

.slider{
  padding-top: 80px;
  width: 80%;
  margin: auto;
  overflow: hidden;
}
.slider ul{
  display: flex;
  padding: 0;
  width: 400%;
  animation: automatico 20s infinite alternate linear;
}
.slider li{
  width: 100%;
  list-style: none;

}
.slider img{
  width: 100%;
 height: 250px;
cursor: pointer;
}
@media(min-width: 768px){
.slider img{
  height: 550px;
}
}
@keyframes automatico{
 0%{margin-left: 0%;}
20%{margin-left: 0%;}

 25%{margin-left: -100%;}
 45%{margin-left: -100%;}

  50%{margin-left: -200%;}
 70%{margin-left: -200%;}

  75%{margin-left: -300%;}
 100%{margin-left: -300%;}
}


footer {
    background-color: black;
    color: white;
    text-align: center;
    padding: 20px;
}

footer h3 {
    color: palegoldenrod;
    font-size: 30px;
    font-family: arial;
    font-weight: 600;
}

footer a {
    font-size: 20px;
    font-family: arial;
    font-weight: 600;
    color: white;
    text-decoration: none;
}
footer a:hover{
 color: lightgoldenrod;

}
    </style>
</head>
<body class="inicio">

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










<div id="slider">
   <input type="radio" name="slider" id="slide1" checked>
   <input type="radio" name="slider" id="slide2">
   <input type="radio" name="slider" id="slide3">
   <input type="radio" name="slider" id="slide4">
   <div id="slides">
      <div id="overflow">
         <div class="inner">
            <div class="slide slide_1">
               <div class="slide-content">
                 
                  <h2>RECICLO Y REDUZCO CON RECYCO -></h2>
               </div>
            </div>
            <div class="slide slide_2">
               <div class="slide-content">
                  <h2>Dato interesante</h2>
                  <p>Tan solo en la Ciudad de Mexico se reportan 217 toneladas de desechos textiles en vertederos</p>
               </div>
            </div>
            <div class="slide slide_3">
               <div class="slide-content">
                  <h2>MODA CIRCULAR</h2>
                  <p>¿Sabias que la moda circular nos ayuda a la reduccion del impacto ambiental?</p>
                    <p> ¡Acompañanos a ponerla en practica!</p>
               </div>
            </div>
            <div class="slide slide_4">
               <div class="slide-content"> 
                <h2>HOLA, SOMOS RECYCO!</h2>
                  <p>Estamos emocionados por trabajar contigo en la 
                  construccion de un futuro mas sustentable!</p>
               </div>
            </div>
         </div>
      </div>
   </div>
   <div id="controls">
      <label for="slide1"></label>
      <label for="slide2"></label>
      <label for="slide3"></label>
      <label for="slide4"></label>
   </div>
   <div id="bullets">
      <label for="slide1"></label>
      <label for="slide2"></label>
      <label for="slide3"></label>
      <label for="slide4"></label>
   </div>
</div>

    <div class="slider">  
        <ul>
    <li>
      
            <a href="niños.php"><img src="niños.jpg"></a>
   </li>
          <li>
           
            <a href="mujeres.php"><img src="mujeres.jpg"></a>
    </li>
          <li>
           
            <a href="hombres.php"><img src="hombres.jpg"></a>
    </li>
          <li>
         <img src="pantalones.jpg"></a>
    </li>
 </ul>
  </div>
<hr style="width=100%; height:5px; align=center; background-color:black" >
<footer>
    <h3>Síguenos</h3>
    <a href='https://facebook.com/CBTis164Oficial?mibextid=LQQJ4d'>Facebook CBTis 164</a><br>
    <a href='https://x.com/cbtis164Oficial?t=wCR1ES31xfjTdoRU4NZDqA&s=09' >X CBTis 164</a>
    <!-- Otros enlaces a redes sociales -->
</footer>

  



</body>
</html>