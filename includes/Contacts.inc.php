<?php
 $serverName = "localhost";
 $dBUsername = "root";
 $dBPassword = "";
$dBName = "gym" ;

 $conn = mysqli_connect($serverName, $dBUsername, $dBPassword, $dBName); 

 require_once 'functions.inc.php';

if(isset($_POST["submit"])){

    $userid = $_POST["userid"] ; 

   $name = $_POST["name"] ; 
   $email = $_POST["email"] ; 
   $phone = $_POST["phone"] ; 
   $message = $_POST["message"] ; 



   $sql = "INSERT INTO `contacts`(`userid`, `name`, `email`, `phone`, `message` , `Date` , `Time`) VALUES ($userid,'$name','$email',$phone,'$message',NOW(),NOW())";

   if (mysqli_query($conn, $sql)) {

       header("location: ../Contacts.php?");

   } else {
   echo "Error deleting record: " . mysqli_error($conn);
   }


}


if(isset($_POST["delete"])){

    $id = $_POST["id"] ; 



   $sql = "DELETE FROM `contacts` WHERE `id` = $id;";

   if (mysqli_query($conn, $sql)) {

       header("location: ../AdminContacts.php?");

   } else {
   echo "Error deleting record: " . mysqli_error($conn);
   }


}