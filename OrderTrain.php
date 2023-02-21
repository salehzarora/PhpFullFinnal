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
    <div class="col d-flex"><span class="text-muted" id="orderno"></span></div>
    <div class="gap">
        <div class="col-2 d-flex mx-auto"> </div>
    </div>
    <div class="title mx-auto"> Your request has been sent ! </div>
    <div class="main"> <span id="sub-title">
            <p><b>Trainer : </b></p>
        </span>
    




    
        <?php
        $customerid= $_SESSION['userid'];

    $result = mysqli_query($conn,"SELECT * FROM `trainerbook` WHERE `customerid` = $customerid");
    if(mysqli_num_rows($result) > 0){
       
        while($data = mysqli_fetch_assoc($result)){
           
         
         

                $trainerid=$data['trainerid'];
            $result2 = mysqli_query($conn,"SELECT * FROM `users` WHERE `usersId` = $trainerid");
             if(mysqli_num_rows($result2) > 0){
        
        while($data2 = mysqli_fetch_assoc($result2)){
           
   


     
?>


        <div class="row row-main">
            <div class="col-3"> <img  style="width: 120px;"class="img-fluid" src="<?php echo  $data2['img']; ?>"> </div>
            <div class="col-6">
                <div class="row d-flex">
                    <p><b><?php echo $data2['usersName']; ?></b></p>
                </div>
                <div class="row d-flex">
                    <p  style="color:black"> we will send a notification after &nbsp<b style="color:green"><?php echo $data2['usersName']; ?></b> applies your request</p>
                </div>
            </div>
            <div class="col-3 d-flex justify-content-end">
                <p><b style="color:red">Train on : </b> <b> <?php echo $data['Date']; ?></b></p>
            </div>
        </div>
        
        




        <?php } } } ?>

        <form id="contact-form" role="form" action="includes/PersonalTrainer.inc.php" method="post">

        <hr>
        <div class="total">
            <div class="row">
                <div class="col"> <b> </b> </div>
                
                <div class="col d-flex justify-content-end"> <b><?php echo date("D/M/Y"); echo "&nbsp &nbsp "; echo date("h:i:sa");?></b><b> 
                    <?php $customerid=$_SESSION['userid']; ?>
                    <input type="hidden" value="<?php echo $customerid; ?>" name="customerid">
                </div>
                <button style="background-color:red" class="button"  name="cancel"> Cancel request  </button>
                </form>
                </div> </div><a href="home.php" ><button class="button" href="home.php"  > Back to GYM :) </button></a>
        </div>
    </div>
</div>
        

<?php } ?>




</div> </div> </div>
    <br><br><br><br><br><br><br><br><br><br><br><br><br>
  <?php
  include 'footer.php';
  ?>
  



</body>
</html>