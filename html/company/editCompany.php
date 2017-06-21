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
                <h3>Empresa </h3>
              </div>

             
            </div>
            
            <div class="clearfix"></div>

            <div class="row">
              <div class="col-md-12">
                <div class="x_panel">
                  <div class="x_title">
                    <h2>Editar Empresa</h2>
                    
                    <div class="clearfix"></div>
                  </div>
                  <div class="x_content">
                    <form method="post" name="formEditCompany" action="?view=company&mode=edit">
                      <div class="form-group">
                        <div class="col-md-7 col-sm-9 col-xs-12 rows ">
                          <label>Buscar:</label>
                          <div class="input-group">
                            <input type="text" id="txtbuscarEmpresa" name="txtbuscarEmpresa" class="form-control">
                              <span class="input-group-btn">
                                <button type="submit" class="btn btn-primary"><i class ="">Buscar</i></button>
                              </span>
                          </div>                      
                        </div>
                      </div>
                    </form>


                    <table class="table table-striped  projects">
                          <thead>
                            <th>Empresa</th>
                            <th>Gerente</th>
                            <th>Email</th>
                            <th></th>
                          </thead>
                          <tbody>
                               <?php

                if(isset($resp)){
                               
                                if(false != $resp) {
                                  foreach ($resp as $key => $value) {
                                    
                                    //echo ""$resp[$key ]['preguntas'];
                                    echo '<tr><td><b>'.$resp[$key ]["descripcion"].'</b></td>';
                                    echo '<td>'.$resp[$key ]["colaborador"].'</td>';
                                    echo '<td>'.$resp[$key ]["correo"].'</td>';
                                    echo '<td><button id ="reportpdf"><i class="fa fa-file-pdf-o" aria-hidden="true"></i></button></td></tr>';
                                  }
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