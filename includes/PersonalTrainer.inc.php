<?php
$serverName = "localhost";
$dBUsername = "root";
$dBPassword = "";
$dBName = "gym" ;


$conn = mysqli_connect($serverName, $dBUsername, $dBPassword, $dBName); 

if(isset($_POST['submit'])){


if(isset($_POST['trainer'])){
    $trainerid=$_POST["trainer"];
}else $trainerid=1231;


    $customerid=$_POST["customerid"];
    $customername=$_POST["customername"];
    $date=$_POST["DateTime"];




    $query ="INSERT INTO `trainerbook`(`trainerid`, `customerid`, `customername`, `Date`) VALUES ($trainerid,$customerid,'$customername','$date');";
    $result = mysqli_query($conn , $query);

            if($result)
            {
                header("location: ../OrderTrain.php?");
                echo 'Data update !';
            }else{
                header("location: ../404.php?");
            }
            mysqli_close($conn);

}


if(isset($_POST['cancel'])){

    $customerid=$_POST["customerid"];




    $query ="DELETE FROM `trainerbook` WHERE `customerid` = $customerid;";
    $result = mysqli_query($conn , $query);

            if($result)
            {
                header("location: ../PersonalTrainer.php?");
                echo 'Data update !';
            }else{
                header("location: ../404.php?");
            }
            mysqli_close($conn);

}



