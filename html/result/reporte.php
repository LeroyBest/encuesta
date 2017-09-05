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
                <h3>Reportes </h3>
              </div>

             
            </div>
            
            <div class="clearfix"></div>

            <div class="row">
              <div class="col-md-12">
                <div class="x_panel">
                  <div class="x_title">
                    <h2>Preguntas</h2>
                    
                    <div class="clearfix"></div>
                  </div>
                  <div class="x_content">
                    <form class="form-horizontal form-label-left input_mask" id="reportesForm">
                      <div class="rows">
                        <div class="col-md-4 col-sm-6 col-xs-12 form-group has-feedback">
                          <select type="text" name="tipo" class="form-control has-feedback-left" id="tipo">
                            <option>-Escojer una opcion-</option>
                            <option >Empresa</option>
                            <option >Unidad</option>
                            <option >Departamento</option>
                          </select>
                        </div>

                        <div class="col-md-4 col-sm-6 col-xs-12 form-group has-feedback">
                          <select id ="nombre" name ="nombre" class="form-control has-feedback-left"  >

                           
                          </select>
                        </div>

                        
                      </div>

                      <div class="col-md-4">
                        <button>Generar Informe</button>
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
    <script src="views/app/js/reportes.js"></script>
  </body>
</html>