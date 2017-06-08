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
                <h3>Resultado </h3>
              </div>

             
            </div>
            
            <div class="clearfix"></div>

            <div class="row">
              <div class="col-md-12">
                <div class="x_panel">
                  <div class="x_title">
                    <h2>Criterio</h2>
                    
                    <div class="clearfix"></div>
                  </div>
                  <div class="x_content">
                  

                 
                    
<table class="table table-striped  projects">
        <thead>
          <th style="width: 50%">Criterio</th>
          <th style="width: 50%" >promedio de evaluación</th>

        </thead>
          <tbody>
                   
<?php

//print_r($resp);

foreach ($resp as $key => $value) {
    
  //echo ""$resp[$key ]['preguntas'];
  echo '<tr><td>'.$resp[$key ]["criterio"].'</td>';
  echo '<td><b>'.$resp[$key ]["promedio"].'</b></td></tr>';
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

   <?php include('views/component/footers.php'); ?>
  </body>
</html>