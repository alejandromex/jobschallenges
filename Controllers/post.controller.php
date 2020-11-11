<?php 

class PostController{

    
    private $postModelo;

    public function __construct()
    {
        $this->postModelo = new PostModelo();
    }

    public function registrarPost()
    {
        if(isset($_POST['publicar']))
        {
            $titulo = (empty($_POST['titulo']))? "0" : $_POST['titulo'];
            $area = (empty($_POST['area']))? "0" : $_POST['area'];
            $contenido = (empty($_POST['contenido']))? "0" : $_POST['contenido'];
            $foto = (empty($_FILES['foto']))? "0" : $_FILES['foto']; 
            $id = $_SESSION['id'];
            $fecha = new DateTime();

            if($titulo == "0" || $area == "0" || $contenido == "0")
            {
                return "Faltan datos";
            }
            else{
                if($foto != "0")
                {
                    $archivo = $_FILES['foto']['name'];
                    $tipo_imagen = $_FILES{'foto'}['type'];
                    $size = $_FILES['foto']['size'];
                    $nombreImg = $fecha->getTimestamp().$archivo;

                    $carpeta_destino = "postimg/";

                    move_uploaded_file($_FILES['foto']['tmp_name'],$carpeta_destino.$nombreImg);
                }

                $response = $this->postModelo->registrarPost($titulo,$area,$contenido,$nombreImg,$id);
                if($response == true)
                {
                    echo "
                    <script>
                    Swal.fire({
                    title: 'Publicacion!',
                    text: 'Publicacion realizada con exito',
                    icon: 'success',
                    confirmButtonText: 'Cool'
                  })
                  </script>";
                  echo "<script>window.location.href='foro.php';</script>";

                }
                return $response;
            }
        }
    }

    public function getPosts()
    {
        $posts = $this->postModelo->getPosts();
        return $posts;
    }

    public function getPost($idpost)
    {
        $post = $this->postModelo->getPost($idpost);
        return $post;
    }

    public function getPostsByUser($id){
        $posts = $this->postModelo->getPostsByUser($id);
        return $posts;
    }

    public function getComentarios($idpost){
        $comentarios = $this->postModelo->getComentarios($idpost);
        return $comentarios;
    }

    public function ComentarForo($idpost, $idusuario, $comentario)
    {
        $response = $this->postModelo->ComentarForo($idpost,$idusuario,$comentario);
        return $response;
    }

}



?>