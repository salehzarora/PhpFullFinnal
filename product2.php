<!DOCTYPE html>
<html lang="en" >
<head>
  <meta charset="UTF-8">
  <title>CodePen - Workers Dashboard UI</title>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/normalize/5.0.0/normalize.min.css">
<link rel="stylesheet" href="css/workers.css">
<link rel="stylesheet" href="css/addworkerbutton.css">

<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<meta name="viewport" content="width=device-width, initial-scale=1">


<link rel="stylesheet" href="css/addressinfo.css">





            <!-- Error alert -->

            <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto|Varela+Round">
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">
<link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
<script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js"></script>
<link rel="stylesheet" href="css/errorn.css">








</head>
<body style="background-color: #101827" >



<?php
$a=3;

include 'workerSideBar.php'; 
?>


<!-- partial:index.partial.html -->

    
  
  <div class="app-content">
    <div class="app-content-header">
      <h1 class="app-content-headerText">Products Panel</h1>
      
          <defs></defs>
          <path d="M21 12.79A9 9 0 1111.21 3 7 7 0 0021 12.79z"></path>
        </svg>
      </button>
    </div>

    <!-- <span> <div class="text-center"> Add worker <i class="fa fa-lock" style="font-size:20px;color:grey"></i> </span> </div> -->


             <!-- Add Product Button  -->


    <div class="app-content-actions">
      <div class="app-content-actions-wrapper">

      <?php 
                          if(isset($_SESSION["isManager"])){
        ?>

        <a href="adminaddproduct.php"> <button style="color:white" > Add products </button> </a>
                              <?php }?>


                           

                              
        
      </div>
    </div>
    <div class="products-area-wrapper tableView">
      <div class="products-header">
        <div class="product-cell image">
          Items
          <button class="sort-button">
          </button>
        </div>
        <div class="product-cell category">name<button class="sort-button">
          </button></div>
        <div class="product-cell status-cell">id<button class="sort-button">
          </button></div>
        <div class="product-cell sales">amount<button class="sort-button">
          </button></div>
        <div class="product-cell stock">Category<button class="sort-button">
          </button></div>
        <div class="product-cell price">Price<button class="sort-button">
          </button></div>
          <div class="product-cell sales"><button class="sort-button">
          <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 512 512"><path fill="currentColor" d="M496.1 138.3L375.7 17.9c-7.9-7.9-20.6-7.9-28.5 0L226.9 138.3c-7.9 7.9-7.9 20.6 0 28.5 7.9 7.9 20.6 7.9 28.5 0l85.7-85.7v352.8c0 11.3 9.1 20.4 20.4 20.4 11.3 0 20.4-9.1 20.4-20.4V81.1l85.7 85.7c7.9 7.9 20.6 7.9 28.5 0 7.9-7.8 7.9-20.6 0-28.5zM287.1 347.2c-7.9-7.9-20.6-7.9-28.5 0l-85.7 85.7V80.1c0-11.3-9.1-20.4-20.4-20.4-11.3 0-20.4 9.1-20.4 20.4v352.8l-85.7-85.7c-7.9-7.9-20.6-7.9-28.5 0-7.9 7.9-7.9 20.6 0 28.5l120.4 120.4c7.9 7.9 20.6 7.9 28.5 0l120.4-120.4c7.8-7.9 7.8-20.7-.1-28.5z"/></svg>

          </button></div>
          

          <?php

$sql = "SELECT * FROM product ORDER BY id DESC;";
$result = mysqli_query($conn , $sql);
$resultCheck = mysqli_num_rows($result);

