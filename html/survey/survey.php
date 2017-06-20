<?php include(HTML_DIR . 'component/header.php'); ?>

  <body class="nav-sm">
    <div  class="container body">
      <div class="main_container">
       
       <!-- page content -->

        <div class="right_col" id="content" style="margin-left: 0px;" role="main">
          <div class="">
            <div class="page-title">
            <div id="msg"></div>
              <div class="title_left">
                <h3>Encuesta </h3>
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
                  

                                 
<form   method="post" name ="form" id="form"  action="?view=survey&mode=list&sn=<?php $_sn=$_GET['sn']; $_eval=$_GET['eval']; echo $_sn."&eval=".$_eval; ?>">
                    <!-- start project list -->
                    
                   
<?php

$a=0;

foreach ($resp as $key => $value) {
  $a+=1;

  echo '<p class="questions"><b>'.$resp[$key ]["id_pregunta"].'.</b>'.$resp[$key ]["pregunta"].'</p>
        <div class="rows">
                    
                    <div class="rows">
                      <div class="radio">
                        <label>
                          <input type="radio" value ="NUNCA_'.$resp[$key ]["id_pregunta"].'" id="NUNCA" class="flat" name="iCheck'.$a.'"> NUNCA
                        </label>
                      </div>
                    </div>

                    <div class="rows">
                      <div class="radio">
                        <label>
                          <input type="radio" value="A VECES_'.$resp[$key ]["id_pregunta"].'" id="AVECES" class="flat" name="iCheck'.$a.'" > A VECES
                        </label>
                      </div>
                    </div>
                    
                    <div class="rows">  
                      <div class="radio">
                        <label>
                          <input type="radio" value="CASI SIEMPRE_'.$resp[$key ]["id_pregunta"].'" id="CASI SIEMPRE" class="flat" name="iCheck'.$a.'" id="CASI SIEMPRE"> CASI SIEMPRE
                        </label>
                      </div>
                    </div>

                    <div class="rows">  
                      <div class="radio">
                        <label>
                          <input type="radio" value="SIEMPRE_'.$resp[$key ]["id_pregunta"].'" id="SIEMPRE" class="flat" name="iCheck'.$a.'"> SIEMPRE
                        </label>
                      </div>
                    </div>  
                  </div>';


}
 echo '<div"><input type="hidden" name="cant" id="cant" value="'.$a.'" /></div>';
$a=0;
if($cant<$preg){
echo '<button  type="submit"  value ="siguiente"   class="btn btn-success "> SIGUIENTE >></button>';
}else{
echo '<button  type="submit"  value ="enviar"  name="enviar" class="btn btn-success " > ENVIAR <i class="fa fa-floppy-o "></i></button>';

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
        <footer style="margin-left: 0px;">

          <div class="clearfix"></div>
        </footer>
        <!-- /footer content -->
      </div>
    </div>

      <?php include(HTML_DIR . 'component/footers.php'); ?>
      <script src="views/app/js/survey.js"></script>
  </body>
</html>