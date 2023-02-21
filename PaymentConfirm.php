<!DOCTYPE html>
<html lang="en">
<head>

    
    <link rel="stylesheet" href="css/paymentConfirm.css" media="screen">



    <title>yes</title>
</head>
<body>
    <?php
    session_start();
    include 'navbar.php';
    include_once 'includes/gymdb.inc.php';


    if (isset($_SESSION['userid'])){

?>


<!-- Made by Cory Hughes -->
<div class="crTitle">
  <h1>Payment Confirmation</h1>
  
     This <b>does not</b> indicate your Draft Status.<br>
     This only indicates that a payment has gone through.</p>
</div>

<?php
$sql = "SELECT * FROM `subcribers` WHERE userid = $_SESSION[userid] ;";
$result = mysqli_query($conn , $sql);
$resultCheck = mysqli_num_rows($result);

if($resultCheck > 0 )
{
    while($row = mysqli_fetch_assoc($result))
    { 

?>
<div class="crReciept">
  <h2>Payment Successful</h2>
  <h3>Transfer Number: <span><?php echo $row['transfer_id'] ; ?></span></h3>
  <h3>Method: <span>Credit Card</span></h3>
  <div class="crItem cf">
    <p>Season Payed for with Credit Card<br>- does not indicate Draft Status</p>
    <p class="crAmount">₪<?php echo $row['PlanPrice'] ; ?><sup>00</sup></p>
  </div>
  <p class="paymentInfo">
    <strong>Payment Date: </strong> <?php echo $row['Date'] ; echo "<br><strong>time </strong>: "; echo $row['Time']; ?>
  </p>
  <p class="paymentInfo">
    <strong>Payment Made By:</strong><br>
    <?php echo $_SESSION['useruid'] ; ?><br>
 
  </p>
  <p class="paymentInfo">
    <strong>Payment Made To:</strong><br>
    GYMBOX<br>
    
  </p>
  Back to : <a href="home.php" >Home</a></p>
</div>

<?php }}}else{?>


  <div class="crTitle">
  <h1>Who are you ?</h1>
  
     please   <b><a href="login.php" > login</b></a> to complete your order.<br>
     </p>
</div>

    
  <p>
 or Back to : <a href="home.php" >Home</a></p>
</div>





  <?php }
  
  
  
  
  
  
  
  ?>


  

<br><br><br><br><br><br><br>
    </div> </div> </div>
  
  <?php
  include 'footer.php';
  ?>
  
</body>
</html>