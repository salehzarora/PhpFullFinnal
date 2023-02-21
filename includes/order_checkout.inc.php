<?php
$serverName = "localhost";
$dBUsername = "root";
$dBPassword = "";
$dBName = "gym" ;


$conn = mysqli_connect($serverName, $dBUsername, $dBPassword, $dBName); 

if(isset($_POST['submit'])){
    
    if(!empty($_POST['Full_Name']) && !empty($_POST['Phone']) && !empty($_POST['Address']) && !empty($_POST['ZIP']) && !empty($_POST['City']) && !empty($_POST['Card_Name']) && !empty($_POST['Card_Number']) && !empty($_POST['Card_Exp']) && !empty($_POST['Card_CVV']))


    {
        session_start();
        $name = $_POST['Full_Name'];
        $phone = $_POST['Phone'];
        $address = $_POST['Address'];
        $zip = $_POST['ZIP'];
        $city = $_POST['City'];
        $cname = $_POST['Card_Name'];
        $cnumber = $_POST['Card_Number'];
        $cexp = $_POST['Card_Exp'];
        $ccvv = $_POST['Card_CVV'];
        $orderid = rand(1000,9999);

        $query = "INSERT INTO order_checkout(Full_Name,Phone,Address,ZIP,City,Card_Name,Card_Number,Card_Exp,Card_CVV,Orderid) values('$name' , '$phone' , '$address' , '$zip' , '$city' , '$cname', '$cnumber', '$cexp', '$ccvv','$orderid')";
        


    //     $getid = "SELECT id FROM order_checkout; ";
    //     $getid = mysqli_query($conn , $getid);
    //     $row = mysqli_fetch_assoc($getid) ;      
    //         $orderid = $row["id"];
    //         $_SESSION["orderid"] = $orderid ;
    


        if(mysqli_query($conn,$query)){
            header("location: ../OrderThank.php?");
            echo "product add !";
        }
        else{

           
            echo "something wrong! :(";
            
           
        }

    }

    $sql = "SELECT * FROM product_cart Where Cartid = $_SESSION[cartid];";
    $result = mysqli_query($conn , $sql);
    $resultCheck = mysqli_num_rows($result);
    
    if($resultCheck > 0 )
    {
        while($row = mysqli_fetch_assoc($result))
        {

                $Item_Name=$row['Item_Name'];
                $Price=$row['Price'];
                $Quantity=$row['Quantity'];
                $Cartid=$_SESSION['cartid'];

                if(isset($_POST['isVIP'])){


                $sql2="INSERT INTO user_orders(Order_Id,Item_Name,Price,Quantity,`Cartid`,`isVIP`) values('$orderid' , '$Item_Name' , '$Price' , '$Quantity','$Cartid',1)";
                $result2 = mysqli_query($conn , $sql2);

                $sql99="INSERT INTO all_user_orders(Order_Id,Item_Name,Price,Quantity,`Cartid`,`isVIP`) values('$orderid' , '$Item_Name' , '$Price' , '$Quantity','$Cartid',1)";
                $result99 = mysqli_query($conn , $sql99);
                }else{

                    $sql2="INSERT INTO user_orders(Order_Id,Item_Name,Price,Quantity,`Cartid`) values('$orderid' , '$Item_Name' , '$Price' , '$Quantity','$Cartid')";
                $result2 = mysqli_query($conn , $sql2);

                $sql99="INSERT INTO all_user_orders(Order_Id,Item_Name,Price,Quantity,`Cartid`) values('$orderid' , '$Item_Name' , '$Price' , '$Quantity','$Cartid')";
                $result99 = mysqli_query($conn , $sql99);
                }


        }



            //  function order($con,$orderid)
    }


    $Total = $_POST['total'];
    $orderid2=$orderid;
   
    if(isset($_POST['isVIP'])){


    $query2 =  "INSERT INTO `order`(`orderid`, `Total`,`Cartid`,`Date`,`time`,`isVIP`) VALUES ('$orderid','$Total','$Cartid',NOW(),NOW(),1)";
    $result2 = mysqli_query($conn , $query2);


    $query100 =  "INSERT INTO `all_order`(`orderid`, `Total`,`Cartid`,`Date`,`time`,`isVIP`) VALUES ('$orderid','$Total','$Cartid',NOW(),NOW(),1)";
    $result100 = mysqli_query($conn , $query100);

    }else {

        $query2 =  "INSERT INTO `order`(`orderid`, `Total`,`Cartid`,`Date`,`time`) VALUES ('$orderid','$Total','$Cartid',NOW(),NOW())";
        $result2 = mysqli_query($conn , $query2);
    
        $query100 =  "INSERT INTO `all_order`(`orderid`, `Total`,`Cartid`,`Date`,`time`) VALUES ('$orderid','$Total','$Cartid',NOW(),NOW())";
        $result100 = mysqli_query($conn , $query100);
    
    }










}
else{
    echo "اكلت خرا";
}

?>