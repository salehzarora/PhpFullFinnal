<?php

function emptyInputSignup($name,$email,$username,$pwd)
{
    $result;
    if(empty($name) || empty($email) || empty($username) || empty($pwd))
    {
        $result = true ;
    }
    else {
        $result= false ;
    }
    return $result;

}


function invalidUid($username)
{
    $result;
    if(!preg_match("/^[a-zA-Z0-9]*$/", $username))
    {
        $result = true ;
    }
    else {
        $result= false ;
    }
    return $result;

}

function invalidemail($email)
{
    $result;
    if(!filter_var($email , FILTER_VALIDATE_EMAIL)) 
    {
        $result = true ;
    }
    else {
        $result= false ;
    }
    return $result;

}


function uidExists($conn , $username , $email)
{

    $sql = "SELECT * FROM users WHERE usersUid = ? Or usersEmail = ?;";
    $stmt = mysqli_stmt_init($conn);

    // if evrey thing is ok with DB
    if (!mysqli_stmt_prepare($stmt , $sql))
    {
        header("location: ../login.php?error=stmtfailed");
        exit();
    }

    mysqli_stmt_bind_param($stmt , "ss" , $username , $email );
    mysqli_stmt_execute($stmt);

    $resultData = mysqli_stmt_get_result($stmt);

    if ($row = mysqli_fetch_assoc($resultData))
    {
        return $row;

    }
    else {
        $result=false ;
        return $result;
    }

    mysqli_stmt_close($stmt);
}


function createUser($conn, $name, $email, $username, $pwd)
{

    $id = rand(1000,9999);

    $sql = "INSERT INTO users (usersId , usersName , usersEmail , usersUid , usersPwd , Date , time , img) VALUES (? , ? , ? , ? , ? ,NOW(),NOW(),'images/face.png');";  
    $stmt = mysqli_stmt_init($conn);

    // if evrey thing is ok with DB ^^
    if (!mysqli_stmt_prepare($stmt , $sql))
    {
        header("location: ../login.php?error=userstmtF");
        exit();
    }

    mysqli_stmt_bind_param($stmt , "issss" ,$id , $name , $email , $username , $pwd );
    mysqli_stmt_execute($stmt);
    mysqli_stmt_close($stmt);
    header("location: ../login.php?error=none");

    $cartId = rand(1000,9999);
    $query="INSERT INTO cart (id , cid ) VALUES ($cartId , $id)";
    $cartd= mysqli_query($conn , $query);

    

    if($cartd !== true)
    {
        $cartd = mysqli_query($conn , $query);
    }

    mysqli_close();
    exit();
}

function emptyInputLogin($username,$pwd)
{
    $result;
    if(empty($username) || empty($pwd))
    {
        $result = true ;
    }
    else {
        $result= false ;
    }
    return $result;

}

