
<!DOCTYPE html>
<html style="font-size: 16px;" lang="en"><head>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta charset="utf-8">
    <meta name="keywords" content="Sport Club, About Gym, Our sports club is open!, Come workout with us, Membership Benefits, Contact Us">
    <meta name="description" content="">
    <title>Home</title>


    <link rel="stylesheet" href="css/home1.css" media="screen">
<link rel="stylesheet" href="css/home1.css" media="screen">
<link rel="stylesheet" href="nicepage.css" media="screen">
<link rel="stylesheet" href="Home.css" media="screen">
<link rel="stylesheet" href="css/homeproduct.css" media="screen">

    <script class="u-script" type="text/javascript" src="jquery.js" "="" defer=""></script>
    <script class="u-script" type="text/javascript" src="nicepage.js" "="" defer=""></script>
    <link id="u-theme-google-font" rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto+Slab:100,200,300,400,500,600,700,800,900|Open+Sans:300,300i,400,400i,500,500i,600,600i,700,700i,800,800i">
    <link id="u-page-google-font" rel="stylesheet" href="https://fonts.googleapis.com/css?family=Archivo+Black:400">
    
    <script src="https://code.jquery.com/jquery-1.10.2.min.js"></script>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@4.4.1/dist/css/bootstrap.min.css" rel="stylesheet">
	<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.4.1/dist/js/bootstrap.bundle.min.js"></script>





    <script type="application/ld+json">{
		"@context": "http://schema.org",
		"@type": "Organization",
		"name": "",
		"logo": "images/default-logo.png"
}</script>
    <meta name="theme-color" content="#a070d5">
    <meta property="og:title" content="Home">
    <meta property="og:type" content="website">

    <title>Home</title>
</head>
<body>

<?php


    // To refresh page to get the notifications by getten sessions of Cartid
if (!isset($_GET['reload'])) {
  echo '<meta http-equiv=Refresh content="0;url=home.php?reload=0">';
}



