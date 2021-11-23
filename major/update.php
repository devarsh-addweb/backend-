<?php
include 'conn.php';

if(isset($_POST['man_update']))
{
	//$category=$_POST['radio'];
    $q="SELECT * FROM man";
    $check=mysqli_query($conn,$q);
    $row=mysqli_fetch_assoc($check);
    echo $img=$row['pro_img_f'];
    echo "<br>";
    echo $img2=$row['pro_img_s'];
    echo "<br>";
    echo $img3=$row['pro_img_t'];
    echo "<br>";

    $man_id=$_GET['man_id'];

    $name=$_POST['pro_name'];
    $code=$_POST['pro_code'];
    $price=$_POST['pro_price'];
//------------------------------------------------------------
    $image= "images/" . $_FILES['file']['name'];
    if(!$_FILES["file"]["size"])
    {
        echo $filepath=$img;
    }
    else
    {
        $filepath = "images/" . $_FILES["file"]["name"];
    }
    move_uploaded_file($_FILES['file']['tmp_name'],$filepath);
//-------------------------------------------------------------
    $img2= "images/" . $_FILES['file_s']['name'];
    if(!$_FILES["file_s"]["size"])
    {
        $filepath2=$img2;
    }
    else
    {
        $filepath2 = "images/" . $_FILES["file_s"]["name"];
    }
    move_uploaded_file($_FILES['file_s']['tmp_name'],$filepath2);
//------------------------------------------------------------
    $img3= "images/" . $_FILES['file_t']['name'];
    if(!$_FILES["file_t"]["size"])
    {
        $filepath3=$img3;
    }
    else
    {
        $filepath3 = "images/" . $_FILES["file_t"]["name"];
    }
    move_uploaded_file($_FILES['file_t']['tmp_name'],$filepath3);
//------------------------------------------------------------
    $decs=$_POST['pro_desc'];
    $date_time=date('Y-m-d H:i:s');

    echo $q = "UPDATE man SET pro_name='$name',pro_code='$code',pro_price='$price',pro_img_f='$filepath',pro_img_s='$filepath2',pro_img_t='$filepath3',pro_description='$decs',pro_enter_time='$date_time' WHERE man_id=".$man_id;
    $check=mysqli_query($conn,$q);

    if(!$check)
    {
        echo "Not Insert";
    }
    else
    {
        echo "Record Inserted";
    }
        //header('Location:man_pro.php');
}

//female update code

if(isset($_POST['female_update']))
{
    //$category=$_POST['radio'];

    $female_id=$_GET['female_id'];

    $name=$_POST['pro_name'];
    $code=$_POST['pro_code'];
    $price=$_POST['pro_price'];
    $img= "images/" . $_FILES['file']['name'];
    $img_s= "images/" . $_FILES['file_s']['name'];
    $img_t= "images/" . $_FILES['file_t']['name'];
    $decs=$_POST['pro_desc'];
    $date_time=date('Y-m-d H:i:s');

    //(pro_name,pro_code,pro_price,pro_img,pro_img_s,pro_img_t,pro_decs,currrent_date)

    echo $q = "UPDATE female SET pro_name='$name',pro_code='$code',pro_price='$price',pro_img_f='$img',pro_img_s='$img_s',pro_img_t='$img_t',pro_description='$decs',pro_enter_time='$date_time' WHERE female_id=".$female_id;

    move_uploaded_file($_FILES['file']['tmp_name'],$img);
    move_uploaded_file($_FILES['file_s']['tmp_name'],$img_s);
    move_uploaded_file($_FILES['file_t']['tmp_name'],$img_t);
 
    $check=mysqli_query($conn,$q);


    if(!$check)
    {
        echo "Not Insert";
    }
    else
    {
        echo "Record Inserted";
    }
        //header('Location:female_pro.php');
}

//kids update code

if(isset($_POST['kids_update']))
{
    //$category=$_POST['radio'];

    $kids_id=$_GET['kids_id'];

    $name=$_POST['pro_name'];
    $code=$_POST['pro_code'];
    $price=$_POST['pro_price'];
    $img= "images/" . $_FILES['file']['name'];
    $img_s= "images/" . $_FILES['file_s']['name'];
    $img_t= "images/" . $_FILES['file_t']['name'];
    $decs=$_POST['pro_desc'];
    $date_time=date('Y-m-d H:i:s');

    //(pro_name,pro_code,pro_price,pro_img,pro_img_s,pro_img_t,pro_decs,currrent_date)

    echo $q = "UPDATE kids SET pro_name='$name',pro_code='$code',pro_price='$price',pro_img_f='$img',pro_img_s='$img_s',pro_img_t='$img_t',pro_description='$decs',pro_enter_time='$date_time' WHERE kids_id=".$kids_id;

    move_uploaded_file($_FILES['file']['tmp_name'],$img);
    move_uploaded_file($_FILES['file_s']['tmp_name'],$img_s);
    move_uploaded_file($_FILES['file_t']['tmp_name'],$img_t);
 
    $check=mysqli_query($conn,$q);


    if(!$check)
    {
        echo "Not Insert";
    }
    else
    {
        echo "Record Inserted";
    }
        //header('Location:kids_pro.php');
}
?>

<?php
namespace Html;
class Table {
  public $title = "";
  public $numRows = 0;
  public function message() {
    echo "<p>Table '{$this->title}' has {$this->numRows} rows.</p>";
  }
}
$table = new Table();
$table->title = "My table";
$table->numRows = 5;
?>

<?php
$table->message();
?>