function loginUser($conn , $username , $pwd,$check){
    // $username ?????2
    $newuser = uidExists($conn , $username , $username) ;
    if ($newuser == false ){
        header("location: ../login.php?error=wronglogin");
        exit();
    }
    if ($newuser === false ){
        header("Location:../login.php?error=wronglogin");
        exit();
    }
    if($pwd !== $newuser["usersPwd"]){
        header("location: ../login.php?error=wronglogin");
        exit();
    }
    else if($pwd == true){
        session_start();
        $_SESSION["userid"] =  $newuser["usersId"];
        $_SESSION["useruid"] =  $newuser["usersUid"];
        $_SESSION["usersName"] =  $newuser["usersName"];


        $sql = "SELECT * FROM `subcribers` WHERE userid = $_SESSION[userid] ;";
        $result = mysqli_query($conn , $sql);
        $resultCheck = mysqli_num_rows($result);
    
        if($resultCheck > 0 )
        {

            while($row = mysqli_fetch_assoc($result))
            { 
                $_SESSION["isVIP"]=$row['isVIP'];
            }

        }


        
        $error="SELECT cid FROM cart ;";
        if(!empty($check)) {
            setcookie ("username",$username,time()+ 3600,'/');
            setcookie ("password",$pwd,time()+ 3600,'/');
        } 
        else{
            setcookie("username","");
            setcookie("password","");
        }
        if($newuser["isManager"]!==null){
            $_SESSION["isManager"]=$newuser["isManager"];
        }
        if($newuser["isWorker"]!==null){
            $_SESSION["isWorker"]=$newuser["isWorker"];
        }
        if($newuser["isTrainer"]!==null){
            $_SESSION["isTrainer"]=$newuser["isTrainer"];
        }
        $usercartid=mysqli_query($conn , $error);
            while($row = mysqli_fetch_assoc($usercartid)){
                if ($_SESSION["userid"] == $row["cid"]){
                    header("location: ../home.php");
                    exit();
                }
                else if(isset($_SESSION["isWorker"])){
                    header("location: ../dashboard.php");
                    exit();
                }
                else if(isset($_SESSION["isManager"])){
                    header("location: ../dashboard.php");
                    exit();
            }
            if(isset($_SESSION["isTrainer"])){
                header("location: ../dashboard.php");
                exit();
        }
               
        }
            $_SESSION["useruid"] =  $newuser["usersUid"];
            header("location: ../home.php");  
        exit();
    }


}
function emptyInputReset($username){
    $result=false;
    if(empty($username)){
        $result = true ;
    }
    else {
        $result= false ;
    }
    return $result;
}
function resetUser($conn , $username){
    $uidExists = uidExists($conn , $username , $username) ;

    if ($uidExists === false ){
        header("Location:../reset.php?error=wronglogin");
        exit();
    }
    $characters = '0123456789abcdefghijklmnopqrstuvwxyz';
    $charactersLength = strlen($characters);
    $randomString = '';
    for ($i = 0; $i < 6; $i++) {
        $randomString .= $characters[rand(0, $charactersLength - 1)];
    }
	$_SESSION['randomPass'] = $randomString;
	$to = "$uidExists[usersEmail]";
	$subject = " hey you requested to change your password";
	
	$message = "<b> Reset Password </b>";
	$message .= "<br>Your verification code is : $randomString";
	
	$header = "From:abc@somedomain.com \r\n";
	$header .= "Cc:afgh@somedomain.com \r\n";
	$header .= "MIME-Version: 1.0\r\n";
	$header .= "Content-type:text/html\r\n";
	
	$retval = mail($to,$subject,$message,$header);
	
	if($retval == true){
		echo "Message sent successfully...";
        $_SESSION["verify"] =  $_SESSION['randomPass'] ;
        $_SESSION["usuid"] =  $uidExists["usersUid"];
        header("Location:../verify.php");
        exit();
	}else{
		echo "Message could not be sent... try again";
        header("Location:../reset.php");
        exit();
	}
}
function emptyInputVerify($password){
    $result=false;
    if(empty($password)){
        $result = true ;
    }
    else {
        $result= false ;
    }
    return $result;
}
function resetPass($password){
    if($_SESSION['randomPass']===$password){
        header("Location:../newPass.php");
        exit();  
    }
    else{
        header("Location:../verify.php");
        exit();
	}
}
function emptyInputPass($username,$password,$password1){
    $result=false;
    if(empty($password||$password1||$username)){
        $result = true ;
    }
    else {
        $result= false ;
    }
    return $result;
}
function newPass($conn,$username,$password,$password1){
    $uidExists = uidExists($conn , $username , $username) ;
    $userN=$uidExists["usersUid"];
    if($password==$password1){
        $sql = "UPDATE users SET usersPwd='$password' WHERE usersUid= '$userN' ";
        $stmt = mysqli_stmt_init($conn);
        if (!mysqli_stmt_prepare($stmt , $sql)){
            header("Location: ../newPass.php?error=userstmtF");
            exit();
        }

        mysqli_stmt_execute($stmt);
        mysqli_stmt_close($stmt);
        header("Location:../login.php");
        exit();  
    }
    else{
        header("Location:../newPass.php");
        exit();
	}
}



        function cartlogin($conn)
        {
           
            
                $getid = "SELECT id FROM cart WHERE cid = '$_SESSION[userid]' ; ";
                $getid = mysqli_query($conn , $getid);
    
                $row = mysqli_fetch_assoc($getid) ; 
                
                    $cartid = $row["id"];
    
                    $_SESSION["cartid"] = $cartid ;

                    mysqli_close($conn);
                

        }


        function addtoCart($conn, $id,$Item_Name,$Price,$Quantity) 
        {
            $getid = "SELECT id FROM cart WHERE cid = '$_SESSION[userid]' ; ";
            $getid = mysqli_query($conn , $getid);

            $row = mysqli_fetch_assoc($getid) ; 
            
                $cartid = $row["id"];

                $_SESSION["cartid"] = $cartid ;
            
            

                $same= "SELECT * FROM product_cart WHERE Item_Name= '$Item_Name' AND Cartid = $cartid; ";
                $same = mysqli_query($conn , $same);
                if(mysqli_num_rows($same) > 0){
                    echo "<script>alert('Item Alredy')
                    window.location.href='../products.php';
                    </script>";
                    
                }else{$sql = "INSERT INTO product_cart VALUES ($cartid, $id ,'$Item_Name',$Price,$Quantity ) ;" ;
                    $sql = mysqli_query($conn, $sql) ;

            if ($sql != true) {
                header("location: ../products.php?error=cantaddtocart") ;
                exit() ;
            }

            header("location: ../products.php?error=added") ;

            
            mysqli_close($conn);
            exit() ;
        }
    }



                    // just if it was sorted
    function addtoCart2($conn, $id,$Item_Name,$Price,$Quantity,$LowHigh) 
    {
        $getid = "SELECT id FROM cart WHERE cid = '$_SESSION[userid]' ; ";
        $getid = mysqli_query($conn , $getid);

        $row = mysqli_fetch_assoc($getid) ; 
        
            $cartid = $row["id"];

            $_SESSION["cartid"] = $cartid ;
        
        

            $same= "SELECT * FROM product_cart WHERE Item_Name= '$Item_Name' AND Cartid = $cartid; ";
            $same = mysqli_query($conn , $same);
            if(mysqli_num_rows($same) > 0){
                echo "<script>alert('Item Alredy')
                window.location.href='../products.php';
                </script>";
                
            }else{$sql = "INSERT INTO product_cart VALUES ($cartid, $id ,'$Item_Name',$Price,$Quantity ) ;" ;
                $sql = mysqli_query($conn, $sql) ;

        if ($sql != true) {
            header("location: ../products.php?error=cantaddtocart") ;
            exit() ;
        }


            if($LowHigh==1)
            {   
              header("location: ../sortedProducts.php?sort_numeric=high-low") ;
            }else if($LowHigh==0)
            {
                header("location: ../sortedProducts.php?sort_numeric=low-high") ;
            }
        
        mysqli_close($conn);
        exit() ;
    }
}



    


