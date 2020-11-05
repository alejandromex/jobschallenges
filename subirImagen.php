<?php
session_start();
require_once 'config/dbConnect.php';
require_once 'Controllers/usuario.controller.php';
require_once 'Models/usuario.modelo.php';
$fecha = new DateTime();
#webdebe.com
if (isset($_POST['subir'])) {

    $archivo = $_FILES['archivo']['name'];
    $tipo_imagen = $_FILES{'archivo'}['type'];
    $size = $_FILES['archivo']['size'];
    $nombreImg = $fecha->getTimestamp().$archivo;

    $carpeta_destino = "usersimg/";

    move_uploaded_file($_FILES['archivo']['tmp_name'],$carpeta_destino.$nombreImg);

    $usuarioController = new UsuarioController();
    $usuarioController->subirImagen("usersimg/".$nombreImg, $_SESSION['id']);
}
?>
    
    <script>window.location.href="http://localhost/JobsChallenge/talento.php/perfil/<?=$_SESSION['id']?>";</script>";

    
