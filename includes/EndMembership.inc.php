<?php
$serverName = "localhost";
$dBUsername = "root";
$dBPassword = "";
$dBName = "gym" ;


$conn = mysqli_connect($serverName, $dBUsername, $dBPassword, $dBName); 


if(isset($_POST['submit'])){
        $userid = $_POST['userid'];
       

$query = "DELETE FROM `subcribers` WHERE `userid` = $userid";

$result = mysqli_query($conn , $query);

if($result)
{
    header("location: ../userprofile.php?");
    echo 'Data update !';
}else{
    header("location: ../404.php?");
    echo "Not Working sry";
}
mysqli_close($conn);

}