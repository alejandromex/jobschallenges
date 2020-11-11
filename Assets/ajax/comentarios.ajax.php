<?php
    include ('../../Controllers/proyecto.controller.php');
    include ('../../Controllers/post.controller.php');

    include ('../../Models/proyecto.modelo.php');
    include ('../../Models/post.modelo.php');

    include ('../../config/dbConnect.php');

class AjaxPostulados{
    public $idusuario;
    public $idpost;
    public $comentario;

    public function RealizarComentario()
    {
        $proyectoController = new ProyectoController();
        $mensaje = $proyectoController->RealizarComentario($this->idpost,$this->idusuario, $this->comentario);
        echo $mensaje;
    }

    public function ComentarForo()
    {
        $postController = new PostController();
        $response = $postController->ComentarForo($this->idpost, $this->idusuario, $this->comentario);
        echo $response;
    }


}

if(isset($_POST['comentario']))
{
    $ajax = new AjaxPostulados();
    $ajax->comentario = $_POST['comentario'];
    $ajax->idusuario = $_POST['idusuario'];
    $ajax->idpost = $_POST['idpost'];
    $ajax->RealizarComentario();
}

if(isset($_POST['comentarioforo']))
{
    $ajax = new AjaxPostulados();
    $ajax->comentario = $_POST['comentarioforo'];
    $ajax->idusuario = $_POST['idusuarioforo'];
    $ajax->idpost = $_POST['idpostforo'];
    $ajax->ComentarForo();
}











?>