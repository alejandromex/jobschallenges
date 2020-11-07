<?php
session_start();
require_once 'config/dbConnect.php';
require_once 'Models/usuario.modelo.php';

$usuariosModelo = new UsuarioModelo();

    if(isset($_POST['submitc']))
    {
        
        $personal = empty($_POST['personal'])? '0' : $_POST['personal'];
        $trabajo1 = empty($_POST['trabajo1'])? '0' : $_POST['trabajo1'];
        $fecha1 = empty($_POST['fecha1'])? '0' : $_POST['fecha1'];
        $labores1 = empty($_POST['labores1'])? '0' : $_POST['labores1'];
        $trabajo2 = empty($_POST['trabajo2'])? '0' : $_POST['trabajo2'];
        $fecha2 = empty($_POST['fecha2'])? '0' : $_POST['fecha2'];
        $labores2 = empty($_POST['labores2'])? '0' : $_POST['labores2'];
        $trabajo3 = empty($_POST['trabajo3'])? '0' : $_POST['trabajo3'];
        $fecha3 = empty($_POST['fecha3'])? '0' : $_POST['fecha3'];
        $labores3 = empty($_POST['labores3'])? '0' : $_POST['labores3'];
        $habilidades = empty($_POST['habilidades'])? '0' : $_POST['habilidades'];
        $escuela = empty($_POST['escuela'])? '0' : $_POST['escuela'];
        $fechaescuela = empty($_POST['fechaescuela'])? '0' : $_POST['fechaescuela'];
        $carrera = empty($_POST['carrera'])? '0' : $_POST['carrera'];

        $userId = $_SESSION['id'];

        $trabajos = array(
            'titulo1' => $trabajo1,
            'titulo2' => $trabajo2,
            'titulo3' => $trabajo3,
            'fecha1' => $fecha1,
            'fecha2' => $fecha3,
            'fecha3' => $fecha2,
            'labores1' => $labores1,
            'labores2' => $labores2,
            'labores3' => $labores3
        );

        $escuelas = array(
            'nombre' => $escuela,
            'fecha' => $fechaescuela,
            'carrera' => $carrera
        );
        
        $json_escuela = json_encode($escuelas);
        $json_trabajos = json_encode($trabajos);

       $response =  $usuariosModelo->editarCv($personal, $json_trabajos,$habilidades,$json_escuela,$userId);
       var_dump($response);

    }



?>

<script>window.location.href="http://localhost/JobsChallenge/talento.php/perfil/<?=$_SESSION['id']?>";</script>

