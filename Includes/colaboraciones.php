<!-- <link href="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css"> -->
<!-- <script src="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script> -->
<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>

<div class="container emp-profile">
            <form method="post" action="<?=$url?>subirImagen.php" enctype="multipart/form-data">
                <div class="row">
                    <div class="col-md-4">
                        <div class="profile-img">
                            <img src="<?=$url?><?=$usuario->imagen?>" alt=""/>
                            <?php if(isset($_SESSION['id'])) : ?>
                            <?php if($usuarioId == $_SESSION['id']) : ?>
                            <div class="file btn btn-lg btn-primary">
                                Cambiar Foto
                                <input type="file" name="archivo" />
                            </div>
                            <?php endif ?>
                            <?php endif ?>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="profile-head">
                                    <h5>
                                        <?=$usuario->nombre?>
                                    </h5>
                                    <h6>
                                        <?= $usuario->profesion?>
                                    </h6>
                                    <p class="proile-rating">RANKINGS : <span><?=$usuario->puntos?>/10</span></p>
                            <ul class="nav nav-tabs" id="myTab" role="tablist">
                                <li class="nav-item">
                                    <a class="nav-link active" id="home-tab" data-toggle="tab" href="#home" role="tab" aria-controls="home" aria-selected="true">Acerca</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" id="profile-tab" data-toggle="tab" href="#profile" role="tab" aria-controls="profile" aria-selected="false">Historial</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" id="profile-tab" data-toggle="tab" href="#proyectos" role="tab" aria-controls="proyectos" aria-selected="false">Mis proyectos</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" id="profile-tab" data-toggle="tab" href="#colaboraciones" role="tab" aria-controls="colaboraciones" aria-selected="false">Mis colaboraciones</a>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <?php if(isset($_SESSION['id'])) : ?>
                    <?php if($usuarioId == $_SESSION['id']) : ?>
                    <div class="col-md-2">
                        <input type="submit" name="subir" class="profile-edit-btn" name="btnAddMore" value="Subir Imagen"/>
                    </div>
                    <?php  endif?>
                    <?php  endif?>
                </div>
                <div class="row">
                    <div class="col-md-4">
                        <div class="profile-work">
                            <p>WORK LINK</p>
                            <a href="<?=$usuario->pagina?>" target="_blank">Pagina web</a><br>
                            <a href="<?=$usuario->linkgit?>" target="_blank">GitHub</a><br/>
                            <a href="<?=$usuario->linklab?>" target="_blank">GitLab</a>
                            <p>SKILLS</p>
                            <a href="">Web Designer</a><br/>
                            <a href="">Web Developer</a><br/>
                            <a href="">WordPress</a><br/>
                            <a href="">WooCommerce</a><br/>
                            <a href="">PHP, .Net</a><br/>
                        </div>
                    </div>
                    <div class="col-md-8">
                        <div class="tab-content profile-tab" id="myTabContent">
                            <div class="tab-pane fade show active" id="home" role="tabpanel" aria-labelledby="home-tab">
                                        <div class="row">
                                            <div class="col-md-6">
                                                <label>Id de usuario</label>
                                            </div>
                                            <div class="col-md-6">
                                                <p><?=$usuario->id?></p>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-md-6">
                                                <label>Nick Name</label>
                                            </div>
                                            <div class="col-md-6">
                                                <p><?=$usuario->nick?></p>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-md-6">
                                                <label>Nombre</label>
                                            </div>
                                            <div class="col-md-6">
                                                <p><?=$usuario->nombre?></p>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-md-6">
                                                <label>Correo E.</label>
                                            </div>
                                            <div class="col-md-6">
                                                <p><?=$usuario->email?></p>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-md-6">
                                                <label>Celular</label>
                                            </div>
                                            <div class="col-md-6">
                                                <p><?=$usuario->celular?></p>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-md-6">
                                                <label>Profesion</label>
                                            </div>
                                            <div class="col-md-6">
                                                <p><?=$usuario->profesion?></p>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-md-6">
                                                <label>Nivel de ingles</label>
                                            </div>
                                            <div class="col-md-6">
                                                <p><?=$usuario->ingles?></p>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-md-6">
                                                <label>Estado</label>
                                            </div>
                                            <div class="col-md-6">
                                                <p><?=$usuario->estado?></p>
                                            </div>
                                        </div>
                            </div> 
                            <div class="tab-pane fade" id="profile" role="tabpanel" aria-labelledby="profile-tab">
                                        <div class="row">
                                            <div class="col-md-6">
                                                <label>Nivel de usuario</label>
                                            </div>
                                            <div class="col-md-6">
                                                <p>Talento de bronce</p>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-md-6">
                                                <label>Proyectos Totales</label>
                                            </div>
                                            <div class="col-md-6">
                                                <p><?=$usuario->proyectos?></p>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-md-6">
                                                <label>Colaboraciones Totales</label>
                                            </div>
                                            <div class="col-md-6">
                                                <p><?=$usuario->colaboraciones?></p>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-md-6">
                                                <label>Puntos Totales</label>
                                            </div>
                                            <div class="col-md-6">
                                                <p><?=$usuario->puntos?></p>
                                            </div>
                                        </div>

                                
                            </div>

                            <div class="tab-pane fade" id="proyectos" role="tabpanel" aria-labelledby="profile-tab">
                                proyectos
                            </div>

                            <div class="tab-pane fade" id="colaboraciones" role="tabpanel" aria-labelledby="profile-tab">
                                colaboraciones
                            </div>
                        </div>
                    </div>
                </div>
            </form>           
        </div>