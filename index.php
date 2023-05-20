<?php 
@session_start();
if($_SESSION["Usuario"] == "" || $_SESSION["Usuario"] == null  || $_SESSION["Usuario"] == "undefined"){
    header('Location: web/login.php');
}else{
    header('Location: web/index.php');
}
 
?>