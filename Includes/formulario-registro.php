<?php 
  $usuarioController = new UsuarioController();
?>

<form method="post" enctype="multipart/form-data">
  <div class="form-group row">
    <label for="nombre" class="col-sm-2 col-form-label">Nombre</label>
    <div class="col-sm-10">
      <input type="text" name="nombre" class="form-control"  placeholder="Nombre" require>
    </div>
  </div>
  <div class="form-group row">
    <label for="apellido" class="col-sm-2 col-form-label">Apellido</label>
    <div class="col-sm-10">
      <input type="text" name="apellido" class="form-control"  placeholder="Apellido" require>
    </div>
  </div>
  <div class="form-group row">
    <label for="email" class="col-sm-2 col-form-label">Email</label>
    <div class="col-sm-10">
      <input type="email" name="email" class="form-control"  placeholder="Email" require>
    </div>
  </div>
  <div class="form-group row">
    <label for="password" class="col-sm-2 col-form-label">Password</label>
    <div class="col-sm-10">
      <input type="password" name="password" class="form-control"  placeholder="Password" require>
    </div>
  </div>
  <div class="form-group">
    <label for="area">Tipo de usuario</label>
    <select class="form-control" name="area" id="tipo-usuario">
      <option>Talento</option>
      <option>Reclutador</option>
    </select>
  </div>

  <div class="formulario-reclutador d-none">
    <div class="form-group row">
      <label for="empresa" class="col-sm-2 col-form-label">Nombre</label>
      <div class="col-sm-10">
        <input type="text" name="empresa" class="form-control"  placeholder="Nombre de la empresa" require>
      </div>
    </div>
    <div class="form-group row">
      <label for="puesto" class="col-sm-2 col-form-label">Puesto</label>
      <div class="col-sm-10">
        <input type="text" name="puesto" class="form-control"  placeholder="Puesto en la empresa" require>
      </div>
    </div>
    <div class="form-group row">
      <label for="comprobante" class="col-sm-2 col-form-label">Comprobante</label>
      <div class="col-sm-10">
        <input type="file" name="comprobante" class="form-control" id="" require>
      </div>
    </div>
    <input type="submit" name="registrar-reclutador" id="btn-registrar-reclutador" class="btn btn-primary" value="Solicitar Reclutador">
  </div>

  <div class="form-group row">
    <div class="col-sm-10">
    <?php
        $response = 0;
        $response = $usuarioController->Register();
        $usuarioController->registerReclutador();

        if($response == "correo_rep")
        {
          echo "
            <script>           
              Swal.fire({
              position: 'center',
              icon: 'error',
              title: 'Correo ya registrado',
              showConfirmButton: false,
              timer: 1500
            })
            </script>";
        }


        if($response == "success")
        {
          echo "
              <script>           
                Swal.fire({
                  position: 'center',
                  icon: 'success',
                  title: 'Registro Correcto',
                  showConfirmButton: false,
                  timer: 1500
                })
            </script>";
        }
      if($response == "error") : ?>
          <script>
            Swal.fire({
            title: 'Error!',
            text: 'Error al registrar datos y/o correo ya registrado',
            icon: 'error',
            confirmButtonText: 'Ok'
          })
          </script>
      <?php endif ?>
      <input type="submit" name="registrar" id="btn-registrar-talento" class="btn btn-primary" value="Registrarse">

    </div>
  </div>
</form>

