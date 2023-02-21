<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/workers.css">
    <link rel="stylesheet" href="css/adminaddworker.css">

    <link href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700" rel="stylesheet">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.5.0/css/all.css" integrity="sha384-B4dIYHKNBt8Bc12p+WXckhzcICo0wtJAoU8YZTY5qE0Id1GSseTk6S+L3BlXeVIU" crossorigin="anonymous">


    <title>Add product</title>
</head>
<body>
<?php
    $a=7;

include 'workerSideBar.php'; 


                          if(isset($_SESSION["isManager"])){
        ?>

<div class="testbox" >





  <form  role="form" action="includes/adminaddworker.inc.php" method="post">
      
        <br/>
        <br/>
        <div class="colums">
          <div class="item">
            <label for="name">Userid <span>*</span></label>
            <input id="name" type="text" name="userid" style="color:black" required/>
          </div>
          <div class="item">
            <label for="salary">Salary<span>*</span></label>
            <input id="salary" type="text"   name="salary" style="color:black" required/>
          </div>
         
       
        </div>
        <br>
    
        <div class="btn-block">
          <button  name="trainer">Submit</button>
        </div>
      </form>
    </div>





<?php }else header("location: 404.php"); ?>




</body>
</html>