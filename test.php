<!DOCTYPE html>
<html lang="en">
<head>

    
    <link rel="stylesheet" href="css/test.css" media="screen">



    <title>yes</title>
</head>
<body>
    <?php
    session_start();
    include 'navbar.php';
?>


<!-- Made by Cory Hughes -->
<div class="crTitle">
  <img src="https://sahl.ca/wp-content/themes/SAHLtheme/images/logo-small.png" alt="SAHL Logo"/>
  <h1>Payment Confirmation</h1>
  <p>Cory, your payment to the SAHL has been recieved.<br><br>
     This <b>does not</b> indicate your Draft Status.<br>
     This only indicates that a payment has gone through.</p>
</div>
<div class="crReciept">
  <h2>Payment Successful</h2>
  <h3>Order Number: <span>XXXXXXXX</span></h3>
  <h3>Method: <span>Credit Card</span></h3>
  <div class="crItem cf">
    <p>Season Payed for with Credit Card<br>- does not indicate Draft Status</p>
    <p class="crAmount">$400<sup>00</sup></p>
  </div>
  <p class="paymentInfo">
    <strong>Payment Date: </strong> Jan 1, 2016
  </p>
  <p class="paymentInfo">
    <strong>Payment Made By:</strong><br>
    Jon Doe<br>
    12 Pine Street<br>
    Stouffville, ON L4A 8J7<br>
  </p>
  <p class="paymentInfo">
    <strong>Payment Made To:</strong><br>
    SAHL<br>
    Address, Suite 1<br>
    Stouffville, ON L4A 8J7<br>
  </p>
  <p>Questions about your order?<br>Contact us at: <a href="https://sahl.ca/contact" target="_blank">sahl.ca/contact</a></p>
</div>


</body>
</html>