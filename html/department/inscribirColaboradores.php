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
            <div id="msg">
              
              <?php
              
                 if(isset($_GET['success'])) {
                   echo '<div class="alert alert-dismissible alert-success">
                     <strong>Completado!</strong> se han ingresado nuevos colaboradores .
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
                <h3>Administración - Departamento</h3>
              </div>

             
            </div>
            
            <div class="clearfix"  style="height: 61px;" ></div>

            <div class="row">
              <div class="col-md-12">
                <div class="x_panel">
                  <div class="x_title">
                    <h2>Inscribir Colaborador</h2>
                    
                    <div class="clearfix"></div>
                  </div>
                  <div class="x_content">
                  
                    <form class="form-horizontal form-label-left" name="formAddDepartment" method="post" action="?view=department&mode=in" >
                     
 
                      <div class="form-group">
                        <div class="col-md-7 col-sm-9 col-xs-12 ">
                          <label>Departamento:</label>
                          <select class="select2_single form-control" id ="txtDepartamento" name="txtDepartamento">
                                
                              
                          <option value='0'>Sin Departamento</option>
                            <?php

                              
                             if(false != $resp) {
                              
                                foreach ($resp as $key => $value) {
                                  
                                  //echo ""$resp[$key ]['preguntas'];
                                  echo "<option value='".$resp[$key ]["id_departamento"]."'>".$resp[$key ]["empresa"]." - ".$resp[$key ]["unidad"]." - ".$resp[$key ]["descripcion"]."</option>";
                                  
                                  
                                }
                              }
                            ?>
                          </select>

                        </div>
                      </div>
                      
                      <div class="form-group">
                        <div class="col-md-7 col-sm-9 col-xs-12 ">
                          <div>
                            <label>Personal:</label>
                            
                          </div>
                          <div class=" col-md-12 col-sm-9 col-xs-12" style="padding-left: 0px; padding-right: 0px">
                            
                            <!--<input type="text" id="txtEmailJefe" name="txtEmailJefe" class="form-control" placeholder="Nombre del colaborador">-->
                              <textarea class="form-control" rows="5" id="taCorreos" name="taCorreos" placeholder="Ingrese los correos en el siguiente formato:  juan perez,juan@correo.com; pedro gonzalez,pedro@correo.com ..."></textarea>
                            
                          </div>
                        </div>
                      </div>

                      <div class="form-group">
                        <div class="col-md-7 col-sm-9 col-xs-12 ">
                            <button class="btn btn-success" >Aceptar</button>
                            
                                                    
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