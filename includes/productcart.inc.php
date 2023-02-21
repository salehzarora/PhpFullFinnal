
<?php
$serverName = "localhost";
$dBUsername = "root";
$dBPassword = "";
$dBName = "gym" ;

$conn = mysqli_connect($serverName, $dBUsername, $dBPassword, $dBName); 

include_once 'gymdb.inc.php';
include_once 'functions.inc.php';

if(isset($_POST['submit'])){

    session_start();


    // if(isset($_SESSION['cart']))
    // {

    //     $myitems=array_column($_SESSION['cart'],'Item_Name');
    //     if(in_array($_POST['Item_Name'],$myitems))
    //     {
    //         echo "<script>alert('Item Alredy')
    //         window.location.href='../products.php';
    //         </script>";
    //     }
    //     else
    //     {
    //     $count=count($_SESSION['cart']);
    //     $_SESSION['cart'][$count]=array('Item_Name'=>$_POST['Item_Name'],'Price'=>$_POST['Price'],'Quantity'=>1);
    //     echo "<script> window.location.href='../products.php'</script>";
    //     }


    // }
    // else
    // {
    //     $_SESSION['cart'][0]=array('Item_Name'=>$_POST['Item_Name'],'Price'=>$_POST['Price'],'Quantity'=>1);
    //     echo "<script> window.location.href='../products.php'</script> ";

    // }

    $Item_Name=$_POST["Item_Name"];
    $Price=$_POST["Price"];
    $Quantity=1;

     $id=$_POST["productid"];
     addtoCart($conn, $id ,$Item_Name,$Price,$Quantity) ;
   
}


    //    If it was sorted
if(isset($_POST['low'])){

    session_start();

    $low=0;

    $Item_Name=$_POST["Item_Name"];
    $Price=$_POST["Price"];
    $Quantity=1;

     $id=$_POST["productid"];
     addtoCart2($conn, $id ,$Item_Name,$Price,$Quantity,$low) ;
   
}

if(isset($_POST['high'])){

    session_start();

    $high=1;

    $Item_Name=$_POST["Item_Name"];
    $Price=$_POST["Price"];
    $Quantity=1;

     $id=$_POST["productid"];
     addtoCart2($conn, $id ,$Item_Name,$Price,$Quantity,$high) ;
   
}