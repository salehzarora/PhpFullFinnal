
<?php
 $serverName = "localhost";
 $dBUsername = "root";
 $dBPassword = "";
$dBName = "gym" ;

 $conn = mysqli_connect($serverName, $dBUsername, $dBPassword, $dBName); 

 require_once 'functions.inc.php';

if(isset($_POST["delete"])){

    session_start();
   $pid = $_POST["pid"] ; 
   $cid = $_SESSION["cartid"] ; 

   include_once 'dbh.inc.php' ;
   include_once 'functions.inc.php' ;

    deleteFromCart($conn , $pid , $cid);
}
    else {
        header("location: ../Cart.php?error=WrongDelete") ;
        exit();

    }

   


   