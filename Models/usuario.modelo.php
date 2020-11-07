<?php

    class UsuarioModelo{
        public $conn;
        public $nombre;
        public $apellido;
        public $email;
        public $puntos;
        public $password;
        public $proyectos;
        public $colaboraciones;
        public $imagen;
        public $area;




        public function __construct()
        {
            $this->conn = Database::connect();
            $this->puntos = 0;
            $this->colaboraciones = 0;
            $this->proyectos = 0;
        }

        public function Register($nombre, $apellido, $email, $password, $area)
        {
            $this->nombre = $nombre;
            $this->apellido = $apellido;
            $this->email = $email;
            $this->password = $password;


            $response = $this->conn->query("INSERT INTO `usuarios` (`id`, `nombre`, `apellido`, `email`, `password`, `puntos`, `proyectos`, `colaboraciones`, `imagen`, `area`, `fecha`, `celular`, `profesion`, `pagina`, `linkgit`,`facebook`, `linklab`, `nick`, `info`, `ingles`,`estado`) VALUES (NULL, '$nombre', '$apellido', '$email', '$password', '0', '0', '0', 'null', '$area', current_timestamp(), '0','0','0', '0','0','0','0', '0','0','0' )");

            if($response)
            {
                return "success";
            }else{
                return "error";
            }
        }

        public function Login($email, $password)
        {
            //Validamos si existe el email
            $email_existe = $this->conn->query("SELECT * from usuarios where email = '$email'");
            $user = $email_existe->fetch_object();
            if($password == $user->password)
            {
                $_SESSION['login'] = "ok";
                $_SESSION['id'] = $user->id;
                return "ok";
            }
            else{
                return "error";
            }

            return null;
        }  
        
        public function MostrarUsuario($id)
        {
            $user = $this->conn->query("SELECT * from usuarios where id = '$id'");
            return $user->fetch_object();
        }

        public function subirImagen($nombreImg,$id){
            $response = $this->conn->query("UPDATE usuarios SET imagen = '$nombreImg' WHERE usuarios.id = '$id';");
            return $response;
        }

        public function getUsuarios(){
            $usuarios = $this->conn->query("SELECT * from usuarios");
            return $usuarios;
        }

        public function actualizarPerfil($nombre,$apellido,$celular,$profesion,$pagina,$github,$gitlab,$facebook,$nick,$info,$ingles,$estado,$id)
        {
            $response = $this->conn->query("UPDATE usuarios SET nombre = '$nombre', apellido = '$apellido', celular = '$celular', profesion = '$profesion', pagina = '$pagina', linkgit = '$github', linklab = '$gitlab', facebook = '$facebook', nick = '$nick', info = '$info', ingles = '$ingles', estado = '$estado' WHERE usuarios.id = '$id';");
            return $response;
        }

        public function validarPassword($usuarioId)
        {
            $response = $this->conn->query("SELECT password from usuarios where id = $usuarioId");
            return $response->fetch_object();
        }

        public function editarCv($personal, $trabajos,$habilidades,$escuela,$id)
        {
            $response = $this->conn->query("UPDATE usuarios SET personal = '$personal', trabajoexp = '$trabajos', skills = '$habilidades', educacion = '$escuela' WHERE usuarios.id = '$id';");
            return $response;
        }
    }


?>