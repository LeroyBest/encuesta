<?php include('component/header.php'); ?>


  <body class="nav-sm">
    <div class="container body">
      <div class="main_container">

       <?php include('component/menu.php'); ?>

       <?php include('component/topbar.php'); ?>     
          
        <!-- page content -->

        <div class="right_col" id="content" role="main">
          <div class="">
            <div class="page-title">
            <div id="msg"></div>
              <div class="title_left">
                <h3>Resultado Departamento </h3>
              </div>

             
            </div>
            
            <div class="clearfix"></div>

            <div class="row">
              <div class="col-md-12">
                <div class="x_panel">
                  <div class="x_title">
                    
                    
                    <div class="clearfix"></div>
                  </div>
                  <div class="x_content">
                  
                  <form class="form-horizontal form-label-left" name="formenvioencuestas" method="post" action="?view=reporteDep&mode=mostrar">


					<div class="form-group">
                        
                        <div class="col-md-6 col-sm-9 col-xs-12 ">
                          <label>Seleccione el departamente que desea verificar</label>
                                                  
                        </div>
                    </div>
					<div class="form-group">
						<div class="col-md-6 col-sm-9 col-xs-12 ">
							
						  <select class="form-control " name="selencuesta" >
							<option>-Seleccione Departamento a evaluar-</option>
							<?php
							 /* foreach ($resp as $key => $value) {
								echo '<option name="prueba" value="'.$resp[$key ]["id"].'">'.$resp[$key ]["titulo"].'</option>';

							  }*/
							?>
							
						   
						  </select>
						</div>
					</div>
					
					<div class="col-md-2">
                                  <button id="btnmostrarresult" name ="btnmostrarresult" value="btnmostrarresult" class="btn btn-primary">Mostrar Resultado</button>
                            
                    </div>
					

                    <div class="form-group">
						<div class="col-md-6 col-sm-9 col-xs-12 ">
					
					
						<?php
							  foreach ($resp as $key => $value) {
								echo $resp[$key ]["primer"];

							  }
						?>
						</div>
					
					</div>	
					
					<div class="form-group">
						<div class="col-md-6 col-sm-9 col-xs-12 ">
					
					
						<?php
							  foreach ($resp as $key => $value) {
								echo $resp[$key ]["segundo"];

							  }
						?>
						</div>
					
					</div>
					
					<div class="form-group">
						<div class="col-md-6 col-sm-9 col-xs-12 ">
					
					
						<?php
							  foreach ($resp as $key => $value) {
								echo $resp[$key ]["tercero"];

							  }
						?>
						</div>
					
					</div>
					
					<div class="form-group">
						<div class="col-md-6 col-sm-9 col-xs-12 ">
					
					
						<?php
							  foreach ($resp as $key => $value) {
								echo $resp[$key ]["cuarto"];

							  }
						?>
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
        <!-- /footer content -->
      </div>
    </div>

      <?php include('views/component/footers.php'); ?>
      <script src="views/js/validador.js"></script>
      <script src="views/js/creatextbox.js"></script>
  </body>
</html>