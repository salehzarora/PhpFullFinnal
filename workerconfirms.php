<!DOCTYPE html>
<html lang="en" >
<head>
  <meta charset="UTF-8">

<link rel="stylesheet" href="css/addressinfo.css">
<link rel="stylesheet" href="css/confirmbutton.css">
<link rel="stylesheet" href="css/workers.css">







</head>
<body style="background-color: #101827" >




<?php 

$a=4;

include 'workerSideBar.php'; ?>


<?php if(isset($_SESSION["isWorker"]) &&  !isset($_SESSION["isTrainer"]) ||  isset($_SESSION["isManager"]) &&  !isset($_SESSION["isTrainer"])  ){?>




<!-- partial:index.partial.html -->

  <div class="app-content">
    <div class="app-content-header">
      <h1 class="app-content-headerText">Orders :</h1>
      


      <?php
    $result = mysqli_query($conn,"SELECT * FROM `order` ORDER BY id DESC");
    if(mysqli_num_rows($result) > 0){
        while($data = mysqli_fetch_assoc($result)){
          $orderid=$data['orderid'];
          $date=$data['Date'];
          $customercart=$data['Cartid'];
     
?>


    </div>


    
    

      
   

    <form id="contact-form" role="form" action="includes/confirm.inc.php" method="post">

    <div class="products-area-wrapper tableView">
      <div class="products-header">
        <div class="product-cell image">
          Items
          <button class="sort-button">
          </button>
        </div>
        <div class="product-cell category">Category<button class="sort-button">
          </button></div>
        <div class="product-cell status-cell">Status<button class="sort-button">
          </button></div>
        <div class="product-cell sales">Price<button class="sort-button">
          </button></div>
        <div class="product-cell stock">Quantity<button class="sort-button">
          </button></div>
          <div class="product-cell price"><button class="button" name="confirm"> Confirm Order </button>
          <input type="hidden" name="customercart" value="<?php echo $customercart;?>">

          <input type="hidden" name="orderid" value="<?php echo $orderid;?>">

          </button></div>

        </form>      

            

       
        </div>



        <?php
    $result2 = mysqli_query($conn,"SELECT * FROM `user_orders` WHERE Order_Id = $orderid");
    if(mysqli_num_rows($result2) > 0){
        while($data2 = mysqli_fetch_assoc($result2)){
              $Item_Name=$data2['Item_Name'];


          $result5 = mysqli_query($conn,"SELECT * FROM `product` WHERE name = '$Item_Name'");
          if(mysqli_num_rows($result5) > 0){
              
              while($data5 = mysqli_fetch_assoc($result5)){
                  $img=$data5['img'];
              }
          }







?>


                    <!-- userID -->

        <div class="products-row">
        <button class="cell-more-button">
        <svg xmlns="http://www.w3.org/2000/svg" width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-more-vertical"><circle cx="12" cy="12" r="1"/><circle cx="12" cy="5" r="1"/><circle cx="12" cy="19" r="1"/></svg>
        </button>
        <div class="product-cell image">
        <img src="<?php echo  $img ; ?>" alt="product">
        </div>


                    <!-- UserName -->
        <div class="product-cell category"><span class="cell-label">Name:</span><?php echo $data2['Item_Name'] ; ?></div>
        <div class="product-cell status-cell">


                    <!-- isWorker -->
        <span class="cell-label">Status:</span>
        <span class="status active" >-</span>
        </div>

        <div class="product-cell price"><span class="cell-label">Price:</span>₪<?php echo $data2['Price'] ; ?></div>
        <div class="product-cell stock"><span class="cell-label">Stock:</span><?php echo $data2['Quantity'] ; ?></div>
        <div class="product-cell price"><span class="cell-label">Price:</span> <?php if($data2['isVIP']!=NULL){echo "<h6 style='color:yellow'> VIP order </h6>";}      ?> </div>


        </div>
        <?php }}?>

        <div class="products-row">
        <button class="cell-more-button">
        <svg xmlns="http://www.w3.org/2000/svg" width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-more-vertical"><circle cx="12" cy="12" r="1"/><circle cx="12" cy="5" r="1"/><circle cx="12" cy="19" r="1"/></svg>
        </button>
        
        <span class="status active" >Order id :<?php echo   $data['orderid'] ;echo "\n\n\n\n\n<br> Total:  ₪"; echo $data['Total'];echo "\n\n\n\n\n<br> Date:";  echo $data['Date'];?></span>


        <input type="checkbox" id="toggle">
<label for="toggle">Shipping & payment details</label>

  

  <?php
    $result3 = mysqli_query($conn,"SELECT * FROM `order_checkout` WHERE orderid = $orderid");
    if(mysqli_num_rows($result3) > 0){
        while($data3 = mysqli_fetch_assoc($result3)){
     
?>
<dialog >

   Full Name : <?php echo $data3['Full_Name'] ; echo "||\n\n\n\n\n Phone: \n\n\n"; echo $data3['Phone'] ?>
  <p>  Address : <?php echo $data3['Address'] ; echo "||\n\n\n\n\n City: \n\n\n"; echo $data3['City'] ?></p>
  <p>  ZIP: <?php echo $data3['ZIP'] ?></p>
  <p>  Name on card : <?php echo $data3['Card_Name'] ; echo "||\n\n\n\n\n Card number: \n\n\n"; echo $data3['Card_Number'] ?></p>
  <p>  exp Date : <?php echo $data3['Card_Exp'] ; echo "||\n\n\n\n\n CVV: \n\n\n"; echo $data3['Card_CVV'] ?></p>





  <?php }}?>
  
  <label for="toggle">close overlay</label>
</dialog>


     
        <?php   }
    }else{
         echo "No Records Found!";
    } ?>

        </div>
        </div>
        


















                                                                    <!-- Trainer Confirms -->







        <?php }else if(isset($_SESSION["isWorker"]) && isset($_SESSION["isTrainer"]) ){?>







<!-- partial:index.partial.html -->

<div class="app-content">
    <div class="app-content-header">
      <h1 class="app-content-headerText">Orders :</h1>
      <button class="mode-switch" title="Switch Theme">
        <svg class="moon" fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" width="24" height="24" viewBox="0 0 24 24">
          <defs></defs>
          <path d="M21 12.79A9 9 0 1111.21 3 7 7 0 0021 12.79z"></path>
        </svg>
      </button>
    </div>
    <div class="app-content-actions">
      <div class="app-content-actions-wrapper">
        
        <button class="action-button list active" title="List View">
          <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-list"><line x1="8" y1="6" x2="21" y2="6"/><line x1="8" y1="12" x2="21" y2="12"/><line x1="8" y1="18" x2="21" y2="18"/><line x1="3" y1="6" x2="3.01" y2="6"/><line x1="3" y1="12" x2="3.01" y2="12"/><line x1="3" y1="18" x2="3.01" y2="18"/></svg>
        </button>
        <button class="action-button grid" title="Grid View">
          <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-grid"><rect x="3" y="3" width="7" height="7"/><rect x="14" y="3" width="7" height="7"/><rect x="14" y="14" width="7" height="7"/><rect x="3" y="14" width="7" height="7"/></svg>
        </button>
      </div>


      


    </div>


    
    

      
   


    <div class="products-area-wrapper tableView">
      <div class="products-header">
        <div class="product-cell image">
          Items
          <button class="sort-button">
          </button>
        </div>
        <div class="product-cell category">Name<button class="sort-button">
          </button></div>
        <div class="product-cell status-cell">userid<button class="sort-button">
          </button></div>
        <div class="product-cell sales"><button class="sort-button">
          </button></div>
        <div class="product-cell stock">Training Date <button class="sort-button">
          </button></div>
          <div class="product-cell price">


          </button></div>


            

       
        </div>



        <?php

        $trainerid=$_SESSION['userid'];
          $sql = "SELECT * FROM `trainerbook` WHERE `trainerid` = $trainerid";
          $result = mysqli_query($conn , $sql);
          $resultCheck = mysqli_num_rows($result);

          if($resultCheck > 0 )
          {
              while($row = mysqli_fetch_assoc($result))
              { 

            $customerid=$row['customerid'];

          $result5 = mysqli_query($conn,"SELECT * FROM `users` WHERE `usersId` = $customerid");
          if(mysqli_num_rows($result5) > 0){
              
              while($data5 = mysqli_fetch_assoc($result5)){
                  $img=$data5['img'];
              }
          }


          
          $result99 = mysqli_query($conn,"SELECT * FROM `cart` WHERE `cid` = $customerid ");
          if(mysqli_num_rows($result99) > 0){
              while($data = mysqli_fetch_assoc($result99)){
                $cid=$data['id'];
           
                
              }
            }



?>

<form id="contact-form" role="form" action="includes/OrderTrain.inc.php" method="post">


        <div class="products-row">
          
        <button class="cell-more-button">
        <svg xmlns="http://www.w3.org/2000/svg" width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-more-vertical"><circle cx="12" cy="12" r="1"/><circle cx="12" cy="5" r="1"/><circle cx="12" cy="19" r="1"/></svg>
        </button>
        <div class="product-cell image">
        <img style="width: 200px; height: 200px;" src="<?php echo  $img ; ?>" alt="product">
        </div>


        <div class="product-cell category"><span class="cell-label">Name:</span><?php echo $row['customername'] ; ?></div>
        <div class="product-cell status-cell">


        <span class="cell-label">Status:</span>
        <span class="status active" ><?php echo $row['customerid'] ; ?></span>
        </div>

        <div class="product-cell price"><span class="cell-label">Price:</span></div>
        <div class="product-cell stock"><span class="cell-label">Stock:</span><?php echo $row['Date'] ; ?></div>
        <div class="product-cell price"><span class="cell-label">Price:</span>
        <button class="button" name="confirm"> Confirm Train </button>
        <button class="button" name="adminCancel" style="background-color:red"> Cancel Train </button>
        <input type="hidden" value="<?php echo $cid;?> " name="cid">
        <input type="hidden" value="<?php echo $row['customerid'];?> " name="customerid">
        <input type="hidden" value="<?php echo $_SESSION['useruid'];?> " name="staff">
        <input type="hidden" value="<?php echo $_SESSION['userid'];?> " name="trainerid">
        <input type="hidden" value="<?php echo $row['customername'] ;?> " name="customername">
        <input type="hidden" value="<?php echo $row['Date'] ;?> " name="date">




        <input type="text"  name="massage" style="color:black" placeholder="message to the customer"> </input>


       </div>


        </div>
        <?php }}?>


        </form>      


  

     
        <?php   }else{
         echo "No Records Found!";
     ?>

        </div>
        </div>
        







            <?php } ?>
<!-- partial -->
  <script  src="script/workers.js"></script>

</body>
</html>
