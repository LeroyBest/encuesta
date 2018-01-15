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
            
              <div class="title_left">
                <h3>Encuesta Enviada</h3>
              </div>


             
            </div>
            
            <div class="clearfix"></div>

            <div class="row">
              <div class="col-md-12">
                <div class="x_panel">
                  <div id="msg">
                    <div class="alert alert-dismissible alert-success">
                    <button type="button" class="close" data-dismiss="alert">x</button>
                    <strong>Correcto!!</strong> La encuesta fue enviada a las siguientes personas. 
                    </div>
                  </div>
                  <div class="x_title">
                    <h2>  </h2>
                    
                    <div class="clearfix"></div>
                  </div>
                  <div class="x_content">
                  

                      <div id="conttext" class="col-md-12">
                        <?php
                          if(!empty($correos)){
                            foreach ($correos as $key => $value) {
                              
                              $para=$correos[$key]['correo'];
                              $nombre=$correos[$key]['colaborador'];
                              echo "<div><i class='fa fa-check'></i></div>"$para;
                            }
                          }
                        ?>
                      </div>
                             
                      <div id="contbutton" class="col-md-12">
                       
                      </div>
                    
                     
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
        <!-- /footer content   <script src="views/app/js/validador.js"></script>-->
      </div>
    </div>

    <?php include(HTML_DIR . 'component/footers.php'); ?>
     
    <script src="views/app/js/reportes.js"></script>
  </body>
</html>