<?php require_once 'includes/foro/header.php' ?>

<div class="publicaciones">

<?php
    $postController = new PostController();

         $rutas = $_SERVER["REQUEST_URI"];
         $rutas = explode("/", $rutas);
         $show = false;
        if(isset($rutas[3]) && $rutas[3] != "")
         {
            $idpost = $rutas[3];
            $show = true;
         }
         
         else{
            echo "<script>window.location.href='http://localhost/JobsChallenge/foro.php';</script>";
         }
    


?>
<?php if($show == true) : ?>
<?php $post = $postController->getPost($idpost); ?>
<div class="card">
                    <div class="card-header publicacion-header">

                      <div class="datos-publicacion">

                        <div class="publicacion-foto">
                          <img src="<?=$url?><?=$post->imagen?>" alt="">
                        </div>

                        <div class="publicacion-perfil">
                        <a href="<?=$url?>talento.php/perfil/<?=$post->id?>"><?=$post->nombre?> <?=$post->apellido?></a>
                          <br>
                          Publicado el <?=$post->fecha?>
                          <br>
                          <br>
                          <strong> <?=$post->area?><strong>
                        </div>
                      
                      </div>
                    </div>
                    <div class="card-body">
                      <h5 class="card-title"></h5>
                      <img src="<?=$url?><?=$post->img?>" alt="">
                      <p class="card-text"><?=$post->contenido?></p>
                      <a href="<?=$url?>post.php/<?=$post->idpost?>" class="btn btn-primary img-fluid">Revisar el post</a>
                      <?php if(isset($_SESSION['login'])) : ?>
                      <?php if($usuario->id == $post->id) : ?>
                        <div class="btn-group" role="group" aria-label="Basic example">

                        <button class="btn btn-warning">Editar</button>
                        <form action="<?=$url?>eliminar.php/<?=$post->idpost?>" method="post">
                          <button type="submit" name="idpost" value="<?=$post->idpost?>" class="btn btn-danger">Eliminar</button>
                        </form>
                        </div>
                      <?php endif ?>
                      <?php endif ?>
                    </div>
                    <div class="card-footer comentarios">
                      <div class="row">
                      <?php if(isset($_SESSION['login'])) : ?>

                          <img src="<?=$url?><?=$usuario->imagen?>" alt="">
                          <input type="hidden" name="idusuario" id="idusuarioforo" value="<?=$_SESSION['id']?>">
                          <input type="hidden" name="idpost" id="idpostforo" value="<?=$idpost?>">
                          <input type="text" id="txtcomentarforo" placeholder="Comentar">
                          <button class="btn btn-info" id="btncomentarforo">Comentar</button>
                          <?php else : ?>
                          <p>Para comentar inicie sesion</p>
                          <?php endif ?>

                      </div>
                    </div>

                    <?php 

                    $comentarios = $postController->getComentarios($idpost);
                    
                    ?>
                  <?php while($comentario = $comentarios->fetch_object()) : ?>
                  <div class="comentario-usuario comentarios-post">
                      <img src="<?=$url?><?=$comentario->imagen?>" alt="">  
                    <div class="comentario-interno">
                        <div> <a style="color: blue;" href="<?=$url?>talento.php/perfil/<?=$comentario->usuarioid?>"><strong><?=$comentario->nombre?> <?=$comentario->apellido?></strong></a></div>
                        <div><?=$comentario->comentario?></div>
                        <div>Comentado el: <?=$comentario->fecha?></div>
                    </div>
                  </div>
                  <?php endwhile ?>
                </div>
                <br>

<?php  endif ?>
</div>


<?php require_once 'includes/foro/footer.php'; ?>


