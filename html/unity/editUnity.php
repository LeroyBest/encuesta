<?php include(HTML_DIR . 'component/header.php'); ?>


  <body class="nav-sm">
    <div class="container body">
      <div class="main_container">

       <?php include(HTML_DIR . 'component/menu.php'); ?>

       <?php include(HTML_DIR . 'component/topbar.php'); ?>     
          
        <!-- page content -->

        <div class="right_col" id="content" role="main">
          <div class="">
            <div class="page-title">
            <div id="msg"></div>
              <div class="title_left">
                <h3>Unidad </h3>
              </div>

             
            </div>
            
            <div class="clearfix"></div>

            <div class="row">
              <div class="col-md-12">
                <div class="x_panel">
                  <div class="x_title">
                    <h2>Editar Unidad</h2>
                    
                    <div class="clearfix"></div>
                  </div>
                  <div class="x_content">
                    <form method="post" name="formEditUnity" action="?view=unity&mode=edit">
                      <div class="form-group">
                        <div class="col-md-7 col-sm-9 col-xs-12 rows ">
                          <label>Buscar:</label>
                          <div class="input-group">
                            <input type="text" id="txtbuscarUnidad" name="txtbuscarUnidad" class="form-control">
                              <span class="input-group-btn">
                                <input  id="btnBuscarUn" class="btn btn-primary" type="button" value="Buscar">
                              </span>
                          </div>                      
                        </div>
                      </div>
                    </form>


                    <table class="table table-condensed table-hover dataTable no-footer" id="tblUnity">
                          <thead>
                            <th>Unidad</th>
                            <th>Gerente</th>
                            <th>Email</th>
                            <th>Empresa</th>
                            <th></th>
                          </thead>
                          <tbody id="cuerpo">
                                     
                          </tbody>
                    </table>                
                      

                      
                      
                    <!-- end project list -->

                  </div>
                </div>
              </div>
            </div>
          </div>

                      <div class="container">
                        <!-- Modal -->
                        <div class="modal fade" id="editUnity" role="dialog">
                          <div class="modal-dialog modal-lg">
                          
                            <!-- Modal content-->
                            <div class="modal-content">
                              <div class="modal-header">
                                <button type="button" class="close" data-dismiss="modal">&times;</button>
                                <h4 class="modal-title">Editar Empresa</h4>
                              </div>
                              <div class="modal-body">
                                <div class="row">
                                  <div class="col-md-12">
                                  
                                  
                                    <div class="panel-body">

                                        <div class="table-responsive">

                          <form id="formEditUnity">             
                            <div class="row">
                              <div class="col-md-3 form-group">
                                <label class="control-label" for="txtUnidad">Unidad *</label>
                              </div>  
                              <div class="col-md-7 form-group">
                                <div class="controls input-group">
                                  <input class="form-control" name="txtUnidad" id="txtUnidad"  type="text" required>
                                  <div class="input-group-addon">
                                    <i class="fa fa-building"></i>
                                  </div>
                                </div>
                              </div>    
                            </div>              

                            <div class="row">
                              <div class="col-md-3 form-group">
                                <label class="control-label" for="txtJefe">Jefe *</label>
                              </div>  
                              <div class="col-md-7 form-group">
                                <div class="controls input-group">
                                  <input class="form-control" name="txtJefe" id="txtJefe"  type="text" required>
                                  <div class="input-group-addon">
                                    <i class="fa fa-user"></i>
                                  </div>
                                </div>
                              </div>    
                            </div>

                            <div class="row">
                              <div class="col-md-3 form-group">
                                <label class="control-label" for="txtCorreo">Correo*</label>
                              </div>  
                              <div class="col-md-7 form-group">
                                <div class="controls input-group">
                                  <input class="form-control" name="txtCorreo" id="txtCorreo"  type="text" required>
                                  <div class="input-group-addon">
                                    <i class="fa fa-envelope"></i>
                                  </div>
                                </div>
                              </div>
                            </div>

                            <div class="row">
                              <div class="col-md-3 form-group">
                                <label class="control-label" for="txtCorreo">Empresa*</label>
                              </div>  
                              <div class="col-md-7 form-group">
                                <div class="controls input-group">
                                  
                                  <select class="select2_single form-control" id ="txtEmpresa" name="txtEmpresa">
                                    <option id="empresaActual" value='0'>Sin Empresa</option>
                                    <?php

                                        
                                       if(false != $resp) {
                                          foreach ($resp as $key => $value) {
                                            
                                            //echo ""$resp[$key ]['preguntas'];
                                            echo "<option value='".$resp[$key ]["id_empresa"]."'>".$resp[$key ]["descripcion"]."</option>";
                                            
                                            
                                          }
                                        }
                                      ?>
                                  </select>
                                  <div class="input-group-addon">
                                    <i class="fa fa-envelope"></i>
                                  </div>
                                </div>
                              </div>
                            </div>

                            
                          </form> 
                                        </div>
                                              
                                          <!-- /.panel-body -->
                                      </div> 
                                         
                                  </div>
                                 </div>
                              <div class="modal-footer">
                              <button type="button" id="btnEditUnidad" class="btn btn-success" data-dismiss="modal">GUARDAR</button>
                                <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>

                              </div>
                            </div>
                            
                          </div>
                        </div>
                        
                      </div>


                      <div class="panel-footer">
                        
                      </div>

                    </div>

                  <div class="container">
                    <!-- Modal -->
                    <div class="modal fade" id="deleteUnity" role="dialog">
                      <div class="modal-dialog modal-sm">                        
                        <!-- Modal content-->
                        <div class="modal-content">
                          <div class="modal-header alert alert-dismissible alert-danger">
                            <strong>Confirmar Borrado!</strong>
                          </div>
                          <div class="modal-body">
                              <div class="row">
                                <div class="col-md-12">                                
                                
                                  <div class="panel-body">

                                    <strong>¿Esta seguro de borrar esta información?</strong>
                                            
                                        <!-- /.panel-body -->
                                  </div> 
                                       
                                </div>
                              </div>
                            <div class="modal-footer">
                              <button type="button" id="btnDeleteUnity" class="btn btn-success" data-dismiss="modal">Aceptar</button>
                              <button type="button" class="btn btn-danger" data-dismiss="modal">Cancelar</button>

                            </div>
                          </div>                          
                        </div>
                      </div>                      
                    </div>


                      <div class="panel-footer">
                        
                      </div>

                  </div>



        </div>
        <!-- /page content -->

        <!-- footer content -->
        <footer>
          <div class="pull-right">
            
          </div>
          <div class="clearfix"></div>
        </footer>
        <!-- /footer content -->
      </div>
    </div>

    <?php include(HTML_DIR . 'component/footers.php'); ?>
    <script src="views/app/js/editUnity.js"></script>
  </body>
</html>