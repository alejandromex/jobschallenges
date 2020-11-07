<?php
    $url = "http://localhost/JobsChallenge/"; 
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <link rel="stylesheet" href="http://localhost/JobsChallenge/Assets/css/colaboraciones.css">
    <link rel="stylesheet" href="http://localhost/JobsChallenge/Assets/css/style.css">
    <link rel="stylesheet" href="http://localhost/JobsChallenge/Assets/css/carrucel.css">
    <link href="https://fonts.googleapis.com/css2?family=Kalam&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=PT+Serif&display=swap" rel="stylesheet">
    <script src="https://kit.fontawesome.com/15ab005e9b.js" crossorigin="anonymous"></script>
    <link href="https://fonts.googleapis.com/css2?family=Trispace:wght@700&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=IBM+Plex+Sans:ital@1&display=swap" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@10"></script>
    <link href="https://fonts.googleapis.com/css2?family=Lora&display=swap" rel="stylesheet">
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>

    <title>Home</title>
</head>
<body>


<nav class="navbar fixed-top navbar-expand-lg navbar-dark bg-dark">
  <a class="navbar-brand logo" href="http://localhost/JobsChallenge/index.php">Talent <span>FINDER</span></a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon expandir"></span>
  </button>

  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav mr-auto">
      <?php if(isset($_SESSION['login']) && $_SESSION['login'] == 'ok') : ?>
      <li class="nav-item active">
        <a class="nav-link" href="<?=$url?>talento.php/perfil/<?=$_SESSION['id']?>">Mi perfil</a>
      </li>
      <li class="nav-item active">
        <a class="nav-link" href="http://localhost/JobsChallenge/cerrarSesion.php">Cerrar sesion</a>
      </li>
      <?php endif ?>

      <?php if(!isset($_SESSION['login'])) : ?>
      <li class="nav-item active">
        <a class="nav-link" href="#" data-toggle="modal" data-target="#loginModal">Iniciar Sesion <span class="sr-only">(current)</span></a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="#"  data-toggle="modal" data-target="#registerModal">Registrarse</a>
      </li>
      <?php endif ?>
      <li class="nav-item">
        <a class="nav-link" href="<?=$url?>foro.php">Foro</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="#">Bolsa de Trabajo</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="<?=$url?>proyectos.php">Proyectos Activos</a>
      </li>

      <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          Talentos
        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
          <a class="dropdown-item" href="#">Buscar</a>
          <a class="dropdown-item" href="http://localhost/JobsChallenge/talentos.php">Ver listado</a>
          <div class="dropdown-divider"></div>
          <a class="dropdown-item" href="#">¿Te interesa ser un talento?</a>
        </div>
      </li>
    </ul>
    <form class="form-inline my-2 my-lg-0">
      <input class="form-control mr-sm-2" type="search" placeholder="Buscar" aria-label="Search">
      <button class="btn btn-busqueda my-2 my-sm-0" type="submit">Buscar talento</button>
    </form>

    <!-- Includes -->

    <?php
      require_once 'config/dbConnect.php';
      require_once 'Controllers/usuario.controller.php';
      require_once 'Models/usuario.modelo.php';

      
      

    ?>

  </div>
</nav>
