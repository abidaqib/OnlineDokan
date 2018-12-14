<?php
session_start();

$error = array();

	$_SESSION['id']  = "";
	$_SESSION['pemail']  = "";


$db = mysqli_connect('localhost', 'root', '', 'furniture_management');


if(isset($_POST['signIn'])){
		$email=mysqli_real_escape_string($db,$_POST['email']);
		$password=mysqli_real_escape_string($db,$_POST['password']);
		$query="SELECT * FROM `info` WHERE email = '".$email."' AND pass = '".$password."'";
		$r=mysqli_query($db,$query);
		$res=mysqli_fetch_array($r);
		if(sizeof($res)>0)
		{
			$_SESSION['id']  = $res['id'];
			$_SESSION['email']  = $res['email'];
			header('location: admin.php');
		}
		else
		{
			   echo"<script>alert('email and password not match.')</script>";
			array_push($error, "email and password not match.");
		}
	}
	if (isset($_POST['logout'])) {
		session_destroy();
		header('location: home.php');
	}

	if(isset($_POST['signUp'])){
		$name = mysqli_real_escape_string($db,$_POST['name']);
		$number = mysqli_real_escape_string($db,$_POST['number']);
		$email = mysqli_real_escape_string($db,$_POST['email']);
		$pass = mysqli_real_escape_string($db,$_POST['password']);
		$repass = mysqli_real_escape_string($db,$_POST['re_password']);

		if($pass == $repass){

		$query="INSERT INTO `info`( `name`, `number`, `email`, `pass`) VALUES ('".$name."','".$number."', '".$email."', '".$pass."')";
			if(mysqli_query($db,$query))
			{
			echo"<script>alert('New Admin Added.')</script>";
		
				header('location: admin.php');
			}
			else
			{
				array_push($error, "Server not connected");
			}
		}
		else{		   
			echo"<script>alert('password not match.')</script>";
	
		}

	}


 if (isset($_POST['buy'])) {
 		$_SESSION['buy'] = $_POST['buy'];

 		header('location: buy.php');

 }
 if (isset($_POST['orders'])) {
 	 		header('location: orders.php');

 }

if (isset($_POST['buyok'])) {

			$phone = mysqli_real_escape_string($db,$_POST['phone']);
			$address = mysqli_real_escape_string($db,$_POST['address']);
			$CNo = mysqli_real_escape_string($db,$_POST['CNo']);
			$sid = mysqli_real_escape_string($db,$_SESSION['buy']);

			echo $phone;
			echo $address;
			echo $CNo;
			echo $sid;

			$query1="INSERT INTO `orders`(`phone`, `address`, `c_no`, `sid`) VALUES ('".$phone."','".$address."','".$CNo."','".$sid."')";
			if(mysqli_query($db,$query1))
			{
			echo"<script>alert('Thank You For Buying.')</script>";
		
				header('location: home.php');
			}
			else
			{
				echo"<script>alert('Server Not Connect')</script>";
		
			}

}

 


 if (isset($_POST['add'])) {
  //header('location: index.php');

		$type1 = mysqli_real_escape_string($db,$_POST['type']);
  		$title = mysqli_real_escape_string($db,$_POST['title']);
  		$description = mysqli_real_escape_string($db,$_POST['description']);
  		$price = mysqli_real_escape_string($db,$_POST['price']);
  

  $size=$_FILES['filenames']['size'];
  $temp=$_FILES['filenames']['tmp_name'];
  $type=$_FILES['filenames']['type'];
  $image_name=time().$_FILES['filenames']['name'];

  if($image_name==""){
   echo"<script>alert('please select image!')</script>";
  //  exit();
  }
  elseif(($type=="image/jpeg")||($type=="image/png")||($type=="image/gif")||($type=="image/png")){
    
    if(move_uploaded_file($temp, "images/$image_name")){
     // echo"<script>alert('image!')</script>";

    	
  		$query="INSERT INTO `services`( `type`, `title`, `description`, `image`, `price`) VALUES ('".$type1."', '".$title."', '".$description."', '".$image_name."', '".$price."')";
  //$query="update account_info set name='$name', profile_image='$profile_name' where id = '$id'";
 		 $insert=mysqli_query($db, $query);
  		if($insert){
  
  	    	 echo"<script>alert('Service Inserted.')</script>";

  	    	 		//header('location: alladd.php');

  		}
  		else{
  	     echo"<script>alert('Service failed to insert.')</script>";
    	}


    }else{
      echo"<script>alert('image movement problem!')</script>";
    }
  }
  else{
    //echo"<seript>alert('invalid format!')</script>";
  echo"insertion failed!";
  }
  

}



?>