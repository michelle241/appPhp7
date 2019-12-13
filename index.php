<!DOCTYPE html>
<html lang="es-mx">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Science Technology Engineerig & Mathematics</title>
    <link rel="stylesheet" href="">
    <link rel="stylesheet" href="css/estilos.css">
    <link rel="stylesheet" href="css/menu.css"/>
    <link rel="stylesheet" href="css/problema.css"/>
    <link href="https://fonts.googleapis.com/css?family=Rambla" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Comfortaa" rel="stylesheet">
    <?php
        function solucion(){
        $masa=6578;
        $gravedad=9.8;
        $densidad=$masa/$gravedad;

        return $densidad;
        }
    ?>
</head>
<body>
    <section id="contenedor">
    <header id="gridHeader">
    <h1>Science Technology Engineerig & Mathematics</h1>
    <h2>Resolver problemas de Ciencia e Ingeniería con JS</h2>
    <h2>Nombre: Michelle Roque López  No. de control: 17091152</h2>
    <img src="fotoSelfie.jpg" alt="su foto">
    </header>
    </section>
    <section id="problema"  class="gridProblema">
      <section id=descripcion>
            <h2>Problema: Cálcular la densidad</h2>
            <p>Descripción:</p>
            <p>¿Cual es la densidad de un aceite cuyo peso especifico es de 6578 N/m3? <br>
      </section>
      <section id="datos">
            <h2>Datos:</h2>
            masa = m = 6578 N/m**3 <br>
            densidad = d = 6578/9.8 m/s2 <br>
            aceleracion de gravedad = g = 980665 m/s2

      </section>
      <section id="formulas">
            <h2>Fórmulas</h2>
            d=masa/volumen
      </section>
      <section id="solucion">
            <h2>Solución</h2>
            <p>La densidad es:<br>
             d=671.2 kg/m3</p>

            <?php
                 print "<h1> resultado: densidad = ".calcula_densidad(). " kg/m3</h1>";
            ?>

             <button onclick="solucion()">Presiona para calcular</button>
      </section>

      <section id="resultado"></section>
    </section>
    <footer id="gridPie">
        <p>Solution Science Problems. 2019 Creative Commons 3.0</p>
    </footer>
</body>
</html>

