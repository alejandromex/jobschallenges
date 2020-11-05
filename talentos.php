<?php session_start(); ?>
<?php
    $url = "http://localhost/JobsChallenge/"; 

     require_once 'includes/header.php'; 

     $usuarioController = new UsuarioController();
?>

<div class="listado-talentos ">
    <div class="contenedor">
        <div class="presentacion-talento">
            <h2>Talentos</h2>
            <div class="talentos-descripcion">
                <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Eos veniam nobis temporibus veritatis dignissimos. Fugit possimus porro, illo harum, vel aliquam, optio doloremque ducimus dicta pariatur atque saepe molestiae ratione.</p>
                <p>Lorem ipsum dolor sit amet consectes temporibus veritatis dignissimos. Fugit possimus porro, illo harum, vel aliquam, optio doloremque ducimus dicta pariatur atque saepe molestiae ratione.</p>
                <p>s. Fugit possimus porro, illo harumestiae ratione.</p>
                <p>Lorem ipsum dolor sit amet consecteturos. Fugit possimus porro, illo harum, vel aliquam, optio doloremque ducimus dicta pariatur atque saepe molestiae ratione.</p>
                <form>
  <div class="form-row">
    <div class="form-group col-md-6">
      <label for="inputEmail4">Email</label>
      <input type="email" class="form-control" id="inputEmail4" placeholder="Email">
    </div>
    <div class="form-group col-md-6">
      <label for="inputPassword4">Password</label>
      <input type="password" class="form-control" id="inputPassword4" placeholder="Password">
    </div>
  </div>
  <div class="form-group">
    <label for="inputAddress">Address</label>
    <input type="text" class="form-control" id="inputAddress" placeholder="1234 Main St">
  </div>
  <div class="form-group">
    <label for="inputAddress2">Address 2</label>
    <input type="text" class="form-control" id="inputAddress2" placeholder="Apartment, studio, or floor">
  </div>
  <div class="form-row">
    <div class="form-group col-md-6">
      <label for="inputCity">City</label>
      <input type="text" class="form-control" id="inputCity">
    </div>
    <div class="form-group col-md-4">
      <label for="inputState">State</label>
      <select id="inputState" class="form-control">
        <option selected>Choose...</option>
        <option>...</option>
      </select>
    </div>
    <div class="form-group col-md-2">
      <label for="inputZip">Zip</label>
      <input type="text" class="form-control" id="inputZip">
    </div>
  </div>
  <div class="form-group">
    <div class="form-check">
      <input class="form-check-input" type="checkbox" id="gridCheck">
      <label class="form-check-label" for="gridCheck">
        Check me out
      </label>
    </div>
  </div>
  <button type="submit" class="btn btn-primary">Sign in</button>
</form>
            </div>
        </div>
    </div>

    
<div class="talentos-invitacion">
    <div class="contenedor-mediano">
        <h3>Estamos emocionados por que seas parte de Talent Finder Guadalajara</h3>
        <p>
        A high-quality American university education is now at your fingertips. With a UX Design certification from UC San Diego Extension, you will acquire the skills and knowledge to launch a successful career in tech. Our program is designed to be convenient and flexible for working professionals. Attend classes online, join discussion groups, and listen to guest lectures by industry professionals from prominent Silicon Valley companies.
        </p>

        <p>
        Top universities, like Universidad de Guadalajara and Tecnológico de Monterrey, are building the talent Mexico needs to grow and develop its tech sector. In recent years, Guadalajara has turned itself into a global center for research and development, programming, and design. International investors are paying close attention to Mexico, and the 500 Startups program is providing Latin American startups with funding and mentorship to grow their businesses. Our program can get you trained to work in Mexico’s growing tech sector in just 24 weeks.
        </p>
    </div>
</div>
<!--  -->


<nav class="navbar navbar-expand-lg bg-talento">
  <a class="navbar-brand ">Encuentra y conectate con tu talento ideal</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon expandir"></span>
  </button>

  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav mr-auto">
      <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          Temas
        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
          <a class="dropdown-item" href="#">Software</a>
          <a class="dropdown-item" href="#">Hardware</a>
          <a class="dropdown-item" href="#">Medicina</a>
          <a class="dropdown-item" href="#">Derecho</a>
          <a class="dropdown-item" href="#">Yoga</a>
          <a class="dropdown-item" href="#">Matematicas</a>
          <a class="dropdown-item" href="#">IT</a>
          <a class="dropdown-item" href="#">Redes</a>
          <a class="dropdown-item" href="#">Carpinteria</a>
          <a class="dropdown-item" href="#">Fianzas</a>
          <a class="dropdown-item" href="#">Administracion</a>
          <a class="dropdown-item" href="#">Meditacion</a>
          <a class="dropdown-item" href="#">Superacion Personal</a>
          <div class="dropdown-divider"></div>
          <a class="dropdown-item" href="#">¿Te interesa ser un talento?</a>
        </div>
      </li>
    </ul>
    <form class="form-inline my-2 my-lg-0">
      <input class="form-control mr-sm-2" type="search" placeholder="Buscar" aria-label="Search">
      <button class="btn btn-busqueda my-2 my-sm-0" type="submit">Buscar talento</button>
    </form>

  </div>
</nav>

<!--  -->

<?php
    $usuarios = $usuarioController->getUsuarios();
?>

<div class="lista-talentos container">
      <div class="talentos-grid">
        <?php while($user = $usuarios->fetch_object()) : ?>
         <a href="<?=$url?>talento.php/perfil/<?=$user->id?>">
          <div class="card">
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