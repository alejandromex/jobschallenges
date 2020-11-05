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