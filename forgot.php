<?php
include('top.php')
?>

	<!-- main content -->
	<main class="main">
		<div class="container">
			<div class="row row--grid">
				<!-- breadcrumb -->
				<div class="col-12">
					<ul class="breadcrumb">
						<li class="breadcrumb__item"><a href="index.html">Home</a></li>
						<li class="breadcrumb__item breadcrumb__item--active">Restore password</li>
					</ul>
				</div>
				<!-- end breadcrumb -->

				<!-- authorization form -->
				<div class="col-12">
					<div class="sign">
						<div class="sign__content">
							<form id="forgot-form" method="post" class="sign__form">
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
									<input type="text" class="sign__input" id="email" name="email" placeholder="Email">
									<span id="email_error" class="sign__text"></span>
								</div>

								<div class="sign__group sign__group--checkbox">
									<input id="remember" name="remember" type="checkbox" checked="checked">
									<label for="remember">I agree to the <a href="privacy">Privacy Policy</a></label>
								</div>
								<input type="hidden" id="type" name="type" value="forgot"/>
								<button class="sign__btn" type="button" onclick="user_forgot()">Send</button>
								<span id="forgot" class="sign__text"></span>
								<span class="sign__text">We will send a password to your Email</span>
							</form>
						</div>

					</div>
				</div>
				<!-- end authorization form -->
			</div>
		</div>
	</main>
	<!-- end main content -->

	<?php
	include('footer.php')
	?>
