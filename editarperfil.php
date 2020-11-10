<?php
require_once "includes/header.php";

$return = "aviso";

$usuarioModelo = new UsuarioModelo();

if(isset($_POST['submit']))
{

    // Validamos password
    if(isset($_POST['password']))
    {

        $usuarioId = $_SESSION['id'];
        $response = $usuarioModelo->validarPassword($usuarioId)->password;
        $password_hash = crypt($_POST["password"], '$2a$07$asxx54ahjppf45sd87a5a4dDDGsystemdev$');
        if($response != $password_hash)
        {
            $return = "passwordMalo";
            var_dump("Entra aqui en password malo");

        }



    }else{
        $return = "passwordNoEnviado";
        var_dump("Entra aqui en password no enviado");
    }

    if($return == "aviso")
    {

        $nick;
        $nombre;
        $apellido;
        $celuar;
        $etiqueta;
        $estado;
        $ingles;
        $profesion;
        $pagina = "0";
        $github = "0";
        $gitlab = "0";
        $facebook = "0";
        $info;
        $password;
        if(!empty($_POST['name']) && !empty($_POST['lastname']) && !empty($_POST['nickname']) && !empty($_POST['celular']) && !empty($_POST['etiqueta'])
        && !empty($_POST['estado']) && !empty($_POST['ingles']) && !empty($_POST['profesion']) && !empty($_POST['info']))
        {

            $nick = $_POST['nickname'];
            $nombre = $_POST['name'];
            $apellido = $_POST['lastname'];
            $celular = $_POST['celular'];
            $etiqueta = $_POST['etiqueta'];
            $estado = $_POST['estado'];
            $ingles = $_POST['ingles'];
            $profesion = $_POST['profesion'];
            // $pagina = $_POST['pagina'];
            $info = $_POST['info'];
            if(isset($_POST['website']))
            {
                $pagina = $_POST['website'];
            }
    
            if(isset($_POST['github']))
            {
                $github = $_POST['github'];
            }
    
            if(isset($_POST['gitlab']))
            {
                $gitlab = $_POST['gitlab'];
            }
    
            if(isset($_POST['facebook']))
            {
                $facebook = $_POST['facebook'];
            }
    
    
            $response = $usuarioModelo->actualizarPerfil($nombre,$apellido,$celular,$profesion,$pagina,$github,$gitlab,$facebook,$nick,$info,$ingles,$estado,$etiqueta,$_SESSION['id']);
            var_dump($response);
        }
        else{
            var_dump("No llenaste todos los campos");
        }

    }
}


?>

<?php if($return == "passwordMalo") : ?>
    <script>window.location.href="<?=$url?>talento.php/perfil/<?=$_SESSION['id']?>/passwordIncorrecto";</script>
<?php endif ?>

<?php if($return == "passwordNoEnviado") : ?>
    <script>window.location.href="<?=$url?>talento.php/perfil/<?=$_SESSION['id']?>/passwordNoEnviado";</script>
<?php endif ?>

<?php if($return == "aviso") : ?>
    <script>window.location.href="<?=$url?>talento.php/perfil/<?=$_SESSION['id']?>";</script>
<?php endif ?>
