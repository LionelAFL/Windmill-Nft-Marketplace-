<?php
include('top.php');
?>
	<!-- main content -->
	<main class="main">
		<div class="container">
			<div class="row row--grid">
				<!-- breadcrumb -->
				<div class="col-12">
					<ul class="breadcrumb">
						<li class="breadcrumb__item"><a href="index.html">Home</a></li>
						<li class="breadcrumb__item breadcrumb__item--active">Sign in</li>
					</ul>
				</div>
				<!-- end breadcrumb -->

				<!-- sign in -->
				<div class="col-12">
					<div class="sign">
						<div class="sign__content">
							<!-- authorization form -->
							<form id="login-form" method="post" class="sign__form">
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
									<input type="text" id="email" name="email" class="sign__input" placeholder="Email">
									<span class="sign__text" id="email_error"></span>
								</div>

								<div class="sign__group">
									<input type="password" id="password" name="password" class="sign__input" placeholder="Password">
									<span class="sign__text" id="password_error"></span>
								</div>

								<div class="sign__group sign__group--checkbox">
									<input id="remember" name="remember" type="checkbox" checked="checked">
									<label for="remember">Remember Me</label>
								</div>
								<input type="hidden" id="type" name="type" value="login"/>
								<button class="sign__btn" onclick="user_login()" type="button">Sign in</button>
								<span class="sign__text" id="login_msg"></span>

								<span class="sign__text">Don't have an account? <a href="signup">Sign up!</a></span>

								<span class="sign__text"><a href="forgot">Forgot password?</a></span>
							</form>
							<!-- end authorization form -->
						</div>
					</div>
				</div>
				<!-- end sign in -->
			</div>
		</div>
	</main>
	<!-- end main content -->

	<?php
	include('footer.php');
	?>
