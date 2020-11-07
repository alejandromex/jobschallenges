
<!-- Modal -->
<div class="modal fade " id="registerModal" tabindex="-1" role="dialog" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header bg-dark text-white">
        <h5 class="modal-title " id="exampleModalLabel">Registro</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
            <?php require 'includes/formulario-registro.php' ?>
      </div>
      <div class="modal-footer">
    <p>¿Ya tienes una cuenta?<a class="nav-link" href="#" data-toggle="modal" data-target="#loginModal">Iniciar Sesion</a></p>
      </div>
    </div>
  </div>
</div>
