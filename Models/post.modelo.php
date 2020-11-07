<?php

class PostModelo{
    public $conn;


    public function __construct()
    {
        $this->conn = Database::connect();

    }

    public function registrarPost($titulo,$area,$contenido,$foto, $id){

        $response = $this->conn->query("insert into post values (null,'$area', '$titulo','$contenido','postimg/$foto','$id',CURRENT_TIME());");
        return $response;
    }

    public function getPosts()
    {
        $posts = $this->conn->query("select post.id as 'idpost',post.area,post.titulo,post.contenido,post.img,post.fecha, usuarios.id, usuarios.nombre, usuarios.apellido, usuarios.imagen, usuarios.role from post join usuarios on usuarios.id = escritor order by post.id desc");
        return $posts;
    }

    public function eliminarPost($idPost, $idUsuario)
    {
        $response = $this->conn->query("DELETE FROM post WHERE post.id = $idPost and post.escritor = $idUsuario");
        return $response;
    }

    public function getPost($idpost)
    {
        $post = $this->conn->query("select post.id as 'idpost',post.area,post.titulo,post.contenido,post.img,post.fecha, usuarios.id, usuarios.nombre, usuarios.apellido, usuarios.imagen, usuarios.role from post join usuarios on usuarios.id = escritor where post.id = $idpost");
        return $post->fetch_object();
    }

    public function getPostsByUser($id)
    {
        $posts = $this->conn->query("select post.id as 'idpost',post.area,post.titulo,post.contenido,post.img,post.fecha, usuarios.id, usuarios.nombre, usuarios.apellido, usuarios.imagen, usuarios.role from post join usuarios on usuarios.id = escritor where post.escritor = $id order by post.id desc");
        return $posts;
    }
}


?>