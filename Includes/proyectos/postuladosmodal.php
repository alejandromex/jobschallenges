<div class="modal fade" id="postuladosModal" tabindex="-1" role="dialog" aria-labelledby="postuladoModalLongTitle" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLongTitle">Postulados</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">

      <?php
        $proyectoController = new ProyectoController();
        $aceptado = 0;
        $postulados = $proyectoController->getPostulados($idpost,$aceptado);
      
      ?>
        <div class="row">
        <?php while($postulado = $postulados->fetch_object()): ?>
          <div class="col-sm-12 postulado" id="aceptar<?=$postulado->id?>">
            <a href="<?=$url?>talento.php/perfil/<?=$postulado->id?>" class=><?=$postulado->nombre?> <?=$postulado->apellido?></a> 
            <div>
              <div proyectoId=<?=$idpost?>   postuladoId=<?=$postulado->id?> class="btn btn-success btn-aceptar-postulado">Aceptar</div>
              <div class="btn btn-danger">Cancelar</div>
            </div>
          </div>
          <?php endwhile ?>
        </div>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Salir</button>
      </div>
    </div>
  </div>
</div>