<?php
    $url = "http://localhost/JobsChallenge/"; 

    session_start();
    require_once 'Models/post.modelo.php';
    require_once 'config/dbConnect.php';
    $idUsuario = $_SESSION['id'];
    $idPost = $_POST['idpost'];

    $postModelo = new PostModelo();

    $response = $postModelo->eliminarPost($idPost, $idUsuario);



?>

<script>window.location.href='<?=$url?>foro.php';</script>