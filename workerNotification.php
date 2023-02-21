<!DOCTYPE html>
<html lang="en">
<head>
<link rel="stylesheet" href="css/workers.css">
<link rel="stylesheet" href="css/workerNotification.css">


    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/refreshbutton.css">

    <title>workerNotification</title>
</head>
<body>
    <?php
    $a=5;
    include 'workerSideBar.php'; ?>




<section class="dark">


<?php
$sql = "SELECT * FROM `workernotification` WHERE 1;";
$result = mysqli_query($conn , $sql);
$resultCheck = mysqli_num_rows($result);

if($resultCheck > 0 )
{

    while($row = mysqli_fetch_assoc($result))
    { 
        
                    
                    $sql2 = "SELECT * FROM `product` WHERE `id` = $row[ProductId];";
            $result2 = mysqli_query($conn , $sql2);
            $resultCheck2 = mysqli_num_rows($result2);
            if($resultCheck2 > 0 )
            {
                while($row2 = mysqli_fetch_assoc($result2))
                { 
                    
        
        ?>

	<div class="container py-4">
    <br><br>
		<article class="postcard dark blue">
				<img class="postcard__img" src="<?php echo $row2['img'] ?>" alt="Image Title" />
			<div class="postcard__text">
				<h1 class="postcard__title blue"><a ><?php echo $row['title'] ?></a></h1>
				<div class="postcard__subtitle small">
						<i class="fas fa-calendar-alt mr-2"></i>only <?php echo $row2['amount'] ?> left
				</div>
				<div class="postcard__bar"></div>
				<pre style="color:white"><div class="postcard__preview-txt"> product: <?php echo $row2['name'] ?><?php echo $row['massage'] ?>                                           </div></pre>
				<ul class="postcard__tagbox">
					<li class="tag__item play blue">
						<i class="fas fa-play mr-2"></i><?php echo $row2['category'] ?>
					</li>
				</ul>
			</div>
		</article>
		
	</div>
    
    <?php } } }} ?>
</section>



<form id="contact-form" role="form" action="includes/workernotification.inc.php" method="post">

<div class="buttons">
		<button class="btn-green" name="submit">
			<img class="icon" src="https://htmlacademy.ru/assets/icons/reload-6x-white.png"> Refresh </button>
            
		</div>
</form>

</body>
</html>