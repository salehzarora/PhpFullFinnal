<?php
session_start();
include_once 'navbar.php';
include_once 'includes/gymdb.inc.php';




?>



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/editproductbody.css">
    
    <link rel="stylesheet" href="css/editproductdelete.css">
    <link rel="stylesheet" href="css/productlist1.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.bundle.min.js">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.0.3/css/font-awesome.css">




    <title>Edit product</title>
</head>
<body>

<h1> Edit products amount</h1>


<div class="container text-center">
<form id="contact-form" role="form" action="includes/editproduct.inc.php" method="post">
<div id="wrap" class="input">
  <header class="input-header">
  </header>
  <section class="input-content">
    <div class="input-content-wrap">
      <dl class="inputbox">
        <dt class="inputbox-title">Input Text</dt>
        <dd class="inputbox-content">
          <input id="input0" type="text" name="id">
          <label for="input0">ID</label>
          <span class="underline"></span>
        </dd>
      </dl>
      <dl class="inputbox">
        <dt class="inputbox-title">new amount</dt>
        <dd class="inputbox-content">
          <input id="input1" type="amount" name="amount">
          <label for="input1">amount</label>
          <span class="underline"></span>
        </dd>
      </dl>
      <div class="btns">
      <button class="button" name="submit">Edit</button>
     
      </div>
    </div>
  </section>
</div>
</div>
</form>

<br><br><br><br><br>

<form id="contact-form" role="form" action="includes/delete.inc.php" method="post">
<div class="container text-center">
<dt class="inputbox-title">ID you want to delete</dt>
<input id="input0" type="text" name="id">
<button class="button" name="delete">Delete</button>
</form>
</div>



<br><br><br><br><br><br>





<div class="container d-flex justify-content-center mt-50 mb-50">
<div class="row">

<?php

$sql = "SELECT * FROM product;";
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

                                            <a href="#" class="text-muted" data-abc="true">in stock :<?php echo $row['amount'] ;?></a>
                                        </div>

                                        <h3 class="mb-0 font-weight-semibold">ID:<?php echo $row['id'] ;?></h3>

                                       

                              
                              
                                    </div>
                                </div>
           
    </div>
                         
                         <?php
    }
}?>

  







</body>
</html>