session_start();
if(!isset($_SESSION["isWorker"])){





include 'navbar.php';
require_once 'includes/gymdb.inc.php';
require_once 'includes/functions.inc.php';


?>


      
          <div class="u-nav-container-collapse">
            <div class="u-black u-container-style u-inner-container-layout u-opacity u-opacity-95 u-sidenav">
              <div class="u-inner-container-layout u-sidenav-overflow">
                <div class="u-menu-close"></div>
                <ul class="u-align-center u-nav u-popupmenu-items u-unstyled u-nav-2"><li class="u-nav-item"><a class="u-button-style u-nav-link" href="Home.html" style="padding: 10px 20px;">Home</a>
</li><li class="u-nav-item"><a class="u-button-style u-nav-link" href="About.html" style="padding: 10px 20px;">About</a>
</li><li class="u-nav-item"><a class="u-button-style u-nav-link" href="Contact.html" style="padding: 10px 20px;">Contact</a>
</li></ul>
              </div>
            </div>
            <div class="u-black u-menu-overlay u-opacity u-opacity-70"></div>
          </div>
        </nav>
      </div></header> 
    <section class="u-clearfix u-section-1" id="carousel_bebf">
      <div class="u-clearfix u-expanded-width u-layout-wrap u-layout-wrap-1">
        <div class="u-layout">
          <div class="u-layout-row">
            <div class="u-container-style u-layout-cell u-palette-3-dark-3 u-size-30 u-layout-cell-1">
              <div class="u-container-layout u-valign-top u-container-layout-1">
                 
<?php
 if (isset($_SESSION["userid"]))
{
  echo "<h1> Welcom Back Mr.".$_SESSION["usersName"]."</h1>" ; 
}
?>

                <p class="u-custom-font u-heading-font u-text u-text-1">We are committed to helping you exceed your fitness goals. With our indoor pool, basketball courts, group exercise classes and state-of-the-art fitness floor, you will find exactly what you are looking for.</p>
                <p class="u-custom-font u-heading-font u-text u-text-2">Image from <a href="https://www.freepik.com/photos/sport" class="u-active-none u-border-1 u-border-white u-btn u-button-link u-button-style u-hover-none u-none u-text-body-alt-color u-btn-1">Freepik</a>
                </p>
                <a href="https://nicepage.one" class="u-active-white u-border-2 u-border-active-white u-border-hover-white u-border-white u-btn u-button-style u-hover-white u-none u-text-active-white u-text-body-alt-color u-text-hover-white u-btn-2">join now</a>
              </div>
            </div>
            <div class="u-container-style u-image u-layout-cell u-size-30 u-image-1" data-image-width="1200" data-image-height="1077">
              <div class="u-container-layout u-valign-bottom-lg u-valign-bottom-xl u-container-layout-2">
                <h1 class="u-custom-font u-text u-text-body-alt-color u-text-3">GYM BOX</h1>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>



        
  
                              
  
  
                          <!----------- TO join ------->





    <section class="u-align-center u-clearfix u-palette-3-light-2 u-section-2" id="carousel_9475">
      <div class="u-clearfix u-sheet u-sheet-1">
        <h1 class="u-text u-text-1">Subscription plans</h1>
        <h5 class="u-text u-text-2">New York Health &amp; Racquet Club</h5>
        <div class="u-border-3 u-border-palette-2-base u-line u-line-horizontal u-line-1"></div>
        <p class="u-text u-text-3">We’ve transformed every aspect of our membership to encompass integrated digital and in-club offerings to keep you at your best—all the time, any time.
          <br>
        </p>

        

     


  


<script type="text/javascript">

</script>
        <div class="u-expanded-width u-palette-2-base u-shape u-shape-rectangle u-shape-1"></div>
        
        <div class="u-clearfix u-gutter-30 u-layout-wrap u-layout-wrap-1">
          





        <div class="main-body">
<div class="container">

    <br><br>
      <div class="row gutters-sm">
        <div class="col-sm-6 col-xl-3 mb-3">
          <div class="card">
            <div class="card-header border-bottom flex-column align-items-start p-3">
              <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-box text-secondary h3 stroke-width-1 mb-2"><path d="M21 16V8a2 2 0 0 0-1-1.73l-7-4a2 2 0 0 0-2 0l-7 4A2 2 0 0 0 3 8v8a2 2 0 0 0 1 1.73l7 4a2 2 0 0 0 2 0l7-4A2 2 0 0 0 21 16z"></path><polyline points="3.27 6.96 12 12.01 20.73 6.96"></polyline><line x1="12" y1="22.08" x2="12" y2="12"></line></svg>
              <h4 class="text-secondary font-weight-light mb-2">Beginner</h4>
              <p class="font-size-sm mb-0">Perfect for Beginners.</p>
            </div>
            <div class="card-header border-bottom justify-content-center py-4">
              <h1 class="pricing-price">
                <small class="align-self-start">$</small>
                40
                <small class="align-self-end">/month</small>
              </h1>
            </div>
            <div class="card-body">
              <ul class="list-unstyled font-size-sm mb-0">
                <li><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-check text-success mr-2"><polyline points="20 6 9 17 4 12"></polyline></svg><strong>Unlimited</strong><span class="text-secondary ml-1"> access to yoga classes</span></li>
                <li><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-check text-success mr-2"><polyline points="20 6 9 17 4 12"></polyline></svg><strong>24/7</strong><span class="text-secondary ml-1"> Gym access</span></li>
                <li><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-check text-success mr-2"><polyline points="20 6 9 17 4 12"></polyline></svg><strong>Use</strong><span class="text-secondary ml-1">  locker & showers</span></li>
                <li><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-x text-danger mr-2"><line x1="18" y1="6" x2="6" y2="18"></line><line x1="6" y1="6" x2="18" y2="18"></line></svg><strong></strong><span class="text-secondary ml-1">Weekday pool access</span></li>
                <li><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-x text-danger mr-2"><line x1="18" y1="6" x2="6" y2="18"></line><line x1="6" y1="6" x2="18" y2="18"></line></svg><strong></strong><span class="text-secondary ml-1">12% off on all store products</span></li>
                <br>
              </ul>
            </div>
            <div class="card-footer justify-content-center p-3">
            <form id="contact-form" role="form" action="pricingbeginner.php" method="post">

              <button class="btn btn-outline-secondary"  type="submit" >
                SUBSCRIBE PLAN</button>
</form>
            </div>
          </div>
        </div>
        <div class="col-sm-6 col-xl-3 mb-3">
          <div class="card border border-success">
            <div class="card-header border-bottom flex-column align-items-start p-3">
              <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-package text-success h3 stroke-width-1 mb-2"><line x1="16.5" y1="9.4" x2="7.5" y2="4.21"></line><path d="M21 16V8a2 2 0 0 0-1-1.73l-7-4a2 2 0 0 0-2 0l-7 4A2 2 0 0 0 3 8v8a2 2 0 0 0 1 1.73l7 4a2 2 0 0 0 2 0l7-4A2 2 0 0 0 21 16z"></path><polyline points="3.27 6.96 12 12.01 20.73 6.96"></polyline><line x1="12" y1="22.08" x2="12" y2="12"></line></svg>
              <h4 class="text-success font-weight-light mb-2">Pro</h4>
              <p class="font-size-sm mb-0">Great for thos who take wellness seriously.</p>
            </div>
            <div class="card-header border-bottom justify-content-center py-4">
              <h1 class="pricing-price">
                <small class="align-self-start">$</small>
            80
                <small class="align-self-end">/month</small>
              </h1>
            </div>
            <div class="card-body">
              <ul class="list-unstyled font-size-sm mb-0">
              <li><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-check text-success mr-2"><polyline points="20 6 9 17 4 12"></polyline></svg><strong>Unlimited</strong><span class="text-secondary ml-1"> access to yoga classes</span></li>
                <li><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-check text-success mr-2"><polyline points="20 6 9 17 4 12"></polyline></svg><strong>24/7</strong><span class="text-secondary ml-1"> Gym access</span></li>
                <li><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-check text-success mr-2"><polyline points="20 6 9 17 4 12"></polyline></svg><strong>Use</strong><span class="text-secondary ml-1">  locker & showers</span></li>
                <li><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-check text-success mr-2"><polyline points="20 6 9 17 4 12"></polyline></svg><strong>Weekday</strong><span class="text-secondary ml-1">pool access</span></li>
                <li><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-x text-danger mr-2"><line x1="18" y1="6" x2="6" y2="18"></line><line x1="6" y1="6" x2="18" y2="18"></line></svg><strong></strong><span class="text-secondary ml-1">12% off on all store products</span></li>

              </ul>
            </div>
            <form id="contact-form" role="form" action="pricingpro.php" method="post">

            <div class="card-footer justify-content-center p-3">
              <button class="btn btn-outline-success">SUBSCRIBE PLAN</button>
</form>
            </div>
          </div>
        </div>
        <div class="col-sm-6 col-xl-3 mb-3">
          <div class="card">
            <div class="card-header border-bottom flex-column align-items-start p-3">
              <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-layers text-primary h3 stroke-width-1 mb-2"><polygon points="12 2 2 7 12 12 22 7 12 2"></polygon><polyline points="2 17 12 22 22 17"></polyline><polyline points="2 12 12 17 22 12"></polyline></svg>
              <h4 class="text-primary font-weight-light mb-2">VIP</h4>
              <p class="font-size-sm mb-0">Tas sit asper natur aut odit aut nemo enim ipsam volup.</p>
            </div>
            <div class="card-header border-bottom justify-content-center py-4">
              <h1 class="pricing-price">
                <small class="align-self-start">$</small>
                120
                <small class="align-self-end">/month</small>
              </h1>
            </div>
            <div class="card-body">
              <ul class="list-unstyled font-size-sm mb-0">
              <li><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-check text-success mr-2"><polyline points="20 6 9 17 4 12"></polyline></svg><strong>Unlimited</strong><span class="text-secondary ml-1"> access to yoga classes</span></li>
                <li><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-check text-success mr-2"><polyline points="20 6 9 17 4 12"></polyline></svg><strong>24/7</strong><span class="text-secondary ml-1"> Gym access</span></li>
                <li><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-check text-success mr-2"><polyline points="20 6 9 17 4 12"></polyline></svg><strong>Use</strong><span class="text-secondary ml-1">  locker & showers</span></li>
                <li><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-check text-success mr-2"><polyline points="20 6 9 17 4 12"></polyline></svg><strong>Weekday</strong><span class="text-secondary ml-1">pool access</span></li>
                <li><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-check text-success mr-2"><polyline points="20 6 9 17 4 12"></polyline></svg><strong>12%</strong><span class="text-secondary ml-1">off on all store products</span></li>
              </ul>
            </div>
            <form id="contact-form" role="form" action="pricingvip.php" method="post">

            <div class="card-footer justify-content-center p-3">
              <button class="btn btn-outline-primary">SUBSCRIBE PLAN</button>
</form>
            </div>
          </div>
        </div>    
      </div>

    </div>
</div>






          </div>
        </div>
      </div>
    </section>












    
    <section class="u-align-center u-clearfix u-image u-section-3" id="carousel_7eb9" data-image-width="1980" data-image-height="1076">
      <div class="u-clearfix u-sheet u-sheet-1">
        <div class="u-expanded-width u-list u-list-1">
          <div class="u-repeater u-repeater-1">




<div class="u-align-left u-container-style u-list-item u-palette-2-base u-repeater-item u-list-item-1">
              <div class="u-container-layout u-similar-container u-container-layout-1"><span class="u-icon u-icon-circle u-text-palette-2-base u-white u-icon-1"><svg class="u-svg-link" preserveAspectRatio="xMidYMin slice" viewBox="0 0 512 512" style=""><use xmlns:xlink="http://www.w3.org/1999/xlink" xlink:href="#svg-16fa"></use></svg><svg class="u-svg-content" viewBox="0 0 512 512" x="0px" y="0px" id="svg-16fa" style="enable-background:new 0 0 512 512;"><g><g><path d="M469.717,129.996h-9.91c-4.002,0-7.871,0.571-11.542,1.615c-3.741-19.515-20.93-34.309-41.519-34.309h-9.909    c-23.315,0-42.284,18.969-42.284,42.283v68.248H157.446v-76.607c0-23.315-18.969-42.283-42.283-42.283h-9.909    c-20.589,0-37.778,14.794-41.518,34.309c-3.672-1.044-7.541-1.615-11.543-1.615h-9.909C18.969,121.637,0,140.604,0,163.92V339.72    c0,23.315,18.969,42.283,42.283,42.283h9.909c4.002,0,7.871-0.571,11.543-1.615c3.741,19.515,20.93,34.309,41.518,34.309h9.909    c23.315,0,42.283-18.969,42.283-42.283v-61.402h197.107v69.762c0,23.315,18.969,42.283,42.284,42.283h9.909    c20.589,0,37.779-14.795,41.519-34.309c3.671,1.044,7.541,1.615,11.542,1.615h9.91c23.314,0,42.283-18.969,42.283-42.283V172.279    C512,148.964,493.031,129.996,469.717,129.996z M62.971,339.72c0,5.944-4.835,10.78-10.779,10.78h-9.909    c-5.944,0-10.779-4.836-10.779-10.78V163.92c0-5.944,4.835-10.779,10.779-10.779h9.909c5.944,0,10.779,4.835,10.779,10.779V339.72    z M125.942,372.415c0,5.944-4.835,10.779-10.779,10.779h-9.909c-5.944,0-10.779-4.835-10.779-10.779V131.224    c0-5.944,4.836-10.779,10.779-10.779h9.909c5.944,0,10.779,4.835,10.779,10.779V372.415z M354.554,279.509H157.446v-40.173    h197.107V279.509z M417.525,380.775c0,5.944-4.835,10.779-10.78,10.779h-9.909c-5.944,0-10.78-4.835-10.78-10.779V139.584    c0-5.944,4.835-10.779,10.78-10.779h9.909c5.944,0,10.78,4.835,10.78,10.779V380.775z M480.496,348.079    c0,5.944-4.835,10.779-10.779,10.779h-9.91c-5.943,0-10.779-4.835-10.779-10.779V172.279c0-5.944,4.835-10.779,10.779-10.779h9.91    c5.943,0,10.779,4.835,10.779,10.779V348.079z"></path>
</g>
</g></svg></span>
                <h5 class="u-text u-text-1">About Gym</h5>
                <p class="u-text u-text-2">Sample text. Click to select the text box. Click again or double click to start editing the text.</p>
              </div>
            </div>



            <div class="u-align-left u-container-style u-list-item u-palette-2-base u-repeater-item u-list-item-2">
              <div class="u-container-layout u-similar-container u-container-layout-2"><span class="u-icon u-icon-circle u-text-palette-2-base u-white u-icon-2"><svg class="u-svg-link" preserveAspectRatio="xMidYMin slice" viewBox="0 0 512 512" style=""><use xmlns:xlink="http://www.w3.org/1999/xlink" xlink:href="#svg-580d"></use></svg><svg class="u-svg-content" viewBox="0 0 512 512" x="0px" y="0px" id="svg-580d" style="enable-background:new 0 0 512 512;"><g><g><g><path d="M387.568,97.168l12.912-27.552C410.669,47.82,415.966,24.06,416,0h-32c-0.03,19.353-4.289,38.466-12.48,56l-13.44,28.656     l-0.848,2.208c-11.903,39.662-10.9,82.08,2.864,121.136H151.904c13.76-39.051,14.763-81.463,2.864-121.12L140.48,56     C132.289,38.466,128.03,19.353,128,0H96c0.034,24.06,5.331,47.82,15.52,69.616l12.912,27.552     c11.72,39.814,7.877,82.593-10.752,119.68C83.582,283.107,66.706,354.604,64,427.328V512h32v-84.672     c0.846-32.501,5.137-64.82,12.8-96.416l99.2,61.952V512h32V400h32v112h32V392.864l99.2-61.952     c7.663,31.596,11.954,63.915,12.8,96.416V512h32v-84.672c-2.681-72.719-19.529-144.216-49.6-210.48     C379.744,179.771,375.872,136.992,387.568,97.168z M283.424,368h-54.848l-111.328-69.584c5.58-19.938,12.557-39.458,20.88-58.416     h235.744c8.296,18.96,15.246,38.48,20.8,58.416L283.424,368z"></path><rect x="240" y="144" width="32" height="32"></rect><polygon points="53.888,160 104,160 104,128 53.888,128 69.312,104.88 42.688,87.12 4.768,144 42.688,200.88 69.312,183.12         "></polygon><polygon points="469.312,87.12 442.688,104.88 458.112,128 408,128 408,160 458.112,160 442.688,183.12 469.312,200.88      507.232,144    "></polygon>
</g>
</g>
</g></svg></span>
                <h5 class="u-text u-text-3">Lose fat</h5>
                <p class="u-text u-text-4">Sample text. Click to select the text box. Click again or double click to start editing the text.</p>
              </div>
            </div>
            <div class="u-align-left u-container-style u-list-item u-palette-2-base u-repeater-item u-list-item-3">
              <div class="u-container-layout u-similar-container u-container-layout-3"><span class="u-icon u-icon-circle u-text-palette-2-base u-white u-icon-3"><svg class="u-svg-link" preserveAspectRatio="xMidYMin slice" viewBox="0 0 508.16 508.16" style=""><use xmlns:xlink="http://www.w3.org/1999/xlink" xlink:href="#svg-c8c3"></use></svg><svg class="u-svg-content" viewBox="0 0 508.16 508.16" id="svg-c8c3"><g><path d="m434.393 318.198-42.427 42.426-21.213-21.213 19.393-19.394c17.546-17.546 17.546-46.094 0-63.64-8.143-8.144-18.657-12.501-29.341-13.085-1.244-22.751-19.362-41.208-42.429-42.451-.589-10.675-4.946-21.18-13.082-29.316h-.001c-8.143-8.145-18.657-12.502-29.341-13.086-.584-10.684-4.942-21.197-13.086-29.341-17.545-17.545-46.095-17.545-63.639 0l-19.394 19.394-42.426-42.427 42.426-42.426-63.639-63.639-106.066 106.065 63.64 63.64 42.427-42.427 42.426 42.427-21.214 21.213c-11.721-11.722-30.702-11.727-42.426.001l-31.82 31.819c-31.753 31.754-28.338 77.273-26.298 104.471.167 2.234.325 4.33.447 6.232l-26.227 26.227 148.493 148.492 37.162-37.161c21.533-.605 47.308-4.882 67.949-25.522l84.854-84.853 21.213 21.213-42.427 42.427 63.64 63.64 106.066-106.066zm-360.625-190.919-21.213-21.214 63.64-63.64 21.213 21.214zm231.526 107.885c5.863-5.863 15.35-5.862 21.213 0 5.849 5.849 5.849 15.365 0 21.214l-61.821 61.819c-5.863 5.862-15.349 5.862-21.212 0h-.001c-5.862-5.861-5.862-15.35 0-21.213zm-21.214-42.426c5.848 5.849 5.848 15.364 0 21.213l-61.821 61.82c-5.17 5.17-13.011 5.689-18.699 2.028.308-7.077-1.06-14.537-4.338-21.418l63.644-63.644c5.849-5.846 15.366-5.846 21.214.001zm-63.639-42.427c5.849-5.849 15.365-5.847 21.213 0 5.849 5.849 5.849 15.365 0 21.214l-61.82 61.819c-1.867-1.867-15.91-15.909-21.213-21.213zm23.033 273.953c-11.79 11.789-27.65 16.819-53.033 16.819h-6.213l-24.651 24.651-106.067-106.066 14.044-14.043v-6.214c0-21.018-10.271-68.368 16.82-95.46l31.819-31.819 53.036 53.034c5.725 5.731 5.936 15.274-.002 21.212-5.849 5.848-15.365 5.848-21.214 0l-31.819-31.819-21.213 21.213 31.819 31.819c18.092 18.095 48.008 17.572 65.374-1.841 5.269 2.534 11.015 4.018 16.979 4.342 1.246 22.873 19.55 41.193 42.45 42.428.914 16.557 10.769 31.076 25.514 38.1zm63.639-63.64c-5.848 5.848-15.364 5.849-21.213 0s-5.849-15.365 0-21.214l61.82-61.819c5.849-5.848 15.364-5.848 21.213 0 5.849 5.849 5.849 15.365 0 21.214zm63.64 63.64 63.64-63.64 21.213 21.213-63.64 63.641z"></path>
</g></svg></span>
                <h5 class="u-text u-text-5">training</h5>
                <p class="u-text u-text-6">Sample text. Click to select the text box. Click again or double click to start editing the text.</p>
              </div>
            </div>
            <div class="u-align-left u-container-style u-list-item u-palette-2-base u-repeater-item u-list-item-4">
              <div class="u-container-layout u-similar-container u-container-layout-4"><span class="u-icon u-icon-circle u-text-palette-2-base u-white u-icon-4"><svg class="u-svg-link" preserveAspectRatio="xMidYMin slice" viewBox="0 0 510 510" style=""><use xmlns:xlink="http://www.w3.org/1999/xlink" xlink:href="#svg-f760"></use></svg><svg class="u-svg-content" viewBox="0 0 510 510" id="svg-f760"><g><path d="m405.78 190.426 19.938-46.996c29.847-70.354-22.686-143.43-96.662-143.43h-148.107c-35.323 0-68.053 17.584-87.552 47.038-19.5 29.454-22.905 66.452-9.109 98.97l19.887 44.77c-83.904 76.094-95.083 195.671-41.359 283.7 13.372 21.91 37.809 35.522 63.772 35.522h256.822c26.023 0 50.544-13.746 63.991-35.872 21.328-35.088 32.602-75.444 32.602-116.707 0-62.344-25.397-122.81-74.223-166.995zm-293.921-56.245c-9.948-23.544-7.562-49.263 6.553-70.583 14.136-21.352 36.93-33.598 62.537-33.598h148.107c53.352 0 90.169 51.917 69.044 101.713l-16.743 39.467c-8.068-5.496-16.462-10.427-25.123-14.797 1.739-3.918-5.91 13.314 15.06-33.92 5.865-13.929 4.376-29.762-3.984-42.354-8.361-12.591-22.376-20.109-37.49-20.109h-149.635c-15.114 0-29.129 7.518-37.489 20.109s-9.85 28.424-3.984 42.354l15.118 34.054c-8.739 4.434-17.217 9.442-25.371 15.033zm69.579 10.592-15.124-34.063c-1.93-4.682-1.432-9.781 1.374-14.007 2.829-4.26 7.384-6.703 12.497-6.703h149.635c10.714 0 17.938 10.84 13.872 20.709l-15.091 33.983c-22.274-7.687-45.856-11.868-70.056-12.242-26.619-.418-52.626 3.819-77.107 12.323zm240.327 313.774c-8.042 13.233-22.739 21.453-38.355 21.453h-256.822c-15.578 0-30.202-8.105-38.165-21.151-45.298-74.223-37.45-174.634 30.68-240.962 37.48-36.487 86.779-56.237 138.981-55.441 105.825 1.636 191.92 89.102 191.92 194.976-.001 35.765-9.765 70.733-28.239 101.125z"></path><path d="m255.003 192.421c-74.439 0-135 60.561-135 135s60.561 135 135 135 135-60.561 135-135-60.561-135-135-135zm0 240c-57.898 0-105-47.103-105-105s47.102-105 105-105 105 47.103 105 105-47.103 105-105 105z"></path><path d="m255.003 252.421c-24.814 0-45 20.187-45 45.001 0 11.517 4.354 22.032 11.495 30-7.142 7.967-11.495 18.483-11.495 30 0 24.813 20.186 44.999 45 44.999s45-20.187 45-45c0-11.517-4.354-22.032-11.495-30 7.142-7.968 11.495-18.483 11.495-30 0-24.813-20.187-45-45-45zm0 30c8.271 0 15 6.729 15 15.001 0 8.271-6.729 14.999-15 14.999s-15-6.729-15-15 6.728-15 15-15zm0 90c-8.271 0-15-6.729-15-15s6.729-15 15-15 15 6.729 15 15.001c0 8.27-6.729 14.999-15 14.999z"></path>
</g></svg></span>
                <h5 class="u-text u-text-7">Our team</h5>
                <p class="u-text u-text-8">Sample text. Click to select the text box. Click again or double click to start editing the text.</p>
              </div>
            </div>
          </div>
        </div>
      </div>










    </section>
    <section class="u-clearfix u-section-4" id="carousel_384f">
      <div class="u-clearfix u-expanded-width u-layout-wrap u-layout-wrap-1">
        <div class="u-layout">
          <div class="u-layout-row">
            <div class="u-align-center u-container-style u-layout-cell u-left-cell u-palette-3-light-2 u-size-30 u-layout-cell-1">
              <div class="u-container-layout u-valign-middle u-container-layout-1">
                <img src="images/fdgg-min.jpg" alt="" class="u-image u-image-default u-image-1" data-image-width="800" data-image-height="951">
              </div>
            </div>
            <div class="u-align-left u-container-style u-layout-cell u-right-cell u-size-30 u-layout-cell-2">
              <div class="u-container-layout u-valign-middle u-container-layout-2">
                <h5 class="u-text u-text-1">Increase motivation</h5>
                <p class="u-text u-text-2">Contact or visit us at one of our health and wellness facilities to make the best move of your life. Discover the perks of membership as you get fit, stay fit and focus on your health and wellness.</p>
                <img src="images/bvn.jpg" alt="" class="u-image u-image-default u-image-2" data-image-width="700" data-image-height="875">
                <p class="u-text u-text-3">Images from <a href="https://www.freepik.com/photos/people" class="u-active-none u-border-1 u-border-active-palette-2-base u-border-black u-border-hover-palette-2-base u-btn u-button-link u-button-style u-hover-none u-none u-text-body-color u-btn-1">Freepik</a>
                </p>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
    <section class="u-align-center u-clearfix u-palette-2-base u-section-5" id="sec-72d3">
      <div class="u-clearfix u-sheet u-valign-middle u-sheet-1">
        <h1 class="u-text u-text-1">Our sports club is open!</h1>
        <p class="u-large-text u-text u-text-font u-text-variant u-text-2">Join today by paying our $39 processing and $49 initiation fees and get the rest of the year FREE! </p>
        <a href="https://nicepage.com/c/team-html-templates" class="u-btn u-button-style u-text-palette-2-base u-white u-btn-1">join now</a>
      </div>
    </section>
    <section class="u-align-center u-black u-clearfix u-section-6" id="sec-2df4">
      <div class="u-clearfix u-sheet u-valign-middle u-sheet-1">
        <div class="u-clearfix u-gutter-40 u-layout-wrap u-layout-wrap-1">
          <div class="u-gutter-0 u-layout">
            <div class="u-layout-row">
              <div class="u-size-30">
                <div class="u-layout-col">
                  <div class="u-container-style u-layout-cell u-size-60 u-layout-cell-1">
                    <div class="u-container-layout">
                      <img class="u-expanded-height u-image u-image-1" src="images/erttt.jpg" data-image-width="700" data-image-height="700">
                      <div class="u-align-right u-container-style u-group u-white u-group-1">
                        <div class="u-container-layout u-valign-middle u-container-layout-2">
                          <h2 class="u-text u-text-1"> Come workout with us</h2>
                          <div class="u-border-2 u-border-black u-line u-line-horizontal u-line-1"></div>
                          <a href="https://nicepage.com/website-templates" class="u-active-palette-2-base u-border-2 u-border-active-palette-2-base u-border-hover-white u-border-palette-2-base u-btn u-button-style u-hover-palette-2-base u-none u-text-active-white u-text-body-color u-text-hover-white u-btn-1">join now</a>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
              <div class="u-size-30">
                <div class="u-layout-col">
                  <div class="u-container-style u-layout-cell u-size-30 u-layout-cell-2">
                    <div class="u-container-layout u-valign-middle-md u-valign-middle-sm u-valign-middle-xs">
                      <div class="u-expanded-width-lg u-expanded-width-md u-expanded-width-sm u-expanded-width-xs u-palette-2-base u-shape u-shape-rectangle u-shape-1"></div>
                      <img class="u-expanded-height u-image u-image-2" src="images/gff.jpg">
                    </div>
                  </div>
                  <div class="u-container-style u-layout-cell u-size-30 u-layout-cell-3">
                    <div class="u-container-layout u-valign-top u-container-layout-4">
                      <h3 class="u-text u-text-2">Men's Workout</h3>
                      <p class="u-text u-text-3">Sample text. Click to select the text box. Click again or double click to start editing the text.</p>
                      <p class="u-text u-text-4">Images from <a href="https://www.freepik.com/photos/people" class="u-active-none u-border-1 u-border-active-palette-2-base u-border-hover-palette-2-base u-border-white u-btn u-button-link u-button-style u-hover-none u-none u-text-body-alt-color u-btn-2">Freepik</a>
                      </p>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
    <section class="u-clearfix u-section-7" id="carousel_18dd">
      <div class="u-clearfix u-sheet u-sheet-1">
        <div class="u-clearfix u-expanded-width u-layout-wrap u-layout-wrap-1">
          <div class="u-gutter-0 u-layout">
            <div class="u-layout-row">
              <div class="u-size-19 u-size-60-md">
                <div class="u-layout-col">
                  <div class="u-align-left u-container-style u-layout-cell u-left-cell u-shape-rectangle u-size-60 u-layout-cell-1">
                    <div class="u-container-layout u-valign-middle u-container-layout-1">
                      <h5 class="u-text u-text-1">membership</h5>
                      <h2 class="u-text u-text-2">Membership Benefits</h2>
                      <p class="u-text u-text-3">A gym structured to flow, getting you in and out fast.
 Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa<br>
                      </p>
                      <div class="u-social-icons u-spacing-23 u-social-icons-1">
                        <a class="u-social-url" target="_blank" href=""><span class="u-icon u-icon-circle u-social-facebook u-social-icon u-icon-1"><svg class="u-svg-link" preserveAspectRatio="xMidYMin slice" viewBox="0 0 112 112" style=""><use xmlns:xlink="http://www.w3.org/1999/xlink" xlink:href="#svg-da7f"></use></svg><svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" version="1.1" xml:space="preserve" class="u-svg-content" viewBox="0 0 112 112" x="0px" y="0px" id="svg-da7f"><path d="M75.5,28.8H65.4c-1.5,0-4,0.9-4,4.3v9.4h13.9l-1.5,15.8H61.4v45.1H42.8V58.3h-8.8V42.4h8.8V32.2 c0-7.4,3.4-18.8,18.8-18.8h13.8v15.4H75.5z"></path></svg></span>
                        </a>
                        <a class="u-social-url" target="_blank" href=""><span class="u-icon u-icon-circle u-social-icon u-social-twitter u-icon-2"><svg class="u-svg-link" preserveAspectRatio="xMidYMin slice" viewBox="0 0 112 112" style=""><use xmlns:xlink="http://www.w3.org/1999/xlink" xlink:href="#svg-8e2a"></use></svg><svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" version="1.1" xml:space="preserve" class="u-svg-content" viewBox="0 0 112 112" x="0px" y="0px" id="svg-8e2a"><path d="M92.2,38.2c0,0.8,0,1.6,0,2.3c0,24.3-18.6,52.4-52.6,52.4c-10.6,0.1-20.2-2.9-28.5-8.2 c1.4,0.2,2.9,0.2,4.4,0.2c8.7,0,16.7-2.9,23-7.9c-8.1-0.2-14.9-5.5-17.3-12.8c1.1,0.2,2.4,0.2,3.4,0.2c1.6,0,3.3-0.2,4.8-0.7 c-8.4-1.6-14.9-9.2-14.9-18c0-0.2,0-0.2,0-0.2c2.5,1.4,5.4,2.2,8.4,2.3c-5-3.3-8.3-8.9-8.3-15.4c0-3.4,1-6.5,2.5-9.2 c9.1,11.1,22.7,18.5,38,19.2c-0.2-1.4-0.4-2.8-0.4-4.3c0.1-10,8.3-18.2,18.5-18.2c5.4,0,10.1,2.2,13.5,5.7c4.3-0.8,8.1-2.3,11.7-4.5 c-1.4,4.3-4.3,7.9-8.1,10.1c3.7-0.4,7.3-1.4,10.6-2.9C98.9,32.3,95.7,35.5,92.2,38.2z"></path></svg></span>
                        </a>
                        <a class="u-social-url" target="_blank" href=""><span class="u-icon u-icon-circle u-social-icon u-social-instagram u-icon-3"><svg class="u-svg-link" preserveAspectRatio="xMidYMin slice" viewBox="0 0 112 112" style=""><use xmlns:xlink="http://www.w3.org/1999/xlink" xlink:href="#svg-3ae5"></use></svg><svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" version="1.1" xml:space="preserve" class="u-svg-content" viewBox="0 0 112 112" x="0px" y="0px" id="svg-3ae5"><path d="M55.9,32.9c-12.8,0-23.2,10.4-23.2,23.2s10.4,23.2,23.2,23.2s23.2-10.4,23.2-23.2S68.7,32.9,55.9,32.9z M55.9,69.4c-7.4,0-13.3-6-13.3-13.3c-0.1-7.4,6-13.3,13.3-13.3s13.3,6,13.3,13.3C69.3,63.5,63.3,69.4,55.9,69.4z"></path><path d="M79.7,26.8c-3,0-5.4,2.5-5.4,5.4s2.5,5.4,5.4,5.4c3,0,5.4-2.5,5.4-5.4S82.7,26.8,79.7,26.8z"></path><path d="M78.2,11H33.5C21,11,10.8,21.3,10.8,33.7v44.7c0,12.6,10.2,22.8,22.7,22.8h44.7c12.6,0,22.7-10.2,22.7-22.7 V33.7C100.8,21.1,90.6,11,78.2,11z M91,78.4c0,7.1-5.8,12.8-12.8,12.8H33.5c-7.1,0-12.8-5.8-12.8-12.8V33.7 c0-7.1,5.8-12.8,12.8-12.8h44.7c7.1,0,12.8,5.8,12.8,12.8V78.4z"></path></svg></span>
                        </a>
                        <a class="u-social-url" target="_blank" href="#"><span class="u-icon u-icon-circle u-social-icon u-social-youtube u-icon-4"><svg class="u-svg-link" preserveAspectRatio="xMidYMin slice" viewBox="0 0 112 112" style=""><use xmlns:xlink="http://www.w3.org/1999/xlink" xlink:href="#svg-5adc"></use></svg><svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" version="1.1" xml:space="preserve" class="u-svg-content" viewBox="0 0 112 112" x="0px" y="0px" id="svg-5adc"><path d="M82.3,24H29.7C19.3,24,11,32.5,11,43v26.7c0,10.5,8.3,19,18.7,19h52.5c10.3,0,18.7-8.5,18.7-19V43 C101,32.5,92.7,24,82.3,24L82.3,24z M69.7,57.6L45.1,69.5c-0.7,0.2-1.4-0.2-1.4-0.8V44.1c0-0.7,0.8-1.3,1.4-0.8l24.6,12.6 C70.4,56.2,70.4,57.3,69.7,57.6L69.7,57.6z"></path></svg></span>
                        </a>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
              <div class="u-size-17-lg u-size-21-sm u-size-21-xl u-size-21-xs u-size-30-md">
                <div class="u-layout-row">
                  <div class="u-align-center u-container-style u-layout-cell u-shape-rectangle u-size-60 u-layout-cell-2">
                    <div class="u-container-layout u-valign-middle u-container-layout-2">
                      <h4 class="u-text u-text-default u-text-4">You’ll discover how easy it is to stay motivated and fit</h4>
                      <p class="u-text u-text-5">Images from <a href="https://www.freepik.com/photos/sport" class="u-active-none u-border-1 u-border-active-palette-2-base u-border-black u-border-hover-palette-2-base u-btn u-button-link u-button-style u-hover-none u-none u-text-body-color u-btn-1">Freepik</a>
                      </p>
                      <a href="https://nicepage.com/html-website-builder" class="u-active-palette-2-base u-border-2 u-border-active-palette-2-base u-border-hover-white u-border-palette-2-base u-btn u-button-style u-hover-palette-2-base u-none u-text-active-white u-text-body-color u-text-hover-white u-btn-2">join now</a>
                    </div>
                  </div>
                </div>
              </div>
              <div class="u-size-20-sm u-size-20-xl u-size-20-xs u-size-24-lg u-size-30-md">
                <div class="u-layout-row">
                  <div class="u-container-style u-layout-cell u-palette-3-light-2 u-right-cell u-size-60 u-layout-cell-3">
                    <div class="u-container-layout u-valign-middle u-container-layout-3">
                      <img class="u-image u-image-default u-image-1" src="images/fxgtfh.jpg" data-image-width="800" data-image-height="631">
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
    <section class="u-align-center u-clearfix u-image u-shading u-section-8" id="carousel_47dd">
      <div class="u-clearfix u-sheet u-valign-middle-lg u-valign-middle-xl u-sheet-1">
        <div class="u-palette-2-base u-shape u-shape-rectangle u-shape-1"></div>
        <div class="u-container-style u-expanded-width-sm u-expanded-width-xs u-group u-white u-group-1">
          <div class="u-container-layout u-valign-middle-lg u-valign-middle-xl u-container-layout-1">
            <h2 class="u-align-center u-text u-text-1">Contact Us</h2>
            <div class="u-form u-form-1">
              <form action="//publish.nicepage.com/Form/Process" method="POST" class="u-clearfix u-form-spacing-13 u-form-vertical u-inner-form" style="padding: 0;" source="email" name="form">
                <div class="u-form-email u-form-group u-form-partition-factor-2">
                  <label for="email-f18c" class="u-label">Address</label>
                  <input type="email" placeholder="" id="email-f18c" name="email" class="u-grey-5 u-input u-input-rectangle u-input-1" required="">
                </div>
                <div class="u-form-group u-form-name u-form-partition-factor-2">
                  <label for="name-f18c" class="u-label">Name</label>
                  <input type="text" placeholder="Enter your Name" id="name-f18c" name="name" class="u-grey-5 u-input u-input-rectangle u-input-2" required="">
                </div>
                <div class="u-form-group u-form-partition-factor-2 u-form-phone u-form-group-3">
                  <label for="phone-cbff" class="u-form-control-hidden u-label" wfd-invisible="true">Phone</label>
                  <input type="tel" pattern="\+?\d{0,2}[\s\(\-]?([0-9]{3})[\s\)\-]?([\s\-]?)([0-9]{3})[\s\-]?([0-9]{2})[\s\-]?([0-9]{2})" placeholder="Enter your phone (e.g. +14155552675)" id="phone-cbff" name="phone" class="u-grey-5 u-input u-input-rectangle u-input-3" required="">
                </div>
                <div class="u-form-date u-form-group u-form-partition-factor-2 u-form-group-4">
                  <label for="date-33f9" class="u-label">Date</label>
                  <input type="date" placeholder="" id="date-33f9" name="date" class="u-grey-5 u-input u-input-rectangle u-input-4" required="">
                </div>
                <div class="u-form-group u-form-message u-form-group-5">
                  <label for="message-1015" class="u-label">Message</label>
                  <textarea placeholder="Enter your message" rows="4" cols="50" id="message-1015" name="message-1" class="u-grey-5 u-input u-input-rectangle u-input-5" required=""></textarea>
                </div>
                <div class="u-align-left u-form-group u-form-submit">
                  <a href="#" class="u-black u-btn u-btn-submit u-button-style u-btn-1">Submit</a>
                  <input type="submit" value="submit" class="u-form-control-hidden" wfd-invisible="true">
                </div>
                <div class="u-form-send-message u-form-send-success" wfd-invisible="true"> Thank you! Your message has been sent. </div>
                <div class="u-form-send-error u-form-send-message" wfd-invisible="true"> Unable to send your message. Please fix errors then try again. </div>
                <input type="hidden" value="" name="recaptchaResponse" wfd-invisible="true">
              </form>
            </div>
          </div>
        </div>
        <p class="u-text u-text-default u-text-2">Image from <a href="https://www.freepik.com/free-photos/people" class="u-border-1 u-border-white u-btn u-button-style u-none u-text-body-alt-color u-btn-2">Freepik</a>
        </p>
      </div>
    </section>
    






    <?php

if (isset($_SESSION["userid"]))
{
   cartlogin($conn);


   

} 
}else {include '500.php';  } ?> 


</div> </div> </div>
  <?php
  include 'footer.php';
  ?>

</body>
</html>