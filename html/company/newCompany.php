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
                  

                  <form class="form-horizontal form-label-left" name="formenvioencuestas" method="post" action="?view=envioencuesta&mode=enviar">
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
                        <label>Seleccione las unidades asociadas a esta empresa:</label>
                        <input type="text" id="txtdepartamento" name="txtdepartamento" class="form-control" placeholder="asignar unidades">
                                                  
                      </div>
                    </div>
                    <div class="control-group">
                        
                        <div class="col-md-9 col-sm-9 col-xs-12">
                          <input id="tags_1" class="tags form-control" value="social, adverts, sales" data-tagsinput-init="true" style="display: none;" type="text">
                          <div id="tags_1_tagsinput" class="tagsinput" style="width: auto; min-height: 100px; height: 100px;">
                            <span class="tag"><span>social&nbsp;&nbsp;</span><a href="#" title="Removing tag">x</a></span><span class="tag"><span>adverts&nbsp;&nbsp;</span><a href="#" title="Removing tag">x</a></span><span class="tag"><span>sales&nbsp;&nbsp;</span><a href="#" title="Removing tag">x</a></span><span class="tag"><span>asd&nbsp;&nbsp;</span><a href="#" title="Removing tag">x</a></span>
                            <div id="tags_1_addTag">
                            <input id="tags_1_tag" value="" data-default="add a tag" style="color: rgb(102, 102, 102); width: 72px;">
                            </div>
                            <div class="tags_clear"></div>
                          </div>
                          <div id="suggestions-container" style="position: relative; float: left; width: 250px; margin: 10px;">
                          </div>
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