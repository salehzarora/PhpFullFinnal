<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/orderHistory.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="css/TabSwitch.css">





    <title>userprofile</title>
</head>
<body style="background-color: #eee">
    
<?php

session_start();
include 'navbar.php';
include_once 'includes/gymdb.inc.php';


?>


<?php


								$userid=$_SESSION['userid'];
								
								$sql3 = "SELECT * FROM `users` WHERE `usersId` =  $userid ";
								$result3 = mysqli_query($conn , $sql3);
								$resultCheck3 = mysqli_num_rows($result3);
      
                  
								if($resultCheck3 > 0 )
								{



								while($row2 = mysqli_fetch_assoc($result3))
								{ 
										?>
					   

             
<div class="container">
    <div class="main-body">
    
        <br>
    
          <div class="row gutters-sm">
            <div class="col-md-4 mb-3">
              <div class="card">
                <div class="card-body">
                  <div class="d-flex flex-column align-items-center text-center">
                    <img src="<?php echo $row2['img']; ?>" alt="Admin" class="rounded-circle" width="150" height="180">
                    <div class="mt-3">
                      <h4><?php echo $row2['usersName']; ?></h4>

                      <p style="color:gold; font-family: Cursive;"><?php 
                      
                      $sql4 = "SELECT * FROM `subcribers` WHERE `userid` =  $userid ";
                      $result4 = mysqli_query($conn , $sql4);
                      $resultCheck4 = mysqli_num_rows($result4);
            
                        
                      if($resultCheck4 > 0 )
                      {
                        ?>
                                              <form id="contact-form" role="form" action="includes/EndMembership.inc.php" method="post">
<?php 
                        $row4 = mysqli_fetch_assoc($result4);
                        if($row4['isVIP'] == 1){ 
                          echo "VIP membership";
                        
                      
                      

                          ?>
                      
                      
                    
                      </p> <p> Member since <?php echo $row4['Date'] ; ?>  </p>
                      <button class="btn btn-outline-primary" style="color:red" name="submit"> End membership </button>
                      <input type="hidden" name="userid" value="<?php echo $userid; ?> " >
                      </form>
                      <?php }else {echo "membership" ; ?>

                        </p> <p> Member since <?php echo $row4['Date'] ; ?>  </p>
                      <button class="btn btn-outline-primary" style="color:red" name="submit"> End membership </button>
                      <input type="hidden" name="userid" value="<?php echo $userid; ?> " >
                      </form>
                      <?php } }?>
                     
                     <a href="ordersHistory.php"> <button class="btn btn-outline-primary" >history</button></a>
                    </div>
                  </div>
                </div>
              </div>

            </div>
            
            <div class="col-md-8">
              






            <link href="https://fonts.googleapis.com/css?family=Work+Sans:400,600,700&display=swap" rel="stylesheet">
<div class="layout">
  <input name="nav" type="radio" class="nav home-radio" id="home" checked="checked" />
  <div class="page home-page" style="margin-right: 220px; margin-top: 10px; width:920px;" >
    <div class="page-contents" >


    <div class="card mb-3" style="width: 900px;" >
                <div class="card-body">
                  <div class="row">
                    <div class="col-sm-3">
                      <h6 class="mb-0">Full Name</h6>
                    </div>
                    <div class="col-sm-9 text-secondary">
                    <?php echo $row2['usersName']; ?>
                    </div>
                  </div>
                  <hr>
                  <div class="row">
                    <div class="col-sm-3">
                      <h6 class="mb-0">UserName</h6>
                    </div>
                    <div class="col-sm-9 text-secondary">
                    <?php echo $row2['usersUid']; ?>
                    </div>
                  </div>
                  <hr>
                  <div class="row">
                    <div class="col-sm-3">
                      <h6 class="mb-0">Phone</h6>
                    </div>
                    <div class="col-sm-9 text-secondary">
                    <?php echo $row2['Phone']; ?>
                    </div>
                  </div>
                  <hr>
                  <div class="row">
                    <div class="col-sm-3">
                      <h6 class="mb-0">Email</h6>
                    </div>
                    <div class="col-sm-9 text-secondary">
                    <?php echo $row2['usersEmail']; ?>
                    </div>
                  </div>
                  <hr>
                  <div class="row">
                    <div class="col-sm-3">
                      <h6 class="mb-0">Account date</h6>
                    </div>
                    <div class="col-sm-9 text-secondary">
                    <?php echo $row2['Date']; ?>
                    </div>
                  </div>

                  <hr>
                  <div class="row">
                    <div class="col-sm-3">
                      <h6 class="mb-0">IMG</h6>
                    </div>
                    <div class="col-sm-9 text-secondary">
                    <img src="<?php echo $row2['img']; ?>" alt="Admin" class="rounded-circle" width="40" height="50">
                    </div>
                  </div>
                  
                  <hr>
                  <div class="row">
                    <div class="col-sm-12">
                      <a class="btn btn-info "  href="userprofileEdit.php">Edit</a>
                    </div>
                  </div>
                </div>
              </div>
              

    </div>
  </div>
  <label class="nav" for="home">
    <span>
      <svg viewBox="0 0 24 24" width="24" height="24" stroke="currentColor" stroke-width="2" fill="none" stroke-linecap="round" stroke-linejoin="round" class="css-i6dzq1">
        <path d="M3 9l9-7 9 7v11a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2z"></path>
        <polyline points="9 22 9 12 15 12 15 22"></polyline>
      </svg>
      Profile
    </span>
  </label>


                    <?php } } ?>

  <input name="nav" type="radio" class="about-radio" id="about" />
  <div class="page about-page">
    <div class="page-contents">
      




