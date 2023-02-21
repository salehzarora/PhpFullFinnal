<!DOCTYPE html>
<html style="font-size: 16px;" lang="en"><head>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta charset="utf-8">
    <meta name="keywords" content="">
    <meta name="description" content="">
    <title>navbar</title>
    <link rel="stylesheet" href="css/navbar.css" media="screen">
<link rel="stylesheet" href="PRICING.css" media="screen">
    <script class="u-script" type="text/javascript" src="jq/navbar.js" defer=""></script>
    <script class="u-script" type="text/javascript" src="jq/nicenavbar.js" defer=""></script>
    <meta name="generator" content="Nicepage 4.14.1, nicepage.com">
    <link id="u-theme-google-font" rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto:100,100i,300,300i,400,400i,500,500i,700,700i,900,900i|Open+Sans:300,300i,400,400i,500,500i,600,600i,700,700i,800,800i">
    
    <script type="application/ld+json">{
		"@context": "http://schema.org",
		"@type": "Organization",
		"name": "",
		"logo": "images/GymBox_logo_100-black.webp",
		"sameAs": []
}</script>
    <meta name="theme-color" content="#478ac9">
    <meta property="og:title" content="PRICING">
    <meta property="og:type" content="website">
  </head>
  <body data-home-page="PRICING.html" data-home-page-title="PRICING" class="u-body u-xl-mode" data-lang="en"><header class="u-black u-clearfix u-header u-header" id="sec-2a9f"><div class="u-clearfix u-sheet u-sheet-1">
        <nav class="u-menu u-menu-dropdown u-offcanvas u-menu-1">
          <div class="menu-collapse">
            <a class="u-button-style u-custom-text-active-color u-custom-text-color u-custom-text-hover-color u-nav-link" href="#">
              <svg class="u-svg-link" viewBox="0 0 24 24"><use xmlns:xlink="http://www.w3.org/1999/xlink" xlink:href="#svg-7462"></use></svg>
              <svg class="u-svg-content" version="1.1" id="svg-7462" viewBox="0 0 16 16" x="0px" y="0px" xmlns:xlink="http://www.w3.org/1999/xlink" xmlns="http://www.w3.org/2000/svg"><g><rect y="1" width="16" height="2"></rect><rect y="7" width="16" height="2"></rect><rect y="13" width="16" height="2"></rect>
</g></svg>
            </a>
          </div>       
          <div class="u-custom-menu u-nav-container">
            <ul class="u-nav u-unstyled"><li class="u-nav-item"><a class="u-button-style u-nav-link u-text-active-white u-text-white"  style="padding: 10px 38px;">STAFF___PAGE</a><div class="u-nav-popup"><ul class="u-h-spacing-20 u-nav u-unstyled u-v-spacing-10"><div class="u-nav-popup"><ul class="u-h-spacing-20 u-nav u-unstyled u-v-spacing-10">
</li>
</li></ul>
</div>
</li><div class="u-nav-popup"><ul class="u-h-spacing-20 u-nav u-unstyled u-v-spacing-10">
</li>
</li></ul>
</div>
</li><div class="u-nav-popup"><ul class="u-h-spacing-20 u-nav u-unstyled u-v-spacing-10">
</li>
</li></ul>
</div>
</li></ul>
</div>




</li></ul>
          </div>
          <div class="u-custom-menu u-nav-container-collapse">
            <div class="u-black u-container-style u-inner-container-layout u-opacity u-opacity-95 u-sidenav">
              <div class="u-inner-container-layout u-sidenav-overflow">
                <div class="u-menu-close"></div>


            </div>
            <div class="u-black u-menu-overlay u-opacity u-opacity-70"></div>
          </div>
        </nav>
        <a  class="u-image u-logo u-image-1" href="workers.php" data-image-width="280" data-image-height="280">
          <img src="navbar/images/GymBox_logo_100-black.webp" class="u-logo-image u-logo-image-1">
        </a>
       

                    <?php

        include_once 'includes/gymdb.inc.php';

            $userid=$_SESSION['userid'];

            $sql2 = "SELECT * FROM `users` WHERE `usersId` = $userid ";
            $result2 = mysqli_query($conn , $sql2);
            $resultCheck2 = mysqli_num_rows($result2);


            if($resultCheck2 > 0 )
            {



            while($row2 = mysqli_fetch_assoc($result2))
            { 
                ?>
        
        <a  class="u-image u-logo u-image-2" data-image-width="512" data-image-height="512">
          <img src="<?php echo $row2['img'] ; ?>"  class="u-logo-image u-logo-image-2" style=" vertical-align: middle; width: 100px; height: 100px; border-radius: 50%;" >

                <?php }} ?>
          </a>

          <h6 class="u-text u-text-default u-text-1">
          <?php
            if(isset($_SESSION["useruid"])){
              echo "<li><a href='includes/logout.inc.php'>";
              ?><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-log-out"><path d="M9 21H5a2 2 0 0 1-2-2V5a2 2 0 0 1 2-2h4"></path><polyline points="16 17 21 12 16 7"></polyline><line x1="21" y1="12" x2="9" y2="12"></line></svg>
              log out</a></li>
              <?php
            }
            else{
               echo "<li><a href='login.php'>";
               ?><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-log-in"><path d="M15 3h4a2 2 0 0 1 2 2v14a2 2 0 0 1-2 2h-4"></path><polyline points="10 17 15 12 10 7"></polyline><line x1="15" y1="12" x2="3" y2="12"></line></svg>
           WTF ?</a></li>
           <?php
        } ?>
            
          </h6>
        </a>
      </div></header> 