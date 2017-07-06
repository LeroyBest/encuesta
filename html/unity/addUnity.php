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
                <h3>Unidad </h3>
              </div>

             
            </div>
            
            <div class="clearfix"></div>

            <div class="row">
              <div class="col-md-12">
                <div class="x_panel">
                  <div class="x_title">
                    <h2>Crear unidad</h2>
                    
                    <div class="clearfix"></div>
                  </div>
                  <div class="x_content">
                  
                    <form class="form-horizontal form-label-left" name="formAddUnity" method="post" action="?view=unity&mode=add">
                      <div class="form-group">
                        <div class="col-md-7 col-sm-9 col-xs-12 rows ">
                          <label>Unidad:</label>
                          <input type="text" id="txtUnidad" name="txtUnidad" class="form-control" placeholder="Nombre de la Unidad">
                                                    
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
                          <label>Empresa:</label>
                          <input type="text" id="txtEmpresa" name="txtEmpresa" class="form-control" placeholder="Empresa a la cual esta asociada">
                                                    
                        </div>
                      </div>
                      <div class="form-group">
                        <div class="col-md-7 col-sm-9 col-xs-12 ">
                            <button class="btn btn-success">ACEPTAR</button>
                            <button class="btn btn-danger">CANCELAR</button>
                                                    
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