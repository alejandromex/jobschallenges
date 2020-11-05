
<!-- Modal -->
<div class="modal fade " id="registerModal" tabindex="-1" role="dialog" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header bg-dark text-white">
        <h5 class="modal-title " id="exampleModalLabel">Registro</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
            <?php require 'includes/formulario-registro.php' ?>
      </div>
      <div class="modal-footer">
    <p>¿Ya tienes una cuenta?<a class="nav-link" href="#" data-toggle="modal" data-target="#loginModal">Iniciar Sesion</a></p>
      </div>
    </div>
  </div>
</div>


<!-- Modal iniciar sesion -->
<div class="modal fade " id="loginModal" tabindex="-1" role="dialog" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header bg-dark text-white">
        <h5 class="modal-title " id="exampleModalLabel">Iniciar Sesion</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
            <?php include 'includes/formulario-inicio.php' ?>
      </div>
      <div class="modal-footer">
      <p>¿No tienes una cuenta?<a class="nav-link" href="#"  data-toggle="modal" data-target="#registerModal">Registrarse</a></p>
      </div>
    </div>
  </div>
</div>


<footer>
    <div class="container">
        <div class="encabezado-footer">
            <ul>
                <li class="lomasbuscado">Lo mas buscado</li>
                <li>Tecnologia</li>
                <li>Ciencias Humanas</li>
                <li>Administracion</li>
                <li>Hardware</li>
                <li>Software</li>
                <li>Recursos Humanos</li>
                <li>IT</li>
            </ul>
        </div>
    
        <div class="contenido-footer">
            <div class="redes-sociales">
                <h2>TFGJ</h2>
                Sumando <span>FUERZAS</span>, cambiamos el <span>MUNDO</span>.
                <p>Siguenos:</p>
                <div class="redes">
                    <i class="fab fa-facebook-square"></i>
                    <i class="fab fa-twitter-square"></i>
                    <i class="fab fa-instagram-square"></i>
                    <i class="fab fa-youtube-square"></i>
                    <i class="fab fa-linkedin"></i>
                </div>
            </div>

            <div class="contacto">
                <h2>Contacto</h2>
                <ul>
                    <li> <span>Correo:</span> Correo@correo.com</li>
                    <li> <span>Telefono:</span> +52 686-8751-542</li>
                </ul>
            </div>

            <div class="informacion">
                <h2>Informacion</h2>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Sed aperiam dolores maxime, dolor, autem facilis iusto, ipsam vero ipsum accusantium omnis necessitatibus assumenda consectetur esse veniam accusamus explicabo repellendus. Similique.</p>
               <img src="http://localhost/JobsChallenge/Assets/img/labrats.png" alt="">
            </div>
        </div>
    </div>

</footer>


<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
    <script src="http://localhost/JobsChallenge/Assets/js/main.js"></script>
    <script src="http://localhost/JobsChallenge/Assets/js/carrucel.js"></script>
    <script src="http://localhost/JobsChallenge/Assets/js/lightbox.js"></script>
    
</body>
</html>