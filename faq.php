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
						<li class="breadcrumb__item breadcrumb__item--active">FAQ</li>
					</ul>
				</div>
				<!-- end breadcrumb -->

				<!-- title -->
				<div class="col-12 col-xl-11">
					<div class="main__title main__title--page">
						<h1>Help center</h1>

						<p>View frequently asked questions</p>
					</div>
				</div>
				<!-- end title -->

			<!-- faq -->
			<div class="row row--grid">
				<div class="col-12 col-lg-4">
					<?php
					$sql="select * from faq";
				  $res=mysqli_query($con,$sql);
				               ?>
				               <?php
				               while($row=mysqli_fetch_assoc($res)){?>
					<div class="faq">
						<h3 class="faq__title"><?php echo $row['title']; ?></h3>
						<p class="faq__text"><?php echo $row['des']; ?></p>
					</div>
				<?php } ?>
				</div>
			</div>
			<!-- end faq -->
		</div>
	</main>
	<!-- end main content -->
	<?php
	include('footer.php');
	?>
