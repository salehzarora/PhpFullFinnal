<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/orderHistory.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">


    <title>ordersHistory</title>
</head>
<body style="background-color: #eee">
    
<?php
session_start();
include 'navbar.php';
include_once 'includes/gymdb.inc.php';


?>


<!-- Breadcrumb -->
&nbsp&nbsp&nbsp&nbsp&nbsp   >>> Back to &nbsp <a href="userprofile.php"> User Profile</a>
          <!-- /Breadcrumb -->



<?php

if(isset($_SESSION['cartid'])){

$sql = "SELECT * FROM `all_order` WHERE Cartid = $_SESSION[cartid] ORDER BY id DESC ;";
$result = mysqli_query($conn , $sql);
$resultCheck = mysqli_num_rows($result);

if($resultCheck > 0 )
{
    while($row = mysqli_fetch_assoc($result))
    { 
        $orderid=$row['orderid'];
?>
        

<div class="container mt-5">
        <div class="d-flex justify-content-center row">
            <div class="col-md-10">
                <div class="rounded">
                    <div class="table-responsive table-borderless">
                        <table class="table">
                            <thead>
                                <tr>
                                    <th class="text-center">
                                            <div class="inner-circle"></div>
                                        </div>
                                    </th>
                                    <th>Order <?php echo $row['orderid'];?>#</th>
                                    <th>Order name</th>
                                    <th>status</th>
                                    <th>Price</th>
                                    <th>order date</th>
                                    <th></th>
                         
                                </tr>
                            </thead>
                            <?php           
                        $sql2 = "SELECT * FROM `all_user_orders` WHERE Order_Id = $orderid ;";
                        $result2 = mysqli_query($conn , $sql2);
                        $resultCheck2 = mysqli_num_rows($result2);
                        if($resultCheck2 > 0 )
                        {
                        while($row2 = mysqli_fetch_assoc($result2))
                        {     $Item_Name=$row2['Item_Name']; ?>      
                                               
   
                            <tbody class="table-body">
                                <tr class="cell-1">
                                    <td class="text-center">
                                            <div class="inner-circle"></div>
                                        </div>
                                    </td>
                            

                                    <td>


                                    <!-- Product IMG -->
                                        <?php
                        $sql4 = "SELECT * FROM `product` WHERE name = '$Item_Name' ;";
                        $result4 = mysqli_query($conn , $sql4);   
                        $resultCheck4 = mysqli_num_rows($result4);
                        if($resultCheck4 > 0 )
                        while($row4 = mysqli_fetch_assoc($result4))
                                {{
                                    ?>
                        <img src="<?php echo $row4['img'] ; ?>"  width="250" height="130" alt="">

                                    
                                    
                                <?php }} ?></td>



                                    <td><?php echo $row2['Item_Name'];?></td>


                                    <!-- Check order status -->
                                    <td><span class="<?php  

                                    $sql3 = "SELECT * FROM `order` WHERE orderid = $orderid ;";
                                    $result3 = mysqli_query($conn , $sql3);   
                                    $resultCheck3 = mysqli_num_rows($result3);

                                    if($resultCheck3 > 0 )
                                    {$flag=1;}else{$flag=0;} if($flag==1){echo "badge badge-danger";}else{echo "badge badge-success";}                                                                                                 
                                               ?>"><?php if($flag==1){echo "Pending";}else{echo "Shipped";}?></span></td>



                                    <td>₪<?php echo $row2['Price'];?></td>
                                    <td><?php echo $row['Date'];?></td>
                                    <td><i></i></td>
                          
                       
                                  


                                </tr>
                                <?php }}?>
                            </tbody>

                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>






<?php }}}?>




                                <!-- Design -->
<!-- 

    <div class="container mt-5">
        <div class="d-flex justify-content-center row">
            <div class="col-md-10">
                <div class="rounded">
                    <div class="table-responsive table-borderless">
                        <table class="table">
                            <thead>
                                <tr>
                                    <th class="text-center">
                                        <div class="toggle-btn">
                                            <div class="inner-circle"></div>
                                        </div>
                                    </th>
                                    <th>Order #</th>
                                    <th>Company name</th>
                                    <th>status</th>
                                    <th>Total</th>
                                    <th>Created</th>
                                    <th></th>
                                </tr>
                            </thead>
                            <tbody class="table-body">
                                <tr class="cell-1">
                                    <td class="text-center">
                                        <div class="toggle-btn">
                                            <div class="inner-circle"></div>
                                        </div>
                                    </td>
                                    <td>#SO-13487</td>
                                    <td>Gasper Antunes</td>
                                    <td><span class="badge badge-success">Fullfilled</span></td>
                                    <td>$2674.00</td>
                                    <td>Today</td>
                                    <td><i class="fa fa-ellipsis-h text-black-50"></i></td>
                                </tr>
                                <tr class="cell-1">
                                    <td class="text-center">
                                        <div class="toggle-btn">
                                            <div class="inner-circle"></div>
                                        </div>
                                    </td>
                                    <td>#SO-13453</td>
                                    <td>Aartsen van</td>
                                    <td><span class="badge badge-info">Confirmed</span></td>
                                    <td>$3454.00</td>
                                    <td>Yesterday</td>
                                    <td><i class="fa fa-ellipsis-h text-black-50"></i></td>
                                </tr>
                                <tr class="cell-1">
                                    <td class="text-center">
                                        <div class="toggle-btn">
                                            <div class="inner-circle"></div>
                                        </div>
                                    </td>
                                    <td>#SO-13498</td>
                                    <td>Trashes Habard</td>
                                    <td><span class="badge badge-danger">Partially shipped</span></td>
                                    <td>$6274.00</td>
                                    <td>May 12,2020</td>
                                    <td><i class="fa fa-ellipsis-h text-black-50"></i></td>
                                </tr>
                                <tr class="cell-1">
                                    <td class="text-center">
                                        <div class="toggle-btn">
                                            <div class="inner-circle"></div>
                                        </div>
                                    </td>
                                    <td>#SO-16499</td>
                                    <td>Samban Hubart</td>
                                    <td><span class="badge badge-success">Fullfilled</span></td>
                                    <td>$6375.00</td>
                                    <td>May 11,2020</td>
                                    <td><i class="fa fa-ellipsis-h text-black-50"></i></td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div> -->



    </div> </div> </div>
    <br><br><br><br><br><br><br><br><br><br><br><br><br>
  <?php
  include 'footer.php';
  ?>
  





</body>
</html>