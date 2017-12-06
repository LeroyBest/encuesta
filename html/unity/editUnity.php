<?php include(HTML_DIR . 'component/header.php'); ?>


  <body class="nav-md">
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
                <h3>Administración - Unidades </h3>
              </div>
					<div class="title_right">
						<div class=" form-group pull-right">
                                 <form method="post" name="formEditUnity" action="?view=unity&mode=edit">
                      <div class="form-group">

                          <div class="input-group">
                            <input type="text" id="txtbuscarUnidad" name="txtbuscarUnidad" placeholder="Buscar Unidad"  class="form-control">
                              <span class="input-group-btn">
                                <a id="btnBuscarUn" class="btn btn-primary" title="Buscar"><i class="fa fa-search"></i></a>
                              </span>
                          </div>                      

                      </div>
                    </form>
				</div>
					</div>
            </div>
            
            <div class="clearfix"></div>

            <div class="row">
              <div class="col-md-12">
                <div class="x_panel">
                  <div class="x_title">
                    <h2>Lista Unidades</h2>
                    
                    <div class="clearfix"></div>
                  </div>
                  <div class="x_content">



                    <table class="table table-condensed table-hover dataTable no-footer" id="tblUnity">
                          <thead>
                            <th>Unidad</th>
                            <th>Gerente</th>
                            <th>Correo Electronico</th>
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
                                <h4 class="modal-title">Editar Unidad</h4>
                              </div>
                              <div class="modal-body">
                                <div class="row">
                                  <div class="col-md-12">
                                  
                                  
                                    <div class="panel-body">

                                        <div>

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
                                <label class="control-label" for="txtCorreo">Correo Electronico*</label>
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

                            </div>
                              <div class="modal-footer">

								<button type="button" id="btnEditUnidad" data-dismiss="modal" class="btn btn-success">Guardar</button>
								<button type="button" class="btn btn-default" data-dismiss="modal">Cancelar</button>
                              </div>
                          </div>
                        </div>
                        
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

                          </div>
                            <div class="modal-footer">
								<button type="button" id="btnDeleteUnity" data-dismiss="modal" class="btn btn-danger" >Borrar</button>
								<button type="button" class="btn btn-default" data-dismiss="modal">Cancelar</button>
                            </div>                          
                        </div>
                      </div>                      
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