<?php    include ('includes/header.php');


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

        

        //Validamos tanto el proyecto como el id del post
        $proyectoController = new ProyectoController();
        $avance = $proyectoController->getAvance($idpost)->fetch_object();
        if($avance == null) : ?>
            <div class="proyectos">
                <div class="contenedor-mediano">

                    <h1> Oops!! <br> Avance no existente</h1>
                    <p class="error404">
                        404
                    </p>
                </div>
            </div>


        <?php endif ?>


<div class="proyectos">
    <div class="container">
        <div class="row">
            <div class="col-md-6 texto-avance">
              <?php
                $archivos = $avance->archivos;
                $archivo_json = json_decode( preg_replace('/[\x00-\x1F\x80-\xFF]/', '', $archivos), true );
                $archivo = $archivo_json['texto'];
                $foto = $archivo_json['foto']; 
                echo $archivo;
                $myfile = fopen("avances/$archivo", "r");
                while(!feof($myfile)) {
                    echo fgets($myfile) . "<br>";
                }  
                fclose($myfile);
                ?>

            </div>

            <div class="col-md-6">
                <img src="<?=$url?>avances/<?=$foto?>" alt="">
            </div>
              
        </div>

        <br>
        <div class="comentarios-avance">
                <?php
                    $usuarioController = new UsuarioController();
                    $usuarioNuestro = $usuarioController->mostrarUsuario($_SESSION['id']);

                ?>
            <div class="comentar">
                <img src="<?=$url?><?=$usuarioNuestro->imagen?>" alt="">
                <input type="text" name="comentar" placeholder="Deja un comentario" id="">
                <button class="btn btn-info"> Comentar</button>
            </div>
            <div class="comentarios">
                <div class="comentario-usuario">
                    <img src="<?=$url?><?=$usuarioNuestro->imagen?>" alt="">
                    <label type="text" name="comentar" placeholder="Deja un comentario" id="">Lorem ipsum dolor sit amet consectetur adipisicing elit. Nulla voluptatem molestias nesciunt sunt perspiciatis maxime natus, repellendus velit, dolor iure vel? Fugiat, obcaecati laborum. Veniam, fugiat. Hic dignissimos debitis alias.</label>
                </div>
                <div class="comentario-usuario">
                    <img src="<?=$url?><?=$usuarioNuestro->imagen?>" alt="">
                    <label type="text" name="comentar" placeholder="Deja un comentario" id="">Lorem ipsum dolor sit amet consectetur adipisicing elit. Nulla voluptatem molestias nesciunt sunt perspiciatis maxime natus, repellendus velit, dolor iure vel? Fugiat, obcaecati laborum. Veniam, fugiat. Hic dignissimos debitis alias.</label>
                </div>
                <div class="comentario-usuario">
                    <img src="<?=$url?><?=$usuarioNuestro->imagen?>" alt="">
                    <label type="text" name="comentar" placeholder="Deja un comentario" id="">Lorem ipsum dolor sit amet consectetur adipisicing elit. Nulla voluptatem molestias nesciunt sunt perspiciatis maxime natus, repellendus velit, dolor iure vel? Fugiat, obcaecati laborum. Veniam, fugiat. Hic dignissimos debitis alias.</label>
                </div>
                <div class="comentario-usuario">
                    <img src="<?=$url?><?=$usuarioNuestro->imagen?>" alt="">
                    <label type="text" name="comentar" placeholder="Deja un comentario" id="">Lorem ipsum dolor sit amet consectetur adipisicing elit. Nulla voluptatem molestias nesciunt sunt perspiciatis maxime natus, repellendus velit, dolor iure vel? Fugiat, obcaecati laborum. Veniam, fugiat. Hic dignissimos debitis alias.</label>
                </div>
                <div class="comentario-usuario">
                    <img src="<?=$url?><?=$usuarioNuestro->imagen?>" alt="">
                    <label type="text" name="comentar" placeholder="Deja un comentario" id="">Lorem ipsum dolor sit amet consectetur adipisicing elit. Nulla voluptatem molestias nesciunt sunt perspiciatis maxime natus, repellendus velit, dolor iure vel? Fugiat, obcaecati laborum. Veniam, fugiat. Hic dignissimos debitis alias.</label>
                </div>
                <div class="comentario-usuario">
                    <img src="<?=$url?><?=$usuarioNuestro->imagen?>" alt="">
                    <label type="text" name="comentar" placeholder="Deja un comentario" id="">Lorem ipsum dolor sit amet consectetur adipisicing elit. Nulla voluptatem molestias nesciunt sunt perspiciatis maxime natus, repellendus velit, dolor iure vel? Fugiat, obcaecati laborum. Veniam, fugiat. Hic dignissimos debitis alias.</label>
                </div>
            </div>
        </div>
        
    </div>


</div>




<?php include  ('includes/footer.php')?>