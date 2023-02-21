<?php 

    include_once 'gymdb.inc.php' ;
    include_once 'functions.inc.php' ;

    if (isset($_POST["confirm"])) {


        $orderid=$_POST["orderid"];
        $customercart=$_POST["customercart"];

        notification($conn,$orderid,$customercart);

        confirm($conn,$orderid,$customercart) ;
        

    }
