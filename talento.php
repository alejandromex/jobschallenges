<?php
     require_once 'includes/header.php'; 


     $rutas = $_SERVER["REQUEST_URI"];
     $rutas = explode("/", $rutas);
     $usuarioId;
    if($rutas[3] != "perfil")
    {
        echo "<script>window.location.href='http://localhost/JobsChallenge/error404.php';</script>";

    }
    if(count($rutas)<4 || $rutas[4] == null)
    {
        echo "<script>window.location.href='http://localhost/JobsChallenge/error404.php';</script>";
    }
    else{
        $usuarioId =$rutas[4];
    }

    $usuarioController = new UsuarioController();
    $usuario = $usuarioController->MostrarUsuario($usuarioId);
    $experiencia = $usuario->trabajoexp;

    $experiencia = $usuario->trabajoexp;
    $escuela = $usuario->educacion;
    
    $experiencia_array = json_decode( preg_replace('/[\x00-\x1F\x80-\xFF]/', '', $experiencia), true );
    $educacion_array = json_decode( preg_replace('/[\x00-\x1F\x80-\xFF]/', '', $escuela), true );

    if($usuario == null)
    {
        echo "<script>window.location.href='http://localhost/JobsChallenge/talentos.php';</script>";

    }

    if(count($rutas) >= 5)
    {
        if(isset($rutas[5]) && $rutas[5] == "passwordIncorrecto")
        {
            echo "
                        <script>           
                          Swal.fire({
                            position: 'center',
                            icon: 'error',
                            title: 'Contraseña incorrecta, imposible editar',
                            showConfirmButton: false,
                            timer: 2500
                          })
                      </script>";
        }
    }

?>
<!-- Nav tabs -->
<div class="talento-perfil">
    <div class="contenedor-perfil">
        <div class="row detalles-perfil">
            <div class="col-md-6 col-sm-12">
                
                Hello



                <p class="text-white">I'm  <span class="color-rosa"><?=$usuario->nombre?><span></p>
                <?=$usuario->profesion?> <span class="color-rosa">&&</span> mobile developer
                <br>
                   <div class="area-usuario"> <?=$usuario->area?></div>
                <div class="redes-perfil">
                    <i class="fab fa-facebook-square"></i>
                    <i class="fab fa-twitter-square"></i>
                    <i class="fab fa-instagram-square"></i>
                    <i class="fab fa-youtube-square"></i>
                    <i class="fab fa-linkedin"></i>
                </div>
            </div>

            <div class="col-md-6 col-sm-12">
                <img src="<?=$url?><?=$usuario->imagen?>" alt="">
            </div>
        </div>
    </div>
    <div class="container">
    <ul class="nav nav-pills mb-3 " id="pills-tab" role="tablist">
        <li class="nav-item ">
            <a class="nav-link active bg-dark" id="pills-home-tab" data-toggle="pill" href="#pills-home" role="tab" aria-controls="pills-home" aria-selected="true">Curriculum</a>
        </li>
        <?php if(isset($_SESSION['id'])) : ?>
        <?php if($usuarioId == $_SESSION['id']) : ?>
        <li class="nav-item">
            <a class="nav-link bg-dark" id="pills-profile-tab" data-toggle="pill" href="#pills-profile" role="tab" aria-controls="pills-profile" aria-selected="false">Editar Perfil</a>
        </li>
        <?php endif ?>
        <?php endif ?>
        <li class="nav-item">
            <a class="nav-link bg-dark" id="pills-colaboraciones-tab" data-toggle="pill" href="#pills-colaboraciones" role="tab" aria-controls="pills-colaboraciones" aria-selected="false">Perfil</a>
        </li>
        <li class="nav-item">
            <a class="nav-link bg-dark" id="pills-contact-tab" data-toggle="pill" href="#pills-contact" role="tab" aria-controls="pills-contact" aria-selected="false">Charlar/Contactar</a>
        </li>

    </ul>
        <div class="tab-content" id="pills-tabContent">
            <div class="tab-pane fade show active" id="pills-home" role="tabpanel" aria-labelledby="pills-home-tab">
            <div class="btn-group" role="group" aria-label="Basic example">
            <button type="button" class="btn btn-info">Print</button>
            <button type="button" class="btn btn-success">Copy</button>
            </div>
                <?php include_once 'Assets/CV-Template/index.php'; ?>
            </div>
            <div class="tab-pane fade" id="pills-profile" role="tabpanel" aria-labelledby="pills-profile-tab">
                <?php include_once 'includes/profile.php'; ?>
            </div>
            <div class="tab-pane fade" id="pills-contact" role="tabpanel" aria-labelledby="pills-contact-tab">
                <?php include_once 'includes/contactar.php' ?>

            </div>
            <div class="tab-pane fade" id="pills-colaboraciones" role="tabpanel" aria-labelledby="pills-colaboraciones-tab">
                <?php include_once 'includes/colaboraciones.php' ?>
            </div>
        </div>
    
    </div> 
</div>



<?php require_once 'includes/footer.php' ?>