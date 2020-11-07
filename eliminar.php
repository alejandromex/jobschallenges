<?php
    require_once 'includes/header.php';
    $idUsuario = $_SESSION['id'];
    $idPost = $_POST['idpost'];

    $postModelo = new PostModelo();

    $response = $postModelo->eliminarPost($idPost, $idUsuario);



?>

<script>window.location.href='<?=$url?>foro.php';</script>