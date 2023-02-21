<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>add products</title>

    <link rel="stylesheet" href="css/addproduct3.css" media="screen">
    <link rel="stylesheet" href="css/button.css" media="screen">




    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.bundle.min.js">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>


</head>
<body style="background-image: url('images/pexels-victor-freitas-841130.jpg');">

<?php
    session_start();
    include 'navbar.php';
?>
<div class="container"> <div class=" text-center mt-5 ">
        <h1>Add/Edit product</h1><h2>(only you can see this page*)</h2>
    </div>
    <div class="row ">
        <div class="col-lg-7 mx-auto">
            <div class="card mt-2 mx-auto p-4 bg-light">
                <div class="card-body bg-light">
                    <div class="container">
                        <form id="contact-form" role="form" action="includes/addproducts.inc.php" method="post">
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

                                            <button class="cybr-btn"  onclick="location.href='./editproduct.php'" type="button">
                                                Edit product<span aria-hidden>_</span>
                                                <span aria-hidden class="cybr-btn__glitch">Edit product</span>
                                                <span aria-hidden class="cybr-btn__tag">Gym</span>
                                                </button>
                                                
                                    </div>
                                </div>
                                    </form>
                    </div>
                </div>
            </div> <!-- /.8 -->
        </div> <!-- /.row-->
    </div>
</div>
 <br> <br><br><br><br><br><br><br><br><br><br><br><br>
</body>
</html>