<!DOCTYPE html>
<html lang="en">
<?php 
include_once 'includes/gymdb.inc.php';
?>
<head>
  <meta charset="UTF-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />

  <link rel="stylesheet" href="css/notification.css" />


  <title>Notification System - Pure Coding</title>
</head>

<body>

<link href="//netdna.bootstrapcdn.com/font-awesome/4.1.0/css/font-awesome.min.css" rel="stylesheet">

<!-- <nav class="navigation">
  <ul class="inner-navigation"> -->
    <li class="right">
      <div class="dropdown-container">
        <a href="#" data-dropdown="notificationMenu" class="menu-link has-notifications circle">
          <i class="fa fa-bell"></i>
        </a>
        <ul class="dropdown" name="notificationMenu">


        <?php
            if(isset($_SESSION['cartid'])){
                $url =  isset($_SERVER['HTTPS']) &&
                $_SERVER['HTTPS'] === 'on' ? "https://" : "http://";  

                $url .= $_SERVER['HTTP_HOST'] . $_SERVER['REQUEST_URI'];    


        $cartid = $_SESSION['cartid'];

$sql = "SELECT * FROM `notification` WHERE CustomerCart = $cartid ORDER BY `Date` DESC , `Time` DESC ;";
$result = mysqli_query($conn , $sql);
$resultCheck = mysqli_num_rows($result);

if($resultCheck > 0 )
{
    while($row = mysqli_fetch_assoc($result))
    { ?>
                                            <form id="contact-form" role="form" action="includes/notification.inc.php" method="post">
          <li class="notification-group">
            <div class="notification-tab">
              <input type="hidden" name="nid" value="<?php echo $row['Nid']?>">
              <input type="hidden" name="url" value="<?php echo $url?>">

                <button name="delete"><?xml version="1.0"?><svg fill="#000000" xmlns="http://www.w3.org/2000/svg"  viewBox="0 0 24 24" width="24px" height="24px">    <path d="M 10 2 L 9 3 L 4 3 L 4 5 L 20 5 L 20 3 L 15 3 L 14 2 L 10 2 z M 5 7 L 5 20 C 5 21.1 5.9 22 7 22 L 17 22 C 18.1 22 19 21.1 19 20 L 19 7 L 5 7 z M 8 9 L 10 9 L 10 20 L 8 20 L 8 9 z M 14 9 L 16 9 L 16 20 L 14 20 L 14 9 z"/></svg></button>
              <i class="fa fa-flag"></i>
              <h4 style="color:green"><?php echo $row['Massage']; ?> : <?php echo $row['orderid'];?></h4>
              
              <h6 style="color:black"><?php echo $row['Massage'];  echo "\n";  echo $row['orderid'];?></h6>    
              <h6 style="color:black"><?php echo $row['Massage2'];?></h6> 
              <span class="label" style="font-size:10px"><?php echo $row['Date']; echo "|";  echo $row['Time'];?></span>
              <h8 style="color:black">by : <?php echo $row['staff'];?> </h8>

              <h4></h4>
            <br>
          

            </div>
    </form>
            <?php }}else{ ?>
              <li class="notification-group">
            <div class="notification-tab">
            <h4 style="color:green">Nothing new for now :(</h4>
             
              <h4></h4>
            <br>
          

            </div>


           <?php }}?>



          


            <!-- tab -->
            
      </div>
    </li>

    
    
  </ul>
</nav>

<script src='https://code.jquery.com/jquery-2.2.4.min.js'></script><script  src="script/notification.js"></script>



</body>

</html>