<!-- ====== Table Section Start -->
<section >
  <div class="container mx-auto" >
    <div class="-mx-4 flex flex-wrap">
      <div class="w-full px-4">
        <div class="max-w-full overflow-x-auto">
          <table class="w-full table-auto" style="margin-right: 80px; margin-left: -120px; margin-top: -80px; ">
            <thead>
              <tr class="text-center">
                <th
				style="width: 420px; background-color:#44a1ad;" class="w-1/6 min-w-[160px] border-l border-transparent py-4 px-3 text-lg font-semibold text-white lg:py-7 lg:px-4" 
                >
                Trainer
                </th>
                <th
				style="width: 420px; background-color:grey;" class="w-1/6 min-w-[160px] py-4 px-3 text-lg font-semibold text-white lg:py-7 lg:px-4"
                >
                  Date
                </th>
               
              </tr>
            </thead>
           
											<?php


								$userid=$_SESSION['userid'];
								
								$sql3 = "SELECT * FROM `trainer_shift` WHERE `customerid` = $userid ";
								$result3 = mysqli_query($conn , $sql3);
								$resultCheck3 = mysqli_num_rows($result3);
      
                  
								if($resultCheck3 > 0 )
								{



								while($row2 = mysqli_fetch_assoc($result3))
								{ 
										?>
					    <tbody class="border-b dark:bg-gray-900 dark:border-gray-700" >

              <tr>
                <td style="width: 320px; text-align:center">
                  <?php 
                 
                      $trainerid=$row2['trainerid'];
                  $sql4 = "SELECT * FROM `users` WHERE `usersId` = $trainerid ";
								$result4 = mysqli_query($conn , $sql4);
								$resultCheck4 = mysqli_num_rows($result4);
      
								if($resultCheck4 > 0 )
								{



								while($row4 = mysqli_fetch_assoc($result4))
								{ 
                  
                  
                  
                  
                  
                  
                  
                  echo $row4['usersName']; } } ?>  
                </td>
				<td style="width: 320px; height: 150px; text-align:center">
				<?php echo $row2['Date']; ?>

                </td>
			 <?php } }else {?>  
                        <td>
                          
                          "Ops you dont have any training  </td>
                         <?php } ?>
                         

      
              <tbody class="border-b dark:bg-gray-900 dark:border-gray-700" >

        <tr>
          <td style="width: 320px; text-align:center">
      
            </td>
              </tr>
			  

			 
              
            </tbody>
          </table>
        </div>
      </div>
    </div>
  </div>
</section>
<!-- ====== Table Section End -->

    
    </div>
  </div>
  <label class="nav" for="about">
    <span>
      <svg viewBox="0 0 24 24" width="24" height="24" stroke="currentColor" stroke-width="2" fill="none" stroke-linecap="round" stroke-linejoin="round" class="css-i6dzq1">
        <circle cx="12" cy="12" r="10"></circle>
        <path d="M9.09 9a3 3 0 0 1 5.83 1c0 2-3 3-3 3"></path>
        <line x1="12" y1="17" x2="12" y2="17"></line>
      </svg>
      Personal training table
    </span>
  </label>

  
</div></div>

















    </div> </div> </div>
    <br><br><br><br><br><br><br><br><br><br><br><br><br>
  <?php
  include 'footer.php';
  ?>
  



</body>

</html>