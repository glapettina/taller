
<!-- OK -->

<?php
  

    $item = null;
    $valor = null;   

    $cursos = ControladorCursos::ctrMostrarCursos($item, $valor);


?>       


  <div class="content-wrapper">
    
    <section class="content-header">
      <h1>
        1º Primera A TT - Ciclo Superior
        
      </h1>
      <ol class="breadcrumb">
        <li><a href="inicio"><i class="fa fa-dashboard"></i> Inicio</a></li>
        <li class="active">1º Primera A TT - Ciclo Superior</li>
      </ol>
    </section>

    <!-- Main content -->
    <section class="content">

      <!-- Default box -->
      <div class="box">


        <?php

          if ($_SESSION["perfil"] != "Preceptor") {
            
              echo '<div class="box-header with-border">
                        
                <button class="btn btn-primary btnListado" idCurso=17 tabla="terceroacs" informeGlobal="reporte_global1acs">
                  
                  Listado Global
                </button>
                
              </div>';

          }

        ?>

        



        <div class="box-body">
          
          <table class="table table-bordered table-striped dt-responsive tablas">
            
            <thead>
              
              <tr>
                
                <th style="width: 10px">#</th>
                <th>DNI</th>
                <th>Apellidos y Nombres</th>
                <th>Curso</th>
                <th>Turno</th>
                <th>Acciones</th>

              </tr> 

            </thead>
            <tbody>

              <?php

                  $item = "id_curso";
                  $valor = 17;
                  $tabla = "terceroacs";
                  $verifica = true;


                  $notas = ControladorNotas::ctrMostrarNotas($item, $valor, $tabla, $verifica);


                  foreach ($notas as $key => $value) {
                    
                    echo '<tr>
                
                          <td>'.($key+1).'</td>
                          <td>'.$value["documento"].'</td>
                          <td>'.$value["nombre"].'</td>';

                          $item = "id";
                          $valor = $value["id_curso"];

                          $curso = ControladorCursos::ctrMostrarCursos($item, $valor);

                          echo '<td>'.$curso["nombre"].'</td>  

                          <td>'.$curso["turno"].'</td>';


                          echo '<td>';


                          if ($_SESSION["perfil"] != "Preceptor") {

                            
                            echo'<div class="btn-group">

                              <button class="btn btn-warning btnEditarNota1acs" tabla="terceroacs" idAlumno="'.$value["id"].'" data-toggle="modal" data-target="#modalEditarNota"><i class="fa fa-pencil"></i></button>
                              
                            </div>';
                            
                             
                            }


                                
                              

                            echo'<div class="btn-group">
                                
                              <button class="btn btn-success btnVerNota1acs" tabla="terceroacs" idAlumno="'.$value["id"].'" data-toggle="modal" data-target="#modalVerNota"><i class="fa fa-eye"></i></button>
                              
                            </div>

                             <div class="btn-group">
                                
                              <button class="btn btn-primary btnImprimirNota"  informe="reporte1acs" tabla="terceroacs" idAlumno="'.$value["id"].'" data-toggle="modal" data-target="#modalImprimirNota"><i class="fa fa-print"></i></button>
                              
                            </div>

                          </td>

                        </tr> ';
                  }


              ?>

                           

            </tbody>

          </table>

        </div>
        
        
      </div>

    </section>
  </div>


  


<!--=====================================
  MODAL EDITAR NOTA
  ======================================-->


