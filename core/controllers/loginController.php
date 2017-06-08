<?php

require ('core/models/loginModels.php');


	$models = new validaCredenciales();

  

        	if($_SERVER['REQUEST_METHOD'] == "POST"){
        		$usr = isset($_POST['userId']) ? mysqli_real_escape_string(new connectdb(), $_POST['userId']) :  "";
        		$password = isset($_POST['pass']) ? mysqli_real_escape_string(new connectdb(), $_POST['pass']) :  "";
        		
        	}


        if($_POST){
        	$resp = $models->validaCredenciales($usr, $password);
        	

        	if($resp){
        		//header('Location: ../../dashboard.php?resp='.$resp);
               header('Location: ?view=home&mode=ms');
            $_SESSION['user']=$resp;
            //echo $_SESSION['user'];

        	}else if($resp="invalido") {
            header('Location: ?error=1');
               // include('login.php?error=1');
             
            
        	}
        }else{
            include('views/login.php');
        }

   

?>