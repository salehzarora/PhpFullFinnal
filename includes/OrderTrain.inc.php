<?php
$serverName = "localhost";
$dBUsername = "root";
$dBPassword = "";
$dBName = "gym" ;


$conn = mysqli_connect($serverName, $dBUsername, $dBPassword, $dBName); 


if(isset($_POST['done'])){

    $id=$_POST["id"];




    $query ="DELETE FROM `trainer_shift` WHERE `id` = $id;";
    $result = mysqli_query($conn , $query);

            if($result)
            {
                header("location: ../dashboard.php?");
                echo 'Data update !';
            }else{
                header("location: ../404.php?");
            }
            mysqli_close($conn);

}


if(isset($_POST['adminCancel'])){

    $cid=$_POST["cid"];
    $customerid=$_POST['customerid'];
    $nid=rand(1000,9999);
    $staff=$_POST['staff'];
    $massage1='Error with training requset';
    $massage2=$_POST['massage'];


    $query2 ="INSERT INTO `notification`( `Nid`, `CustomerCart`, `Date`, `Time`, `Massage`, `Massage2`, `staff`) VALUES 
    ($nid,$cid,Now(),Now(),'$massage1','$massage2','$staff')";
    $result2 = mysqli_query($conn , $query2);








    $query ="DELETE FROM `trainerbook` WHERE `customerid` = $customerid;";
    $result = mysqli_query($conn , $query);

            if($result)
            {
                header("location: ../workerconfirms.php?");
                echo 'Data update !';
            }else{
                header("location: ../404.php?");
            }
            mysqli_close($conn);

}




if(isset($_POST['confirm'])){

    $cid=$_POST["cid"];
    $customerid=$_POST['customerid'];
    $nid=rand(1000,9999);
    $staff=$_POST['staff'];
    $massage1='your train accepted';
    $massage2=$_POST['massage'];




    $query2 ="INSERT INTO `notification`( `Nid`, `CustomerCart`, `Date`, `Time`, `Massage`, `Massage2`, `staff`) VALUES 
    ($nid,$cid,Now(),Now(),'$massage1','$massage2','$staff')";
    $result2 = mysqli_query($conn , $query2);

    $trainerid=$_POST['trainerid'];
    $customername=$_POST['customername'];
    $date=$_POST['date'];


    $query3 ="INSERT INTO `trainer_shift`( `trainerid`, `customername`, `customerid`, `Date`) VALUES ($trainerid,'$customername','$customerid','$date')";
    $result3 = mysqli_query($conn , $query3);








    $query ="DELETE FROM `trainerbook` WHERE `customerid` = $customerid;";
    $result = mysqli_query($conn , $query);

            if($result)
            {
                header("location: ../workerconfirms.php?");
                echo 'Data update !';
            }else{
                header("location: ../404.php?");
            }
            mysqli_close($conn);

}
