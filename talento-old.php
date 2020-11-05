<?php session_start(); ?>
<?php
    $url = "http://localhost/JobsChallenge/"; 

     require_once 'includes/header.php'; 
?>
<!-- Nav tabs -->
<div class="talento-perfil">
    <div class="contenedor-perfil">
        <div class="row detalles-perfil">
            <div class="col-md-6 col-sm-12">
                Hello
                <p class="text-white">I'm  <span class="color-rosa">Alejandro<span></p>
                Full stack Software developer <span class="color-rosa">&&</span> mobile developer
                <div class="redes-perfil">
                    <i class="fab fa-facebook-square"></i>
                    <i class="fab fa-twitter-square"></i>
                    <i class="fab fa-instagram-square"></i>
                    <i class="fab fa-youtube-square"></i>
                    <i class="fab fa-linkedin"></i>
                </div>
            </div>

            <div class="col-md-6 col-sm-12">
                <img src="https://scontent-sjc3-1.xx.fbcdn.net/v/t1.0-9/106308103_3274872439244316_4956531632813509513_n.jpg?_nc_cat=109&ccb=2&_nc_sid=09cbfe&_nc_ohc=t8QMfFZTr4oAX-8y29c&_nc_ht=scontent-sjc3-1.xx&oh=936922d1835fd0d48832cf7c57407725&oe=5FC63DE2" alt="">
            </div>
        </div>
    </div>
    <div class="container">
    <ul class="nav nav-pills mb-3 " id="pills-tab" role="tablist">
        <li class="nav-item ">
            <a class="nav-link active bg-dark" id="pills-home-tab" data-toggle="pill" href="#pills-home" role="tab" aria-controls="pills-home" aria-selected="true">Curriculum</a>
        </li>
        <li class="nav-item">
            <a class="nav-link bg-dark" id="pills-profile-tab" data-toggle="pill" href="#pills-profile" role="tab" aria-controls="pills-profile" aria-selected="false">Editar Perfil</a>
        </li>
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
            <div class="tab-pane fade" id="pills-contact" role="tabpanel" aria-labelledby="pills-contact-tab">Contacto</div>
            <div class="tab-pane fade" id="pills-colaboraciones" role="tabpanel" aria-labelledby="pills-colaboraciones-tab">
                <?php include_once 'includes/colaboraciones.php' ?>
            </div>
        </div>
    
    </div>
</div>



<?php require_once 'includes/footer.php' ?>