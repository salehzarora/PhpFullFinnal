<!DOCTYPE html>
<html lang="en" >
<head>
  <meta charset="UTF-8">
  <title>CodePen - Products Dashboard UI</title>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/normalize/5.0.0/normalize.min.css">
<link rel="stylesheet" href="css/workers.css">


<style>
    .rotate-45 {
        --transform-rotate: 45deg;
        transform: rotate(45deg);
    }

    .group:hover .group-hover\:flex {
        display: flex;
    }
</style>
<link rel='stylesheet' href='https://cdnjs.cloudflare.com/ajax/libs/tailwindcss/1.8.10/tailwind.min.css'>
<link href="/dist/output.css" rel="stylesheet">

</head>
<body style="background-color: #101827" >



<?php
$a=2;

include 'workerSideBar.php';
?>




  <div class="app-content">
    <div class="app-content-header">
      <button class="mode-switch" title="Switch Theme">
        <svg class="moon" fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" width="24" height="24" viewBox="0 0 24 24">
          <defs></defs>
          <path d="M21 12.79A9 9 0 1111.21 3 7 7 0 0021 12.79z"></path>
        </svg>
      </button>
    </div>

    <a href="adminaddworker.php"><button  type="submit" name="add" style="color:white">Add Worker</button></a>
		<br>
	<a href="adminaddtrainer.php"><button  type="submit" name="add" style="color:white">Add Trainer</button></a>



           



       


	<h1 style="text-align: center; color:white;"> Workers table </h1> <br>




<br> 
      
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
					<th class="p-3">name</th>
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




				$sql2 = "SELECT * FROM `users` WHERE `isWorker` = 1 ";
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
				<td class="px-3 text-2xl font-medium dark:text-gray-400" width="8%" ><?php echo $row2['usersName'] ; ?>  </td> 
				<td class="px-3 py-2" >
						<p><?php if ($row['Sunday']=='Shift 1') {echo "8:00 AM - 16:00 PM"; } else if($row['Sunday']=='Shift 2') { echo "15:30 PM - 22:00 PM ";}else echo"Break"; ?></p>
					</td>		
					
					<td class="px-3 py-2" width="13%">
						<p><?php if ($row['Monday']=='Shift 1') {echo "8:00 AM - 16:00 PM"; } else if($row['Monday']=='Shift 2') { echo "15:30 PM - 22:00 PM ";}else echo"Break"; ?></p>
					</td>
					<td class="px-3 py-2" width="13%">
						<span><?php if ($row['Tuesday']=='Shift 1') {echo "8:00 AM - 16:00 PM"; } else if($row['Tuesday']=='Shift 2') { echo "15:30 PM - 22:00 PM ";}else echo"Break"; ?></span>
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


<br><br><br><br>

								<h1 style="text-align: center; color:white;"> Trainers table </h1> <br>

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
                  Trainer
                </th>
              </tr>
            </thead>
											<?php


								
								
								$sql3 = "SELECT * FROM `trainer_shift` WHERE 1 ";
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

									<?php 
									$trainerid = $row2['trainerid'];
				$sql4 = "SELECT * FROM `users` WHERE `usersId` = $trainerid ";
								$result4 = mysqli_query($conn , $sql4);
								$resultCheck4 = mysqli_num_rows($result4);


								if($resultCheck4 > 0 )
								{



								while($row4 = mysqli_fetch_assoc($result4))
								{ ?>

				<td style="width: 320px; text-align:center">
				<?php echo $row4['usersName']; ?>

                </td>

              
                </td>
              </tr>
			  

			  <?php } } } } ?>
              
            </tbody>
          </table>
        </div>
      </div>
    </div>
  </div>
</section>
<!-- ====== Table Section End -->







        
      
<!-- partial -->
  <script  src="script/workers.js"></script>


</body>
</html>
