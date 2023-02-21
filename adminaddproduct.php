<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/workers.css">
    <link rel="stylesheet" href="css/adminaddproduct.css">


    <title>Add product</title>
</head>
<body>
<?php 
session_start();
                          if(isset($_SESSION["isManager"])){
        ?>
<?php
    $a=7;

include 'workerSideBar.php'; 
?>


<div class="container">
<form  action="includes/addproduct.inc.php" method="post" enctype="multipart/form-data" >
    <div class="row">
        <input type="text" placeholder="Product Name" name="name" style="width:30em; height:60px; color:white; background-color:#403F66;"/>
        
    <div class="row">
      <div class="col-half">
        <h4 style="color:white"></h4>
        <div class="input-group">
          <div class="col-third">
            <input type="text" placeholder="amount" name="amount" style="width:30em; height:60px; color:white; background-color:#403F66;"/>
          </div>
          <div class="col-third">
            <input type="text" placeholder="price" name="price" style="width:30em; height:60px; color:white; background-color:#403F66;"/>
          </div>
          <div class="col-third">
            <input type="text" placeholder="category" name="category" style="width:30em; height:60px; color:white; background-color:#403F66;"/>
          </div>
        </div>
      </div>
      </div>
    </div>
    <div class="row">
    <textarea name="description" style="width:40em; height:90px; color:white; background-color:#403F66;"  placeholder="Description"></textarea> &nbsp; &nbsp;

    <!-- <input type="text" name="img" placeholder="img link" style="width:30em; height:60px; color:white; background-color:#403F66;"/> -->

    <input type="file" name="img">

        </div>
        <button type="submit" name="submit"> Add </button>
      </div>
    </div>
    <div class="row">

      </div>
    </div>
  </form>
</div>


<?php }else header("location: 404.php"); ?>

</body>
</html>