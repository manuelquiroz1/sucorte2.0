<?php
  $currentPage = basename($_SERVER['PHP_SELF']);
?>

<!DOCTYPE html>
<html lang="es">

  <head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <link href="https://fonts.googleapis.com/css?family=Poppins:100,200,300,400,500,600,700,800,900&display=swap" rel="stylesheet">
<link rel="shortcut icon" href="assets/images/favicon.png">
    <title>SUCORTE - Suministros de Corte</title>

    <!-- Bootstrap core CSS -->
    <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

    <!-- Additional CSS Files -->
    <link rel="stylesheet" href="assets/css/fontawesome.css">
    <link rel="stylesheet" href="assets/css/templatemo-sixteen.css">
    <link rel="stylesheet" href="assets/css/owl.css">
    <link rel="stylesheet" href="assets/css/slider.css">
    <link rel="stylesheet" href="assets/css/estilos.css">
    
    <style>
      .active2 {
      background-color: yellow;
      color: black;
    }

    </style>

  </head>

  <body>

    <!-- ***** Preloader Start ***** -->
    <div id="preloader">
        <div class="jumper">
            <div></div>
            <div></div>
            <div></div>
        </div>
    </div>  
    <!-- ***** Preloader End ***** -->

    <!-- Header -->
    <header class="">
      <nav class="navbar navbar-expand-lg">
        <div class="container">
          <img src="assets/images/logo.png" class="imgal attachment-large size-large imgheader" alt="" decoding="async" loading="lazy" />
          <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse" id="navbarResponsive">
            <ul class="navbar-nav ml-auto" id="miLista">
              <li  <?php if ($currentPage == 'index.php') {echo 'class="active"';} ?> class="nav-item ">
                <a class="nav-link" href="index.php">Inicio
                  <span class="sr-only">(current)</span>
                </a>
              </li> 
              <li  <?php if ($currentPage == 'productos.php') {echo 'class="active"';} ?> class="nav-item ">
                <a class="nav-link" href="productos.php">Productos</a>
              </li>
              <li <?php if ($currentPage == 'acerca.php') {echo 'class="active"';} ?> class="nav-item ">
                <a class="nav-link" href="acerca.php">Quiénes somos</a>
              </li>
              <li  <?php if ($currentPage == 'contacto.php') {echo 'class="active"';} ?> class="nav-item ">
                <a class="nav-link" href="contacto.php">Contáctanos</a>
              </li>
            </ul>
          </div>
        </div>
      </nav>
    </header>
<!--
    <script src="https://static.elfsight.com/platform/platform.js" data-use-service-core defer></script>
    <div class="elfsight-app-1dbbeb4d-7641-4fa2-b9cf-3412757b866b"></div>
-->    