<?php
    $usuarioController = new UsuarioController();
?>

<form method="post">
  <div class="form-group row">
        <label for="inputEmail3" class="col-sm-2 col-form-label">Email</label>
        <div class="col-sm-10">
        <input type="email" name="email" class="form-control" id="inputEmail3" placeholder="Email">
        </div>
  </div>
  <div class="form-group row">
    <label for="inputPassword3" class="col-sm-2 col-form-label">Password</label>
    <div class="col-sm-10">
      <input type="password" name="password" class="form-control" id="inputPassword3" placeholder="Password">
    </div>
  </div>
    <?php
      $response = $usuarioController->Login();
    

      if($response == "error")
      {
        echo "
        <script>           
          Swal.fire({
          position: 'center',
          icon: 'error',
          title: 'Correo y/o Contraseña incorrecta',
          showConfirmButton: false,
          timer: 1500
        })
        </script>";
      }

    ?>

  <button type="submit" name="login" class="btn btn-primary">Iniciar Sesion</button>

</form>