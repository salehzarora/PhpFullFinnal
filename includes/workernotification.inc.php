<?php
 

 $serverName = "localhost";
 $dBUsername = "root";
 $dBPassword = "";
 $dBName = "gym" ;
 
 
 $conn = mysqli_connect($serverName, $dBUsername, $dBPassword, $dBName); 
 

 if(isset($_POST['submit'])){

	 
   	
 $sql = "DELETE FROM `workernotification`";
 $result = mysqli_query($conn,$sql);


 $sql2 = "SELECT * FROM `product` WHERE `amount` < 25";
 $result2 = mysqli_query($conn,$sql2);
 $resultCheck = mysqli_num_rows($result2);

 if($resultCheck > 0 )
 {
	

	// $productname=$row['name'];
    // $category=$row['category'];
	// $img=$row['img'];

	 while($row = mysqli_fetch_assoc($result2))
	 { 
					
				$productid=$row['id'];
				$title="Low quantity!";
				$massage=" is about to get out of stock ! ";

			

			$sql3="INSERT INTO `workernotification`( `title`, `massage`, `ProductId`) VALUES ('$title','$massage',$productid)";
			$result3 = mysqli_query($conn,$sql3);

			

	 }

	


 }

 



 header("location: ../workerNotification.php?");



}




$sql5 = "SELECT * FROM `top_sells` ORDER BY `Quantity` DESC LIMIT 5";
$result5 = mysqli_query($conn,$sql5);
$resultCheck2 = mysqli_num_rows($result5);

if($resultCheck2 > 0 )
{
	$dataPoints=array();
	$i=0;
	while($row2 = mysqli_fetch_assoc($result5))
	{ 
		
		$dataPoints[$i] = array("label"=>  $row2['Item_Name'] , "y"=> $row2['Quantity']);
		$dataPoints2[$i] = array("label"=>  $row2['Item_Name'] , "y"=> $row2['Price']);


		$i=$i+1;
		

	}
					
}






     
 ?>