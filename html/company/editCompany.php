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
						<h3>Administración - Empresas </h3>
					</div>
					<div class="title_right">
						<div class=" form-group pull-right">
						 <form method="post" name="formEditCompany" action="?view=company&mode=edit">
                          <div class="input-group">
                            <input type="text" id="txtbuscarEmpresa" name="txtbuscarEmpresa" placeholder="Buscar Empresa" class="form-control">
                              <span class="input-group-btn">
                                <a  id="btnBuscarCo" class="btn btn-primary" title="Buscar"><i class="fa fa-search"></i></a>
                              </span>
                          </div> 
						  </form>
						</div>
					</div>

            </div>
            
            <div class="clearfix"></div>

            <div class="row">
              <div class="col-md-12">
                <div class="x_panel">
                  <div class="x_title">
                    <h2>Lista Empresas</h2>
                    
                    <div class="clearfix"></div>
                  </div>
                  <div class="x_content">

                    


                    <table class="table table-condensed table-hover dataTable no-footer" id="tblCompany">
                          <thead>
                            <th>Empresa</th>
                            <th>Gerente</th>
                            <th>Correo Electronico</th>
                            <th></th>
                          </thead>
                          <tbody id="cuerpo">
                                     
                          </tbody>
                    </table>                
                      

                      
                      
                    <!-- end project list -->

                  </div>
                </div>
              </div>
            </div>
          </div>

<div class="container">
	<!-- Modal -->
	<div class="modal fade" id="editCompany" role="dialog">
	<div class="modal-dialog modal-lg">
	<!-- Modal content-->
	<div class="modal-content">
		<div class="modal-header">
		<button type="button" class="close" data-dismiss="modal">&times;</button>
		<h4 class="modal-title">Editar Empresa</h4>
		</div>
		<div class="modal-body">
			<div class="row">
				<div class="col-md-12">
					<div class="panel-body">
						<div>
							<form id="formEditCompany">             
								<div class="row">
									<div class="col-md-3 form-group">
										<label class="control-label" for="txtEmpresa">Empresa *</label>
									</div>  
									<div class="col-md-7 form-group">
										<div class="controls input-group">
											<input class="form-control" name="txtEmpresa" id="txtEmpresa"  type="text" required>
											<div class="input-group-addon">
											<i class="fa fa-building"></i>
											</div>
										</div>
									</div>    
								</div>              
								<div class="row">
									<div class="col-md-3 form-group">
										<label class="control-label" for="txtGerente">Gerente *</label>
									</div>  
									<div class="col-md-7 form-group">
										<div class="controls input-group">
											<input class="form-control" name="txtGerente" id="txtGerente"  type="text" required>
											<div class="input-group-addon">
											<i class="fa fa-user"></i>
											</div>
										</div>
									</div>    
								</div>
								<div class="row">
									<div class="col-md-3 form-group">
										<label class="control-label" for="txtCorreo">Correo Electronico*</label>
									</div>  
									<div class="col-md-7 form-group">
										<div class="controls input-group">
											<input class="form-control" name="txtCorreo" id="txtCorreo"  type="text" required>
											<div class="input-group-addon">
											<i class="fa fa-envelope"></i>
											</div>
										</div>
									</div>
								</div>
							</form> 
						</div>

					<!-- /.panel-body -->
					</div> 

				</div>
			</div>
		</div>
		<div class="modal-footer">
		<button type="button" id="btnEditEmpresa" data-dismiss="modal" class="btn btn-success">Guardar</button>
		<button type="button" class="btn btn-default" data-dismiss="modal">Cancelar</button>
		</div>
	</div>
	</div>  
	</div>


</div>

<div class="container">
	<!-- Modal -->
	<div class="modal fade" id="deleteCompany" role="dialog">
	<div class="modal-dialog modal-sm">                        
		<!-- Modal content-->
		<div class="modal-content">
			<div class="modal-header alert alert-dismissible alert-danger">
			<strong>Confirmar Borrado!</strong>
			</div>
			<div class="modal-body">
				<div class="row">
					<div class="col-md-12">                                

						<div class="panel-body">

						<strong>¿Esta seguro de borrar esta información?</strong>

						<!-- /.panel-body -->
						</div> 

					</div>
				</div>

			</div> 
			<div class="modal-footer">
				<button type="button" id="btnDeletEmpresa" data-dismiss="modal" class="btn btn-danger" >Borrar</button>
				<button type="button" class="btn btn-default" data-dismiss="modal">Cancelar</button>
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
    <script src="views/app/js/editCompany.js"></script>
  </body>
</html>