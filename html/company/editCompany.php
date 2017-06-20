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
                  

                 
                    <a href="?view=company&mode=new">NUEVA </a>

                    <div class="form-group">
                      <div class="col-md-7 col-sm-9 col-xs-12 rows ">
                        <label>Buscar:</label>
                        <div class="input-group">
                          <input type="text" class="form-control">
                            <span class="input-group-btn">
                              <button type="button" class="btn btn-primary"><i class ="">Buscar</i></button>
                            </span>
                        </div>                      
                      </div>
                    </div>
                
                    <table class="table table-striped  projects">
                          <thead>
                            <th>Empresa</th>
                            <th>Gerente</th>
                            <th>Email</th>
                            <th></th>
                          </thead>
                          <tbody>
                                     
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