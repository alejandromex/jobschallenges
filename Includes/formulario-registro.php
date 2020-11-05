<?php 
  $usuarioController = new UsuarioController();
?>

<form method="post">
  <div class="form-group row">
    <label for="nombre" class="col-sm-2 col-form-label">Nombre</label>
    <div class="col-sm-10">
      <input type="text" name="nombre" class="form-control" id="inputEmail3" placeholder="Nombre" require>
    </div>
  </div>
  <div class="form-group row">
    <label for="apellido" class="col-sm-2 col-form-label">Apellido</label>
    <div class="col-sm-10">
      <input type="text" name="apellido" class="form-control" id="inputPassword3" placeholder="Apellido" require>
    </div>
  </div>
  <div class="form-group row">
    <label for="email" class="col-sm-2 col-form-label">Email</label>
    <div class="col-sm-10">
      <input type="email" name="email" class="form-control" id="inputPassword3" placeholder="Email" require>
    </div>
  </div>
  <div class="form-group row">
    <label for="password" class="col-sm-2 col-form-label">Password</label>
    <div class="col-sm-10">
      <input type="password" name="password" class="form-control" id="inputPassword3" placeholder="Password" require>
    </div>
  </div>
  <div class="form-group row">
    <label for="area" class="col-sm-2 col-form-label">Area</label>
    <div class="col-sm-10">
      <input type="text" name="area" class="form-control" id="inputPassword3" placeholder="Area" require>
    </div>
  </div>
  <div class="form-group row">
    <div class="col-sm-10">
    <?php
        $response = 0;
        $response = $usuarioController->Register();

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
            confirmButtonText: 'Cool'
          })
          </script>
      <?php endif ?>
      <input type="submit" name="registrar" class="btn btn-primary" value="Registrarse">

    </div>
  </div>
</form>

