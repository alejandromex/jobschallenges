<?php

class ProyectoModelo
{
    public $conn;


    public function __construct()
    {
        $this->conn = Database::connect();

    }

    public function RegistrarProyecto($titulo,$descripcion,$area,$habilidades,$nombreImg,$creadorId,$finalizado,$fechacierre){

        $creadorId = intval($creadorId);

        $nombreImagen = "proyectosimg/".$nombreImg;
      
        $response = $this->conn->query("insert INTO proyectos values (null,'$titulo','$descripcion','$area','$habilidades','$nombreImagen','$creadorId','$finalizado','$fechacierre',CURRENT_TIME())");
        return $response;
    }

    public function getProyectos()
    {
        $proyectos =$this->conn->query("SELECT * from proyectos");
        return $proyectos;
    }

    public function getProyecto($idpost){
        $proyecto = $this->conn->query("SELECT * from proyectos where id = $idpost");
        return $proyecto;
    }

    public function sumarProyecto($creadorId)
    {
        $proyectos = $this->conn->query("SELECT proyectos from usuarios where id = $creadorId");
        $proyectosTotal = intval($proyectos->fetch_object()->proyectos) + 1;
        $response = $this->conn->query("UPDATE `usuarios` SET `proyectos` = '$proyectosTotal' WHERE `usuarios`.`id` = $creadorId;");
        return $response;
    }

    public function MisProyectos($id){
        $proyectos = $this->conn->query("SELECT * from proyectos where creador = $id");
        return $proyectos;
    }

    public function MisColaboraciones($id)
    {
        $colaboraciones = $this->conn->query("select proyectos.titulo, proyectos.area, proyectos.imagen, proyectos.descripcion, proyectos.habilidades, proyectos.creador, proyectos.fechacierre, proyectos.fecha, proyectos.id from colaboraciones join proyectos on proyectos.creador = colaboraciones.creadorid where colaboraciones.colaboradorid = $id and aceptado = 1");
        return $colaboraciones;
    }

    public function getPostulados($idpost,$aceptado){
        $postulados = $this->conn->query("SELECT usuarios.nombre, usuarios.apellido, usuarios.id FROM `colaboraciones` join usuarios on usuarios.id = colaboradorid WHERE colaboraciones.proyectoid = $idpost and colaboraciones.aceptado = '$aceptado'");
        return $postulados;
    }

    public function Postularme($idpost,$colaboradorid,$creadorId)
    {
        //Comprobamos si ya existe la postulacion
        $valida = $this->conn->query("SELECT * from colaboraciones where proyectoid = $idpost and colaboradorid = $colaboradorid");
        if($valida->fetch_object() != null)
        {
            return "existe";
        }
        $postularme = $this->conn->query("INSERT INTO colaboraciones values (null, '$idpost', '$colaboradorid', '$creadorId', '0')");
        return $postularme = "ok";
    }

    public function AceptarPostulado($idaceptar,$idproyecto)
    {
       //Sumamos una colaboracion al id
        $colaboracion = $this->conn->query("SELECT colaboraciones from usuarios where id = $idaceptar")->fetch_object();
        $totalColaboraciones = intval($colaboracion->colaboraciones)+1;
        $this->conn->query("UPDATE `usuarios` SET `colaboraciones` = '$totalColaboraciones' WHERE `usuarios`.`id` = $idaceptar;");
        $respuesta = $this->conn->query("UPDATE `colaboraciones` SET `aceptado` = '1' WHERE `colaboraciones`.`proyectoid` = $idproyecto and `colaboraciones`.`colaboradorid` = $idaceptar;");
        return $respuesta;
    }

    public function validarAcceso($miid, $idpost){
        $validar = $this->conn->query("SELECT * from colaboraciones where colaboradorid = '$miid' and proyectoid = '$idpost' and aceptado = '1'");
        return $validar;
    }
}


?>
