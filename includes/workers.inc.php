<?php
$serverName = "localhost";
$dBUsername = "root";
$dBPassword = "";
$dBName = "gym" ;

$conn = mysqli_connect($serverName, $dBUsername, $dBPassword, $dBName); 

include_once 'gymdb.inc.php';
include_once 'functions.inc.php';













// off Duty

if(isset($_POST['remove']))
{

    session_start();
    $userid=$_POST["userid"];
    
    $query = "UPDATE `users` SET `isWorker` = NULL , `isTrainer` = NULL , `Salary`= NULL WHERE `users`.`usersId` = '$userid'";
        $run = mysqli_query($conn,$query) or die(mysqli_error());

        $query2 = "DELETE FROM `workers_shift` WHERE `userid` = '$userid' ";
        $run2 = mysqli_query($conn,$query2) or die(mysqli_error());


        if($run){
            header("location: ../workers.php?");
            echo "worker removed !";
        }
        else{
            echo "something wrong! :(";
        }



    

}