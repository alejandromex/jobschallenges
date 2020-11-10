<?php


class ProyectoController{

    private $proyectoModelo;

    public function __construct()
    {
        $this->proyectoModelo = new ProyectoModelo();
    }

    public function RegistrarProyecto()
    {
        if(isset($_POST['registrarproyecto']))
        {
            $titulo = (empty($_POST['titulo']))? "0" : $_POST['titulo'];
            $descripcion = (empty($_POST['descripcion']))? "0" : $_POST['descripcion'];
            $area = (empty($_POST['area']))? "0" : $_POST['area'];
            $habilidades = (empty($_POST['habilidades']))? "0" : $_POST['habilidades'];
            $fechacierre = (empty($_POST['fechacierre']))? "0" : $_POST['fechacierre'];
            $creadorId = $_SESSION['id'];
            $nombreImg = "";
            if(isset($_FILES['foto']))
            {
                $fecha = new DateTime();
                $archivo = $_FILES['foto']['name'];
                $tipo_imagen = $_FILES{'foto'}['type'];
                $size = $_FILES['foto']['size'];
                $nombreImg = $fecha->getTimestamp().$archivo;

                $carpeta_destino = "proyectosimg/";

                move_uploaded_file($_FILES['foto']['tmp_name'],$carpeta_destino.$nombreImg);

            }
            $response = $this->proyectoModelo->RegistrarProyecto($titulo,$descripcion,$area,$habilidades,$nombreImg,$creadorId,0,$fechacierre);
            if($response)
            {

                //sumamos uno a lista de proyectos
                $respuesta = $this->proyectoModelo->sumarProyecto($creadorId);
                echo "
                <script>
                Swal.fire({
                title: 'En Horabuena ! !',
                text: 'Proyecto Registrado con exito',
                icon: 'success',
                confirmButtonText: 'Cool'
              })
              </script>";
              echo "<script>window.location.href='proyectos.php';</script>";

            }
            else{
                echo "
                <script>
                Swal.fire({
                title: 'Upps, Algo ocurrio ! !',
                text: 'Error al registrar proyecto, intente nuevamente',
                icon: 'success',
                confirmButtonText: 'Cool'
              })
              </script>";
            }
            return $response;
        }
    }

    public function getProyectos()
    {
        $proyectos = $this->proyectoModelo->getProyectos();
        return $proyectos;
    }

    public function getProyecto($idpost){
        $proyecto = $this->proyectoModelo->getProyecto($idpost);
        return $proyecto;
    }

    public function MisProyectos($id)
    {
        $proyectos = $this->proyectoModelo->MisProyectos($id);
        return $proyectos;
    }

    public function MisColaboraciones($id)
    {
        $colaboraciones = $this->proyectoModelo->MisColaboraciones($id);
        return $colaboraciones;
    }

    public function getPostulados($idpost,$aceptado){
        $postulados = $this->proyectoModelo->getPostulados($idpost,$aceptado);
        return $postulados;
    }

    public function Postularme()
    {
        if(isset($_POST['postularme'])){
            $idpost = $_POST['idpost'];
            $colaboradorid = $_POST['colaboradorid'];
            $creadorid = $_POST['creadorid'];
            $postularse = $this->proyectoModelo->Postularme($idpost,$colaboradorid,$creadorid);
            if($postularse == "existe")
            {
                echo "
                <script>
                Swal.fire({
                title: 'Ya estas postulado!',
                text: 'Te has postulado anteriormente, puedes cancelarla desde tu perfil (Colaboraciones)',
                icon: 'warning',
                confirmButtonText: 'Cool'
              })
              </script>";
            }
            if($postularse == "ok")
            {
                echo "
                <script>
                Swal.fire({
                title: 'En Horabuena ! !',
                text: 'Te has postulado correctamente',
                icon: 'success',
                confirmButtonText: 'Cool'
              })
              </script>";
            }
        }
    }

    public function AceptarPostulado($idaceptar, $idproyecto)
    {
        $respuesta = $this->proyectoModelo->AceptarPostulado($idaceptar,$idproyecto);
        return $respuesta;
    }

    public function validarAcceso($miid,$idpost){
        $validar = $this->proyectoModelo->validarAcceso($miid, $idpost);
        return $validar;
    }
}




?>