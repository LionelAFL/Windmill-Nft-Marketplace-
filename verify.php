<?php
include ("top.php");

$msg="";
//Email id verify
if(isset($_GET['id']) && $_GET['id']!=''){
	$id=get_safe_value($_GET['id']);
	mysqli_query($con,"update user set email_verify=1 where rand_str='$id'");
	$msg="Email id verify";


	/*$res=mysqli_query($con,"select from_referral_code,email from user where rand_str='$id'");
	if(mysqli_num_rows($res)>0){
		$row=mysqli_fetch_assoc($res);
		$email=$row['email'];
		$from_referral_code=$row['from_referral_code'];
		$row=mysqli_fetch_assoc(mysqli_query($con,"select id from user where referral_code='$from_referral_code'"));
		$uid=$row['id'];
		$msg1='Referral Amt from '.$email;
		manageWallet($uid,50,'in',$msg1);
	}*/


}else{
	redirect('index');
}
?>
<!-- main content -->
<main class="main">
	<div class="container">
		<div class="row row--grid">
			<!-- breadcrumb -->
			<div class="col-12">
				<ul class="breadcrumb">
					<li class="breadcrumb__item"><a href="indehtml">Home</a></li>
					<li class="breadcrumb__item breadcrumb__item--active">Email</li>
				</ul>
			</div>
			<!-- end breadcrumb -->

			<!-- title -->
			<div class="col-12 col-xl-11">
				<div class="main__title main__title--page">
					<h1>Your Email has been verified</h1>

					<p><a href="signin">Sign in now</a></p>
				</div>
			</div>
			<!-- end title -->
	</div>
</main>
<!-- end main content -->

<?php
include("footer.php");
?>
