<?php
session_start();
include 'navbar.php';
include_once 'includes/gymdb.inc.php';
$serverName = "localhost";
$dBUsername = "root";
$dBPassword = "";
$dBName = "gym" ;

$conn = mysqli_connect($serverName, $dBUsername, $dBPassword, $dBName); 
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
<body style="background-color: #eee">
<?php   

$id=$_POST['id'];
$product= "SELECT * FROM product WHERE id like '%$id%';";
$product = mysqli_query($conn , $product);
$getval=mysqli_fetch_assoc($product);
?>

<div class="container my-5 py-5 z-depth-1">


  <!--Section: Content-->
  <section class="text-center">

    <!-- Section heading -->
    <h3 class="font-weight-bold mb-5">Product Details</h3>

    <div class="row">

      <div class="col-lg-6">

        <!--Carousel Wrapper-->
        <div id="carousel-thumb" class="carousel slide carousel-fade carousel-thumbnails" data-ride="carousel">

          <!--Slides-->
          <div class="carousel-inner text-center text-md-left" role="listbox">
            <div class="carousel-item active">
              <img src="<?php echo $getval['img'];?>"
                alt="First slide" class="img-fluid">
            </div>
            
          </div>
          <!--/.Slides-->

          <!--Thumbnails-->
          <a class="carousel-control-prev" href="#carousel-thumb" role="button" data-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="sr-only">Previous</span>
          </a>
          <a class="carousel-control-next" href="#carousel-thumb" role="button" data-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="sr-only">Next</span>
          </a>
          <!--/.Thumbnails-->

        </div>
        <!--/.Carousel Wrapper-->

      </div>

      <div class="col-lg-5 text-center text-md-left">

        <h2 class="h2-responsive text-center text-md-left product-name font-weight-bold dark-grey-text mb-1 ml-xl-0 ml-4">
          <strong><?php echo $getval['name']; ?></strong>
        </h2>
        <span class="badge badge-danger product mb-4 ml-xl-0 ml-4"><?php echo $getval['category'];?></span>
        <h3 class="h3-responsive text-center text-md-left mb-5 ml-xl-0 ml-4">
          <span class="red-text font-weight-bold">
            <strong>

            <?php 
                                                    if(isset($_SESSION["isVIP"])){

                                                                $discount=12/100 * $getval['price'];
                                                                $newprice=$getval['price']-$discount;

                                                          echo $newprice; }else echo $getval['price'];
                                    ?>



            </strong>
          </span>
          <?php 
                                                    if(isset($_SESSION["isVIP"])){ ?>
          <span class="grey-text">
            <small>
              <s><?php echo $getval['price'];?> </s>
            </small>
          </span>
          <?php } ?>
        </h3>

        <!--Accordion wrapper-->
        <div class="accordion md-accordion" id="accordionEx" role="tablist" aria-multiselectable="true">

          <!-- Accordion card -->
          <div class="card">

            <!-- Card header -->
            <div class="card-header" role="tab" id="headingOne1">
              <a data-toggle="collapse" data-parent="#accordionEx" href="#collapseOne1" aria-expanded="true"
                aria-controls="collapseOne1">
                <h5 class="mb-0">
                  Description
                  <i class="fas fa-angle-down rotate-icon"></i>
                </h5>
              </a>
            </div>

            <!-- Card body -->
            <div id="collapseOne1" class="collapse show" role="tabpanel" aria-labelledby="headingOne1"
              data-parent="#accordionEx">
              <div class="card-body">
              <?php echo $getval['description'];?>
              </div>
            </div>
          </div>
          <!-- Accordion card -->

         
          </div>
          <!-- Accordion card -->

        </div>
        <!--/.Accordion wrapper-->

        <!-- Add to Cart -->
        <section class="color">
            <div class="row mt-3">
              <div class="col-md-12 text-center text-md-left text-md-right">
      
                  <form id="contact-form" role="form" action="includes/productcart.inc.php" method="post">
                  <button class="btn btn-primary btn-rounded" name="submit" type="submit">
                  <i class="fas fa-cart-plus mr-2" aria-hidden="true" ></i> Add to cart</button>

                                         <?php 
                                                    if(isset($_SESSION["isVIP"])){ ?>

                                        <input type="hidden" name="Price" value="<?php echo $newprice; ?>">
                                            <?php }else{?>
                                        <input type="hidden" name="Price" value="<?php echo $getval['price']; ?>">
                                                <?php  } ?>
                                        <input type="hidden" name="Item_Name" value="<?php echo $getval['name'];?>">
                                        <input type="hidden" name="productid" value="<?php echo $getval['id'];?>">

                                        </span>
                                        </button>
                                        </form>
              </div>
            </div>
          </div>
        </section>
        <!-- /.Add to Cart -->

      </div>

    </div>

  </section>
  <!--Section: Content-->


</div>
</br></br></br></br></br>


<?php
include 'footer.php';
?>






</body>
</html>