<?php

    $avances = $proyectoController->getAvances($idpost);

?>


<div class="row">
    <div class="col-md-3">



        <button class="avances" data-toggle="modal" data-target="#avanceModal">
            Subir avance
        </button>
        <div class="avances">
            Solicitar reunion
        </div>
        <div class="avances">
            Reuniones programadas
        </div>
        <br>
        <div class="informacion-proyectos">
            Link a GitHub
        </div>
        <div class="informacion-proyectos">
            Imagenes
        </div>
        <div class="informacion-proyectos">
            Audios
        </div>
        <div class="informacion-proyectos">
            Documentacion
        </div>
        <div class="informacion-proyectos">
            Requisitos
        </div>
        <div class="informacion-proyectos">
            Extras
        </div>

        <br>
        <?php if($miid == $proyecto->creador) : ?>
        <div class="editar-proyecto">
            Editar
        </div>
            <?php endif ?>
    </div>

    <div class="col-md-9">

        <?php while($avance = $avances->fetch_object()) : ?>
        <div class="row trabajar">
          <img src="<?=$url?><?=$avance->imagen?>" alt="">
            <div class="descripcion-trabajar">
                <strong><?=$avance->titulo?></strong> - <a style="text-decoration: none; color: white;" href="<?=$url?>talento.php/perfil/<?=$avance->usuarioid?>"><?=$avance->nombre?></a>
                <br>
                <?= $avance->descripcion ?>
                <br>
                <br>

                <a href="<?=$url?>avance.php/<?=$avance->id?>" class="btn btn-info">Consultar</a>

            </div>

        </div>
        <br>
        <?php endwhile ?>

    </div>
</div>

<?php include ('includes/proyectos/avancemodal.php')?>