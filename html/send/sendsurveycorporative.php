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
                <h3>Administracion </h3>
              </div>

             
            </div>
            
            <div class="clearfix"></div>

            <div class="row">
              <div class="col-md-12">
                <div class="x_panel">
                  <div class="x_title">
                    <h2>Envio de encuesta Corporativa</h2>
                    
                    <div class="clearfix"></div>
                  </div>
                  <div class="x_content">
                  
                  <form class="form-horizontal form-label-left" name="formenvioencuestas" method="post" action="?view=send&mode=enviar">
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

                      <div class="form-group">
                        <div class="col-md-6 col-sm-9 col-xs-12 ">

                          <select class="form-control " name="selencuesta">
                            <?php
                              foreach ($resp as $key => $value) {
                                echo '<option name="prueba" value="'.$resp[$key ]["id_encuesta"].'">'.$resp[$key ]["titulo"].'</option>';

                              }
                            ?>
                            
                           
                          </select>
                        </div>
                      </div>

                      <div class="form-group">
                          
                          <div class="col-md-2">
                                  <input type="button" id="btncreacorreos" value="ENVIAR" class="btn btn-primary">
                            
                          </div>
                                
                      </div> 


                        <div id="conttext" class="col-md-12">
                          
                        </div>
                             
                        <div id="contbutton" class="col-md-12">
                         
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
        <!-- /footer content   <script src="views/app/js/validador.js"></script>-->
      </div>
    </div>

    <?php include(HTML_DIR . 'component/footers.php'); ?>
     
    <script src="views/app/js/reportes.js"></script>
  </body>
</html>