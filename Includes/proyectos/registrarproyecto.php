<div class="row">
  <div class="col-sm-6">
    <div class="card">
      <div class="card-body">
          <form  method="post" enctype="multipart/form-data">
                <div class="form-group row">
                    <label for="titulo" class="col-sm-2 col-form-label">Titulo</label>
                    <div class="col-sm-10">
                    <input type="titulo" required name="titulo" class="form-control" id="titulo" placeholder="Titulo">
                    </div>
                </div>
                <div class="form-group row">
                    <label for="foto" class="col-sm-2 col-form-label">Foto</label>
                    <div class="col-sm-10">
                        <input  type="file" id="imagen" name="foto" id="">
                    </div>
                </div>
                <div class="form-group row">
                    <label for="descripcion" class="col-sm-2 col-form-label">Desc.</label>
                    <div class="col-sm-10">
                        <textarea required type="text" name="descripcion"  id="descripcion" class="form-control" placeholder="Descripcion"></textarea>
                    </div>
                </div>
                
                <div class="form-group">
                    <label for="areapublicacion">Area</label>
                    <select class="form-control" required name="area" id="areapublicacion">
                    <option selected="selected">Tipo de publicacion</option>
                        <option>Reto de contratacion</option>
                        <option>Empresarial</option>
                        <option>Independiente</option>
                        <option>Proyecto Escolar</option>
                        <option>Concurso/Hackaton/Investigacion</option>
                        <option>Otro</option>
                    </select>
                </div>
                
                <div class="alert alert-info" role="alert">
                    Las habilidades requeridas deben ir listadas con un espacion de separacion (C# javascript psicologia fisica deportes etc)
                </div>
                
                <div class="form-group row">
                    <label for="habilidades" class="col-sm-2 col-form-label">Habili.</label>
                    <div class="col-sm-10">
                    <input type="habilidades" required name="habilidades" class="form-control" id="habilidades" placeholder="Habilidades">
                    </div>
                </div>

                <div class="form-group row">
                <label for="habilidades" class="col-sm-4 col-form-label">Fecha de cierre</label>

                    <input type="date" required class="col-sm-6" name="fechacierre" id="fechacierre">
                </div>

                <?php
                    $proyectoController = new ProyectoController();
                    $response = $proyectoController->registrarProyecto();
                    
                ?>

                <input type="submit"  name="registrarproyecto" value="Registrar" class="btn btn-info">

            </form>
      </div>
    </div>
  </div>
  <div class="col-sm-6">
    <div class="card">
      <div class="card-body">
        <h5 class="card-title" id="titulo-publicacion">TITUTLO </h5>
        <p id="area-publicacion">Area: ---</p>

        <div class="imagen-proyecto">
            <img src="<?=$url?>Assets/img/nofoto.png" id="imagen-publicacion" class="w-100" alt="">
        </div>
        <p class="card-text" id="descripcion-publicacion">Descripcion</p> 
        <h5>Habilidades requeridas</h5>
        <ul id="habilidades-publicacion">
            <li>habilidad</li>
        </ul>
        <p id="fechacierre-publicacion">Fecha de cierre: </p>
      </div>
    </div>
  </div>
</div>


