<?php include ('includes/header.php'); ?>

<?php 
  
  if(!isset($_SESSION['login']))
  {
      echo "<script>window.location.href='".$url."proyectos.php';</script>";
  }


  $rutas = $_SERVER["REQUEST_URI"];
  $rutas = explode("/", $rutas);
  $show = false;
  if(isset($rutas[3]) && $rutas[3] != "")
  {
      $idpost = $rutas[3];
      if(!is_numeric($idpost))
      {
          echo "<script>window.location.href='".$url."proyectos.php';</script>";
      }
  }

  else{
  echo "<script>window.location.href='".$url."proyectos.php';</script>";
  }
  $proyectoController = new ProyectoController();
  $usuarioController = new UsuarioController();
  $proyectos = $proyectoController->getProyecto($idpost);
  $proyecto = $proyectos->fetch_object();

  if($proyecto == null)
  { ?>
      
      <div class="proyectos">
          <div class="contenedor-mediano">

              <h1> Oops!! <br> No existe proyecto con ese ID</h1>
              <p class="error404">
                  404
              </p>
          </div>
      </div>
   <?php 
   }

   //Validamos si tienes permitido entrar aqui
   $miid = $_SESSION['id'];
   $acceso = false;
   $proyectoController = new ProyectoController();
   $valido = $proyectoController->validarAcceso($miid,$idpost)->fetch_object();
   if($miid == $proyecto->creador)
   {
       $acceso = true;
   }
   else if($valido != null)
   {
       $acceso = true;
   }





?>

<div class="proyectos">
   <?php if(!$acceso) : ?>
    <div class="contenedor-mediano">

        <h1> Oops!! <br> No tienes acceso a este proyecto</h1>
        <p class="error404">
            500
        </p>
    </div>
    <?php else : ?>
        <div class="container">
        <h1 class="text-center"><?=$proyecto->titulo?></h1>

        <div class="jumbotron">
        <h1 class="display-4">Hello, world!</h1>
        <p class="lead">This is a simple hero unit, a simple jumbotron-style component for calling extra attention to featured content or information.</p>
        <hr class="my-4">
        <p>It uses utility classes for typography and spacing to space content out within the larger container.</p>
        <p class="lead">
            <a class="btn btn-primary btn-lg" href="#" role="button">Learn more</a>
        </p>
        </div>


        </div>






   <?php endif ?>

</div>







<?php include ('includes/footer.php'); ?>