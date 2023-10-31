  <div class="content-wrapper">
    
    <section class="content-header">
      <h1>
        Administrar Secciones
        
      </h1>
      <ol class="breadcrumb">
        <li><a href="inicio"><i class="fa fa-dashboard"></i> Inicio</a></li>
        <li class="active">Administrar Secciones</li>
      </ol>
    </section>

    <!-- Main content -->
    <section class="content">

      <!-- Default box -->
      <div class="box">

        <div class="box-header with-border">
          
          <button class="btn btn-primary" data-toggle="modal" data-target="#modalAgregarSeccion">
            
            Agregar Sección
          </button>
          
        </div>
        <div class="box-body">
          
          <table class="table table-bordered table-striped dt-responsive tablas">
            
            <thead>
              
              <tr>
                
                <th style="width: 10px">#</th>
                <th>Denominación</th>
                <th>Estado</th>
                <th>Acciones</th>

              </tr> 

            </thead>
            <tbody>

              <?php

                  $item = null;
                  $valor = null;

                  $secciones = ControladorSecciones::ctrMostrarSecciones($item, $valor);

                  foreach ($secciones as $key => $value) {
                    
                    echo '<tr>
                
                          <td>'.($key+1).'</td>
                          <td>'.$value["nombre"].'</td>';

                          if ($value["estado"] != 0) {
                          
                          echo '<td><button class="btn btn-success btn-xs btnActivar" idSeccion="'.$value["id"].'"  estadoSeccion="0">Activado</button></td>';

                        }else{

                          echo '<td><button class="btn btn-danger btn-xs btnActivar" idSeccion="'.$value["id"].'" estadoSeccion="1">Desactivado</button></td>';
                        }

                          echo '<td>
                            
                            <div class="btn-group">
                                
                              <button class="btn btn-warning btnEditarSeccion" idSeccion="'.$value["id"].'" data-toggle="modal" data-target="#modalEditarSeccion"><i class="fa fa-pencil"></i></button>
                              <button class="btn btn-danger btnEliminarSeccion" idSeccion="'.$value["id"].'"><i class="fa fa-times"></i></button>

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
  MODAL AGREGAR SECCION
  ======================================-->


<div id="modalAgregarSeccion" class="modal fade" role="dialog">

  <div class="modal-dialog">

    <div class="modal-content">

      <form role="form" method="post">

          <!--=====================================
          CABEZA DEL MODAL
          ======================================-->

          <div class="modal-header" style="background: #3c8dbc; color: white">

            <button type="button" class="close" data-dismiss="modal">&times;</button>

            <h4 class="modal-title">Agregar Sección</h4>

          </div>

          <!--=====================================
          CUERPO DEL MODAL
          ======================================-->


          <div class="modal-body">

            <div class="box-body">

              <!-- ENTRADA PARA EL NOMBRE -->          
              
              <div class="form-group">
                
                <div class="input-group">
                  
                  <span class="input-group-addon"><i class="fa fa-th"></i></span>
                  <input class="form-control input-lg" type="text" name="nuevaSeccion" placeholder="Ingresar sección" required>

                </div>

              </div>
              
            </div>
            
          </div>

          <!--=====================================
          PIE DEL MODAL
          ======================================-->



          <div class="modal-footer">

            <button type="button" class="btn btn-default pull-left" data-dismiss="modal">Salir</button>

            <button type="submit" class="btn btn-primary">Guardar Sección</button>

          </div>

          <?php

              $crearseccion = new ControladorSecciones();
              $crearseccion -> ctrCrearSeccion();

          ?>

    </form>
    </div>

  </div>
</div>


<!--=====================================
  MODAL EDITAR SECCION
  ======================================-->


<div id="modalEditarSeccion" class="modal fade" role="dialog">

  <div class="modal-dialog">

    <div class="modal-content">

      <form role="form" method="post">

          <!--=====================================
          CABEZA DEL MODAL
          ======================================-->

          <div class="modal-header" style="background: #3c8dbc; color: white">

            <button type="button" class="close" data-dismiss="modal">&times;</button>

            <h4 class="modal-title">Editar Sección</h4>

          </div>

          <!--=====================================
          CUERPO DEL MODAL
          ======================================-->


          <div class="modal-body">

            <div class="box-body">

              <!-- ENTRADA PARA EL NOMBRE -->          
              
              <div class="form-group">
                
                <div class="input-group">
                  
                  <span class="input-group-addon"><i class="fa fa-th"></i></span>
                  <input class="form-control input-lg" type="text" name="editarSeccion" id="editarSeccion" required>
                  <input type="hidden" name="idSeccion" id="idSeccion">

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

          </div>

          <?php

              $editarseccion = new ControladorSecciones();
              $editarseccion -> ctrEditarSeccion();

          ?>

    </form>
    </div>

  </div>
</div>

  <?php

              $borrarseccion = new ControladorSecciones();
              $borrarseccion -> ctrBorrarSeccion();

  ?>
  
  

  