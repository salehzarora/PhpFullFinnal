<?php

if (isset($_POST["submit"])) {
    
    $name = $_POST["name"];
    $email = $_POST["email"];
    $username = $_POST["nid"];
    $pwd = $_POST["pwd"];

    require_once 'gymdb.inc.php';
    require_once 'functions.inc.php';

    


    if (emptyInputSignup($name,$email,$username,$pwd) !== false ) 
    {     
        header("location: ../login.php?error=emptyinput");
        exit();
    }

    if (invalidUid($username) !== false ) 
    {     
        header("location: ../login.php?error=invaildusername");
        exit();
    }

    if (invalidemail($email) !== false ) 
    {     
        header("location: ../login.php?error=invaildmail");
        exit();
    }

    if (uidExists($conn , $username , $email ) !== false ) 
    {     
        header("location: ../login.php?error=username_or_email_taken");
        exit();
    }









    createUser($conn,$name, $email, $username, $pwd);


}else {
    header("location: ../home.php");
    exit();
}







?>