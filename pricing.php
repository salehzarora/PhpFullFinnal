<!DOCTYPE html>
<html lang="en" >
<head>
  <meta charset="UTF-8">
  <title>CodePen - Pricing tabs - Tailwind CSS + Alpine.js</title>


</head>
<body>


<?php
    session_start();
    include 'navbar.php'; 
    ?>











<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <!--  This file has been downloaded from bootdey.com @bootdey on twitter -->
    <!--  All snippets are MIT license http://bootdey.com/license -->
    <title>Pricing table with detail - Bootdey.com</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
	<script src="https://code.jquery.com/jquery-1.10.2.min.js"></script>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@4.4.1/dist/css/bootstrap.min.css" rel="stylesheet">
	<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.4.1/dist/js/bootstrap.bundle.min.js"></script>
</head>
<body>
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
              <p class="font-size-sm mb-0">Great for those who take wellness seriously.</p>
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



<script type="text/javascript">

</script>
</body>
</html>





<br><br><br><br><br><br><br>
    </div> </div> </div>
  
  <?php
  include 'footer.php';
  ?>
  


</body>
</html>


