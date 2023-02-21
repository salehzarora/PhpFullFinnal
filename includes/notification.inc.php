<?php
$serverName = "localhost";
$dBUsername = "root";
$dBPassword = "";
$dBName = "gym" ;


$conn = mysqli_connect($serverName, $dBUsername, $dBPassword, $dBName); 
session_start();
require_once 'functions.inc.php';

if(isset($_POST['delete'])){
    
    $nid=$_POST['nid'];
    $url=$_POST['url'];


   Ndelete($conn,$nid,$url);






}


?>