if($resultCheck > 0 )
{

    while($row = mysqli_fetch_assoc($result))
    { ?>
        </div>
        <?php $id=$row['id']; ?>

        <br>


                    <!-- userID -->

        <div class="products-row">
        <button class="cell-more-button">

        <form id="contact-form" role="form" action="includes/editproduct.inc.php" enctype="multipart/form-data"  method="post"> 

        <svg xmlns="http://www.w3.org/2000/svg" width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-more-vertical"><circle cx="12" cy="12" r="1"/><circle cx="12" cy="5" r="1"/><circle cx="12" cy="19" r="1"/></svg>
        </button>
        <div class="product-cell image">
        <img style="width:12em ; height:6em "src="<?php echo $row['img'] ; ?>" alt="product" >
        <input type="hidden" name="img" value="<?php echo $row['img'];?>">

        <span></span>
        </div>

                    <!-- productname -->
                    <?php 
                          if(isset($_SESSION["isManager"])){
        ?>
        <div class="product-cell category"><span class="cell-label">Name:</span><input type="text" name="name" style="width: 20em" value="<?php echo $row['name'] ;?>"></input></div>

        <?php }else{?>
          <div class="product-cell category"><span class="cell-label">Name:</span><input type="text" name="name" style="width: 20em" value="<?php echo $row['name'] ;?>"disabled></input></div>
          <input type="hidden" name="name" value="<?php echo $row['name'];?>">

          <?php } ?>
        <div class="product-cell status-cell">


                    <!-- productid -->
        <span class="cell-label">Status:</span>
        <span class="status active "> <?php echo $row['id'] ;?></span>
        </div>

        <?php 
                          if(isset($_SESSION["isManager"])){
        ?>
        <div class="product-cell sales"><span class="cell-label">amount:</span><input type="number" name="amount" style="width: 5em" value="<?php echo $row['amount'];?>"></input></div>
        <div class="product-cell stock"><span class="cell-label">Stock:</span><input type="text" name="category" style="width: 5em" value="<?php echo $row['category'] ;?>"></input></div>
        <div class="product-cell price"><span class="cell-label">Price:</span>₪<input type="number" name="price" style="width: 5em" value="<?php echo $row['price'] ;?>"></input></div>
      
        <?php }else {?>
          <div class="product-cell sales"><span class="cell-label">amount:</span><input type="number" name="amount" style="width: 5em" value="<?php echo $row['amount'];?>"></input></div>
          <div class="product-cell stock"><span class="cell-label">Stock:</span><input type="text" name="category" style="width: 5em" value="<?php echo $row['category'] ;?>"disabled></input></div>
          <div class="product-cell price"><span class="cell-label">Price:</span>₪<input type="number" name="price" style="width: 5em" value="<?php echo $row['price'] ;?>"disabled></input></div>
          <input type="hidden" name="category" value="<?php echo $row['category'];?>">
          <input type="hidden" name="price" value="<?php echo $row['price'];?>">

            <?php }?>
        <input type="hidden" name="id" value="<?php echo $row['id'];?>">
        <?php  if(isset($_SESSION["isManager"])){ ?>
        <div class="product-cell price"><span class="cell-label">Price:</span><button style="background-color:#6F0707"class="button" type="submit" name="delete" > Delete </button></div>
        <?php }else{ ?>
          <div class="product-cell price"><span class="cell-label">Price:</span><button class="button" name="submit2" > Update </button></div>
            <?php } ?>
        </div>
        
        <div class="products-row">        

        <button class="cell-more-button">


        <svg xmlns="http://www.w3.org/2000/svg" width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-more-vertical"><circle cx="12" cy="12" r="1"/><circle cx="12" cy="5" r="1"/><circle cx="12" cy="19" r="1"/></svg>
        </button>
        <?php 
                          if(isset($_SESSION["isManager"])){
        ?>
        <p style="color:white">Change img :</p>&nbsp;
        <input type="file" name="imgc" style="width:6.3em ; "> </input>  &nbsp; &nbsp;
        
        <textarea name="description" style="width:30em; height:60px; color:white; background-color:#403F66;"><?php echo $row['description'];?></textarea> &nbsp; &nbsp;
        <input type="hidden" name="id" value="<?php echo $row['id'];?>">
        <div class="product-cell price"><span class="cell-label">Price:</span><button class="button" name="submit" > Update </button></div>

        <?php }else {?>

          <textarea  style="width:30em; height:60px; color:white; background-color:#403F66;"  disabled><?php echo $row['description'];?></textarea> &nbsp; &nbsp;
        <input type="hidden" name="id" value="<?php echo $row['id'];?>">
        <input type="hidden" name="description" value="<?php echo $row['description'];?>">

        <?php  if(isset($_SESSION["isManager"])){ ?>

        <div class="product-cell price"><span class="cell-label">Price:</span><button class="button" name="submit" > Update </button></div>

        <?php }}?>


    </form>
              
      <?php }}?>

        </div>

        </div>


<!-- partial -->
  <script  src="script/workers.js"></script>

   



</body>
</html>

