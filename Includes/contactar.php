<div class="contactar-contenedor">



<?php if(!isset($_SESSION['login'])) : ?>
    <div class="contenedor-mediano">

        <p class="error404">
            Oops!!
        </p>
        <h1>  <br> Inicie Sesion para contactar al talento</h1>

    </div>

<?php else: ?>
    <div class="titulo">Contactar</div>
    <div class="contactar">
        <form method="post" action="<?=$url?>phpconfigmailer.php">
            <div class="form-group row">
                <label for="para" class="col-sm-2 col-form-label">Para</label>
                <div class="col-sm-10">
                <input type="text" name="para" readonly class="form-control-plaintext" id="para" value="<?=$usuario->email?>">
                </div>
            </div>
            <?php
                $miusuario = $usuarioController->MostrarUsuario($_SESSION['id']);
            ?>
            <div class="form-group row">
                <label for="de" class="col-sm-2 col-form-label">De</label>
                <div class="col-sm-10">
                <input type="text" name="de" readonly class="form-control-plaintext" id="de" value="<?=$miusuario->email?>">
                </div>
            </div>

            <div class="form-group row">
                <label for="asunto" class="col-sm-2 col-form-label">Asunto</label>
                <div class="col-sm-10">
                <textarea type="text" name="asunto" class="form-control" id="asunto" placeholder="Asunto"></textarea>
                </div>
            </div>

            <div class="form-group row">
                <label for="cuerpo" class="col-sm-2 col-form-label">Cuerpo del mensaje</label>
                <div class="col-sm-10">
                <textarea type="text" class="form-control" name="cuerpo" id="cuerpo" placeholder="Cuerpo del mensaje"></textarea>
                </div>
            </div>

            <input type="submit" value="Enviar" class="btn btn-info">
        </form>
    </div>




<?php endif ?>
</div>