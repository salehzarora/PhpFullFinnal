<?php 

$serverName = "localhost";
$dBUsername = "root";
$dBPassword = "";
$dBName = "gym" ;


$conn = mysqli_connect($serverName, $dBUsername, $dBPassword, $dBName); 



if(isset($_POST['submitc']) && isset($_FILES['imgc'])){


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
        $img_upload_path='userimg/'.$new_img_name;
        move_uploaded_file($img_tmp_name,$img_upload_path);

    }else{
        echo "error~!";
    }


        $path="includes/userimg/";

        $bad="includes/userimg/";
        $img = $path.$new_img_name;

        $id=$_POST['userid'];
        

        if($img == $bad)
        {
                $img=$_POST['img'];
        }


        if (empty($img))
        {
            $img = "images/face.png";
        }
        

$query = "UPDATE `users` SET `img`='$img'  WHERE `usersId`=$id";

$result = mysqli_query($conn , $query);

if($result)
{

        $query2 = "SELECT * FROM `users` WHERE `usersId`=$id";

        $result2 = mysqli_query($conn , $query2);
        $resultCheck2 = mysqli_num_rows($result2);
      
                  
        if($resultCheck2 > 0 )
        {

        while($row2 = mysqli_fetch_assoc($result2))
        { 

            $isworker=$row2['isWorker'];

        }
    }


    if ($isworker == 1){
    header("location: ../dashboard.php?");
    echo 'Data update !';

    }else{

        header("location: ../userprofileEdit.php?");
}
}
mysqli_close($conn);

}else echo "Baaaaaaaaad";


?>