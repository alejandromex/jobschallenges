<?php $postController = new PostController(); ?> 



<div class="modal fade" id="publicarModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Realizar una publicacion</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
      <form method="post" enctype="multipart/form-data" >
    <div class="input-group">
        <div class="input-group-prepend">
            <div class="input-group-text">Titulo</div>
        </div>
        <input type="text" name="titulo" class="form-control" id="inlineFormInputGroupUsername" placeholder="Titulo del post">
    </div>

    <div class="form-group">
    <label for="exampleFormControlSelect1">Area de publicacion</label>
    <select class="form-control" name="area" id="exampleFormControlSelect1">
      <option>Solicitud de trabajo</option>
      <option>Solicitud de Empleado</option>
      <option>Medicina</option>
      <option>Veterinaria</option>
      <option>Derecho</option>
      <option>Turismo</option>
      <option>Software</option>
      <option>Hardware</option>
      <option>Electronica</option>
      <option>Carpinteria</option>
      <option>Tema general</option>
    </select>
    </div>

    <div class="form-group">
    <label for="exampleFormControlTextarea1">Contenido del post</label>
    <textarea class="form-control" name="contenido" id="exampleFormControlTextarea1" rows="3"></textarea>
    </div>

    <div class="form-group">
    <label for="exampleFormControlFile1">Foto</label>
    <input type="file" name="foto" class="form-control-file" id="exampleFormControlFile1">
  </div>
    </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>

        <?php $postController->registrarPost();

        ?>
    

        <input type="submit" name="publicar" value="Publicar" class="btn btn-info">
      </div>


</form>
    
    </div>
  </div>
</div>
