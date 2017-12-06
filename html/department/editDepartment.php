<?php include(HTML_DIR . 'component/header.php'); ?>
 <link href="views/assets/vendors/datatables.net-bs/css/dataTables.bootstrap.min.css" rel="stylesheet">
 <link href="views/assets/vendors/datatables.net-buttons-bs/css/buttons.bootstrap.min.css" rel="stylesheet">
 <link href="views/assets/vendors/datatables.net-fixedheader-bs/css/fixedHeader.bootstrap.min.css" rel="stylesheet">
 <link href="views/assets/vendors/datatables.net-responsive-bs/css/responsive.bootstrap.min.css" rel="stylesheet">
 <link href="views/assets/vendors/datatables.net-scroller-bs/css/scroller.bootstrap.min.css" rel="stylesheet">

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
                <h3>Administración - Departamento </h3>
              </div>

             
            </div>
            
            <div class="clearfix"  style="height: 61px;" ></div>

            <div class="row">
              <div class="col-md-12">
                <div class="x_panel">
                  <div class="x_title">
                    <h2>Lista Departamento</h2>
                    
                    <div class="clearfix"></div>
                  </div>
                  <div class="x_content">
                   


                    <table class="table table-striped table-bordered dt-responsive nowrap dataTable no-footer dtr-inline" id="tblDepartament">
                          <thead>
                            <th>Departamento</th>
                            <th>Colaborador</th>
                            <th>Correo Electronico</th>
                            <th></th>
                          </thead>
                          <tbody >
                            <?php

                                //print_r($resp);
                                if(false != $resp) {
                                  foreach ($resp as $key => $value) {
                                    
                                    //echo ""$resp[$key ]['preguntas'];
                                    echo '<tr><td><b>'.$resp[$key ]["descripcion"].'</b></td>';
                                    echo '<td>'.$resp[$key ]["colaborador"].'</td>';
                                    echo '<td>'.$resp[$key ]["correo"].'</td>';
                                    echo '<td><a class="btn btn-danger btn-md" title="Borrar"><i class="fa fa-trash" aria-hidden="true"></i></a></td></tr>';
                                  }
                               }
                            ?>      
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
                        <div class="modal fade" id="editCompany" role="dialog">
                          <div class="modal-dialog modal-lg">
                          
                            <!-- Modal content-->
                            <div class="modal-content">
                              <div class="modal-header">
                                <button type="button" class="close" data-dismiss="modal">&times;</button>
                                <h4 class="modal-title">Editar Departamento</h4>
                              </div>
                              <div class="modal-body">
                                <div class="row">
                                  <div class="col-md-12">
                                  
                                  
                                    <div class="panel-body">

                                        <div>

                          <form id="formEditCompany">             
                            <div class="row">
                              <div class="col-md-3 form-group">
                                <label class="control-label" for="txtEmpresa">Empresa *</label>
                              </div>  
                              <div class="col-md-7 form-group">
                                <div class="controls input-group">
                                  <input class="form-control" name="txtEmpresa" id="txtEmpresa"  type="text" required>
                                  <div class="input-group-addon">
                                    <i class="fa fa-building"></i>
                                  </div>
                                </div>
                              </div>    
                            </div>              

                            <div class="row">
                              <div class="col-md-3 form-group">
                                <label class="control-label" for="txtGerente">Gerente *</label>
                              </div>  
                              <div class="col-md-7 form-group">
                                <div class="controls input-group">
                                  <input class="form-control" name="txtGerente" id="txtGerente"  type="text" required>
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
                          </form> 
                                        </div>
                                              
                                          <!-- /.panel-body -->
                                      </div> 
                                         
                                  </div>
                                 </div>

                            </div>
                              <div class="modal-footer">
                              <button type="button" id="btnEditEmpresa" data-dismiss="modal" class="btn btn-success" >Guardar</button>
                                <button type="button" class="btn btn-default" data-dismiss="modal">Cancelar</button>

                              </div>
                          </div>
                        </div>
                        
                      </div>

                    </div>

                  <div class="container">
                    <!-- Modal -->
                    <div class="modal fade" id="deleteCompany" role="dialog">
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
                              <button type="button" id="btnDeletEmpresa" class="btn btn-danger" >Borrar</button>
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
    
    <!-- Datatables -->
    <script src="views/assets/vendors/datatables.net/js/jquery.dataTables.min.js"></script>
    <script src="views/assets/vendors/datatables.net-bs/js/dataTables.bootstrap.min.js"></script>
    <script src="views/assets/vendors/datatables.net-buttons/js/dataTables.buttons.min.js"></script>
    <script src="views/assets/vendors/datatables.net-buttons-bs/js/buttons.bootstrap.min.js"></script>
    <script src="views/assets/vendors/datatables.net-buttons/js/buttons.flash.min.js"></script>
    <script src="views/assets/vendors/datatables.net-buttons/js/buttons.html5.min.js"></script>
    <script src="views/assets/vendors/datatables.net-buttons/js/buttons.print.min.js"></script>
    <script src="views/assets/vendors/datatables.net-fixedheader/js/dataTables.fixedHeader.min.js"></script>
    <script src="views/assets/vendors/datatables.net-keytable/js/dataTables.keyTable.min.js"></script>
    <script src="views/assets/vendors/datatables.net-responsive/js/dataTables.responsive.min.js"></script>
    <script src="views/assets/vendors/datatables.net-responsive-bs/js/responsive.bootstrap.js"></script>
    <script src="views/assets/vendors/datatables.net-scroller/js/dataTables.scroller.min.js"></script>
    <script src="views/app/js/editDepartment.js"></script>
  </body>
</html>