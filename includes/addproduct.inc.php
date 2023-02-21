<?php
$serverName = "localhost";
$dBUsername = "root";
$dBPassword = "";
$dBName = "gym" ;


$conn = mysqli_connect($serverName, $dBUsername, $dBPassword, $dBName); 

if(isset($_POST['submit']) && isset($_FILES['img'])){
    if(!empty($_POST['name']) && !empty($_POST['amount']) && !empty($_POST['price']) && !empty($_POST['category']) && !empty($_FILES['img']) && !empty($_POST['description']))
    {
    $img_name=$_FILES['img']['name'];
    $img_size=$_FILES['img']['size'];
    $img_tmp_name=$_FILES['img']['tmp_name'];
    $img_error=$_FILES['img']['error'];

    $img_ex=pathinfo($img_name,PATHINFO_EXTENSION);
    $img_ex_lc = strtolower($img_ex);

    $allowed_exs = array("jpg", "jpeg", "png");

    if(in_array($img_ex_lc ,$allowed_exs))
    {
        $new_img_name=uniqid("IMG-",true).'.'.$img_ex_lc;
        $img_upload_path='productimg/'.$new_img_name;
        move_uploaded_file($img_tmp_name,$img_upload_path);

    }else{
        echo "error~!";
    }


        $path="includes/productimg/";
    
        $name = $_POST['name'];
        $amount = $_POST['amount'];
        $price = $_POST['price'];
        $category = $_POST['category'];
        $img = $path.$new_img_name;
        $description = $_POST['description'];
        
        $query = "INSERT INTO product(name,amount,price,category,img,description,Date,Time) values('$name' , '$amount' , '$price' , '$category' , '$img' , '$description',NOW(),NOW())";

        $run = mysqli_query($conn,$query) or die(mysqli_error());

        if($run){
            header("location: ../adminaddproduct.php?");
            echo "product add !";
        }
        else{
            echo "something wrong! :(";

        }

    }
}



else{
    echo "اكلت خرا";
}
