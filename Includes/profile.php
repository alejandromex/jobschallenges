
<div class="row">

<div class="nav flex-column nav-pills col-md-3" id="v-pills-tab" role="tablist" aria-orientation="vertical">
<a class="nav-link active" id="v-pills-home-tab" data-toggle="pill" href="#v-pills-perfil" role="tab" aria-controls="v-pills-home" aria-selected="true">Perfil</a>
  <a class="nav-link" id="v-pills-profile-tab" data-toggle="pill" href="#v-pills-curriculum" role="tab" aria-controls="v-pills-profile" aria-selected="false">Curriculum</a>
 <a class="nav-link" id="v-pills-profile-tab" data-toggle="pill" href="#v-pills-proyectos" role="tab" aria-controls="v-pills-profile" aria-selected="false">Proyectos</a>
 <a class="nav-link" id="v-pills-messages-tab" data-toggle="pill" href="#v-pills-messages" role="tab" aria-controls="v-pills-messages" aria-selected="false">Colaboraciones</a>
 <a class="nav-link" id="v-pills-settings-tab" data-toggle="pill" href="#v-pills-settings" role="tab" aria-controls="v-pills-settings" aria-selected="false">Actividad</a>
</div>


<div class="tab-content col-md-9" id="v-pills-tabContent">


<div class="tab-pane fade show active" id="v-pills-perfil" role="tabpanel" aria-labelledby="v-pills-home-tab">
  <div class="col-md-12">
	<div class="card">
		<div class="card-body">
		    <div class="row">
		        <div class="col-md-12">
		            <h4>Tu perfil</h4>
                    <h6>* opcionales</h6>
		            <hr>
		        </div>
		    </div>
		     <div class="row">
		        <div class="col-md-12">

		            <form method="post" action ="<?=$url?>editarperfil.php">

                        <div class="form-group row">
                            <label for="nickname" class="col-4 col-form-label">Nick Name</label> 
                            <div class="col-8">
                                  <input id="nickname" value="<?=$usuario->nick?>" required name="nickname" placeholder="NickName" class="form-control here" required="required" type="text">
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="name" class="col-4 col-form-label">Nombre</label> 
                            <div class="col-8">
                                <input id="name" name="name" value="<?=$usuario->nombre?>" required placeholder="Nombre" class="form-control here" type="text">
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="lastname" class="col-4 col-form-label">Apellido</label> 
                            <div class="col-8">
                                <input id="lastname" value="<?=$usuario->apellido?>" required name="lastname" placeholder="Apellido" class="form-control here" type="text">
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="celular" class="col-4 col-form-label">Celular</label> 
                            <div class="col-8">
                                <input id="celular" value="<?=$usuario->celular?>" required name="celular" placeholder="Celular" class="form-control here" required="required" type="text">
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="etiqueta" class="col-4 col-form-label">Etiqueta de usuario</label> 
                            <div class="col-8">
                                <select id="etiqueta" required name="etiqueta" class="custom-select">
                                    <option>Bronce</option>
                                </select>
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="estado" class="col-4 col-form-label">Estado actual</label> 
                            <div class="col-8">
                                <select id="estado" required name="estado" class="custom-select">
                                    <option selected="selected"><?=$usuario->estado?></option>
                                    <option value="disponible">Disponible</option>
                                    <option value="trabajando">Trabajando</option>
                                    <option value="oportunidad">En busca de una mejor oportunidad</option>
                                    <option value="otra">Otra</option>
                                </select>
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="estado"  class="col-4 col-form-label">Nivel de ingles</label> 
                            <div class="col-8">
                                <select id="estado" required  name="ingles" class="custom-select">
                                    <option selected="selected"><?=$usuario->ingles?></option>
                                    <option value="bajo">Bajo</option>
                                    <option value="medio">Medio</option>
                                    <option value="avanzado">Avanzado</option>
                                </select>
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="profesion" class="col-4 col-form-label">Profesion</label> 
                            <div class="col-8">
                                <input id="profesion" value="<?=$usuario->profesion?>" name="profesion" required placeholder="Profesion" class="form-control here" required="required" type="text">
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="website" class="col-4 col-form-label">Pagina web*</label> 
                            <div class="col-8">
                                <input id="website" value="<?=$usuario->pagina?>" name="website" placeholder="website" class="form-control here" type="text">
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="gitHub" class="col-4 col-form-label">Link de GitHub*</label> 
                            <div class="col-8">
                                <input id="gitHub" value="<?=$usuario->linkgit?>" name="github" placeholder="Link a GitHub" class="form-control here" type="text">
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="gitlab" class="col-4 col-form-label">Link de GitLab*</label> 
                            <div class="col-8">
                                <input id="gitlab" value="<?=$usuario->linklab?>" name="gitlab" placeholder="Link a GitLab" class="form-control here" type="text">
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="facebook" class="col-4 col-form-label">Link de Facebook*</label> 
                            <div class="col-8">
                                <input id="facebook" name="facebook" value="<?=$usuario->facebook?>" placeholder="Link a facebook" class="form-control here" type="text">
                            </div>
                         </div>

                        <div class="form-group row">
                            <label for="info" class="col-4 col-form-label">Breve bibliografia (max 255 caracteres)</label> 
                            <div class="col-8">
                                <textarea id="info" required name="info" cols="40" rows="4" class="form-control"><?=$usuario->info?></textarea>
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="password" class="col-4 col-form-label">Confirmar</label> 
                            <div class="col-8">
                                <input id="password" name="password" placeholder="Confirmar Contraseña" required class="form-control here" type="password">
                            </div>
                        </div> 

                        <div class="form-group row">
                            <div class="offset-4 col-8">
                                <button name="submit" type="submit" class="btn btn-primary">Actualizar Perfil</button>
                            </div>
                        </div>
                    </form>
		        </div>
		    </div>
        </div>
    </div>
