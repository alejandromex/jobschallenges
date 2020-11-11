<div class="modal fade" id="avanceModal" tabindex="-1" role="dialog" aria-labelledby="modalDeAvances" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Subir Avance</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <form  method="post" enctype="multipart/form-data">
            <div class="form-group row">
                <label for="titulo" class="col-sm-2 col-form-label">Titulo</label>
                <div class="col-sm-10">
                <input type="titulo" required name="titulo" class="form-control" id="titulo" placeholder="Titulo">
                </div>
            </div>
            <div class="form-group row">
                <label for="descripcion" class="col-sm-2 col-form-label">Desc.</label>
                <div class="col-sm-10">
                    <textarea required type="text" name="descripcion"  id="descripcion" class="form-control" placeholder="Descripcion"></textarea>
                </div>
            </div>
            <div class="form-group row">
                <label for="foto" class="col-sm-2 col-form-label">Foto</label>
                <div class="col-sm-10">
                    <input  type="file" id="imagen" name="foto" id="">
                </div>
            </div>
            <div class="form-group row">
                <label for="texto" class="col-sm-2 col-form-label">Texto</label>
                <div class="col-sm-10">
                    <input  type="file" required id="texto" name="texto" id="">
                </div>
            </div>
            <input type="hidden" name="idusuario" value="<?=$_SESSION['id']?>">
            <input type="hidden" name="idproyecto" value="<?=$idpost?>">
            <?php 
                $proyectoController->registrarAvance();
            ?>

            <input type="submit" name="registrarAvance" value="Subir" class="btn btn-info">
        </form>

      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
      </div>
    </div>
  </div>
</div>