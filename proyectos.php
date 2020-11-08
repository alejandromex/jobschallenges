<?php require_once 'includes/header.php'; ?>

<div class="proyectos">

        <div class="container">

        <ul class="nav nav-tabs menu-proyectos" id="menuProyectos" role="tablist">
            <li class="nav-item">
                <a class="nav-link active" id="home-tab" data-toggle="tab" href="#home" role="tab" aria-controls="home" aria-selected="true">Inicio</a>
            </li>
            <?php if(isset($_SESSION['login'])) : ?>
            <li class="nav-item">
                <a class="nav-link" id="registrar-tab" data-toggle="tab" href="#registrar" role="tab" aria-controls="home" aria-selected="true">Registrar Proyecto</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" id="misproyectos-tab" data-toggle="tab" href="#misproyectos" role="tab" aria-controls="profile" aria-selected="false">Mis proyectos</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" id="colaboracioes-tab" data-toggle="tab" href="#colaboracioes" role="tab" aria-controls="contact" aria-selected="false">Mis Colaboraciones</a>
            </li>
            <?php endif ?>
        </ul>

        <div class="tab-content" id="myTabContent">
            <div class="tab-pane fade show active" id="home" role="tabpanel" aria-labelledby="home-tab">
                <?php require_once 'includes/proyectos/listadoproyectos.php' ?>


            </div>

            <div class="tab-pane fade" id="registrar" role="tabpanel" aria-labelledby="registrar-tab">
               <?php require_once 'includes/proyectos/registrarproyecto.php' ?>

            </div>

            <div class="tab-pane fade" id="misproyectos" role="tabpanel" aria-labelledby="misproyectos-tab">
                <?php require_once 'includes/proyectos/misproyectos.php'; ?>

            </div>

            <div class="tab-pane fade" id="colaboracioes" role="tabpanel" aria-labelledby="colaboracioes-tab">
                <h1>Upss, Actualmente no colaboras en ningun proyecto</h1>


            </div>
        </div>

    </div>



</div>









<?php require_once 'includes/footer.php'; ?>