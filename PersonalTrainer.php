
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/workers.css">
    <link rel="stylesheet" href="css/PersonalTrainer.css">
    <link rel="stylesheet" href="css/PersonalTrainer2.css">

    <link rel="stylesheet" href="css/OrderThank.css">
    <link rel="stylesheet" href="css/confirmbutton.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">

    <link href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700" rel="stylesheet">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.5.0/css/all.css" integrity="sha384-B4dIYHKNBt8Bc12p+WXckhzcICo0wtJAoU8YZTY5qE0Id1GSseTk6S+L3BlXeVIU" crossorigin="anonymous">


    <title>Add product</title>
</head>
<body>

<?php
session_start();


include 'navbar.php'; 

if(isset($_SESSION['useruid']))
{

$customerid=$_SESSION['userid'];


?>








<?php 



$sql3 = "SELECT * FROM `trainerbook` WHERE `customerid` = $customerid ";
$result3 = mysqli_query($conn , $sql3);
$resultCheck3 = mysqli_num_rows($result3);


if($resultCheck3 > 0 )
{



        ?>



                                                                    <!-- IF USER ALREADY BOOKED -->

<div class="card mt-50 mb-50">
    <div class="col d-flex"><span class="text-muted" id="orderno"></span></div>
    <div class="gap">
        <div class="col-2 d-flex mx-auto"> </div>
    </div>
    <div class="title mx-auto"> Your request has been sent ! </div>
    <div class="main" style="color:red"> >> you can book another request after confirming your request << <span id="sub-title"></div>
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














<?php }else{  ?>
  

<div class="testbox" >





  <form  role="form" action="includes/PersonalTrainer.inc.php" method="post">
      
        <h2><pre>                          book a session </pre> </h2>
        <br/><br/> <br/><br/> <br/><br/><br/><br/>
        <div class="colums">
          <div class="item">
          <label for="birthdaytime">Training date  (date and time):</label>
            <input type="datetime-local" id="birthdaytime" name="DateTime" style="width: 200px;">

          </div>
          
          
          
         
        </div>
        <br>
      
           &nbsp; &nbsp;
            <label>Choose your trainer </label>



            

            <?php




$sql2 = "SELECT * FROM `users` WHERE `isTrainer` = 1 ";
$result2 = mysqli_query($conn , $sql2);
$resultCheck2 = mysqli_num_rows($result2);


if($resultCheck2 > 0 )
{

    $customername=$_SESSION['useruid'];
    $customerid=$_SESSION['userid'];

          ?>                     <div class="container">
<?php 
    while($row2 = mysqli_fetch_assoc($result2))
    { 

           $count=0;

        

         
        
    ?>

              


      <div class="container py-2" style="width: 2500px;">

		<article class="postcard light blue">

    
    <input type="radio" value="<?php echo $row2['usersId'] ; ?>" id="<?php echo $row2['usersId'] ; ?>" name="trainer" />
              <label for="<?php echo $row2['usersId'] ; ?>" class="radio"><span>&nbsp; &nbsp; &nbsp; &nbsp; &nbsp;<?php echo $row2['usersName'] ; ?></span></label>


    
			<a class="postcard__img_link" >

				<img class="postcard__img" src="<?php echo $row2['img'] ; ?>"   style="    width: 200px; height: 250px;
    min-height: 120px;
    max-height: auto;
    float: left;
    margin: 3px;
    padding: 3px;" />


			</a>
			<div class="postcard__text t-dark">
				<h1 class="postcard__title blue" style="font-size: 4.5em;"><?php echo $row2['usersName'] ; ?></h1>
				<div class="postcard__subtitle small">
					
				</div>
				<div class="postcard__bar"></div>
				<ul class="postcard__tagbox">
					</li>
				</ul>
			</div>
		</article>

           
		
	</div>
  

          <?php } } ?>  

        

          </div>
         
            <input type="hidden" value="<?php echo $_SESSION['userid']; ?>" name="customerid" >
            <input type="hidden" value="<?php echo $_SESSION['useruid']; ?>" name="customername" >
            
            <br>
          <br>

        <div class="btn-block">


        <?php

            $sql9 = "SELECT * FROM `subcribers` WHERE `userid` = $customerid ";
            $result9 = mysqli_query($conn , $sql9);
            $resultCheck9 = mysqli_num_rows($result9);


            if($resultCheck9 > 0 )
            {

  ?>
          <button  name="submit" type="submit">Submit</button>
          </form>
          <?php }else { ?>

            <h2>You need to be a subcriber to book</h2>
              <?php } ?>
            
        </div>
     
    </div>







<?php } ?>








<br><br><br><br><br><br><br>
    </div> </div> </div>
  
  <?php }else echo "please sign in"; ?> <br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br> <?php
  include 'footer.php';
  ?>
  



</body>
</html>