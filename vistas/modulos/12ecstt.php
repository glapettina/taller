<?php
  

    $item = null;
    $valor = null;   

    $cursos = ControladorCursos::ctrMostrarCursos($item, $valor);


?>       


  <div class="content-wrapper">
    
    <section class="content-header">
      <h1>
        1º Segunda E TT - Ciclo Superior
        
      </h1>
      <ol class="breadcrumb">
        <li><a href="inicio"><i class="fa fa-dashboard"></i> Inicio</a></li>
        <li class="active">1º Segunda E TT - Ciclo Superior</li>
      </ol>
    </section>

    <!-- Main content -->
    <section class="content">

      <!-- Default box -->
      <div class="box">


        <?php

          if ($_SESSION["perfil"] != "Preceptor") {
            
            echo '<div class="box-header with-border">
                      
              <button class="btn btn-primary btnListado" idCurso=27 tabla="terceroecs" informeGlobal="reporte_global1cs">
                
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
                  $valor = 27;
                  $tabla = "terceroecs";
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
                            
                              echo '<div class="btn-group">
                                                              
                                <button class="btn btn-warning btnEditarNota1cs" tabla="terceroecs" idAlumno="'.$value["id"].'" data-toggle="modal" data-target="#modalEditarNota"><i class="fa fa-pencil"></i></button>
                                
                              </div>';

                          }
                            
                            

                            echo '<div class="btn-group">
                                
                              <button class="btn btn-success btnVerNota1cs" tabla="terceroecs" idAlumno="'.$value["id"].'" data-toggle="modal" data-target="#modalVerNota"><i class="fa fa-eye"></i></button>
                              
                            </div>

                             <div class="btn-group">
                                
                              <button class="btn btn-primary btnImprimirNota"  informe="reporte1cs" tabla="terceroecs" idAlumno="'.$value["id"].'" data-toggle="modal" data-target="#modalImprimirNota"><i class="fa fa-print"></i></button>
                              
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

  <div class="modal-dialog">

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


          <div class="modal-body">

            <div class="box-body">

              <!-- ENTRADA PARA ELECTRICIDAD -->   

              <div class="col-lg-6">

               <div class="form-group">
                
                <div class="input-group">


                  <label for="">Electricidad</label>
                  
                  <!-- <span class="input-group-addon"><i class="fa fa-users"></i></span> -->
                  
                  <select class="form-control input-lg" name="editarElectricidad" id="editarElectricidad">
                    
                    <option value="">Seleccionar nota</option>
                    <option value="1">1</option>
                    <option value="2">2</option>
                    <option value="3">3</option>
                    <option value="4">4</option>
                    <option value="5">5</option>
                    <option value="6">6</option>
                    <option value="7">7</option>
                    <option value="8">8</option>
                    <option value="9">9</option>
                    <option value="10">10</option>


                  </select>




                </div>

              </div>  

              </div>   

               <!-- ENTRADA PARA HERRERIA Y SOLDADURA -->   

               <div class="col-lg-6">

               <div class="form-group">
                
                <div class="input-group">

                  <label for="">Herrería y Soldadura</label>
                  
                  <!-- <span class="input-group-addon"><i class="fa fa-users"></i></span> -->
                  
                  <select class="form-control input-lg" name="editarHerreria" id="editarHerreria">
                    
                    <option value="">Seleccionar nota</option>
                    <option value="1">1</option>
                    <option value="2">2</option>
                    <option value="3">3</option>
                    <option value="4">4</option>
                    <option value="5">5</option>
                    <option value="6">6</option>
                    <option value="7">7</option>
                    <option value="8">8</option>
                    <option value="9">9</option>
                    <option value="10">10</option>


                  </select>

                </div>

              </div>  

              </div>   
             
            </div>

            <div class="box-body">

              <!-- ENTRADA PARA DISEÑO -->   

              <div class="col-lg-6">

               <div class="form-group">
                
                <div class="input-group">

                  <label for="">Diseño</label>
                  
                  <!-- <span class="input-group-addon"><i class="fa fa-users"></i></span> -->
                  
                  <select class="form-control input-lg" name="editarDisenio" id="editarDisenio">
                    
                    <option value="">Seleccionar nota</option>
                    <option value="1">1</option>
                    <option value="2">2</option>
                    <option value="3">3</option>
                    <option value="4">4</option>
                    <option value="5">5</option>
                    <option value="6">6</option>
                    <option value="7">7</option>
                    <option value="8">8</option>
                    <option value="9">9</option>
                    <option value="10">10</option>


                  </select>

                </div>

              </div>  

              </div>   

               <!-- ENTRADA PARA TORNERIA -->   

               <div class="col-lg-6">

               <div class="form-group">
                
                <div class="input-group">

                  <label for="">Tornería</label>
                  
                  <!-- <span class="input-group-addon"><i class="fa fa-users"></i></span> -->
                  
                  <select class="form-control input-lg" name="editarTorneria" id="editarTorneria">
                    
                    <option value="">Seleccionar nota</option>
                    <option value="1">1</option>
                    <option value="2">2</option>
                    <option value="3">3</option>
                    <option value="4">4</option>
                    <option value="5">5</option>
                    <option value="6">6</option>
                    <option value="7">7</option>
                    <option value="8">8</option>
                    <option value="9">9</option>
                    <option value="10">10</option>


                  </select>

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

              $tabla = "terceroecs";
              $curso = "12ecstt";

              $editarNota = new ControladorNotas();
              $editarNota -> ctrEditarNota1cs($tabla,$curso);

          ?>

    </form>

          
    </div>

  </div>
