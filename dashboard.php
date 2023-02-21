<!DOCTYPE html>
<html lang="en" >
<head>
  <meta charset="UTF-8">
  <title>CodePen - Workers Dashboard UI</title>
 
  <link rel="stylesheet" href="css/workers.css">
  <link rel="stylesheet" href="css/dashboard.css">
  <link rel="stylesheet" href="css/dashboard2.css">
  <link rel="stylesheet" href="css/dashboard3.css">
  <link rel="stylesheet" href="css/refreshbutton.css">
  <link rel="stylesheet" href="css/WorkerDashboard.css">




  <link href="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>
<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>




  <?php 
$a=6;

include 'workerSideBar.php'; 
include 'includes/dashboard.inc.php'; 



?>


<script>
window.onload = function () {
 

	
var chart = new CanvasJS.Chart("chartContainer", {
	animationEnabled: true,
	exportEnabled: true,
    backgroundColor: "#ffffff",


	
	data: [{
		
        indexLabelFontColor: "black",
		type: "pie",
		showInLegend: "true",
		legendText: "{label}",
		indexLabelFontSize: 16,
		indexLabel: "{label} - #percent%",

		yValueFormatString: "#,##0",
		dataPoints: <?php echo json_encode($dataPoints, JSON_NUMERIC_CHECK); ?>
	}]
});
chart.render();





var chart2 = new CanvasJS.Chart("chartContainer2", {
	animationEnabled: true,
	theme: "light2",
	
	axisY: {
		suffix: "%",
		scaleBreaks: {
			autoCalculate: true
		}
	},
	data: [{
		type: "column",
		yValueFormatString: "₪#,##0",
		indexLabel: "{y}",
		indexLabelPlacement: "inside",
		indexLabelFontColor: "white",
		dataPoints: <?php echo json_encode($dataPoints2, JSON_NUMERIC_CHECK); ?>
	}]
});
chart2.render();
 
}

 
 </script>





</head>
<body style="background-color: #101827">



<!-- partial:index.partial.html -->






