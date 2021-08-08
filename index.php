<?php
include ("top.php");
?>

	<!-- main content -->
	<main class="main">
		<!-- home -->
		<div class="home">
			<div class="container">
				<div class="row">
					<div class="col-12">
						<?php
						$sql="select * from details";
					  $res=mysqli_query($con,$sql);
					               ?>
					               <?php
					               while($row=mysqli_fetch_assoc($res)){?>
						<div class="home__content">
							<h1 class="home__title"><?php echo $row['title']?></h1>
							<p class="home__text"><?php echo $row['title_sub']?></p>

							<div class="home__btns">
								<a href="explore" class="home__btn home__btn--clr">Explore</a>
								<a href="create" class="home__btn">Create</a>
							</div>
						</div>
					<?php } ?>
					</div>
				</div>
			</div>
		</div>
		<!-- end home -->

<?php
include('attach.php')
?>

	<!-- end modal asset -->
<?php
include('footer.php');
 ?>
