<?php include(HTML_DIR . 'component/header.php'); ?>
  <body class="login">
    <div>
      <a class="hiddenanchor" id="signup"></a>
      <a class="hiddenanchor" id="signin"></a>

      <div class="login_wrapper">
        <div class="animate form login_form">
          <section class="login_content">
            <form class="form-login" method ="post" action="?view=login&mode=validar">
              <h1>Iniciar Sesión</h1>
              <div>
                <input type="text" class="form-control" name="user"  placeholder="Usuario" required="" />
              </div>
              <div>
                <input type="password" class="form-control" name="pass" placeholder="Contraseña" required="" />
              </div>
              <div>
                <button class="btn btn-default submit" >Iniciar</button>
                
              </div>

              <div class="clearfix">
                <?php
                    if(isset($_GET['error'])){
                    
						echo '<div class="alert alert-dismissible alert-danger">
								<button type="button" class="close" data-dismiss="alert">x</button>
								<strong>ERROR:</strong> Verifique su usuario y contraseña .
							</div>';
                        
                    }
                ?>
              </div>

              <div class="separator">


                <div class="clearfix"></div>
                <br />

                
              </div>
            </form>
          </section>
        </div>


      </div>
    </div>
  </body>
</html>