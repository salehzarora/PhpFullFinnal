<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" media="screen">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css" media="screen">

    <title>Document</title>
</head>
<body>

<?php
    session_start();
    include_once 'includes/gymdb.inc.php';

    include 'navbar.php';


?>




        <!-- Cart -->


        <?php 

if(isset($_SESSION['cartid']))
{
$cart = "SELECT * FROM product_cart WHERE Cartid =$_SESSION[cartid];" ;
$cartResult = mysqli_query($conn, $cart) ;
$count = 0;
$sum = 0 ; 

if (mysqli_num_rows ($cartResult) > 0) {
    while ($cartRow = mysqli_fetch_assoc ($cartResult)) {
    $product = "SELECT * FROM product ;";
    $productResult = mysqli_query($conn , $product);
    if (mysqli_num_rows($productResult) > 0) {
        while ($productRow = mysqli_fetch_assoc($productResult)) {
        if ($productRow["id"] == $cartRow["productid"]) {
            $name = $productRow["name"];
            $price = $productRow["price"];
            $image = $productRow["img"] ;
            $dec = $productRow["description"];
            $sum += $price;
            $count ++;



        }}}}}}
            ?>
                        
               

<div class="container mt-5 p-3 rounded cart">
        <div class="row no-gutters">
            <div class="col-md-8">
                <div class="product-details mr-2">
                    <div class="d-flex flex-row align-items-center"><a href="products.php"><i class="fa fa-long-arrow-left" ></a></i><span class="ml-2">Continue Shopping</span></div>
                    <hr>
                    <h6 class="mb-0">Shopping cart</h6>
                    <div class="d-flex justify-content-between"><span>You have <?php   if(isset($_SESSION['cartid'])) { echo $count;} ?> items in your cart</span> 
                    </div>

                                                <?php 
                                if(isset($_SESSION['cartid']))
                            {
                            $cart = "SELECT * FROM product_cart WHERE Cartid =$_SESSION[cartid];" ;
                            $cartResult = mysqli_query($conn, $cart) ;
                            $count = 0;
                            $sum = 0 ; 

                            if (mysqli_num_rows ($cartResult) > 0) {
                                while ($cartRow = mysqli_fetch_assoc ($cartResult)) {
                                $product = "SELECT * FROM product ;";
                                $productResult = mysqli_query($conn , $product);
                                if (mysqli_num_rows($productResult) > 0) {
                                    while ($productRow = mysqli_fetch_assoc($productResult)) {
                                    if ($productRow["id"] == $cartRow["productid"]) {
                                        $name = $productRow["name"];
                                        $image = $productRow["img"] ;
                                        $dec = $productRow["description"];
                                       
                                        $count ++;
                                        $quantity= $cartRow["Quantity"];

                                        
                                        if(isset($_SESSION["isVIP"])){

                                                    $discount=12/100 * $productRow['price'];
                                                    $price=$productRow['price']-$discount;
                                                    
                                        }else {        $price = $productRow["price"];    }


                                      ?>
                    <div class="d-flex flex-row"><img class="rounded" src="<?php echo $image ?>" width="180" height="90" >
                    <div class="d-flex justify-content-between align-items-center mt-3 p-2 items rounded">
                            <div class="ml-2"><span class="font-weight-bold d-block"><?php echo $name ?></span><span class="spec"><?php echo $dec ?></span></div>
                        </div>

                                            <!-- Update Quantity -->
                        <form id="contact-form" role="form" action="includes/Updatecart.inc.php" method="post">
                      <div class="d-flex flex-row align-items-center"><span class="d-block"> <input type="number" name="quantity2" style="width: 5em" value="<?php echo $quantity;?>"></input></span>
                      <input type="hidden" name="pid" value="<?php echo $productRow["id"] ?>">
                      <button type="submit" name="update">update</button>


                                    </form>

                        
                        <span class="d-block ml-5 font-weight-bold">₪ <?php echo $price*$quantity ?>
                        <?php   $sum += $price*$quantity; ?>
                    


                        <form id="contact-form" role="form" action="includes/Dcart.inc.php" method="post">
                                        <button type="submit" class="btn bg-cart" name="delete" ><i class="fa fa-trash" ></i>
                                        <span class="button__text">
                                         <span>Delete</span>
                                         <input type="hidden" name="pid" value="<?php echo $productRow["id"] ?>">
                                        </span>
                                        </button>
                                       
                    
                    </span></div>
                    </form>

                    </div>
                    <br>
                    <?php }}}}}} ?>  

                </div>
            </div>
                          



            <!-- Shipping Details -->

            <div class="col-md-4">

            <div class="payment-info">
                        <form id="contact-form" role="form" action="includes/order_checkout.inc.php" method="post">

                    <div><label class="credit-card-label">Full Name</label><input name="Full_Name" type="text" class="form-control credit-inputs" placeholder="Full Name"></div>
                    <div><label class="credit-card-label">Phone number</label><input name="Phone" type="text" class="form-control credit-inputs" placeholder="+972"></div>
                    <div><label class="credit-card-label">Address</label><input name="Address" type="text" class="form-control credit-inputs" placeholder="Address"></div>
                    <div class="row">
                        <div class="col-md-6"><label class="credit-card-label">Zip</label><input  name="ZIP" type="text" class="form-control credit-inputs" placeholder="Zip "></div>
                        <div class="col-md-6"><label class="credit-card-label">City</label><input name="City" type="text" class="form-control credit-inputs" placeholder="City"></div>
                    </div>



        <!-- Card Details -->

                <hr class="line">
                
                    <div><label class="credit-card-label">Name on card</label><input name="Card_Name" type="text" class="form-control credit-inputs" placeholder="Name"></div>
                    <div><label class="credit-card-label">Card number</label><input class="form-control credit-inputs" name="Card_Number" id="ccn" type="tel" inputmode="numeric" pattern="[0-9\s]{13,19}" autocomplete="cc-number" maxlength="19" placeholder="xxxx xxxx xxxx xxxx">
                    <div class="row">
                        <div class="col-md-6"><label class="credit-card-label">Date</label><input name="Card_Exp" type="text" class="form-control credit-inputs" placeholder="12/24"></div>
                        <div class="col-md-6"><label class="credit-card-label">CVV</label><input  name="Card_CVV" type="text" class="form-control credit-inputs" placeholder="342"></div>
                    </div>



                    <!-- Total -->
                                    <?php                                      
                                    if(isset($_SESSION['cartid'])) { ?>
                    <hr class="line">
                    <div class="d-flex justify-content-between information"><span>Subtotal</span><span>₪ <?php echo $sum ?></span></div>
                    <div class="d-flex justify-content-between information"><span>Shipping</span><span>₪ 20.00</span></div>
                    <div class="d-flex justify-content-between information"><span>Total(Incl. taxes)</span><span>₪ <?php echo $sum+20 ?></span></div>
                <button name="submit" class="btn btn-primary btn-block d-flex justify-content-between mt-3" type="submit"><span>₪ <?php echo $sum+20 ?></span><span>Checkout<i class="fa fa-long-arrow-right ml-1"></i></span></button></div>
                                                        <input type="hidden" name="total" value="<?php echo $sum+20 ?>">
                                                        <?php    if(isset($_SESSION["isVIP"])){ ?>
                                                        <input type="hidden" name="isVIP" value="<?php echo 1 ;?>"> <?php } ?>


                                    <?php }else{ ?>
                                                        <!-- IF USER NOT SIGN IN -->
                                        <hr class="line">
                    <div class="d-flex justify-content-between information"><span>Subtotal</span><span>₪ 0</span></div>
                    <div class="d-flex justify-content-between information"><span>Shipping</span><span>₪ 0.00</span></div>
                    <div class="d-flex justify-content-between information"><span>Total(Incl. taxes)</span><span>₪ 0</span></div>
                <button name="submit" class="btn btn-primary btn-block d-flex justify-content-between mt-3" type="submit"><span>₪ 0</span><span>Checkout<i class="fa fa-long-arrow-right ml-1"></i></span></button></div>
                                                        <input type="hidden" name="total" value="0">

                                                        <?php }?>




            </div>
        </div>
    </div>
    </form>





    

    </div> </div> </div>
    <br><br><br><br><br><br><br><br><br><br><br><br><br>
  <?php
  include 'footer.php';
  ?>
  




</body>
</html>