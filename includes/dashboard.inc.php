
  <?php
 

 $serverName = "localhost";
 $dBUsername = "root";
 $dBPassword = "";
 $dBName = "gym" ;
 
 
 $conn = mysqli_connect($serverName, $dBUsername, $dBPassword, $dBName); 
 
 








 if(isset($_POST['submit'])){

	 
   	
 $sql = "DELETE FROM `top_sells` WHERE 1";
 $result = mysqli_query($conn,$sql);


 $sql2 = "SELECT * FROM `all_user_orders` ORDER BY `Item_Name` DESC";
 $result2 = mysqli_query($conn,$sql2);
 $resultCheck = mysqli_num_rows($result2);

 if($resultCheck > 0 )
 {
	$row = mysqli_fetch_assoc($result2);
	$product=$row['Item_Name'];
	
	$total=0;
	$quantity=0;

	 while($row = mysqli_fetch_assoc($result2))
	 { 
		if($product == $row['Item_Name'])
		{

			



			$sql3 = "SELECT SUM(`Quantity`) FROM `all_user_orders` WHERE `Item_Name` = '$product' ";
			$result3 = mysqli_query($conn,$sql3);
			$resultCheck2 = mysqli_num_rows($result3);
	
			$row2 = mysqli_fetch_assoc($result3);
	
		
	
	
			$sql4 = "SELECT SUM(`Price`) FROM `all_user_orders` WHERE `Item_Name` = '$product' ";
			$result4 = mysqli_query($conn,$sql4);
			$resultCheck3 = mysqli_num_rows($result4);
	
			$row3 = mysqli_fetch_assoc($result4);
	
		


		 $total=$row3['SUM(`Price`)'];
		 $quantity=$row2['SUM(`Quantity`)'];



		 $sql5 = "SELECT * FROM `top_sells` WHERE `Item_Name` =  '$product' ";
			$result5 = mysqli_query($conn,$sql5);
			$resultCheck5 = mysqli_num_rows($result5);

			
		if($resultCheck5 == 0 )
		{

		 $sql4="INSERT INTO `top_sells`( `Item_Name`, `Price`, `Quantity`) VALUES ('$product',$total,$quantity)";
		 $result4 = mysqli_query($conn,$sql4);
	
		 }

		}


			$product=$row['Item_Name'];

		

	 }




	



 }

 header("location: ../dashboard.php?");



}



//  $dataPoints = array(
//      array("label"=> "Food + Drinks", "y"=> 3),
//      array("label"=> "Activities and Entertainments", "y"=> 261),
//      array("label"=> "Health and Fitness", "y"=> 158),
//      array("label"=> "Shopping & Misc", "y"=> 72),
//      array("label"=> "Transportation", "y"=> 191),
//      array("label"=> "Rent", "y"=> 573),
//      array("label"=> "Travel Insurance", "y"=> 126)

//  );


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






















// $dataPoints1 = array(
// 	array("label"=> "2010", "y"=> 36.12),
// 	array("label"=> "2011", "y"=> 34.87),
// 	array("label"=> "2012", "y"=> 40.30),
// 	array("label"=> "2013", "y"=> 35.30),
// 	array("label"=> "2014", "y"=> 39.50),
// 	array("label"=> "2015", "y"=> 50.82),
// 	array("label"=> "2016", "y"=> 74.70)
// );


     
 ?>