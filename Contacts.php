<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

<?php

session_start();





include 'navbar.php';
require_once 'includes/gymdb.inc.php';
require_once 'includes/functions.inc.php';


?>


    <section class="u-align-center u-clearfix u-image u-shading u-section-8" id="carousel_47dd">
        <div class="u-clearfix u-sheet u-valign-middle-lg u-valign-middle-xl u-sheet-1">
          <div class="u-palette-2-base u-shape u-shape-rectangle u-shape-1"></div>
          <div class="u-container-style u-expanded-width-sm u-expanded-width-xs u-group u-white u-group-1">
            <div class="u-container-layout u-valign-middle-lg u-valign-middle-xl u-container-layout-1">
              <h2 class="u-align-center u-text u-text-1">Contact Us</h2>
              <div class="u-form u-form-1">

                <form action="includes/Contacts.inc.php" method="post" class=" u-form-spacing-13 "  >

                  <div class="u-form-email u-form-group u-form-partition-factor-2">
                    <label for="email-f18c" class="u-label">email</label>
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
                  
                  <div class="u-form-group u-form-message u-form-group-5">
                    <label for="message-1015" class="u-label">Message</label>
                    <textarea placeholder="Enter your message" rows="4" cols="50" id="message-1015" name="message" class="u-grey-5 u-input u-input-rectangle u-input-5" required=""></textarea>
                  </div>


                  <?php
 if (isset($_SESSION["userid"]))
{
    $userid=$_SESSION["userid"];
?>
                  <input type="hidden" value="<?php echo"$userid";?>" name="userid">

                  <div class="u-align-left u-form-group u-form-submit">
                    <a href="#" class="u-black u-btn u-btn-submit u-button-style u-btn-1">Submit</a>
                    <input type="submit" value="submit" class="u-form-control-hidden" name="submit" wfd-invisible="true">
                  </div>


                  <div class="u-form-send-message u-form-send-success" wfd-invisible="true"> ------ Please login -------. </div>
                  <div class="u-form-send-error u-form-send-message" wfd-invisible="true"> Unable to send your message. Please fix errors then try again. </div>
                  <input type="hidden" value="" name="recaptchaResponse" wfd-invisible="true">

<?php }else { ?>
                  <div class="u-align-left u-form-group u-form-submit">
                    <a href="#" class="u-black u-btn u-btn-submit u-button-style u-btn-1">- Please login -</a>
                    <input href="login.php" class="u-form-control-hidden" wfd-invisible="true">
                  </div>

                  <div class="u-form-send-message u-form-send-success" wfd-invisible="true"> ------ Please login -------. </div>
                  <div class="u-form-send-error u-form-send-message" wfd-invisible="true"> Unable to send your message. Please fix errors then try again. </div>
                  <input type="hidden" value="" name="recaptchaResponse" wfd-invisible="true">

                  <?php } ?>
                </form>

              </div>
            </div>
          </div>
          
        </div>
      </section>
  
    

<br><br><br><br><br><br><br>
    </div> </div> </div>
  
  <?php
  include 'footer.php';
  ?>
  
</body>
</html>