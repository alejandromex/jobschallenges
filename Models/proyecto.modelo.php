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
}


?>
<!-- //UPDATE `usuarios` SET `proyectos` = '1' WHERE `usuarios`.`id` = 36; -->