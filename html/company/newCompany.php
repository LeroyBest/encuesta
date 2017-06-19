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
                <h3>Nueva Empresa </h3>
              </div>

             
            </div>
            
            <div class="clearfix"></div>

            <div class="row">
              <div class="col-md-12">
                <div class="x_panel">
                  <div class="x_title">
                    <h2>Crear Empresa</h2>
                    
                    <div class="clearfix"></div>
                  </div>
                  <div class="x_content">
                  

                  <form class="form-horizontal form-label-left" name="formenvioencuestas" method="post" action="?view=company&mode=nuevo">
                     <div class="form-group">
                      <div class="col-md-7 col-sm-9 col-xs-12 rows ">
                        <label>Empresa:</label>
                        <input type="text" id="txtdepartamento" name="txtdepartamento" class="form-control" placeholder="Nombre de la empresa">
                                                  
                      </div>
                    </div>
                    <div class="form-group">

                      <div class="col-md-7 col-sm-9 col-xs-12 ">
                        <label>Gerente:</label>
                        <input type="text" id="txtdepartamento" name="txtdepartamento" class="form-control" placeholder="Nombre del gerente">
                                                  
                      </div>
                    </div>
                    <div class="form-group">
                      <div class="col-md-7 col-sm-9 col-xs-12 ">
                        <label>Email:</label>
                        <input type="text" id="txtdepartamento" name="txtdepartamento" class="form-control" placeholder="Email del gerente">
                                                  
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