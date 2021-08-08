<?php
include('top.php');
if(isset($_GET['referral_code']) && $_GET['referral_code']!=''){
	$_SESSION['FROM_REFERRAL_CODE']=get_safe_value($_GET['referral_code']);
}
?>
	<!-- main content -->
	<main class="main">
		<div class="container">
			<div class="row row--grid">
				<!-- breadcrumb -->
				<div class="col-12">
					<ul class="breadcrumb">
						<li class="breadcrumb__item"><a href="index.html">Home</a></li>
						<li class="breadcrumb__item breadcrumb__item--active">Sign up</li>
					</ul>
				</div>
				<!-- end breadcrumb -->

				<!-- registration form -->
				<div class="col-12">
					<div class="sign">
						<div class="sign__content">
							<form id="register-form" method="post" class="sign__form">
								<?php
								$sql="select * from details";
							  $res=mysqli_query($con,$sql);
							               ?>
							               <?php
							               while($row=mysqli_fetch_assoc($res)){?>
								<a href="index" class="sign__logo">
									<img src="<?php echo PRODUCT_IMAGE_SITE_PATH.$row['logo']?>" alt="">
								</a>
							<?php } ?>

								<div class="sign__group">
									<input type="text" id="name" name="name" class="sign__input" placeholder="Username">
                  <span class="sign__text" id="name_error"></span>
								</div>
								<div class="sign__group">
									<input type="text" id="email" name="email" class="sign__input" placeholder="Email">
                  <span class="sign__text" id="email_error"></span>
								</div>

								<div class="sign__group">
									<input type="password" id="password" name="password" class="sign__input" placeholder="Password">
                  <span class="sign__text" id="password_error"></span>
								</div>

								<div class="sign__group">
									<input type="text" id="mobile" name="mobile" class="sign__input" placeholder="Mobile">
                  <span class="sign__text" id="mobile_error"></span>
								</div>

								<div class="sign__group sign__group--checkbox">
									<input id="remember" name="remember" type="checkbox" checked="checked">
									<label for="remember">I agree to the <a href="privacy">Privacy Policy</a></label>
								</div>
								<input type="hidden" id="type" name="type" value="register"/>
								<button class="sign__btn" type="button" onclick="user_register()" >Sign up</button>
                <span class="sign__text" id="register"></span>

								<span class="sign__text">Already have an account? <a href="signin">Sign in!</a></span>
							</form>
						</div>
					</div>
				</div>
				<!-- end registration form -->
			</div>
		</div>
	</main>
	<!-- end main content -->

	<?php
	include('footer.php');
	?>
