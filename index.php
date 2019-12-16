<!DOCTYPE html>
<html lang="es-mx">
<head>
    <meta charset="UTF-8">
    <title>IntroPhp7 Grupo XA</title>
    <link rel="stylesheet" href="css/estilos.css"/>
    <link rel="stylesheet" href="css/menu.css"/>
    <link rel="stylesheet" href="css/problema.css"/>
    <link href="https://fonts.googleapis.com/css?family=Rambla" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Comfortaa" rel="stylesheet">
</head>
<body>
   <section class="wrapper">
    <header>
      <h1 class="logo"><a href="index.php">IntroPHP7</a></h1>
      <nav>
      <ul>
        <li><a href="index.php" class="current">Inicio</a></li>
        <li><a href="#">Otros Ejemplos Php7</a></li>
      </ul>
      </nav>
    </header>
<section id="contenedor">
<section  class="problema">
  <h2>Problema: Cálcular la densidad</h2>
  <p>Descripción:</p>
  <p>la masa es 6578 N/m**3 y su densidad es 6578/9.8 m/s2 y la gravedad es 980665 m/s2 <br>
 ¿Cual es la densidad de un aceite cuyo peso especifico es de 6578 N/m3? </p>
</section>
<section class="formulas">
<h2>Fórmulas</h2>
    Densidad = Masa/Volumen<br>
    Volumen= 9.8
</section>
<section class="datos">
<h2>Datos:</h2>
   m= 6578 N/m. <br>
   gravedad= 9.8 <br>
</section>
<section class="calculos">
<h2>Solución</h2>
   <p>a)La densidad es:<br>
    densidad = 671.2 kg/m3 (m) <br>
    gravedad= 6578/9.8 </p>
</section>
<?php
     function calcula_densidad(){
        $gravedad=9.8;
        $masa= 3578;
        $densidad= $masa/$gravedad;
        return $densidad;
     }
?>
<section class="resultado">
<h2>Resultado:</h2>
<div id="resultadoA"></div>
<?php
 print "<h1> resultado: densidad = ".calcula_densidad(). " kg/(metro cubico)</h1>";
?>
</section>
</section>
    <footer class="pie">
     Creative Commons versión 3.0 SciSoft 2019
    </footer>
   </section>
</body>
</html>
