<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Parking_BD</title>
    <?php require_once("Vistas/Modulos/dependencias_absolutas.php"); ?>
  </head>
  <body>
    <?php
  require_once("Vistas/Modulos/navSup.php");
  require_once("Vistas/Modulos/navLat.php");
  #require_once("Vistas/Paginas/inicio.php");
  $mstr_redireccion=new Mvc_Controlador; $mstr_redireccion->redireccion_paginas_ctlr();
      
    ?>
  </body>
</html>