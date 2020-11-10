<?php
    include ('../../Controllers/proyecto.controller.php');
    include ('../../Models/proyecto.modelo.php');
    include ('../../config/dbConnect.php');

class AjaxPostulados{
    public $idaceptar;
    public $idproyecto;

    public function AceptarPostulado()
    {
        $proyectoController = new ProyectoController();
        $mensaje = $proyectoController->AceptarPostulado($this->idaceptar,$this->idproyecto);
        echo $this->idaceptar;
    }


}

if(isset($_POST['idAceptar']))
{
    $ajax = new AjaxPostulados();
    $ajax->idaceptar = $_POST['idAceptar'];
    $ajax->idproyecto = $_POST['idProyecto'];
    $ajax->AceptarPostulado();
}











?>