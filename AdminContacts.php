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
    $a=8;
    include 'workerSideBar.php'; ?>




<section class="dark">


<?php
$sql = "SELECT * FROM `contacts` WHERE 1 ORDER BY `id`  DESC;";
$result = mysqli_query($conn , $sql);
$resultCheck = mysqli_num_rows($result);

if($resultCheck > 0 )
{

    while($row = mysqli_fetch_assoc($result))
    { 
        
                    
                    $sql2 = "SELECT * FROM `users` WHERE `usersId` = $row[userid];";
            $result2 = mysqli_query($conn , $sql2);
            $resultCheck2 = mysqli_num_rows($result2);
            if($resultCheck2 > 0 )
            {
                while($row2 = mysqli_fetch_assoc($result2))
                {  $id=$row['id'];
                    
        
        ?>

	<div class="container py-4" >
    <br><br>
		<article class="postcard dark blue">
				<img class="postcard__img" src="<?php echo $row2['img'] ?>" alt="Image Title" />
			<div class="postcard__text">
				<h1 class="postcard__title blue"><a ><?php echo $row['name'] ?> <h5> <?php echo $row['userid']; ?> </h5></a></h1>
				<div class="postcard__subtitle small">
						<i class="fas fa-calendar-alt mr-2"></i> <?php echo $row['email'] ?> 
				</div>
				<div class="postcard__bar"></div>
				<pre style="color:white"><div class="postcard__preview-txt"> <?php echo $row['message'] ?>                                           </div></pre>
				<ul class="postcard__tagbox">
					<li class="tag__item play blue">
						<i class="fas fa-play mr-2"></i><?php echo $row['phone'] ?>
					</li>
				</ul>
				<li class="tag__item play blue">
						<i ></i><?php echo $row['Date'] ; echo " | ";echo $row['Time']; ?>
					</li>

					<form id="contact-form" role="form" action="includes/Contacts.inc.php" method="post">
					<input  type="hidden" name="id" value="<?php echo $row['id'];?>">
				
					<div class="buttons">
		<button class="btn-red" name="delete" type="submit"style="width:150px">
		<svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-trash3" viewBox="0 0 16 16">
  		<path d="M6.5 1h3a.5.5 0 0 1 .5.5v1H6v-1a.5.5 0 0 1 .5-.5ZM11 2.5v-1A1.5 1.5 0 0 0 9.5 0h-3A1.5 1.5 0 0 0 5 1.5v1H2.506a.58.58 0 0 0-.01 0H1.5a.5.5 0 0 0 0 1h.538l.853 10.66A2 2 0 0 0 4.885 16h6.23a2 2 0 0 0 1.994-1.84l.853-10.66h.538a.5.5 0 0 0 0-1h-.995a.59.59 0 0 0-.01 0H11Zm1.958 1-.846 10.58a1 1 0 0 1-.997.92h-6.23a1 1 0 0 1-.997-.92L3.042 3.5h9.916Zm-7.487 1a.5.5 0 0 1 .528.47l.5 8.5a.5.5 0 0 1-.998.06L5 5.03a.5.5 0 0 1 .47-.53Zm5.058 0a.5.5 0 0 1 .47.53l-.5 8.5a.5.5 0 1 1-.998-.06l.5-8.5a.5.5 0 0 1 .528-.47ZM8 4.5a.5.5 0 0 1 .5.5v8.5a.5.5 0 0 1-1 0V5a.5.5 0 0 1 .5-.5Z"/>
 		Delete </svg></button>


			</div>

		 </form>
		 
		</div>
		
		</article>
		
	</div>
    
    <?php } } }} ?>
</section>




</body>
</html>