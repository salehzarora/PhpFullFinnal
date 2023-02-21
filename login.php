<!DOCTYPE html>
<html style="font-size: 16px;" lang="en"><head>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta charset="utf-8">
    <meta name="keywords" content="">
    <meta name="description" content="">
    <title>LOCATIONS</title>
    <link rel="stylesheet" href="css/login.css" media="screen">
<link rel="stylesheet" href="css/login2.css" media="screen">
    <script class="u-script" type="text/javascript" src="jquery.js" defer=""></script>
    <script class="u-script" type="text/javascript" src="nicepage.js" defer=""></script>
    <meta name="generator" content="Nicepage 4.14.1, nicepage.com">
    <link id="u-theme-google-font" rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto:100,100i,300,300i,400,400i,500,500i,700,700i,900,900i|Open+Sans:300,300i,400,400i,500,500i,600,600i,700,700i,800,800i">
    
    
    <script type="application/ld+json">{
		"@context": "http://schema.org",
		"@type": "Organization",
		"name": "",
		"sameAs": []
}</script>
    <meta name="theme-color" content="#478ac9">
    <meta property="og:title" content="LOCATIONS">
    <meta property="og:type" content="website">
  </head>
  <body class="u-body u-xl-mode" data-lang="en">
  <?php
session_start();
include 'navbar.php';
?>

<div style="background-image: url('images/login.jpg');">

    <section class="u-align-center u-clearfix u-image u-shading u-section-1" src="" data-image-width="4920" data-image-height="3280" id="carousel_c00f">
      <div class="u-align-center u-clearfix u-sheet u-valign-top-xs u-sheet-1">
        <div class="u-expanded-width-xs u-form u-form-1">
        <div class="signup">
          <form action="includes/register.inc.php" method="post" style="padding: 2px;">
            
              <label  class="u-label">name</label>
              <input type="text" placeholder="Enter your Name"  name="name" class="u-border-1 u-border-grey-30 u-input u-input-rectangle u-white" required="">
 
            
              <label  class="u-label">username</label>
              <input type="text" placeholder="Enter your userName" name="nid" class="u-border-1 u-border-grey-30 u-input u-input-rectangle u-white" required="">
                      
              <label  class="u-label">Email</label>
              <input type="email" placeholder="Enter a valid email address"  name="email" class="u-border-1 u-border-grey-30 u-input u-input-rectangle u-white" required="">
        
              <label  class="u-label">Password</label>
              <input type="password" placeholder="Enter your Password"  name="pwd" class="u-border-1 u-border-grey-30 u-input u-input-rectangle u-white" required="">
                   
              <button type="submit" name="submit" class="u-black u-btn u-btn-submit u-button-style u-btn-2">Sign up</button>
              </button>
          </form>
</div>
        </div>
        



        <br>        <br> <br>
      
        <h3 class="u-text u-text-default u-text-1">Register</h3>
        <h3 class="u-text u-text-default u-text-2">Login</h3>
        <div class="u-form u-form-2">
          <form action="includes/login.inc.php" method="post"  source="custom" name="form" style="padding: 10px;">
            <div class="u-form-group u-form-name">
              <label for="name-8233" class="u-label">username</label>
              <input type="username" placeholder="username/Email"  name="uid" class="u-border-1 u-border-grey-30 u-input u-input-rectangle u-white" required="">
            </div>
            <div class="u-form-email u-form-group">
              <label for="email-8233" class="u-label">password</label>
              <input type="password" placeholder="password" name="pwd" class="u-border-1 u-border-grey-30 u-input u-input-rectangle u-white" required="">
            </div>
            <div class="u-align-left u-form-group u-form-submit">
              <button class="u-black u-btn u-btn-submit u-button-style u-btn-2" name="submit">login</button>
              <p style="font-size:80%;"><input type="checkbox" name="check" >Remember me </p>

              <input type="submit" value="submit" class="u-form-control-hidden">
            </div>
          </form>
        </div>
        <h4 class="u-text u-text-default u-text-3">or</h4>
      </div>
    </section>
    
    
    </div> </div> </div>
  <?php
  include 'footer.php';
  ?>
  



 
</body></html>