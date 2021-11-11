<?php 
//session_start();
include 'conn.php';

// if(!isset($_SESSION['shopname']))
// {
//     header('location:shoper_login.php');
// }

//create session var and input are new create table.
//$ssn=$_SESSION['shopname'];



// if(isset($_POST['admin_reg']))
// { 
// 	$username=ucfirst($_POST['username']);
// 	$fullname=strtoupper($_POST['fullname']);
// 	$password=$_POST['password'];
// 	$email=$_POST['email'];
// 	$mobile=$_POST['mobile'];
// 	$gender=$_POST['gender'];
// 	$date_time=date('Y-m-d h:i:s');
// 	$ip=$_SERVER['REMOTE_ADDR'];

// 	$q="INSERT INTO admin_reg (username,fullname,password,email,mobile,gender,date_time,ip_address) VALUES ('$username','$fullname','$password','$email','$mobile','$gender','$date_time','$ip')";
// //echo $_SESSION['shopname'];
// 	$check = mysqli_query($conn,$q);

// 	if(!$check)
// 	{
// 		echo "Not Insert";
// 	}
// 	else
// 	{
// 		echo "insert Complete";
// 	}

// 	header('location:admin_login.php');
// }

// if(isset($_POST['shoper_reg']))
// {
// 	$shopname=trim($_POST['shopname']);
// 	$ownername=strtoupper($_POST['ownername']);
// 	$email=$_POST['email'];
// 	$password=$_POST['password'];
// 	$mobile=$_POST['mobile'];
// 	$gender=$_POST['gender'];
// 	$dob=$_POST['dob'];
// 	$address=trim($_POST['address']);
// 	$date_time=date('Y-m-d H:i:s');
// 	$ip=$_SERVER['REMOTE_ADDR'];

// 	echo $q = "INSERT INTO shoper_reg (shopname,ownername,email,password,mobile,gender,dob,address,audit_date,audit_ip) VALUES ('$shopname','$ownername','$email','$password','$mobile','$gender','$dob','$address','$date_time','$ip')";

// 	$check = mysqli_query($conn,$q);

// 	if(!$check)
// 	{
// 		echo "Not Insert";
// 	}
// 	else
// 	{
// 		echo "Record Inserted";
// 	}

// 	$sql="CREATE TABLE $shopname (id int AUTO_INCREMENT NOT NULL PRIMARY KEY,fullname varchar(50),email varchar(50),mobile varchar(50),gender varchar(50),dob varchar(50),address varchar(50),registration_date varchar(50),audit_ip varchar(50))";

		 

// 		// "CREATE TABLE $shopname (id int AUTO_INCREMENT NOT NULL PRIMARY KEY,shopname varchar(50),ownername varchar(50),email varchar(50),password varchar(50),mobile varchar(50),gender varchar(50),dob varchar(50),address varchar(50),audit_date varchar(50),audit_ip varchar(50))"

// 	$check=mysqli_query($conn,$sql);

// 	if(!$check)
// 	{
// 		echo "Not create table";
// 	}
// 	else
// 	{
// 		echo "table created";
// 	}

// 	header('location:shoper_login.php');
// }

if(isset($_POST['customer_reg']))
{
	$fullname=ucwords($_POST['fullname']);
	$password=$_POST['password'];
	$email=$_POST['email'];
	$mobile=$_POST['mobile'];
	$date_time=date('Y-m-d H:i:s');
	$ip=$_SERVER['REMOTE_ADDR'];

	echo $q = "INSERT INTO customer_reg (fullname,password,email,mobile,registration_date,audit_ip) VALUES ('$fullname','$password','$email','$mobile','$date_time','$ip')";

	$check = mysqli_query($conn,$q);

	if(!$check)
	{
		echo "Not Insert";
	}
	else
	{
		echo "Record Inserted";
	}

	header('location:login.php');
}

// if(isset($_POST['product_submit']))
// {
// 	$cat_id=$_POST['cat_id'];
// 	$name=$_POST['pro_name'];
// 	$code=$_POST['pro_code'];
// 	$price=$_POST['pro_price'];
// 	$img_f= "images/" . $_FILES['file']['name'];
// 	//$img_s=$_POST['img_s'];
// 	$dec=$_POST['pro_description'];
// 	$ship_des=$_POST['pro_shiping_description'];

// 	echo $q = "INSERT INTO product 
// 	(cat_id,pro_name,pro_code,pro_price,pro_img_f,pro_description,pro_shipping_description) VALUES ('$cat_id','$name','$code','$price','$img_f','$dec','$ship_des')";
// 	move_uploaded_file($_FILES['file']['tmp_name'],$img_f);
// 	$check = mysqli_query($conn,$q);


// 	if(!$check)
// 	{
// 		echo "Not Insert";
// 	}
// 	else
// 	{
// 		echo "Record Inserted";
// 	}
// }

if(isset($_POST['product_submit']))
{
    $name=$_POST['pro_name'];
    $code=$_POST['pro_code'];
    $price=$_POST['pro_price'];
    $img= "images/" . $_FILES['file']['name'];
    $img_s= "images/" . $_FILES['file_s']['name'];
    $img_t= "images/" . $_FILES['file_t']['name'];
    $decs=$_POST['pro_desc'];
    $date_time=date('Y-m-d H:i:s');

    echo $q = "INSERT INTO product 
    (pro_name,pro_code,pro_price,pro_img,pro_img_s,pro_img_t,pro_decs,currrent_date) VALUES ('$name','$code','$price','$img','$img_s','$img_t','$decs','$date_time')";
    move_uploaded_file($_FILES['file']['tmp_name'],$img);
    move_uploaded_file($_FILES['file_s']['tmp_name'],$img_s);
    move_uploaded_file($_FILES['file_t']['tmp_name'],$img_t);
    $check = mysqli_query($conn,$q);


    if(!$check)
    {
        echo "Not Insert";
    }
    else
    {
        echo "Record Inserted";
    }
    header('Location:show_product.php');
}

?>