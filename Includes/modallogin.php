<!-- Modal iniciar sesion -->
<div class="modal fade " id="loginModal" tabindex="-1" role="dialog" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header bg-dark text-white">
        <h5 class="modal-title " id="exampleModalLabel">Iniciar Sesion</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
            <?php include 'includes/formulario-inicio.php' ?>
      </div>
      <div class="modal-footer">
      <p>¿No tienes una cuenta?<a class="nav-link" href="#"  data-toggle="modal" data-target="#registerModal">Registrarse</a></p>
      </div>
    </div>
  </div>
</div>
