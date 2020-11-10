<?php    require_once 'includes/header.php';


        if(!isset($_SESSION['login']))
        {
            echo "<script>window.location.href='".$url."proyectos.php';</script>";
        }


        $rutas = $_SERVER["REQUEST_URI"];
        $rutas = explode("/", $rutas);
        $show = false;
        if(isset($rutas[3]) && $rutas[3] != "")
        {
            $idpost = $rutas[3];
            if(!is_numeric($idpost))
            {
                echo "<script>window.location.href='".$url."proyectos.php';</script>";
            }
        }

        else{
        echo "<script>window.location.href='".$url."proyectos.php';</script>";
        }
        $proyectoController = new ProyectoController();
        $usuarioController = new UsuarioController();
        $proyectos = $proyectoController->getProyecto($idpost);
        $proyecto = $proyectos->fetch_object();

        if($proyecto == null)
        { ?>
            
            <div class="proyectos">
                <div class="contenedor-mediano">

                    <h1> Oops!! <br> No existe proyecto con ese ID</h1>
                    <p class="error404">
                        404
                    </p>
                </div>
            </div>

       <?php }
        else{
            $creadorId = $proyecto->creador;
            $usuarioCreador = $usuarioController->MostrarUsuario($creadorId);
?>

<div class="proyectos">
    <div class="container">
        <div class="row">
            <div class="col-md-6 col-sm-12">
                <div class="card">
                <div class="card-body">
                    <h5 class="card-title"><?=$proyecto->titulo?></h5>
                    <p><?=$proyecto->area?></p>
                    <div class="imagen-proyecto">
                        <img src="<?=$url?><?=$proyecto->imagen?>" alt="">
                    </div>
                    <p class="card-text">
                        <?=$proyecto->descripcion?>
                        <h5>Habilidades requeridas</h5>
                        <?php $habilidades = explode(" ", $proyecto->habilidades); ?>
                        <ul>
                            <?php for($i = 0; $i<sizeof($habilidades); $i++) : ?>
                            <li><?=$habilidades[$i]?></li>
                            <?php endfor ?>
                        </ul>
                        <p>
                        Postulado el: <?=$proyecto->fecha?>
                        </p>
                        <p>
                        Fecha de cierre: <?=$proyecto->fechacierre?>
                        </p>
                    </p>
                    


                    <div class="btn-group" role="group" aria-label="Basic example">
                    <?php if(isset($_SESSION['login']) && $proyecto->creador != $_SESSION['id']) : ?>
                    <form method="post">
                        <input type="hidden" name="idpost" value="<?=$idpost?>">
                        <input type="hidden" name="colaboradorid" value="<?=$_SESSION['id']?>">
                        <input type="hidden" name="creadorid" value="<?=$usuarioCreador->id?>">
                        
                        <?php
                           $postulado =  $proyectoController->Postularme();
                        ?>

                        <input type="submit" name="postularme" class="btn btn-info" value="Postularme">
                    </form>
                        <?php endif ?>

                        <?php if(isset($_SESSION)) : ?>
                        <?php if($_SESSION['id'] == $proyecto->creador) : ?>
                        <button data-toggle="modal" data-target="#postuladosModal" class="btn btn-warning">Postulados</button>
                        <a href="<?=$url?>trabajar.php/<?=$proyecto->id?>" class="btn btn-info">Comenzar</a>
                        <button type="button" class="btn btn-danger">Eliminar</button>
                        <?php endif ?>
                        <?php endif ?>
                    </div>   
                </div>
                </div>
            </div>

            <div class="col-md-3 col-sm-12 proyecto-datos desc">
                <div class="container">



                    
                    <div class="row">
                        <img style="border-radius:900px;" src="<?=$url?><?=$usuarioCreador->imagen?>" alt="">
                    </div>
                    
                    <div class="row">
                        <a href="<?=$url?>talento.php/perfil/<?=$usuarioCreador->id?>"><h3 class="">
                            <?=$usuarioCreador->nombre?> <?=$usuarioCreador->apellido?>
                        </h3></a>  
                    </div>
                    
                    <div class="row">
                        <p>Ranking: <?=$usuarioCreador->puntos?>/10</p>
                    </div>
                    
                    <div class="row">
                        <p>Proyectos: <?=$usuarioCreador->proyectos?>/10</p>
                    </div>
                    
                    <div class="row">
                        <p>Colaboraciones: <?=$usuarioCreador->colaboraciones?>/10</p>
                    </div>
                    
                    <div class="row">
                        <p><?=$usuarioCreador->profesion?></p>
                    </div>

                    
                </div>
                </div>
            </div>

    </div>
</div>
<?php require_once 'includes/proyectos/postuladosmodal.php' ?>

                        <?php } ?>


<?php require_once 'includes/footer.php'; ?>