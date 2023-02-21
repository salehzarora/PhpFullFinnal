<?php
$serverName = "localhost";
$dBUsername = "root";
$dBPassword = "";
$dBName = "gym" ;


$conn = mysqli_connect($serverName, $dBUsername, $dBPassword, $dBName); 

if(isset($_POST['submit']) && !empty($_POST['userid']) && !empty($_POST['salary']) && !empty($_POST['phone'])){



    session_start();

    $userid=$_POST["userid"];
    $salary=$_POST["salary"];
    $phone=$_POST["phone"];


    $CheckQuery ="SELECT * FROM `workers_shift` WHERE `userid` = '$userid'";
    $run = mysqli_query($conn,$CheckQuery) or die(mysqli_error());

    if($run){
        header("location: ../adminaddworker.php?");
    }
    else{
        echo "something wrong! :(";
    }


    $CheckQuery2 = " SELECT * FROM `users` WHERE `usersId` = '$userid' ";
    $result = mysqli_query($conn,$CheckQuery2);

    $resultCheck = mysqli_num_rows($result);
    
    if($resultCheck == 0 )
    {
        function_alert("Welcome to Geeks for Geeks");
        exit();
        function_alert("Welcome to Geeks for Geeks");

    }




    $query = "UPDATE `users` SET `isWorker` = '1' , `Salary`= '$salary' , `Phone` = '$phone' WHERE `users`.`usersId` = '$userid'";

        $run = mysqli_query($conn,$query) or die(mysqli_error());





    if(isset($_POST['day1'])){
    $day1=$_POST['day1'];}else $day1='break';

    if(isset($_POST['day2'])){
    $day2=$_POST['day2'];}else $day2='break';

    if(isset($_POST['day3'])){
    $day3=$_POST['day3'];}else $day3='break';

    if(isset($_POST['day4'])){
    $day4=$_POST['day4'];}else $day4='break';

    if(isset($_POST['day5'])){
    $day5=$_POST['day5'];}else $day5='break';

    if(isset($_POST['day6'])){
    $day6=$_POST['day6'];}else $day6='break';

    if(isset($_POST['day7'])){
    $day7=$_POST['day7'];}else $day7='break';



    $sql = "INSERT INTO `workers_shift`(`userid`, `Sunday`, `Monday`, `Tuesday`, `Wednesday`, `Thursday`, `Friday`, `Saturday`)  
    VALUES ($userid,'$day1','$day2','$day3','$day4','$day5','$day6','$day7')";

        if (mysqli_query($conn, $sql)) {

            header("location: ../addworkers.php?");

        } else {
        echo "Error deleting record: " . mysqli_error($conn);
        }



}








if(isset($_POST['trainer']) && !empty($_POST['userid']) && !empty($_POST['salary'])){




    $userid=$_POST["userid"];
    $salary=$_POST["salary"];
    $phone=$_POST["phone"];

    $sql = "UPDATE `users` SET `isWorker` = '1' , `isTrainer` = '1' ,`Salary`= '$salary' , `Phone` = '$phone' WHERE `users`.`usersId` = '$userid'";

        if (mysqli_query($conn, $sql)) {

            header("location: ../addworkers.php?");

        } else {
        echo "Error deleting record: " . mysqli_error($conn);
        }



}