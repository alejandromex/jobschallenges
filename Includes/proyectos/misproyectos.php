<?php 
    if(isset($_SESSION['login']) ) 
    {
    $proyectoController = new ProyectoController();
    $proyectos = $proyectoController->MisProyectos($_SESSION['id']);
    
?>

<div class="row">
  <?php while($proyecto = $proyectos->fetch_object()) : ?>
  <div class="col-md-6 col-sm-12">
    <div class="card">
      <div class="card-body">
        <h5 class="card-title"><?=$proyecto->titulo?></h5>
        <p><?=$proyecto->area?></p>
        <div class="imagen-proyecto">
            <img src="<?=$url?><?=$proyecto->imagen?>" alt="">
        </div>
        <p class="card-text">
            <?=$proyecto->descripcion?>
            <h5>Habilidades requeridas</h5>
            <?php $habilidades = explode(" ", $proyecto->habilidades); ?>
            <ul>
                <?php for($i = 0; $i<sizeof($habilidades); $i++) : ?>
                  <li><?=$habilidades[$i]?></li>
                <?php endfor ?>
            </ul>
            <p>
              Postulado el: <?=$proyecto->fecha?>
            </p>
            <p>
              Fecha de cierre: <?=$proyecto->fechacierre?>
            </p>
        </p>
        <div class="btn-group" role="group" aria-label="Basic example">

            <?php if(isset($_SESSION['login']) && $proyecto->creador != $_SESSION['id']) : ?>
            <a href="<?=$url?>proyecto.php/<?=$proyecto->id?>" class="btn btn-success">Ver nota completa</a>

            <button type="button" class="btn btn-info">Postularme</button>
            <?php endif ?>

              <?php if(isset($_SESSION)) : ?>
              <?php if($_SESSION['id'] == $proyecto->creador) : ?>
              <a href="<?=$url?>proyecto.php/<?=$proyecto->id?>" class="btn btn-success">Ver nota completa</a>

              <button type="button" class="btn btn-danger">Eliminar</button>
            <?php endif ?>
            <?php endif ?>
          </div>   
      </div>
    </div>
  </div>
  <?php endwhile ?>
</div>

              <?php }?>

