<!DOCTYPE html>
<html lang="es">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1"/>
    <link rel="stylesheet" href="">
    <link rel="stylesheet" href="css/estilo.css">

    <title>Información</title>

  </head>
  <body>
      
    <?php
        include("layouts/cabecera.php")
    ?>

      <hr>
    <section>
      
          <div class = "form 1-2">
              <label for = "caja_busqueda"> </label>
              <input align="center" type="text" name="caja_busqueda" id="caja_busqueda" placeholder="Busca tu medicamento aquí"></input>
          </div>
      </section>

      <section id="datos"></section>

      <script src="js/jquery-3.4.1.min.js"></script>
      <script src="js/main.js"></script>
  </body>
</html>
