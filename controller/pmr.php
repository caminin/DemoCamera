<?php 
    session_start();
    
    if(isset($_SESSION["PMR"])){
        unset($_SESSION["PMR"]);
    }
    else{
        $_SESSION["PMR"]= "true";
    }

    header("Location:../index.php");
?>