<?php                           if(isset($_SESSION["isManager"])){














 ?>

<!-- partial:index.partial.html -->
<div class="app">
		
		<div class="app-header-navigation">
			<div class="tabs">
				<a href="#" class="active">
					Top products
				</a>
				
			</div>
		</div>
		
		<div class="app-header-mobile">
			<button class="icon-button large">
				<i class="ph-list"></i>
			</button>
		</div>

	</header>

	<div class="app-body">
				
		<div class="app-body-main-content">
			<section class="service-section">
				<h2>Top products</h2>


	<form id="contact-form" role="form" action="includes/dashboard.inc.php" method="post">

		<div class="buttons">
		<button class="btn-green" name="submit">
			<img class="icon" src="https://htmlacademy.ru/assets/icons/reload-6x-white.png"> Refresh </button>
		</div>
	</form> 
				
				<div class="service-section-header">
					
					</div>
				
				<div class="tiles"  style="height: 500px; width: 370%;">
					<article class="tile" >
					<div class="tile-header"">
							<i></i>
							<h3>
								<span>Top 5 products Sold </span>
								<span>by units</span>
							</h3>
						</div>

					<div id="chartContainer" style="height: 470px; width: 100%;"></div>

							

					</article>
					<article class="tile" >
						

					<div class="tile-header">
							<i></i>
							<h3>
								<span>Top 5 products Sold</span>
								<span>by price</span>
							</h3>
						</div>
 			
					<div id="chartContainer2" style="height: 370px; width: 100%;"></div>


				</div>
				
			</section>
		</div>


 		<br> <br> <br>


		<div class="app-body-sidebar">
			<section class="payment-section">
				<h2>New Users</h2>
				<div class="payment-section-header">
					
				</div>

				<?php 
				


				$sql5 = "SELECT * FROM `users` ORDER BY `Date` DESC, `time` DESC LIMIT 4  ";
				$result5 = mysqli_query($conn,$sql5);
				$resultCheck2 = mysqli_num_rows($result5);
				
				if($resultCheck2 > 0 )
				{
					while($row2 = mysqli_fetch_assoc($result5))
					{ ?>
				<div class="payments">
					<div class="payment">
							<img src="<?php echo  $row2['img'] ;?>" style="height: 100px; width: 50%;">
						<div class="payment-details">
							<h3><?php echo  $row2['usersName'] ;?></h3>
							<div>
								<span style="font-size:18px;color:grey"><?php echo $row2['Date']; ?><br><?php echo $row2['time']; ?> </span>
								
							</div>
						</div>
					</div>
					
				<?php } } ?>

				</div>
				
			</section>
		</div>
	</div>
</div>
</div>
<!-- partial -->
  <script src='https://unpkg.com/phosphor-icons'></script><script  src="./script.js"></script>

  <!-- Dashboards -->
  <script src="https://canvasjs.com/assets/script/canvasjs.min.js"></script>








																			<!-- WORKER SIDE -->








																			





  <?php }else if(isset($_SESSION["isWorker"]) && !isset($_SESSION["isTrainer"]) ){?>


	<?php
														$userid=$_SESSION['userid'];
														$sql3 = "SELECT * FROM `users` WHERE `usersId` = $userid";
									$result3 = mysqli_query($conn , $sql3);
									$resultCheck3 = mysqli_num_rows($result3);


									if($resultCheck3 > 0 )
									{
										while($row3 = mysqli_fetch_assoc($result3))
										{

?>

<div class="container emp-profile">
<form id="contact-form" role="form" action="includes/userimg.inc.php"  enctype="multipart/form-data"  method="post"> 
<button style=" height: 50px; width: 190px ;" type="submit" name="submitc"> change </button>

                <div class="row">
                    <div class="col-md-4">

                        <div class="profile-img">
                            <img src="<?php echo $row3['img'];?>" style=" vertical-align: middle; width: 245px; height: 250px; border-radius: 15%;">
							<input type="hidden" name="userid" value="<?php echo $userid ; ?>">

                            <div class="file btn btn-lg btn-primary">
                                Change Photo
                                <input type="file" name="imgc"/> </input>
								

                            </div>

                        </div>

                    </div>

                    <div class="col-md-6">
					

								</form>

                        <div class="profile-head">
                                    <h5>
                                       <?php echo $_SESSION['useruid'];?>
                                    </h5>
                                    <h6>

													<?php

										  if($row3['isWorker'] == 1 ) 
										{
											echo "Worker";
										}else  if($row3['isTrainer'] == 1 )
										{
											echo "Personal trainer";
										}
									} }
										?>
                                        

                                    </h6>
                           
                        </div>
                    </div>
                    <!-- <div class="col-md-2">
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-4">
                        <div class="profile-work">
                            <p>WORK LINK</p>
                            <a href="">Website Link</a><br/>
                            <a href="">Bootsnipp Profile</a><br/>
                            <a href="">Bootply Profile</a>
                            <p>SKILLS</p>
                            <a href="">Web Designer</a><br/>
                            <a href="">Web Developer</a><br/>
                            <a href="">WordPress</a><br/>
                            <a href="">WooCommerce</a><br/>
                            <a href="">PHP, .Net</a><br/>
                        </div>
                    </div> -->

                    <div class="col-md-8">
                        <div class="tab-content profile-tab" id="myTabContent">
							 <ul class="nav nav-tabs" id="myTab" role="tablist">
                                <li class="nav-item">
                                    <a class="nav-link active" id="home-tab" data-toggle="tab" href="#home" role="tab" aria-controls="home" aria-selected="true">About</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" id="profile-tab" data-toggle="tab" href="#profile" role="tab" aria-controls="profile" aria-selected="false">Timeline</a>
                                </li>
                            </ul>
                            <div class="tab-pane fade show active" id="home" role="tabpanel" aria-labelledby="home-tab">
													<?php


						$userid=$_SESSION['userid'];

						$sql2 = "SELECT * FROM `users` WHERE `usersId` = $userid ";
						$result2 = mysqli_query($conn , $sql2);
						$resultCheck2 = mysqli_num_rows($result2);


						if($resultCheck2 > 0 )
						{



						while($row2 = mysqli_fetch_assoc($result2))
						{ 
								?>
							<div class="row">
                                            <div class="col-md-6">
                                                <label>User Id</label>
                                            </div>
                                            <div class="col-md-6">
                                                <p><?php echo $row2['usersUid'] ; ?></p>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-md-6">
                                                <label >Name</label>
                                            </div>
                                            <div class="col-md-6">
                                                <p><?php echo $row2['usersName'] ; ?></p>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-md-6">
                                                <label>Email</label>
                                            </div>
                                            <div class="col-md-6">
                                                <p><?php echo $row2['usersEmail'] ; ?></p>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-md-6">
                                                <label>Phone</label>
                                            </div>
                                            <div class="col-md-6">
                                                <p><?php echo $row2['Phone'] ; ?></p>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-md-6">
                                                <label>Profession</label>
                                            </div>
                                            <div class="col-md-6">
                                                <p><?php if ($row2['isWorker'] == 1) {echo "Worker";}else if ($row2['isTrainer'] == 1) {echo "Trainer";} ?></p>
                                            </div>
                                        </div>


									<?php } } ?>






                            </div>
                            <div class="tab-pane fade" id="profile" role="tabpanel" aria-labelledby="profile-tab">



										<div class="container p-2 mx-auto sm:p-4 dark:text-gray-100">
	<div class="overflow-x-auto">
		<table class="w-full p-6 text-xs text-left whitespace-nowrap" style="height:200px">
			<colgroup>
				<col class="w-5">
				<col>
				<col>
				<col>
				<col>
				<col>
				<col class="w-5">
			</colgroup>
			<thead>
				<tr class="dark:bg-gray-700" style="height:200px">
					<th class="p-3">Sunday </th>
					<th class="p-3">Monday</th>
					<th class="p-3">Tuesday </th>
					<th class="p-3">Wednesday </th>
					<th class="p-3">Thursday  </th>
					<th class="p-3">Friday   </th>
					<th class="p-3">Saturday  </th>





					<th class="p-3">
						<span class="sr-only">Edit</span>
					</th>
				</tr>
			</thead>


						<?php


					$userid=$_SESSION['userid'];

				$sql2 = "SELECT * FROM `users` WHERE `usersId` = $userid ";
				$result2 = mysqli_query($conn , $sql2);
				$resultCheck2 = mysqli_num_rows($result2);


				if($resultCheck2 > 0 )
				{



					while($row2 = mysqli_fetch_assoc($result2))
					{ 


							$userid=$row2['usersId'];

						$sql = "SELECT * FROM `workers_shift` WHERE `userid` = $userid ";
						$result = mysqli_query($conn , $sql);
						$resultCheck = mysqli_num_rows($result);

						
						if($resultCheck > 0 )
						{
							$row = mysqli_fetch_assoc($result)
							

				
				
					?>

					

			<tbody class="border-b dark:bg-gray-900 dark:border-gray-700" >
				<tr>
				<td class="px-3 py-2">
						<p><?php if ($row['Sunday']=='Shift 1') {echo "8:00 AM - 16:00 PM"; } else if($row['Sunday']=='Shift 2') { echo "15:30 PM - 22:00 PM ";}else echo"Break"; ?></p>
					</td>		
					
					<td class="px-3 py-2" width="13%">
						<p><?php if ($row['Monday']=='Shift 1') {echo "8:00 AM - 16:00 PM"; } else if($row['Monday']=='Shift 2') { echo "15:30 PM - 22:00 PM ";}else echo"Break"; ?></p>
					</td>
					<td class="px-3 py-2" width="13%">
					<p><?php if ($row['Tuesday']=='Shift 1') {echo "8:00 AM - 16:00 PM"; } else if($row['Tuesday']=='Shift 2') { echo "15:30 PM - 22:00 PM ";}else echo"Break"; ?></p>
					</td>
					<td class="px-3 py-2" width="13%">
						<p><?php if ($row['Wednesday']=='Shift 1') {echo "8:00 AM - 16:00 PM"; } else if($row['Wednesday']=='Shift 2') { echo "15:30 PM - 22:00 PM ";}else echo"Break"; ?></p>
					</td>
					<td class="px-3 py-2" width="13%">
						<p><?php if ($row['Thursday']=='Shift 1') {echo "8:00 AM - 16:00 PM"; } else if($row['Thursday']=='Shift 2') { echo "15:30 PM - 22:00 PM ";}else echo"Break"; ?></p>
					</td>
					<td class="px-3 py-2" width="13%">
						<p><?php if ($row['Friday']=='Shift 1') {echo "8:00 AM - 16:00 PM"; } else if($row['Friday']=='Shift 2') { echo "15:30 PM - 22:00 PM ";}else echo"Break"; ?></p>
					</td>
					<td class="px-3 py-2" width="13%">
						<p><?php if ($row['Saturday']=='Shift 1') {echo "8:00 AM - 16:00 PM"; } else if($row['Saturday']=='Shift 2') { echo "15:30 PM - 22:00 PM ";}else echo"Break"; ?></p>
					</td>
					
					
				
				</tr>
				
			</tbody>
			<?php } } } ?>
			
			
			
		</table>
	</div>
</div>

















						</div>
                    </div>
                </div>
            </form>           
        </div>



<?php }else if(isset($_SESSION["isTrainer"]) && isset($_SESSION["isWorker"]) ){?>


<?php
													$userid=$_SESSION['userid'];
													$sql3 = "SELECT * FROM `users` WHERE `usersId` = $userid";
								$result3 = mysqli_query($conn , $sql3);
								$resultCheck3 = mysqli_num_rows($result3);


								if($resultCheck3 > 0 )
								{
									while($row3 = mysqli_fetch_assoc($result3))
									{

?>

<div class="container emp-profile">
<form id="contact-form" role="form" action="includes/userimg.inc.php"  enctype="multipart/form-data"  method="post"> 
<button style=" height: 50px; width: 190px ;" type="submit" name="submitc"> change</button>

			<div class="row">
				<div class="col-md-4">

					<div class="profile-img">
						<img src="<?php echo $row3['img'];?>" style=" vertical-align: middle; width: 245px; height: 250px; border-radius: 15%;">
						<input type="hidden" name="userid" value="<?php echo $userid ; ?>">

						<div class="file btn btn-lg btn-primary">
							Change Photo
							<input type="file" name="imgc"/> </input>
							

						</div>

					</div>

				</div>

				<div class="col-md-6">
				

							</form>

					<div class="profile-head">
								<h5>
								   <?php echo $_SESSION['useruid'];?>
								</h5>
								<h6>

												<?php

									  if($row3['isWorker'] == 1 && $row3['isTrainer'] != 1) 
									{
										echo "Workers";
									}else  if($row3['isTrainer'] == 1 && $row3['isTrainer'] == 1 )
									{
										echo "Personal trainer";
									}
								} }
									?>
									

								</h6>
					   
					</div>
				</div>
				<!-- <div class="col-md-2">
				</div>
			</div>
			<div class="row">
				<div class="col-md-4">
					<div class="profile-work">
						<p>WORK LINK</p>
						<a href="">Website Link</a><br/>
						<a href="">Bootsnipp Profile</a><br/>
						<a href="">Bootply Profile</a>
						<p>SKILLS</p>
						<a href="">Web Designer</a><br/>
						<a href="">Web Developer</a><br/>
						<a href="">WordPress</a><br/>
						<a href="">WooCommerce</a><br/>
						<a href="">PHP, .Net</a><br/>
					</div>
				</div> -->

				<div class="col-md-8">
					<div class="tab-content profile-tab" id="myTabContent">
						 <ul class="nav nav-tabs" id="myTab" role="tablist">
							<li class="nav-item">
								<a class="nav-link active" id="home-tab" data-toggle="tab" href="#home" role="tab" aria-controls="home" aria-selected="true">About</a>
							</li>
							<li class="nav-item">
								<a class="nav-link" id="profile-tab" data-toggle="tab" href="#profile" role="tab" aria-controls="profile" aria-selected="false">Timeline</a>
							</li>
						</ul>
						<div class="tab-pane fade show active" id="home" role="tabpanel" aria-labelledby="home-tab">
												<?php


					$userid=$_SESSION['userid'];

					$sql2 = "SELECT * FROM `users` WHERE `usersId` = $userid ";
					$result2 = mysqli_query($conn , $sql2);
					$resultCheck2 = mysqli_num_rows($result2);


					if($resultCheck2 > 0 )
					{



					while($row2 = mysqli_fetch_assoc($result2))
					{ 
							?>
						<div class="row">
										<div class="col-md-6">
											<label>User Id</label>
										</div>
										<div class="col-md-6">
											<p><?php echo $row2['usersUid'] ; ?></p>
										</div>
									</div>
									<div class="row">
										<div class="col-md-6">
											<label >Name</label>
										</div>
										<div class="col-md-6">
											<p><?php echo $row2['usersName'] ; ?></p>
										</div>
									</div>
									<div class="row">
										<div class="col-md-6">
											<label>Email</label>
										</div>
										<div class="col-md-6">
											<p><?php echo $row2['usersEmail'] ; ?></p>
										</div>
									</div>
									<div class="row">
										<div class="col-md-6">
											<label>Phone</label>
										</div>
										<div class="col-md-6">
											<p><?php echo $row2['Phone'] ; ?></p>
										</div>
									</div>
									<div class="row">
										<div class="col-md-6">
											<label>Profession</label>
										</div>
										<div class="col-md-6">
											<p><?php  if ($row2['isTrainer'] == 1) {echo "Trainer";} ?></p>
										</div>
									</div>


								<?php } } ?>






						</div>
						<div class="tab-pane fade" id="profile" role="tabpanel" aria-labelledby="profile-tab">



		

<!-- ====== Table Section Start -->
<section>
  <div class="container mx-auto">
    <div class="-mx-4 flex flex-wrap">
      <div class="w-full px-4">
        <div class="max-w-full overflow-x-auto">
          <table class="w-full table-auto">
            <thead>
              <tr class="text-center">
                <th
				style="width: 420px;" class="w-1/6 min-w-[160px] border-l border-transparent py-4 px-3 text-lg font-semibold text-white lg:py-7 lg:px-4"
                >
                  Name
                </th>
                <th
				style="width: 420px;" class="w-1/6 min-w-[160px] py-4 px-3 text-lg font-semibold text-white lg:py-7 lg:px-4"
                >
                  id
                </th>
                <th
				style="width: 420px;"  class="w-1/6 min-w-[160px] py-4 px-3 text-lg font-semibold text-white lg:py-7 lg:px-4"
                >
                  Date
                </th>
               
                <th
				style="width: 420px;"  class="w-1/6 min-w-[160px] border-r border-transparent py-4 px-3 text-lg font-semibold text-white lg:py-7 lg:px-4"
                >
                  Done
                </th>
              </tr>
            </thead>
           
											<?php


								$userid=$_SESSION['userid'];
								
								$sql3 = "SELECT * FROM `trainer_shift` WHERE `trainerid` = $userid ";
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
                  <?php echo $row2['customername']; ?>
                </td>
				<td style="width: 320px; height: 150px; text-align:center">
				<?php echo $row2['customerid']; ?>

                </td>
				<td style="width: 320px; text-align:center">
				<?php echo $row2['Date']; ?>

                </td>

                <td style="width: 320px; text-align:center">
                 
				  <form id="contact-form" role="form" action="includes/OrderTrain.inc.php" method="post">

				  <button type="submit" name="done" style="width:150px; color:#249FAC;"> Done </button>
				  <input type="hidden" value="<?php echo $row2['id']; ?> " name="id">
                  
								</form>
                </td>
              </tr>
			  

			  <?php } } ?>
              
            </tbody>
          </table>
        </div>
      </div>
    </div>
  </div>
</section>
<!-- ====== Table Section End -->





		

								
					</div>
					</div></div>



				</div>
			</div>
		</form>           
	</div>
<?php } ?>

</body>
</html>
