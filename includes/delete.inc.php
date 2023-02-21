<?php
$serverName = "localhost";
$dBUsername = "root";
$dBPassword = "";
$dBName = "gym" ;


$conn = mysqli_connect($serverName, $dBUsername, $dBPassword, $dBName); 


if(isset($_POST['delete'])){
        $id = $_POST['id'];
       

$query = "DELETE FROM `product` WHERE `product`.`id` = $id";

$result = mysqli_query($conn , $query);

if($result)
{
    header("location: ../editproduct.php?");
    echo 'Data update !';
}else{
    header("location: ../404.php?");
    echo "Not Working sry";
}
mysqli_close($conn);

}