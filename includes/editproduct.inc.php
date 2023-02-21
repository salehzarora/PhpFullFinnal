<?php
$serverName = "localhost";
$dBUsername = "root";
$dBPassword = "";
$dBName = "gym" ;


$conn = mysqli_connect($serverName, $dBUsername, $dBPassword, $dBName); 


if(isset($_POST['submit2'])){

    $id=$_POST['id'];
    $amount = $_POST['amount'];

    $query = "UPDATE `product` SET `amount`='$amount' WHERE id=$id";

    $result = mysqli_query($conn , $query);
    
    if($result)
    {
        header("location: ../product2.php?");
        echo 'Data update !';
    }else{
        header("location: ../404.php?");
    }
}





if(isset($_POST['submit']) && isset($_FILES['imgc'])){


    $img_name=$_FILES['imgc']['name'];
    $img_size=$_FILES['imgc']['size'];
    $img_tmp_name=$_FILES['imgc']['tmp_name'];
    $img_error=$_FILES['imgc']['error'];

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

        $bad="includes/productimg/";
        $img = $path.$new_img_name;

        $amount = $_POST['amount'];
        $id=$_POST['id'];
        $category=$_POST['category'];
        $price=$_POST['price'];
        $name=$_POST['name'];
        $description=$_POST['description'];

        if($img == $bad)
        {
                $img=$_POST['img'];
        }
        

$query = "UPDATE `product` SET `name`='$name',`amount`='$amount',`price`='$price',`category`='$category' , `description`='$description' , `img`='$img' WHERE id=$id";

$result = mysqli_query($conn , $query);

if($result)
{
    header("location: ../product2.php?");
    echo 'Data update !';
}else{
    header("location: ../404.php?");
}
mysqli_close($conn);

}




if(isset($_POST['delete'])){

    $id=$_POST['id'];
    
    $query = "DELETE FROM `product` WHERE `id` = $id";
    $result = mysqli_query($conn , $query);

    if($result)
    {
        header("location: ../product2.php?");
        echo 'Data update !';

        
    }else{
        header("location: ../404.php?");
    }
        
    
    }
    