<div id="modalEditarNota" class="modal fade" role="dialog">

  <div class="modal-dialog" style="width: 45%;">

    <div class="modal-content">

      <form role="form" method="post">

          <!--=====================================
          CABEZA DEL MODAL
          ======================================-->

          <div class="modal-header" style="background: #3c8dbc; color: white">

            <button type="button" class="close" data-dismiss="modal">&times;</button>

           
              <h4 class="modal-title">Editar Nota</h4>

          </div>

          <!--=====================================
          CUERPO DEL MODAL
          ======================================-->

          <div class="row">


            <!--=====================================
             PRIMERA COLUMNA
            ======================================-->

            <div class="col-lg-6">

              <div class="box">

                  <div class="box-body">

                    <div class="form-group">

                        <div class="col-lg-8">

                            <label for="">Primer Bimestre</label>
                            
                            <!-- <span class="input-group-addon"><i class="fa fa-users"></i></span> -->
                            
                            <select class="form-control input-lg" name="editarPrimerBimestre" id="editarPrimerBimestre">
                              
                              <option value="">Sección</option>
                              <option value="Electricidad">Electricidad</option>
                              <option value="Técnicas y Ensayos de Laboratorio">Técnicas y Ensayos de Laboratorio</option>
                              <option value="Elaboración y Conservación de Alimentos">Elaboración y Conservación de Alimentos</option>

                            </select>

                        </div>

                    

                 
                
                    <div class="col-lg-4">

                      <label for="">Nota</label>
                      
                      <!-- <span class="input-group-addon"><i class="fa fa-users"></i></span> -->
                      
                      <select class="form-control input-lg" name="editarNota1" id="editarNota1">
                        
                        <option value="">Nota</option>
                        <option value="1">1</option>
                        <option value="2">2</option>
                        <option value="3">3</option>
                        <option value="4">4</option>
                        <option value="5">5</option>
                        <option value="5.50">5.50</option>
                        <option value="6">6</option>
                        <option value="6.50">6.50</option>
                        <option value="7">7</option>
                        <option value="7.50">7.50</option>
                        <option value="8">8</option>
                        <option value="8.50">8.50</option>
                        <option value="9">9</option>
                        <option value="9.50">9.50</option>
                        <option value="10">10</option>


                      </select>

                    </div>

                    <div class="col-lg-8">

                            <label for="">Segundo Bimestre</label>
                            
                            <!-- <span class="input-group-addon"><i class="fa fa-users"></i></span> -->
                            
                            <select class="form-control input-lg" name="editarSegundoBimestre" id="editarSegundoBimestre">
                              
                              <option value="">Sección</option>
                              <option value="Electricidad">Electricidad</option>
                              <option value="Técnicas y Ensayos de Laboratorio">Técnicas y Ensayos de Laboratorio</option>
                              <option value="Elaboración y Conservación de Alimentos">Elaboración y Conservación de Alimentos</option>
                            </select>

                        </div>

                
                    <div class="col-lg-4">

                      <label for="">Nota</label>
                      
                      <!-- <span class="input-group-addon"><i class="fa fa-users"></i></span> -->
                      
                      <select class="form-control input-lg" name="editarNota2" id="editarNota2">
                        
                        <option value="">Nota</option>
                        <option value="1">1</option>
                        <option value="2">2</option>
                        <option value="3">3</option>
                        <option value="4">4</option>
                        <option value="5">5</option>
                        <option value="5.50">5.50</option>
                        <option value="6">6</option>
                        <option value="6.50">6.50</option>
                        <option value="7">7</option>
                        <option value="7.50">7.50</option>
                        <option value="8">8</option>
                        <option value="8.50">8.50</option>
                        <option value="9">9</option>
                        <option value="9.50">9.50</option>
                        <option value="10">10</option>


                      </select>

                    </div>

                    <div class="col-lg-8">

                            <label for="">Tercer Bimestre</label>
                            
                            <!-- <span class="input-group-addon"><i class="fa fa-users"></i></span> -->
                            
                            <select class="form-control input-lg" name="editarTercerBimestre" id="editarTercerBimestre">
                              
                              <option value="">Sección</option>
                              <option value="Electricidad">Electricidad</option>
                              <option value="Técnicas y Ensayos de Laboratorio">Técnicas y Ensayos de Laboratorio</option>
                              <option value="Elaboración y Conservación de Alimentos">Elaboración y Conservación de Alimentos</option>

                            </select>

                        </div>

                
                    <div class="col-lg-4">

                      <label for="">Nota</label>
                      
                      <!-- <span class="input-group-addon"><i class="fa fa-users"></i></span> -->
                      
                      <select class="form-control input-lg" name="editarNota3" id="editarNota3">
                        
                        <option value="">Nota</option>
                        <option value="1">1</option>
                        <option value="2">2</option>
                        <option value="3">3</option>
                        <option value="4">4</option>
                        <option value="5">5</option>
                        <option value="5.50">5.50</option>
                        <option value="6">6</option>
                        <option value="6.50">6.50</option>
                        <option value="7">7</option>
                        <option value="7.50">7.50</option>
                        <option value="8">8</option>
                        <option value="8.50">8.50</option>
                        <option value="9">9</option>
                        <option value="9.50">9.50</option>
                        <option value="10">10</option>


                      </select>

                    </div>

                    </div>

                    </div>

                  </div>

              </div>

              <!--=====================================
              SEGUNDA COLUMNA
              ======================================-->


          <div class="col-lg-6">

              <div class="box">

                  <div class="box-body">

                    <div class="form-group">

                        <div class="col-lg-5">

                            <label for="">Total Clases</label>
                            
                            <input class="form-control input-lg" type="text" name="editarTotal1" id="editarTotal1">

                        </div>

                        <div class="col-lg-5">

                            <label for="">Asistencia</label>
                            
                            <input class="form-control input-lg" type="text" name="editarAsistencia1" id="editarAsistencia1">

                        </div>

                        <div class="col-lg-5">

                            <label for="">Total Clases</label>
                            
                            <input class="form-control input-lg" type="text" name="editarTotal2" id="editarTotal2">

                        </div>

                        <div class="col-lg-5">

                            <label for="">Asistencia</label>
                            
                            <input class="form-control input-lg" type="text" name="editarAsistencia2" id="editarAsistencia2">

                        </div>

                        <div class="col-lg-5">

                            <label for="">Total Clases</label>
                            
                            <input class="form-control input-lg" type="text" name="editarTotal3" id="editarTotal3">

                        </div>

                        <div class="col-lg-5">

                            <label for="">Asistencia</label>
                            
                            <input class="form-control input-lg" type="text" name="editarAsistencia3" id="editarAsistencia3">

                        </div>
              

                    </div>

                    </div>

                  </div>

              </div>

            </div>


          <!--=====================================
          PIE DEL MODAL
          ======================================-->



          <div class="modal-footer">

            <button type="button" class="btn btn-default pull-left" data-dismiss="modal">Salir</button>

            <button type="submit" class="btn btn-primary">Guardar Cambios</button>

              <input type="hidden" name="idAlumno" id="idAlumno"> 

          </div>       

         <?php

              $tabla = "terceroacs";
              $curso = "11acstt";

              $editarNota = new ControladorNotas();
              $editarNota -> ctrEditarNota1acs($tabla,$curso);

          ?>

    </form>

          
    </div>

  </div>