</div>

  <?php

      $tabla = "primerocb";
      $curso = "1cb";      

      $borraralumno = new ControladorAlumnos();
      $borraralumno -> ctrBorrarAlumno($tabla,$curso);

  ?>


  <!--=====================================
  MODAL VER NOTA
  ======================================-->


<div id="modalVerNota" class="modal fade" role="dialog">

  <div class="modal-dialog">

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


          <div class="modal-body">

            <div class="box-body">

              <!-- ENTRADA PARA ELECTRICIDAD -->   

              <div class="col-lg-6">

                 <div class="form-group">
                  
                    <div class="input-group">

                      <label for="">Electricidad </label>
                      
                      <!-- <span class="input-group-addon"><i class="fa fa-users"></i></span> -->
                      
                        <input class="input-lg" type="text" id="verElectricidad" name="verElectricidad" value="verElectricidad" readonly>

                    </div>

                </div>  

              </div>  

               <!-- ENTRADA PARA HERRERIA Y SOLDADURA -->   

               <div class="col-lg-6">

                 <div class="form-group">
                  
                    <div class="input-group">

                      <label for="">Herrería y Soldadura </label>
                      
                      <!-- <span class="input-group-addon"><i class="fa fa-users"></i></span> -->
                      
                        <input class="input-lg" type="text" id="verHerreria" name="verHerreria" value="verHerreria" readonly>

                    </div>

                </div>  

              </div>  
             
            </div>

            <div class="box-body">

              <!-- ENTRADA PARA DISEÑO -->   

              <div class="col-lg-6">

                 <div class="form-group">
                  
                    <div class="input-group">

                      <label for="">Diseño </label>
                      
                      <!-- <span class="input-group-addon"><i class="fa fa-users"></i></span> -->
                      
                        <input class="input-lg" type="text" id="verDisenio" name="verDisenio" value="verDisenio" readonly>

                    </div>

                </div>  

              </div>  

               <!-- ENTRADA PARA TORNERIA -->   

                <div class="col-lg-6">

                 <div class="form-group">
                  
                    <div class="input-group">

                      <label for="">Tornería </label>
                      
                      <!-- <span class="input-group-addon"><i class="fa fa-users"></i></span> -->
                      
                        <input class="input-lg" type="text" id="verTorneria" name="verTorneria" value="verTorneria" readonly>

                    </div>

                </div>  

              </div>    
             
            </div>
            
          </div>

          <!--=====================================
          PIE DEL MODAL
          ======================================-->



          <div class="modal-footer">

            <button type="button" class="btn btn-default pull-right" data-dismiss="modal">Salir</button>

            <!-- <button type="submit" class="btn btn-primary">Guardar Cambios</button> -->

              <input type="hidden" name="idAlumno" id="idAlumno"> 

          </div>       

         <?php

              $tabla = "terceroecs";
              $curso = "12ecstt";

              $editarNota = new ControladorNotas();
              $editarNota -> ctrEditarNota1cs($tabla,$curso);

          ?>

    </form>

          
    </div>

  </div>
</div>

  <?php

      $tabla = "primerocb";
      $curso = "1cb";      

      $borraralumno = new ControladorAlumnos();
      $borraralumno -> ctrBorrarAlumno($tabla,$curso);

  ?>
  
  
  

  