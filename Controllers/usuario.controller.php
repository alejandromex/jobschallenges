<?php

class UsuarioController{

    private $usuarioModelo;

    public function __construct()
    {
        $this->usuarioModelo = new UsuarioModelo();
    }

    public function Register()
    {
        if(isset($_POST['registrar']) && $_POST['registrar'] != "")
        {
          $nombre = $_POST['nombre'];
          $apellido = $_POST['apellido'];
          $email = $_POST['email'];
          $area = $_POST['area'];

          

          if($nombre != "" && $apellido != "" && $email != "" && $_POST['password'] != "" && $area != "")
          {

                $password_hash = crypt($_POST["password"], '$2a$07$asxx54ahjppf45sd87a5a4dDDGsystemdev$');
                $response = $this->usuarioModelo->Register($nombre, $apellido, $email, $password_hash, $area);
                return $response;

          }
          else{
              echo "
              <script>
              Swal.fire({
              title: 'Error al registrarse!',
              text: 'Ingrese todos los datos para registrarse correctamente',
              icon: 'error',
              confirmButtonText: 'Cool'
            })
            </script>";
          }

        }

    }

    public function registerReclutador()
    {
      if(isset($_POST['registrar-reclutador']) && $_POST['registrar-reclutador'] != "")
      {
        $nombre = $_POST['nombre'];
        $apellido = $_POST['apellido'];
        $email = $_POST['email'];
        $area = $_POST['area'];
        $empresa = $_POST['empresa'];
        $puesto = $_POST['puesto'];

        

        if($nombre != "" && $apellido != "" && $email != "" && $_POST['password'] != "" && $area != "" && $empresa != "" && $puesto != "")
        {

              $password_hash = crypt($_POST["password"], '$2a$07$asxx54ahjppf45sd87a5a4dDDGsystemdev$');
              //Comprobamos imagen y subimos
              $fecha = new DateTime();
              #webdebe.com
              if(isset($_FILES['comprobante'])) {

                  $archivo = $_FILES['comprobante']['name'];
                  $tipo_imagen = $_FILES{'comprobante'}['type'];
                  $size = $_FILES['comprobante']['size'];
                  $comprobante = $fecha->getTimestamp().$archivo;

                  $carpeta_destino = "comprobatesReclutador/";

                  move_uploaded_file($_FILES['comprobante']['tmp_name'],$carpeta_destino.$comprobante);
                  

              }
              else{
                echo "
                <script>
                Swal.fire({
                title: 'Error al registrarse!',
                text: 'Ingrese todos los datos para registrarse correctamente',
                icon: 'error',
                confirmButtonText: 'Ok'
              })
              </script>";
              }
              $response = $this->usuarioModelo->RegisterColaborador($nombre, $apellido, $email, $password_hash, $area,$empresa,$puesto,$comprobante);
              if($response == "success")
              {
                  echo "
                  <script>
                  Swal.fire({
                  title: 'Registro casi completo!',
                  text: 'Espere a que un administrador valide su comprobante',
                  icon: 'success',
                  confirmButtonText: 'Cool'
                })
                </script>";
              }

        }
        else{
            echo "
            <script>
            Swal.fire({
            title: 'Error al registrarse como reclutador!',
            text: 'Ingrese todos los datos para registrarse correctamente',
            icon: 'error',
            confirmButtonText: 'Cool'
          })
          </script>";
        }

      }
      
    }


    public function Login()
    {
        if(isset($_POST['login']))
        {
            if(isset($_POST['email']) && $_POST['email'] != "")
            {
                $email = $_POST['email'];
                $password= $_POST['password'];
                $password_hash = crypt($_POST["password"], '$2a$07$asxx54ahjppf45sd87a5a4dDDGsystemdev$');
                $response = $this->usuarioModelo->Login($email,$password_hash);

                if($response == "no activo")
                {
                  echo "
                  <script>           
                    Swal.fire({
                      position: 'center',
                      icon: 'warning',
                      title: 'usuario reclutador no verificado',
                      showConfirmButton: false,
                      timer: 1500
                    })
                </script>";
                }
                    
                if($response == "ok")
                {
                  echo "
                        <script>           
                          Swal.fire({
                            position: 'center',
                            icon: 'success',
                            title: 'Login Correcto',
                            showConfirmButton: false,
                            timer: 1500
                          })
                      </script>";
              
                      echo "<script>window.location.href='login.php';</script>";
                      exit;

                }
                
                else{
                    return $response;

                }


            }
            else{
              echo "
              <script>           
                Swal.fire({
                  position: 'center',
                  icon: 'error',
                  title: 'Contraseña y/o email incorrecto',
                  showConfirmButton: false,
                  timer: 1500
                })
            </script>";
            }
        }

    }

    public function MostrarUsuario($id)
    {
      $usuario = $this->usuarioModelo->MostrarUsuario($id);
      return $usuario;
    }

    public function subirImagen($nombreImg, $id){
        $response = $this->usuarioModelo->subirImagen($nombreImg,$id);
        return $response;
    }

    public function getUsuarios(){
      $usuarios = $this->usuarioModelo->getUsuarios();
      return $usuarios;
    }
}




?>