</div> 
  </div>

  <div class="tab-pane fade" id="v-pills-curriculum" role="tabpanel" aria-labelledby="v-pills-profile-tab">

    <div class="col-md-12">
      <div class="card">
        <div class="card-body">
            <div class="row">
                <div class="col-md-12">
                    <h4>Tu Curriculum</h4>
                        <h6>* opcionales</h6>
                    <hr>
                </div>
            </div>
            <div class="row">
                <div class="col-md-12">

                    <form method="post" action ="<?=$url?>editarcurriculum.php">

                      <div class="form-group row">
                          <label for="personal" class="col-4 col-form-label">Informacion Personal</label> 
                            <div class="col-8">
                              <textarea id="personal" required name="personal" cols="40" rows="4" class="form-control"><?=$usuario->personal?></textarea>
                            </div>
                        </div>

                      
                     
                        <div class="form-group row">
                            <h2 class="col-12">Experiencia Laboral</h2>
                        </div>

                        <div class="form-group row">
                            <label for="trabajo1" class="col-4 col-form-label">Nombre: </label>
                            <div class="col-8">
                              <input id="trabajo1" value="<?=$experiencia_array['titulo1']?>" name="trabajo1" required placeholder="Nombre del primer trabajo" class="form-control here" required="required" type="text">
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="fecha1" class="col-4 col-form-label">Fecha: </label>
                            <div class="col-8">
                              <input id="fecha1" value="<?=$experiencia_array['fecha1']?>" name="fecha1" required placeholder="MES AÑO - MES AÑO (Febrero-2015 - Marzo 2019)" class="form-control here" required="required" type="text">
                            </div>
                        </div>

                        <div class="form-group row">
                          <label for="labores1" class="col-4 col-form-label">Descripcion de sus labores</label> 
                            <div class="col-8">
                              <textarea id="labores1" required name="labores1" cols="40" rows="4" class="form-control"><?=$experiencia_array['labores1']?></textarea>
                            </div>
                        </div>


                        <div class="form-group row">
                            <label for="trabajo2" class="col-4 col-form-label">Nombre: </label>
                            <div class="col-8">
                              <input id="trabajo2" value="<?=$experiencia_array['titulo2']?>" name="trabajo2" required placeholder="Nombre del segundo trabajo" class="form-control here" required="required" type="text">
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="fecha2" class="col-4 col-form-label">Fecha: </label>
                            <div class="col-8">
                              <input id="fecha2" value="<?=$experiencia_array['fecha2']?>" name="fecha2" required placeholder="MES AÑO - MES AÑO (Febrero-2015 - Marzo 2019)" class="form-control here" required="required" type="text">
                            </div>
                        </div>

                        <div class="form-group row">
                          <label for="labores2" class="col-4 col-form-label">Descripcion de sus labores</label> 
                            <div class="col-8">
                              <textarea id="labores2" required name="labores2" cols="40" rows="4" class="form-control"><?=$experiencia_array['labores2']?></textarea>
                            </div>
                        </div>


                        <div class="form-group row">
                            <label for="trabajo3" class="col-4 col-form-label">Nombre: </label>
                            <div class="col-8">
                              <input id="trabajo3" value="<?=$experiencia_array['titulo3']?>" name="trabajo3" required placeholder="Nombre del tercer trabajo" class="form-control here" required="required" type="text">
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="fecha3" class="col-4 col-form-label">Fecha: </label>
                            <div class="col-8">
                              <input id="fecha3" value="<?=$experiencia_array['fecha3']?>" name="fecha3" required placeholder="MES AÑO - MES AÑO (Febrero-2015 - Marzo 2019)" class="form-control here" required="required" type="text">
                            </div>
                        </div>

                        <div class="form-group row">
                          <label for="labores3" class="col-4 col-form-label">Descripcion de sus labores</label> 
                            <div class="col-8">
                              <textarea id="labores3" required name="labores3" cols="40" rows="4" class="form-control"><?=$experiencia_array['labores3']?></textarea>
                            </div>
                        </div>


                        <div class="form-group row">
                            <h2 class="col-12">Habilidades</h2>
                        </div>
                        <div class="alert alert-info" role="alert">
                          Las habilidades deben estar separadas por un espacio para poder ser listadas en el curriculum correcamente.
                          (C# Estadistica c++ JAVA)
                        </div>
                        <div class="form-group row">
                            <label for="habilidades" class="col-4 col-form-label">Habilidades </label>
                            <div class="col-8">
                              <input id="habilidades" value="<?=$usuario->skills?>" name="habilidades" required placeholder="" class="form-control here" required="required" type="text">
                            </div>
                        </div>

                        <div class="form-group row">
                            <h2 class="col-12">Estudios</h2>
                        </div>

                        <div class="form-group row">
                            <label for="escuela" class="col-4 col-form-label">Nombre de la institucion: </label>
                            <div class="col-8">
                              <input id="escuela" value="<?=$educacion_array['nombre']?>" name="escuela" required placeholder="Nombre de la escuela" class="form-control here" required="required" type="text">
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="fechaescuela" class="col-4 col-form-label">Periodo de estudio: </label>
                            <div class="col-8">
                              <input id="fechaescuela" value="<?=$educacion_array['fecha']?>" name="fechaescuela" required placeholder="MES AÑO - MES AÑO (Febrero-2015 - Marzo 2019)" class="form-control here" required="required" type="text">
                            </div>
                        </div>

                        <div class="form-group row">
                          <label for="carrera" class="col-4 col-form-label">Descripcion de la carrera</label> 
                            <div class="col-8">
                              <textarea id="carrera" required name="carrera" cols="40" rows="4" class="form-control"><?=$educacion_array['carrera']?></textarea>
                            </div>
                        </div>
                            



                        <div class="form-group row">
                            <div class="offset-4 col-8">
                                <button name="submitc" type="submit" class="btn btn-primary">Actualizar Curriculum</button>
                            </div>
                        </div>

                    </form>
                </div>
            </div>
            </div>
        </div>
  </div>
    
  </div>

  
  <div class="tab-pane fade" id="v-pills-proyectos" role="tabpanel" aria-labelledby="v-pills-messages-tab">
    <h1>PROYECTOS</h1>
  
  </div>
  <div class="tab-pane fade" id="v-pills-messages" role="tabpanel" aria-labelledby="v-pills-messages-tab">
    <h1>COLBAORACIONES</h1>

  </div>
  <div class="tab-pane fade" id="v-pills-settings" role="tabpanel" aria-labelledby="v-pills-settings-tab">
    <h1>ACTIVIDAD</h1>
  
  </div>








<!-- Cierre del contenido de las paginas -->
</div>

<!-- Cierre del row -->
</div> 