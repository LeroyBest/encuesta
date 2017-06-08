<?php
include('core/core.php');

if(isset($_SESSION['user'])){
      if(isset($_GET['view']) ){
          

          if(file_exists('core/controllers/'. $_GET['view'].'Controller.php')){
             
              include('core/controllers/'. $_GET['view'].'Controller.php');
              
          }
      }
      else{
         $_GET['mode']="ms";
          $_GET['view'] ="home";
          /*if(file_exists('core/controllers/'. $_GET['view'].'Controller.php')){
             
              include('core/controllers/'. $_GET['view'].'Controller.php');
              //header("location:dashboard.php");
          }*/
           include('core/controllers/'. $_GET['view'].'Controller.php');
          
      }
}
else if (isset($_GET['view'])=="preguntas" && isset($_GET['mode'])=="list"){
    include('core/controllers/'. $_GET['view'].'Controller.php');
}
else{
  $_GET['view'] ="login";
  include('core/controllers/'. $_GET['view'].'Controller.php');
}      



?>