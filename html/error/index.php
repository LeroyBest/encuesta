<?php
session_start();
//session_destroy();
//$_PREG[]=array("A"=>"B");
/*if(isset($_GET['view']) ){
  if(file_exists('bin/controllers/'. $_GET['view'].'Controller.php')){
        include('bin/controllers/'. $_GET['view'].'Controller.php');
        //header("location:dashboard.php");
    }
  //header("location:dashboard.php");
  }
else{

  //header("location:login.php");
  include('encuesta.php');
  $_GET['mode']="list";
  //echo $_GET['mode'];
}*/


 //include('encuesta.php');
if(isset($_GET['view']) ){
    

    if(file_exists('bin/controllers/'. $_GET['view'].'Controller.php')){
       
        include('bin/controllers/'. $_GET['view'].'Controller.php');
        //header("location:dashboard.php");
    }
}
else{
    $_GET['mode']="list";
    $_GET['view'] ="preguntas";
    if(file_exists('bin/controllers/'. $_GET['view'].'Controller.php')){
       
        include('bin/controllers/'. $_GET['view'].'Controller.php');
        //header("location:dashboard.php");
    }

}



?>