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
                <h3>Mis Encuestas</h3>
              </div>

             
            </div>
            
            <div class="clearfix"></div>

            <div class="row">
              <div class="col-md-12">
                <div class="x_panel">

                  <div class="x_content">
                  

                 
                    
<table class="table table-striped  projects">
        <thead>
          <th>Titulo</th>
          <th>Unidad Evaluada</th>
          <th>Fecha de Creacion</th>
          <th>Completadas</th>
          <th>Total Enviadas</th>
          <th></th>
        </thead>
          <tbody>
                   
<?php

//print_r($resp);
if(false != $resp) {
	foreach ($resp as $key => $value) {
		
	  //echo ""$resp[$key ]['preguntas'];
	  echo '<tr><td><b>'.$resp[$key ]["titulo"].'</b></td>';
	  echo '<td>'.$resp[$key ]["departamento"].'</td>';
	  echo '<td>'.$resp[$key ]["fecha_creacion"].'</td>';
	  echo '<td>'.$resp[$key ]["completado"].'</td>';
	  echo '<td>'.$resp[$key ]["total"].'</td>';
	 
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