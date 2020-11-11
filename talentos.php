<?php

     require_once 'includes/header.php'; 

     $usuarioController = new UsuarioController();
?>

<div class="listado-talentos ">
    <div class="contenedor">
        <div class="presentacion-talento">
            <h2>Talentos</h2>
            <div class="talentos-descripcion">
                <p>Si estas aqui con fines de encontrar al empleado o compañero ideal para tu trabajo y/o proyecto, estas en el lugar correcto.</p>
                <p>Con mas de 3000 usuarios de diferentes areas la ausencia de personal en las empresas sera un mito</p>
                <p>¿Estas buscando un talento?</p>
                <p>Encuentra el talento idea, llenando el formulario de bajo y apareceran los talentos que mas se adapten a tu perfil y requerimentos</p>
                <form>
  <div class="form-row">
    <div class="form-group col-md-6">
      <label for="estudios">Estudios</label>
      <input type="text" class="form-control" id="estudios" placeholder="Estudios">
    </div>
    <div class="form-group col-md-6">
      <label for="habilidades">Habilidades</label>
      <input type="text" class="form-control" id="habilidades" placeholder="Habilidades">
    </div>
  </div>
  <div class="form-group">
    <label for="perfilideal">Redacta tu perfil ideal</label>
    <input type="text" class="form-control" id="perfilideal" placeholder="Persona con actitudes, colaborador...">
  </div>

  <div class="form-row">
    <div class="form-group col-md-6">
      <label for="inputCity">Ciudad</label>
      <input type="text" class="form-control" id="inputCity" placeholder="Ciudad">
    </div>
    <div class="form-group col-md-6">
      <label for="estado">Estado</label>
      <input type="text" class="form-control" id="estado" placeholder="Estado">

    </div>

  </div>
  <div class="form-group">
    <div class="form-check">
      <input class="form-check-input" type="checkbox" id="gridCheck">
      <label class="form-check-label" for="gridCheck">
        Mostrar Talentos de Oro
      </label>
    </div>
  </div>
  <div class="form-group">
    <label for="correo">Correo Electronico</label>
    <input type="mail" class="form-control" id="correo" placeholder="Deja tu correo y nos comunicaremos">
  </div>
  <button type="submit" class="btn btn-primary">Enviar</button>
</form>
            </div>
        </div>
    </div>

    
<div class="talentos-invitacion">
    <div class="contenedor-mediano">
        <h3>Estamos emocionados por que seas parte de Talent Finder Guadalajara</h3>
        <p>
        Este proyecto es realizado con la intención de unir a la comunidad emprendedora y con ganas de sobresalir, demostrando sus aptitudes y habilidades en sus áreas de desempeño. Así mismo brindar un espacio para empleadores de reclutar candidatos aptos, brindándoles un forma de ver el desempeño de los promesas de empleados de cerca, permitiéndoles así una mejor opinión de los prospectos.
        </p>

        <p>
          De esta manera ver como se desenvuelven en las diferentes problemáticas presentadas y el como colaboran con otros usuarios, así mismo ver su proactividad, creatividad y ganas de trabajar, esas son virtudes que un currículo no puede dar a visualizar.
        </p>
       <div style="color:white">
       Unete Ahora
       </div> 
    </div>
</div>
<!--  -->




<!--  -->

<?php
    $usuarios = $usuarioController->getUsuarios();
?>

<div class="lista-talentos container">
      <div class="talentos-grid">
        <?php while($user = $usuarios->fetch_object()) : ?>
         <a href="<?=$url?>talento.php/perfil/<?=$user->id?>">
          <div class="card talento-caja">
            <img class="card-img-top" src="<?=$url?><?=$user->imagen?>" alt="Card image cap">
            <div class="card-body">
              <h5 class="card-title"><?=$user->nombre?> <?=$user->apellido?></h5>
              <div class="texto-perfil">
                <label for="">Descripcion</label><br>
                <?=$user->info?>
                <br>

              </div>
            </div>
          </div></a>
        <?php endwhile ?>
      </div>
</div>






<?php require_once 'includes/footer.php' ?>