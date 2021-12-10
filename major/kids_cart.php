<?php
include 'conn.php';

$id=$_GET['kids_id'];
//echo "dsgdfgdfg".$id;
   
 $selectq="select * from kids where kids_id=$id";
    $result=mysqli_query($conn,$selectq);
    // $name="";
    // $code="";
    // $price="";
    // $img="";
while($row=mysqli_fetch_assoc($result))
{
    $name=$row['pro_name'];
    //echo $name;
    $code=$row['pro_code'];
    $price=$row['pro_price'];
    $img=$row['pro_img_f'];
    //$img= "images/" . $_FILES['file']['name'];
}

    $date_time=date('Y-m-d H:i:s');


    //(pro_name,pro_code,pro_price,pro_img,pro_img_s,pro_img_t,pro_decs,currrent_date)

   echo $q = "INSERT INTO cart (pro_name,pro_code,pro_price,pro_img_f,pro_cart_time) VALUES ('$name','$code','$price','$img','$date_time')";

    //move_uploaded_file($_FILES['file']['tmp_name'],$img);
    $check = mysqli_query($conn,$q);


    if(!$check)
    {
        echo "Not Insert";
    }
    else
    {
        echo "Record Inserted";
    }

    header('Location:cart.php');



//female update code

// if(isset($_POST['female_update']))
// {
//     //$category=$_POST['radio'];

//     $female_id=$_GET['female_id'];

//     $name=$_POST['pro_name'];
//     $code=$_POST['pro_code'];
//     $price=$_POST['pro_price'];
//     $img= "images/" . $_FILES['file']['name'];
//     $img_s= "images/" . $_FILES['file_s']['name'];
//     $img_t= "images/" . $_FILES['file_t']['name'];
//     $decs=$_POST['pro_desc'];
//     $date_time=date('Y-m-d H:i:s');

//     //(pro_name,pro_code,pro_price,pro_img,pro_img_s,pro_img_t,pro_decs,currrent_date)

//     echo $q = "UPDATE female SET pro_name='$name',pro_code='$code',pro_price='$price',pro_img_f='$img',pro_img_s='$img_s',pro_img_t='$img_t',pro_description='$decs',pro_enter_time='$date_time' WHERE female_id=".$female_id;

//     move_uploaded_file($_FILES['file']['tmp_name'],$img);
//     move_uploaded_file($_FILES['file_s']['tmp_name'],$img_s);
//     move_uploaded_file($_FILES['file_t']['tmp_name'],$img_t);
 
//     $check=mysqli_query($conn,$q);


//     if(!$check)
//     {
//         echo "Not Insert";
//     }
//     else
//     {
//         echo "Record Inserted";
//     }
        //header('Location:female_pro.php');
//}

//kids update code

// if(isset($_POST['kids_update']))
// {
    //$category=$_POST['radio'];

    // $kids_id=$_GET['kids_id'];

    // $name=$_POST['pro_name'];
    // $code=$_POST['pro_code'];
    // $price=$_POST['pro_price'];
    // $img= "images/" . $_FILES['file']['name'];
    // $img_s= "images/" . $_FILES['file_s']['name'];
    // $img_t= "images/" . $_FILES['file_t']['name'];
    // $decs=$_POST['pro_desc'];
    // $date_time=date('Y-m-d H:i:s');

    // //(pro_name,pro_code,pro_price,pro_img,pro_img_s,pro_img_t,pro_decs,currrent_date)

    // echo $q = "UPDATE kids SET pro_name='$name',pro_code='$code',pro_price='$price',pro_img_f='$img',pro_img_s='$img_s',pro_img_t='$img_t',pro_description='$decs',pro_enter_time='$date_time' WHERE kids_id=".$kids_id;

    // move_uploaded_file($_FILES['file']['tmp_name'],$img);
    // move_uploaded_file($_FILES['file_s']['tmp_name'],$img_s);
    // move_uploaded_file($_FILES['file_t']['tmp_name'],$img_t);
 
    // $check=mysqli_query($conn,$q);


    // if(!$check)
    // {
    //     echo "Not Insert";
    // }
    // else
    // {
    //     echo "Record Inserted";
    // }
        //header('Location:kids_pro.php');
//}
?>