<?php require_once 'includes/foro/header.php' ?>

<div class="publicaciones">

    <?php
        $postController = new PostController();

        $posts = $postController->getPostsByUser($_SESSION['id']);

    ?>

<?php while($post = $posts->fetch_object()) : ?>
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
                          <input type="text" placeholder="Comentar">
                          <button class="btn btn-info">Comentar</button>
                          <?php else : ?>
                          <p>Para comentar inicie sesion</p>
                          <?php endif ?>

                      </div>
                    </div>
                    <br>
                </div>
                <br>
                <?php endwhile ?>


</div>


<?php require_once 'includes/foro/footer.php'; ?>