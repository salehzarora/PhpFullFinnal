

<?php
session_start();
include 'navbar.php';
include_once 'includes/gymdb.inc.php';


?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Products</title>
    <link rel="stylesheet" href="css/productCards.css" media="screen">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" media="screen">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css" media="screen">


</head>
<body>


<div class="container">
        <div class="row justify-content-center">
            <div class="col-md-12">
                <div class="card mt-5">
                    <div class="row card-header">
                        <h4>Products</h4>
                        <div class="search-container">
                         <form action="sortedProducts.php" method="GET">
                          <input type="text" placeholder="Search.." name="search" <?php if(isset($_GET['search'])){ echo "selected"; } ?>>
                          <button type="submit"><i class="fa fa-search"></i></button>
                         </form>
                        </div>
                    </div>
</div>
</div>
</div>


                    sort by:
                    <div class="card-body">
                        
                        <form action="sortedProducts.php" method="GET">
                            <div class="row">
                                <div class="col-md-5">
                                    <div class="input-group mb-3">
                                        <select name="sort_numeric" class="form-control">
                                            <option value="" disabled>--Select Option--</option>
                                            <option value="" disabled> --By Price--</option>
                                            <option value="low-high"<?php if(isset($_GET['sort_numeric']) && $_GET['sort_numeric'] == "low-high") { echo "selected"; } ?> >  Low - High</option>
                                            <option value="high-low" <?php if(isset($_GET['sort_numeric']) && $_GET['sort_numeric'] == "high-low") { echo "selected"; } ?>  > High - Low</option>
                                            <option value="" disabled>  --By Category--</option>
                                            <option value="all" <?php if(isset($_GET['sort_numeric']) && $_GET['sort_numeric'] == "all") { echo "selected"; } ?>> All</option>
                                            <?php          
                                                $sql5 = "SELECT distinct `category` FROM `product` WHERE 1;";
                                                $result5 = mysqli_query($conn , $sql5);
                                                $resultCheck5 = mysqli_num_rows($result5);

                                                if($resultCheck5 > 0 )
                                                {
                                                   
                                                    
                                                    while($row5 = mysqli_fetch_assoc($result5))
                                                    {
                                                        

                                                     
                                                        
                                                        ?>
                                                      <option value="<?php echo $row5['category']?>"   > <?php echo $row5['category']?></option>

                                                                                                    <?php   } } ?>
                                         
                                        </select>
                                        <button type="submit" class="input-group-text btn btn-primary" id="basic-addon2">
                                            Filter
                                        </button>
                                    </div>
                                </div>
                            </div>
                        </form>
</div>


<div class="container d-flex justify-content-center mt-50 mb-50">
<div class="row">

<?php
if(isset($_GET['sort_numeric']) && $_GET['sort_numeric'] == "low-high")
{

    $sql = "SELECT * FROM `product` ORDER BY price ASC;";
    $flag=0;

}

if(isset($_GET['sort_numeric']) && $_GET['sort_numeric'] == "high-low")
{
    $sql = "SELECT * FROM `product` ORDER BY price DESC;";
    $flag=1;

}
if(isset($_GET['search']))
{
    $search =$_GET['search'];
    $sql = "SELECT * FROM product WHERE name like '%$search%' ;";
    $flag=2;
}
if(isset($_GET['sort_numeric']) && $_GET['sort_numeric'] == "all")
{
    $sql = "SELECT * FROM `product` ORDER BY id DESC;;";
    $flag=3;

}
if(isset($_GET['sort_numeric']) && $_GET['sort_numeric'] == "cloth")
{
    $sql = "SELECT * FROM product WHERE category = 'cloth';";
    $flag=4;

}
if(isset($_GET['sort_numeric']) && $_GET['sort_numeric'] == "Dumbbells")
{
    $sql = "SELECT * FROM product WHERE category = 'Dumbbells';";
    $flag=5;

}
if(isset($_GET['sort_numeric']) && $_GET['sort_numeric'] == "eat")
{
    $sql = "SELECT * FROM product WHERE category = 'eat';";
    $flag=6;

}
if(isset($_GET['sort_numeric']) && $_GET['sort_numeric'] == "protein")
{
    $sql = "SELECT * FROM product WHERE category = 'protein';";
    $flag=7;

}


$result = mysqli_query($conn , $sql);
$resultCheck = mysqli_num_rows($result);

if($resultCheck > 0 )
{
    while($row = mysqli_fetch_assoc($result))
    { ?>
            
           <div class="col-md-4 mt-2">
            
                
                <div class="card">
                                    <div class="card-body">
                                        <div class="card-img-actions">
                                            
                                                <img src="<?php echo $row['img'] ; ?>" class="card-img img-fluid" width="96" height="350" alt="">
                                              
                                           
                                        </div>
                                    </div>

                                    <div class="card-body bg-light text-center">
                                        <div class="mb-2">
                                            <h6 class="font-weight-semibold mb-2">
                                                <a href="#" class="text-default mb-2" data-abc="true"><?php echo $row['name'] ;?></a>
                                            </h6>

                                            <a href="#" class="text-muted" data-abc="true"><?php echo $row['category'] ;?></a>
                                        </div>

                                        <h3 class="mb-0 font-weight-semibold">$<?php echo $row['price'] ;?></h3>

                                        <div>
                                           <i class="fa fa-star star"></i>
                                          20% Discount for subscribers
                                           <i class="fa fa-star star"></i>
                                        </div>

                                        <form id="contact-form" role="form" action="includes/productcart.inc.php" method="post">
                                        <button type="submit" class="btn bg-cart" 
                                        name="<?php if($flag==0){echo "low";}else if($flag==1){echo "high";}else if($flag==2){echo "search";}else if($flag==3){echo "all";}
                                        else if($flag==4){echo "clothing";}else if($flag==5){echo "dumbbells";}else if($flag==6){echo "eat";}else if($flag==7){echo "other";}?>"><i class="fa fa-cart-plus mr-2" ></i>
                                        <span class="button__text">
                                         <span>Add to cart</span>
                                        <input type="hidden" name="productid" value="<?php echo $row['id']; ?>">

                                        <input type="hidden" name="Item_Name" value="<?php echo $row['name'];?>">
                                        <input type="hidden" name="Price" value="<?php echo $row['price'];?>">

                                        </span>
                                        </button>
                                        </form>
                              
                                    </div>
                                </div>
          
          
          
          
          
          
          
          
    </div>
                         
                         <?php
    }
}?>



<br><br><br><br><br><br><br>
    </div> </div> </div>
  
  <?php
  include 'footer.php';
  ?>
  

</body>
</html>