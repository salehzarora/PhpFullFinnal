<?php
$serverName = "localhost";
$dBUsername = "root";
$dBPassword = "";
$dBName = "gym" ;


$conn = mysqli_connect($serverName, $dBUsername, $dBPassword, $dBName); 


if(isset($_POST['submit']))
{

    session_start();

    

    $sql = "SELECT * FROM `subcribers` WHERE userid = $_SESSION[userid] ;";
    $result = mysqli_query($conn , $sql);
    $resultCheck = mysqli_num_rows($result);

    if($resultCheck > 0 )
    {
       

            header("location: ../500.php?");

    }else{


    $username=$_SESSION["useruid"];
    $userid=$_SESSION["userid"];
    $orderid = rand(10000,99999);
    $price1=$_POST['Price1'];
    $price2=$_POST['Price2'];
    $price3=$_POST['Price3'];


    if($price1==40)
    {
    $query = "INSERT INTO `subcribers`(`userid`,`transfer_id`, `UserName`,`PlanPrice`,`Date`,`Time`) VALUES ($userid,$orderid,'$username',$price1,NOW(),NOW())";
    $result2 = mysqli_query($conn , $query);
    }



    if($price2==80)
    {
    $query = "INSERT INTO `subcribers`(`userid`,`transfer_id`, `UserName`,`PlanPrice`,`Date`,`Time`) VALUES ($userid,$orderid,'$username',$price2,NOW(),NOW())";
    $result2 = mysqli_query($conn , $query);
    }


    if($price3==120)
    {
    $query = "INSERT INTO `subcribers`(`userid`,`transfer_id`, `UserName`,`PlanPrice`,`Date`,`Time`) VALUES ($userid,$orderid,'$username',$price3,NOW(),NOW())";
    $result2 = mysqli_query($conn , $query);

    $query2 = "UPDATE `subcribers` SET `isVIP`='1' WHERE `UserName` = '$username'";
    $result3 = mysqli_query($conn , $query2);

    }




    header("location: ../PaymentConfirm.php?");

    }

}






?>