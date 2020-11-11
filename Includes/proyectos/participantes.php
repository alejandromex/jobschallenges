<p>
  <a class="btn btn-primary" data-toggle="collapse" href="#participantes" role="button" aria-expanded="false" aria-controls="multiCollapseExample1">Participantes</a>
</p>
<div class="row">
  <div class="col-sm-12 col-md-12">
    <div class="collapse multi-collapse" id="participantes">
      <div class="card card-body">
        <?php 
            $proyectoController = new ProyectoController();
            $participantes = $proyectoController->getPostulados($idpost,1);
            $creador = $proyectoController->getCreador($idpost); ?>
            <div class="row">
              <div class="col-md-2">
                <img src="<?=$url?><?=$creador->imagen?>" alt="">
              </div>
              <div class="col-md-10">
              <a class="usuario-participante" href="<?=$url?>talento.php/perfil/<?=$creador->id?>"><?=$creador->nombre?> <?=$creador->apellido?></a> 
              </div>
            </div>
            <div class="row">
            <br>
              Colaboradores
            </div>
            <?php
            while($participante = $participantes->fetch_object()) : ?>
              <div class="row">
              <div class="col-md-2 ">
                <img src="<?=$url?><?=$participante->imagen?>" alt="">
              </div>
              <div class="col-md-10">

              <a class="nav-link dropdown-toggle usuario-participante" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                <?=$participante->nombre?> <?=$participante->apellido?>
              </a>
              <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                <?php if($_SESSION['id'] != $participante->id): ?>
                <a class="dropdown-item" href="<?=$url?>talento.php/perfil/<?=$participante->id?>">Perfil</a>
                <a class="dropdown-item" href="#">Mandar mensaje</a>
                <?php else : ?>
                  <a class="dropdown-item" href="<?=$url?>talento.php/perfil/<?=$participante->id?>">Ir a mi perfil</a>
                  <a class="dropdown-item" href="<?=$url?>talento.php/perfil/<?=$participante->id?>">Dejar de colaborar</a>
                <?php endif ?>
                <?php if($_SESSION['id'] == $creador->id) : ?>
                <a class="dropdown-item" href="#">Eliminar de colaborador</a>
                <?php endif ?>
                <div class="dropdown-divider"></div>
                <a class="dropdown-item" href="#">¿Ocurrio un problema? Reporta aqui</a>
              </div>

              </div>
            </div>

            
      <?php endwhile  ?>

      </div>
    </div>
  </div>
</div>