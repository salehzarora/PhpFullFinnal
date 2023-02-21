<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">


    <link rel="stylesheet" href="css/OrderThank.css">
    <link rel="stylesheet" href="css/confirmbutton.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">




    <title>Order sent</title>
</head>
<body>
    
    <?php
    session_start();
    include 'navbar.php';
    require_once 'includes/gymdb.inc.php';
    require_once 'includes/functions.inc.php';
    
    
    ?>






<div class="card mt-50 mb-50">
    <div class="col d-flex"><span class="text-muted" id="orderno">order #546924</span></div>
    <div class="gap">
        <div class="col-2 d-flex mx-auto"> </div>
    </div>
    <div class="title mx-auto"> Thank you for your order! </div>
    <div class="main"> <span id="sub-title">
            <p><b>Payment Summary</b></p>
        </span>
    




    
        <?php
        $cartid=$_SESSION['cartid'];
    $result = mysqli_query($conn,"SELECT * FROM `product_cart` WHERE Cartid = $cartid ");
    if(mysqli_num_rows($result) > 0){
        $sum=0;
        while($data = mysqli_fetch_assoc($result)){
           
            $sum+=$data['Price']*$data['Quantity'];
            $productid=$data['productid'];
         


            $result2 = mysqli_query($conn,"SELECT * FROM `product` WHERE id = $productid");
    if(mysqli_num_rows($result2) > 0){
        
        while($data2 = mysqli_fetch_assoc($result2)){
            $img=$data2['img'];
        }
    }




     
?>


        <div class="row row-main">
            <div class="col-3"> <img class="img-fluid" src="<?php echo $img; ?>"> </div>
            <div class="col-6">
                <div class="row d-flex">
                    <p><b><?php echo $data['Item_Name']; ?></b></p>
                </div>
                <div class="row d-flex">
                    <p class="text-muted">Quantity : <?php echo $data['Quantity']; ?></p>
                </div>
            </div>
            <div class="col-3 d-flex justify-content-end">
                <p><b>₪<?php echo $data['Price']; ?> >> ₪<?php echo "$sum";?></b></p>
            </div>
        </div>
        
        




        <?php } ?>

        <form id="contact-form" role="form" action="includes/OrderThank.inc.php" method="post">

        <hr>
        <div class="total">
            <div class="row">
                <div class="col"> <b> Total:</b> </div>
                <div class="col d-flex justify-content-end"> <b>₪<?php echo $sum+20; ?></b> </div>
            </div> <button class="button"  name="submit"> Continue Shoping :) </button>
        </div>
    </div>
</div>
        </form>

<?php } ?>




</div> </div> </div>
    <br><br><br><br><br><br><br><br><br><br><br><br><br>
  <?php
  include 'footer.php';
  ?>
  




</body>
</html>