<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/404.css">
    <title>Error 404</title>
</head>
<body>



<h1 style="color:white">?_?</h1>
<div class="cloak__wrapper">
  <div class="cloak__container">
    <div class="cloak"></div>
  </div>
</div>
<a href="dashboard.php"  rel="noreferrer noopener">Home</a>

<div class="info">
  <h2 style="color:white">We can't find that page</h2>
  <p style="color:white">We're fairly sure that page used to be here, but seems to have gone missing. We do apologise on it's behalf.</p><a href="dashboard.php"  rel="noreferrer noopener">Home</a>
</div>
    





<body style="background-color: #101827" >


<?php


if(!isset($_SESSION)) 
    { 
        session_start(); 
    } 

if(isset($_SESSION["isManager"]) || isset($_SESSION["isWorker"])){

include_once 'navbar2.php';
include_once 'includes/gymdb.inc.php';






?>

        

  
<!-- Modal HTML ERROR + ^^^ -->
<div id="myModal" class="modal fade">
	<div class="modal-dialog modal-confirm">
		<div class="modal-content">
			<div class="modal-header">
				<div class="icon-box">
					<i class="material-icons">&#xE5CD;</i>
				</div>				
				<h4 class="modal-title w-100" style="color:white">Sorry!</h4>	
			</div>
			<div class="modal-body">
				<p class="text-center" style="color:white"> you don't have permission to access this page !.</p>
			</div>
			<div class="modal-footer">
			</div>
		</div>
	</div>
</div>     


   

  </div>


  <script  src="script/workers.js"></script>
<?php }else header("location: 404.php");  ?>

</body>
</html>