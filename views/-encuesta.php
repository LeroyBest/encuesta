<?php include('component/header.php'); ?>

  <body class="nav-sm">
    <div class="container body">
      <div class="main_container">
       
       <?php include('views/component/menu.php'); ?>

      


        <!-- page content -->

        <div class="right_col" role="main">
          <div class="">
            <div class="page-title">
            <div id="msg"></div>
              <div class="title_left">
                <h3>Encuesta <small>Listing design</small></h3>
              </div>

             
            </div>
            
            <div class="clearfix"></div>

            <div class="row">
              <div class="col-md-12">
                <div class="x_panel">
                  <div class="x_title">
                    <h2>Demo</h2>
                    
                    <div class="clearfix"></div>
                  </div>
                  <div class="x_content">
                  

                 
                    
<form name ="preguntas_form" id="preguntas_form" method="post" action="?view=preguntas&mode=list&sn=<?php echo $_SESSION['sn'];?>&eval=<?php echo $_SESSION['eval']?>">
                    <!-- start project list -->
                    
                   
<?php
//$_SESSION['a']=0;
//print_r($resp);
$a=0;
foreach ($resp as $key => $value) {
  $a+=1;
  //print_r($value);
   //print "$key.id => $value\n";
  //echo ""$resp[$key ]['preguntas'];
  echo '<p class="questions"><b>'.$resp[$key ]["id"].'.</b>'.$resp[$key ]["preguntas"].'</p>
        <div class="rows">
                    
                    <div class="rows">
                      <div class="radio">
                        <label>
                          <input type="radio" value ="NUNCA_'.$resp[$key ]["id"].'" id="NUNCA" class="flat" name="iCheck'.$a.'"> NUNCA
                        </label>
                      </div>
                    </div>

                    <div class="rows">
                      <div class="radio">
                        <label>
                          <input type="radio" value="A VECES_'.$resp[$key ]["id"].'" id="AVECES" class="flat" name="iCheck'.$a.'" > A VECES
                        </label>
                      </div>
                    </div>
                    
                    <div class="rows">  
                      <div class="radio">
                        <label>
                          <input type="radio" value="CASI SIEMPRE_'.$resp[$key ]["id"].'" id="CASI SIEMPRE" class="flat" name="iCheck'.$a.'" id="CASI SIEMPRE"> CASI SIEMPRE
                        </label>
                      </div>
                    </div>

                    <div class="rows">  
                      <div class="radio">
                        <label>
                          <input type="radio" value="SIEMPRE_'.$resp[$key ]["id"].'" id="SIEMPRE" class="flat" name="iCheck'.$a.'"> SIEMPRE
                        </label>
                      </div>
                    </div>  
                  </div>';


}
$a=0;
if($_SESSION['a'] < 16){
echo '<button  value ="siguiente" id="siguiente" name="siguiente" class="btn btn-success "> SIGUIENTE >></button>';
  //echo '<input type="button"  id="siguiente" name="siguiente" class="btn btn-success ">';
}else{
  echo '<button value ="enviar" id="enviar" name="enviar" class="btn btn-success " > ENVIAR <i class="fa fa-floppy-o "></i></button>';
  //session_destroy();
}
?>

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
            Gentelella - Bootstrap Admin Template by <a href="https://colorlib.com">Colorlib</a>
          </div>
          <div class="clearfix"></div>
        </footer>
        <!-- /footer content -->
      </div>
    </div>

      
      <?php include('views/component/footers.php'); ?>
      <script src="views/js/validador.js"></script>
  </body>
</html>