 


<?php
 $serverName = "localhost";
 $dBUsername = "root";
 $dBPassword = "";
$dBName = "gym" ;

 $conn = mysqli_connect($serverName, $dBUsername, $dBPassword, $dBName); 




if(isset($_POST["update"])){

session_start();



$pid = $_POST["pid"] ; 
$cid = $_SESSION["cartid"] ; 
$quantity2 = $_POST["quantity2"] ; 

include_once 'dbh.inc.php' ;
include_once 'functions.inc.php' ;

updatequantity($conn , $pid , $cid ,$quantity2);
} else {
    
header("location: ../Cart.php?error=Wrongupdate") ;
exit();

}






?>

