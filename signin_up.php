<?php
session_start();
include('database.inc.php');
include('function.inc.php');
include('constant.inc.php');
include('smtp/PHPMailerAutoload.php');


if (isset($_POST['typee'])) {
	$typee=get_safe_value($_POST['typee']);
	if($typee=='edit'){
		$uidd=get_safe_value($_POST['uidd']);
		$firstname=get_safe_value($_POST['firstname']);
		$lastname=get_safe_value($_POST['lastname']);
		$name=get_safe_value($_POST['name']);
		$email=get_safe_value($_POST['email']);
		$mobile=get_safe_value($_POST['mobile']);
		$gender=get_safe_value($_POST['gender']);
		$website=get_safe_value($_POST['website']);
		$instagram=get_safe_value($_POST['instagram']);
		$twitter=get_safe_value($_POST['twitter']);
		$bio=get_safe_value($_POST['bio']);

				mysqli_query($con,"update user set name='$name', firstname='$firstname', lastname='$lastname', email='$email', mobile='$mobile', gender='$gender', website='$website', instagram='$instagram', twitter='$twitter', bio='$bio' where id='$uidd'");
				echo "valid";
	    }
}
if (isset($_POST['type'])) {
	$type=get_safe_value($_POST['type']);
	$added_on=date('Y-m-d h:i:s');
	if($type=='register'){
		$name=get_safe_value($_POST['name']);
		$email=get_safe_value($_POST['email']);
		$mobile=get_safe_value($_POST['mobile']);
		$password=get_safe_value($_POST['password']);
		$check=mysqli_num_rows(mysqli_query($con,"select * from user where name='$name'"));
		if($check>0){
			echo "name_present";
		}else{
		$check1=mysqli_num_rows(mysqli_query($con,"select * from user where email='$email'"));
		if($check1>0){
			echo "email_present";
		}else{
			$new_password=password_hash($password,PASSWORD_BCRYPT);
			$rand_str=rand_str();
			$referral_code=rand_str();
			if(isset($_SESSION['FROM_REFERRAL_CODE']) && $_SESSION['FROM_REFERRAL_CODE']!=''){
				$from_referral_code=$_SESSION['FROM_REFERRAL_CODE'];
			}else{
				$from_referral_code='';
			}

			$image="defaultprofile.jpg";
			$image2="bg-small.png";
			mysqli_query($con,"insert into user(name,email,mobile,password,status,email_verify,added_on,rand_str,referral_code,from_referral_code,image,image2) values('$name','$email','$mobile','$new_password','1','0','$added_on','$rand_str','$referral_code','$from_referral_code','$image','$image2')");
			$id=mysqli_insert_id($con);
			unset($_SESSION['FROM_REFERRAL_CODE']);

			$getSetting=getSetting();
			$wallet_amt=$getSetting['wallet_amt'];
			if($wallet_amt>0){
					manageWallet($id,$wallet_amt,'in','Register');
			}
			$url=FRONT_SITE_PATH."verify?id=".$rand_str;
			$html="<h1>Verify your email address</h1>
					Click <a href='$url'>this link</a> to verify your email.</br> Ignore if you weren't the person that signed up.</br> Download our app for a better experience. Coming soon.";
			send_email($email,$html,'Windmill Digital');
			echo "sent";
		}
		}
	}

	if($type=='login'){
		$email=get_safe_value($_POST['email']);
		$password=get_safe_value($_POST['password']);

		$res=mysqli_query($con,"select * from user where email='$email'");
		$check=mysqli_num_rows($res);
		if($check>0){
			$row=mysqli_fetch_assoc($res);
			$status=$row['status'];
			$email_verify=$row['email_verify'];
			$dbpassword=$row['password'];
			if($email_verify==1){
				if($status==1){
					if(password_verify($password,$dbpassword)){
						$_SESSION['USER_ID']=$row['id'];
						$_SESSION['USER_NAME']=$row['name'];
						$_SESSION['USER_EMAIL']=$row['email'];

						if(isset($_SESSION['cart']) && count($_SESSION['cart'])>0){
							foreach($_SESSION['cart'] as $key=>$val){
								manageUserCart($_SESSION['USER_ID'],$val['qty'],$key);
							}
						}
						echo "valid";
					}else{
			echo "wrong";
		}
	}else {
		echo "wrong2";
	}
	}else {
		echo "wrong3";
	}
	}else {
		echo "wrong";
	}
	}

	if($type=='forgot'){
		$email=get_safe_value($_POST['user_email']);

		$res=mysqli_query($con,"select * from user where email='$email'");
		$check=mysqli_num_rows($res);
		if($check>0){
			$row=mysqli_fetch_assoc($res);
			$status=$row['status'];
			$email_verify=$row['email_verify'];
			$id=$row['id'];
			if($email_verify==1){
				if($status==1){
					$rand_password=rand(11111,99999);
					$new_password=password_hash($rand_password,PASSWORD_BCRYPT);
					mysqli_query($con,"update user set password='$new_password' where id='$id'");
					$html="<h1>Forgot your password</h1>
							We generated a new password for you. Use $rand_password as your new password.</br> You can update it later through your profile settings.</br> Download our app for a better experience. Coming soon.";
					send_email($email,$html,'New Password');
					echo "done";

				}else{
					echo "wrong";
				}
			}else{
				echo "wrong2";
			}
		}else{
			echo "wrong3";
		}
		echo json_encode($arr);
	}

	if($type=='change'){
		$password=get_safe_value($_POST['password']);
		$new_password=get_safe_value($_POST['new_password']);
		$uid=get_safe_value($_POST['uid']);
		$res=mysqli_query($con,"select * from user where id='$uid'");
	  $check_user=mysqli_num_rows($res);
	if($check_user>0){
		$row=mysqli_fetch_assoc($res);
		$dbpassword=$row['password'];
		if(password_verify($password,$dbpassword)){
			$newest_password=password_hash($new_password,PASSWORD_BCRYPT);
			mysqli_query($con,"update user set password='$newest_password' where id='$uid'");
			echo "valid";
		}else{
			echo "wrong";
		}
	}else {
		echo "wrong";
	}
	}
}

?>
