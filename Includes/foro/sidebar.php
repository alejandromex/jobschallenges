<div class="page-wrapper chiller-theme toggled">
        <a id="show-sidebar" class="btn btn-sm btn-dark" href="#">
          <i class="fas fa-bars"></i>
        </a>
        <nav id="sidebar" class="sidebar-wrapper">
          <div class="sidebar-content">
            <div class="sidebar-brand">
              <a href="<?=$url?>">Salir del foro</a>
              <div id="close-sidebar">
                <i class="fas fa-times"></i>
              </div>
            </div>
            <?php if(isset($_SESSION['login']) && $_SESSION['login'] == 'ok') : ?>
            <div class="sidebar-header">
              <div class="user-pic">
                <img class="img-responsive img-rounded" src="<?=$url?><?=$usuario->imagen?>" alt="User picture">
              </div>
              <div class="user-info">
                <span class="user-name"><?=$usuario->nombre?>
                  <strong><?=$usuario->apellido?></strong>
                </span>
                <span class="user-role" style="text-transform: uppercase;"><?=$usuario->role?></span>
                <span class="user-status">
                  <i class="fa fa-circle"></i>
                  <span>Estado: <?=$usuario->estado?></span>
                </span>
              </div>
            </div>
            <?php endif ?>
            <!-- sidebar-header  -->
            <div class="sidebar-search">
              <div>
                <div class="input-group">
                  <input type="text" class="form-control search-menu" placeholder="Search...">
                  <div class="input-group-append">
                    <span class="input-group-text">
                      <i class="fa fa-search" aria-hidden="true"></i>
                    </span>
                  </div>
                </div>
              </div>
            </div>
            <!-- sidebar-search  -->
            <div class="sidebar-menu">
              <ul>
                <li class="header-menu">
                  <span>General</span>
                </li>
                <li class="sidebar-dropdown">
                  <a href="<?=$url?>foro.php">
                    <i class="fas fa-home"></i>
                    <span>Inicio</span>
                  </a>
                  
                </li>
                <?php if(isset($_SESSION['login']) && $_SESSION['login'] == 'ok') : ?>
                <li class="sidebar-dropdown">
                  <a href="" data-toggle="modal" data-target="#publicarModal">
                  <i class="fas fa-clipboard"></i>
                  <span>Publicar</span>
                  </a>
                 
                </li>
                <?php endif ?>

                <li class="sidebar-dropdown">
                <?php if(isset($_SESSION['login'])) : ?>
                  <a href="<?=$url?>misposts.php">
                    <i class="fas fa-history"></i>
                    <span>Mis publicaciones</span>
                  </a>
             
                </li>
                <li class="sidebar-dropdown">
                  <a href="#">
                    <i class="fas fa-comments"></i>
                    <span>Mis comentarios</span>
                  </a>
                 
                </li>
                <li class="sidebar-dropdown">
                  <a href="#">
                    <i class="fa fa-chart-line"></i>
                    <span>Actividad</span>
                  </a>
               
                </li>

                <li class="sidebar-dropdown">
                  <a href="#">
                    <i class="fas fa-user-friends"></i>
                    <span>Amigos</span>
                  </a>
                
                </li>
                <?php endif ?>

                <?php if(!isset($_SESSION['login'])) : ?>
                <li class="sidebar-dropdown">
                  <a href="#" data-toggle="modal" data-target="#loginModal">
                    <i class="fas fa-sign-in-alt"></i>
                    <span>Iniciar Sesion</span>
                  </a>
                
                </li>

                <li class="sidebar-dropdown">
                  <a href="#" data-toggle="modal" data-target="#registerModal">
                    <i class="fas fa-user-plus"></i>
                    <span>Registrar</span>
                  </a>
                  <?php endif ?>
                
                </li>
                
                <?php if(isset($_SESSION['login'])) : ?>
                <li class="sidebar-dropdown">
                  <a href="<?=$url?>cerrarSesion.php">
                  <i class="fas fa-window-close"></i>
                    <span>Cerrar Sesion</span>
                  </a>
                
                </li>
                <?php endif ?>
            
            </div>
            <!-- sidebar-menu  -->
          </div>
          <!-- sidebar-content  -->
          <div class="sidebar-footer">
            <a href="#">
              <i class="fa fa-bell"></i>
              <span class="badge badge-pill badge-warning notification">3</span>
            </a>
            <a href="#">
              <i class="fa fa-envelope"></i>
              <span class="badge badge-pill badge-success notification">7</span>
            </a>
            <a href="#">
              <i class="fa fa-cog"></i>
              <span class="badge-sonar"></span>
            </a>
            <a href="#">
              <i class="fa fa-power-off"></i>
            </a>
          </div>
        </nav>
        <!-- sidebar-wrapper  -->
