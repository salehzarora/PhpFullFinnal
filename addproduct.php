<!DOCTYPE html>
<html style="font-size: 16px;" lang="en"><head>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta charset="utf-8">
    <meta name="keywords" content="Add or edit products​">
    <meta name="description" content="">
    <title>add products</title>
    <link rel="stylesheet" href="css/addproduct.css" media="screen">
    <link rel="stylesheet" href="css/addproduct2.css" media="screen">

<link rel="stylesheet" href="PRICING.css" media="screen">
    <script class="u-script" type="text/javascript" src="jquery.js" defer=""></script>
    <script class="u-script" type="text/javascript" src="nicepage.js" defer=""></script>
    <meta name="generator" content="Nicepage 4.14.1, nicepage.com">
    <link id="u-theme-google-font" rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto:100,100i,300,300i,400,400i,500,500i,700,700i,900,900i|Open+Sans:300,300i,400,400i,500,500i,600,600i,700,700i,800,800i">
    
    
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.bundle.min.js">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <link rel="stylesheet" href="styles/button.css">
    <link rel="stylesheet" href="styles/body.css">

    <script type="application/ld+json">{
		"@context": "http://schema.org",
		"@type": "Organization",
		"name": "",
		"sameAs": []
}</script>
    <meta name="theme-color" content="#478ac9">
    <meta property="og:title" content="PRICING">
    <meta property="og:type" content="website">
  </head>
  <body data-home-page="PRICING.html" data-home-page-title="PRICING" class="u-body u-xl-mode" data-lang="en">
  <div style="background-image: url('images/pexels-victor-freitas-841130.jpg');">

    
    <?php
    session_start();
    include 'navbar.php';
?>
    
    <section class="u-clearfix u-image u-section-1" id="sec-81ed" data-image-width="1920" data-image-height="1280">
      <div class="u-clearfix u-sheet u-sheet-1">
        <h1 class="u-text u-text-body-alt-color u-text-default u-text-1">Add or edit products</h1>
        <div >
          <form action="include/addproducts.inc.php" method="post">
            
            
            <div>
              <label  >Product Name</label>
              <input type="text" placeholder="Enter product Name"  name="name"  >
            </div>
            <div >
              <label  >Amount</label>
              <input type="text" placeholder="Enter amount"  name="amount" >
            </div>
            <div >
              <label  >price</label>
              <input type="text" placeholder="Enter price"  name="price" >
            </div>
            <div >
              <label  >img</label>
              <input type="text" placeholder="put a img url for the product"  name="img" >
            </div>
            <div >
              <label  >Category</label>
              <div >
                <select  name="Category" >
                  <option value="Item 1">Underwear</option>
                  <option value="Item 2">Products</option>
                  <option value="Item 3">PROTEINS</option>
                </select>
                
              </div>
            </div>
            <div>
              <label >Description about the product</label>
              <textarea rows="4" cols="50"  name="description"  ></textarea>
            </div>
            <div >
              <button name="submit">sub</button>
              </form>
              <a name="submit" class="u-btn u-btn-submit u-button-style u-custom-color-1 u-hover-palette-1-dark-1 u-btn-1"><span class="u-icon"><svg class="u-svg-content" viewBox="0 0 512 512" x="0px" y="0px" style="width: 1em; height: 1em;"><path d="m19.98,200.65909l180.67121,0l55.82879,-171.63684l55.82883,171.63684l180.67118,0l-146.16581,106.07619l55.83168,171.63684l-146.16587,-106.07908l-146.16584,106.07908l55.8317,-171.63684l-146.16586,-106.07619z"></path></svg><img></span>&nbsp;Submit
              </a>
              <input type="submit" value="submit" class="u-form-control-hidden">
            </div>
                  </form>
        </div>
        <a href="https://nicepage.best" class="u-border-none u-btn u-btn-round u-button-style u-custom-color-2 u-hover-palette-1-base u-radius-50 u-btn-2">Edit products</a>
      </div>
    </section>
    
    
    

    <form id="contact-form" role="form" action="includes/addproduct.inc.php" method="post">
                            <div class="controls">
                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="form-group"> <label for="form_name">Product Name *</label> <input id="form_name" type="text" name="name" class="form-control" placeholder="Please enter your productname *"  data-error="Firstname is required."> </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group"> <label for="form_lastname">amount *</label> <input id="form_amount" type="text" name="amount" class="form-control" placeholder="Please enter amount*"  data-error="Lastname is required."> </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="form-group"> <label for="form_email">Price *</label> <input id="form_price" type="text" name="price" class="form-control" placeholder="Enter product price*" data-error="error."> </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group"> <label for="form_need">Category *</label> <select id="form_category" name="category" class="form-control"  data-error="Please specify your need.">
                                                <option value="" selected disabled>--Select Your Category--</option>
                                                <option>Dumbbells</option>
                                                <option>clothing</option>
                                                <option>GYM3</option>
                                                <option>other</option>
                                            </select> </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-12">
                                    <div class="form-group"> <label for="form_img">img link *</label> <textarea id="form_img" name="img" class="form-control" placeholder="put a img link here..." rows="1"  data-error="info...."></textarea> </div>
                                        <div class="form-group"> <label for="form_description">INFO *</label> <textarea id="form_description" name="description" class="form-control" placeholder="Write your message here." rows="4"  data-error="info...."></textarea> </div>
                                    </div>
                                            <button class="cybr-btn" name="submit">Add product<span aria-hidden>_</span>
                                            <span aria-hidden class="cybr-btn__glitch">Add product</span>
                                            <span aria-hidden class="cybr-btn__tag">Gym</span>
                                            </button>

                                           
                                                
                                    </div>
                                </div>
                                    </form>






    
  
</body></html>