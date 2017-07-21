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
            <div id="msg">
              
              <?php
                 if(isset($_GET['success'])) {
                   echo '<div class="alert alert-dismissible alert-success">
                     <strong>Completado!</strong> se ha creado la empresa satisfactoriamente.
                   </div>';
                 }
                 if(isset($_GET['error'])) {
                   
                     echo '<div class="alert alert-dismissible alert-danger">
                         <strong>Error!</strong></strong> lo campos no puede estar vacío.
                       </div>';
                 }

              ?>

            </div>
              <div class="title_left">
                <h3>Departamento</h3>
              </div>

             
            </div>
            
            <div class="clearfix"></div>

            <div class="row">
              <div class="col-md-12">
                <div class="x_panel">
                  <div class="x_title">
                    <h2>Crear departamento</h2>
                    
                    <div class="clearfix"></div>
                  </div>
                  <div class="x_content">
                  
                    <form class="form-horizontal form-label-left" name="formAddDepartment" method="post" action="?view=department&mode=add">
                      <div class="form-group">
                        <div class="col-md-7 col-sm-9 col-xs-12 rows ">
                          <label>Departamento:</label>
                          <input type="text" id="txtUnidad" name="txtUnidad" class="form-control" placeholder="Nombre del Departamento">
                                                    
                        </div>
                      </div>
                      <div class="form-group">

                        <div class="col-md-7 col-sm-9 col-xs-12 ">
                          <label>Jefe:</label>
                          <input type="text" id="txtJefe" name="txtJefe" class="form-control" placeholder="Nombre del jefe">
                                                    
                        </div>
                      </div>
                      <div class="form-group">
                        <div class="col-md-7 col-sm-9 col-xs-12 ">
                          <label>Email:</label>
                          <input type="text" id="txtEmailJefe" name="txtEmailJefe" class="form-control" placeholder="Email del jefe">
                                                    
                        </div>
                      </div>
                      <div class="form-group">
                        <div class="col-md-7 col-sm-9 col-xs-12 ">
                          <label>Unidad:</label>
                          <select class="select2_single form-control" id ="txtEmpresa" name="txtEmpresa">
                                
                              
                          <option value='0'>Sin Unidad</option>
                            <?php

                              
                             if(false != $resp) {
                                foreach ($resp as $key => $value) {
                                  
                                  //echo ""$resp[$key ]['preguntas'];
                                  echo "<option value='".$resp[$key ]["id_empresa"]."'>".$resp[$key ]["descripcion"]."</option>";
                                  
                                  
                                }
                              }
                            ?>
                          </select>

                        </div>
                      </div>
                      
                      <div class="form-group">
                        <div class="col-md-9 col-sm-9 col-xs-12 ">
                          <label>Personal:</label>
                          <div class="form-group">
                            <div class="form-group col-md-4">
                            <input type="text" id="txtEmailJefe" name="txtEmailJefe" class="form-control" placeholder="Nombre del colaborador">
                              
                            </div>

                            <div class="form-group col-md-5">
                              <input type="text" id="txtEmailJefe" name="txtEmailJefe" class="col-md-4  form-control" placeholder="Email del colaborador">      
                            </div> 

                            <a id="btncreacorreos"  class="btn btn-primary" style="border-radius: 100%;"><i class="fa fa-plus"></i></a>
                            
                          </div>
                        </div>
                      </div>

                      <div class="form-group">
                        <div class="col-md-7 col-sm-9 col-xs-12 ">
                            <button class="btn btn-success" >ACEPTAR</button>
                            
                                                    
                        </div>
                      </div>
                    </form>
                 
                    

                      

                      
                      
                    <!-- end project list -->

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

  </body>
</html>