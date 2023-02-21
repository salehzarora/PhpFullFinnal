<?php
$serverName = "localhost";
$dBUsername = "root";
$dBPassword = "";
$dBName = "gym" ;


$conn = mysqli_connect($serverName, $dBUsername, $dBPassword, $dBName); 

if(isset($_POST['submit'])){
    
    session_start();

    $sql = "DELETE FROM product_cart WHERE Cartid=$_SESSION[cartid]";

        if (mysqli_query($conn, $sql)) {

            header("location: ../home.php?");

        } else {
        echo "Error deleting record: " . mysqli_error($conn);
        }
}