</div>



<!--=====================================
  MODAL VER NOTA
  ======================================-->


<div id="modalVerNota" class="modal fade" role="dialog">

  <div class="modal-dialog" style="width: 45%;">

    <div class="modal-content">

      <form role="form" method="post">

          <!--=====================================
          CABEZA DEL MODAL
          ======================================-->

          <div class="modal-header" style="background: #3c8dbc; color: white">

            <button type="button" class="close" data-dismiss="modal">&times;</button>

           
              <h4 class="modal-title">Ver Nota</h4>

          </div>

          <!--=====================================
          CUERPO DEL MODAL
          ======================================-->

          <div class="row">


            <!--=====================================
             PRIMERA COLUMNA
            ======================================-->

            <div class="col-lg-6">

              <div class="box">

                  <div class="box-body">

                    <div class="form-group">

                        <div class="col-lg-8">

                            <label for="">Primer Bimestre</label>                  
                                              
                            <select class="form-control input-lg" name="verPrimerBimestre" readonly>
                              
                              <option id="verPrimerBimestre"></option>
                              

                            </select>

                        </div>

                    

                 
                
                    <div class="col-lg-4">

                        <label for="">Nota</label>
                                          
                        <select class="form-control input-lg" name="verNota1" readonly>
                          
                          <option id="verNota1"></option>  


                        </select>

                    </div>

                    <div class="col-lg-8">

                        <label for="">Segundo Bimestre</label>
                                          
                        <select class="form-control input-lg" name="verSegundoBimestre" readonly>
                          
                          <option id="verSegundoBimestre"></option>
                          

                        </select>

                    </div>

                
                    <div class="col-lg-4">


                        <label for="">Nota</label>
                                          
                        <select class="form-control input-lg" name="verNota2" readonly>
                          
                          <option id="verNota2"></option>                    


                        </select>

                    </div>

                    <div class="col-lg-8">

                        <label for="">Tercer Bimestre</label>
                                          
                        <select class="form-control input-lg" name="verTercerBimestre" readonly>
                          
                          <option id="verTercerBimestre"></option>

                        </select>

                    </div>

                
                    <div class="col-lg-4">

                        <label for="">Nota</label>
                                          
                        <select class="form-control input-lg" name="verNota3" readonly>
                          
                          <option id="verNota3"></option>


                        </select>

                    </div>


                    </div>

                    </div>

                  </div>

              </div>

              <!--=====================================
              SEGUNDA COLUMNA
              ======================================-->


          <div class="col-lg-6">

              <div class="box">

                  <div class="box-body">

                    <div class="form-group">

                        <div class="col-lg-5">

                            <label for="">Total Clases</label>
                            
                            <input class="form-control input-lg" type="text" name="verTotal1" id="verTotal1" readonly>

                        </div>

                        <div class="col-lg-5">

                            <label for="">Asistencia</label>
                            
                            <input class="form-control input-lg" type="text" name="verAsistencia1" id="verAsistencia1" readonly>

                        </div>

                        <div class="col-lg-5">

                            <label for="">Total Clases</label>
                            
                            <input class="form-control input-lg" type="text" name="verTotal2" id="verTotal2" readonly>

                        </div>

                        <div class="col-lg-5">

                            <label for="">Asistencia</label>
                            
                            <input class="form-control input-lg" type="text" name="verAsistencia2" id="verAsistencia2" readonly>

                        </div>

                        <div class="col-lg-5">

                            <label for="">Total Clases</label>
                            
                            <input class="form-control input-lg" type="text" name="verTotal3" id="verTotal3" readonly>

                        </div>

                        <div class="col-lg-5">

                            <label for="">Asistencia</label>
                            
                            <input class="form-control input-lg" type="text" name="verAsistencia3" id="verAsistencia3" readonly>

                        </div>                  
              

                    </div>

                    </div>

                  </div>

              </div>

            </div>
          

          <!--=====================================
          PIE DEL MODAL
          ======================================-->



          <div class="modal-footer">

            <button type="button" class="btn btn-default pull-left" data-dismiss="modal">Salir</button>
            
              <input type="hidden" name="idAlumno" id="idAlumno"> 

          </div>       

         <?php

              $tabla = "terceroacs";
              $curso = "11acstt";

              $editarNota = new ControladorNotas();
              $editarNota -> ctrEditarNota1acs($tabla,$curso);

          ?>

    </form>

          
    </div>

  </div>
</div>   

         <?php

              $tabla = "terceroacs";
              $curso = "11acstt";

              $editarNota = new ControladorNotas();
              $editarNota -> ctrEditarNota1acs($tabla,$curso);

          ?>

    </form>

          
    </div>

  </div>
</div>


  
  
  

  