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
    <link rel="stylesheet" href="<?=$url?>Assets/css/foro.css">


    <title>Home</title>
</head>
<body class="foro">







    <?php
      session_start();
      require_once 'config/dbConnect.php';
      require_once 'Controllers/usuario.controller.php';
      require_once 'Models/usuario.modelo.php';
      require_once 'Controllers/post.controller.php';
      require_once 'Models/post.modelo.php';


      $usuarioController = new UsuarioController();
      if(isset($_SESSION['login']) && $_SESSION['login'] == 'ok')
      {
        $usuario = $usuarioController->MostrarUsuario($_SESSION['id']);

      }

      require_once 'includes/foro/sidebar.php';


    ?>