function deleteFromCart($conn , $pid , $cid) {
    $delete = "DELETE FROM product_cart WHERE Cartid = $cid AND productid = $pid ;" ;
    $delete = mysqli_query($conn, $delete) ;

    if ($delete != true) {
        header("location: ../cart.php?error=cantdelete") ;
        exit() ;
    }

    header("location: ../cart.php?error=deleted") ;
    mysqli_close($conn);
    exit() ;
}



function updatequantity($conn , $pid , $cid , $quantity2 ) {
    $update = "UPDATE `product_cart` SET `Quantity`= $quantity2 WHERE `Cartid`= $cid AND `productid`=$pid" ;
    $update = mysqli_query($conn, $update) ;

    if ($update != true) {
        header("location: ../cart.php?error=SomeThingWrong") ;
        exit() ;
    }

    header("location: ../cart.php?error=Updated") ;
    mysqli_close($conn);
    exit() ;
}








function buy($conn){


    session_start() ;
    $update_amount = "SELECT * FROM product_cart WHERE Cartid = $_SESSION[cartid] ;" ;
    $update_amount = mysqli_query($conn, $update_amount) ;

    if (mysqli_num_rows($update_amount) > 0) {
        while ($cartRow = mysqli_fetch_assoc($update_amount)) {

            $product = "SELECT * FROM product ;" ;
            $productResult = mysqli_query($conn, $product) ;

            if (mysqli_num_rows($productResult) > 0) {
                while ($productRow = mysqli_fetch_assoc($productResult)) {

                    if ($productRow["id"] == $cartRow["productid"]) {
                        $sql = "UPDATE product SET amount = amount - 1 WHERE id = $productRow[id] ;" ;
                        $sql = mysqli_query($conn, $sql) ;
                        $delete = "DELETE FROM product_cart WHERE Cartid = $_SESSION[cartid] AND productid = $productRow[id] ;" ;
                        $delete = mysqli_query($conn, $delete) ;
                    }
                }
            }
        }
    }

    header("location: ../cart.php?error=deleted") ;
    exit();
}



function notification($conn,$orderid,$customercart){
    session_start();
    $nid=rand(1000,9999);
    $staff=$_SESSION['useruid'];
    $message1="Your order";
    $message2="has been shipped and its on the way to you";


    $sql = "INSERT INTO `notification`( `Nid`, `CustomerCart`, `Date`, `Time`, `Massage`, `Massage2`, `orderid`, `staff`) VALUES ($nid,'$customercart',NOW(),NOW(),'$message1','$message2',$orderid,'$staff')" ;
    $sql = mysqli_query($conn, $sql) ;


}

function Ndelete($conn,$nid,$url){

    $sql = "DELETE FROM `notification` WHERE `Nid` = $nid" ;
    $sql = mysqli_query($conn, $sql) ;
    header("Location: $url");  




}





function confirm($conn,$orderid,$customercart){

   



    $result = mysqli_query($conn,"SELECT * FROM `user_orders` WHERE Order_Id = $orderid");
       if(mysqli_num_rows($result) > 0){
      while($data = mysqli_fetch_assoc($result)){
        $Quantity=$data['Quantity'];
        $Item_Name=$data['Item_Name'];

        $sql = "UPDATE product SET amount=amount-$Quantity WHERE name='$Item_Name'";

        if (mysqli_query($conn, $sql)) {
          echo "Record updated successfully";

        }
        

      }


            
        $delete="DELETE FROM order_checkout WHERE orderid = $orderid ;" ;
        $delete = mysqli_query($conn, $delete) ;
        $delete2="DELETE FROM user_orders WHERE Order_Id = $orderid ;" ;
        $delete2 = mysqli_query($conn, $delete2) ;
        $delete3="DELETE FROM `order` WHERE `orderid`=$orderid;" ;
        $delete3 = mysqli_query($conn, $delete3) ;


        header("location: ../workerconfirms.php?error=Confirmd") ;





    }







}





