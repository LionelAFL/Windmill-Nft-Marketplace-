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
						<li class="breadcrumb__item"><a href="index">Home</a></li>
						<li class="breadcrumb__item breadcrumb__item--active">Artists</li>
					</ul>
				</div>
				<!-- end breadcrumb -->

				<!-- title -->
				<div class="col-12">
					<div class="main__title main__title--page">
						<h1>Artists</h1>
					</div>
				</div>
				<!-- end title -->

				<!-- filter -->
				<div class="col-12">
					<div class="main__filter">
						<form action="#" class="main__filter-search">
							<input type="text" placeholder="Search for a creator…">
							<button type="button"><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24"><path d="M21.71,20.29,18,16.61A9,9,0,1,0,16.61,18l3.68,3.68a1,1,0,0,0,1.42,0A1,1,0,0,0,21.71,20.29ZM11,18a7,7,0,1,1,7-7A7,7,0,0,1,11,18Z"/></svg></button>
						</form>

						<div class="main__filter-wrap">
							<select class="main__select" name="status">
								<option value="popularity">By popularity</option>
							</select>

							<select class="main__select" name="authors">
								<option value="0">All Authors</option>
							</select>
						</div>
					</div>
				</div>
				<!-- end filter -->
			</div>

			<!-- authors -->
			<div class="row row--grid">
				<?php
				$sql="select * from user";
			  $res=mysqli_query($con,$sql);
			               ?>
			               <?php
			               while($row=mysqli_fetch_assoc($res)){?>
				<div class="col-12 col-sm-6 col-lg-4 col-xl-3">
					<div class="author">
						<a href="profile?id=<?php echo $row['id']?>" class="author__cover author__cover--bg" data-bg="<?php echo PRODUCT_IMAGE_SITE_PATH.$row['image2']?>">
						</a>
						<div class="author__meta">
							<a href="profile?id=<?php echo $row['id']?>" class="author__avatar author__avatar--verified">
								<img src="<?php echo PRODUCT_IMAGE_SITE_PATH.$row['image']?>" alt="">
							</a>
							<h3 class="author__name"><a href="profile?id=<?php echo $row['id']?>"><?php echo $row['firstname']." ".$row['lastname'];?></a></h3>
							<h3 class="author__nickname"><a href="profile?id=<?php echo $row['id']?>">@<?php echo $row['name']?></a></h3>
							<p class="author__text"><?php echo $row['bio'] ?></p>
							<div class="author__wrap">
								<div class="author__followers">
									<?php
									$isd=$row['id'];
									$query = "SELECT COUNT(*) as count from follow where user_id='$isd'";
									$query_result = mysqli_query($con , $query);
									while ($row = mysqli_fetch_assoc($query_result)) {
										$output = $row['count'];
									} ?>
									<p><?php echo $output; ?></p>
									<span>Followers</span>
								</div>
							</div>
						</div>
					</div>
				</div>
			<?php } ?>

			<!-- paginator -->
			<div class="row row--grid">
				<div class="col-12">
					<div class="paginator">
						<span class="paginator__pages">8 from 169</span>

						<ul class="paginator__list">
							<li>
								<a href="#"><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24"><path d="M17,11H9.41l3.3-3.29a1,1,0,1,0-1.42-1.42l-5,5a1,1,0,0,0-.21.33,1,1,0,0,0,0,.76,1,1,0,0,0,.21.33l5,5a1,1,0,0,0,1.42,0,1,1,0,0,0,0-1.42L9.41,13H17a1,1,0,0,0,0-2Z"/></svg></a>
							</li>
							<li class="active"><a href="#">1</a></li>
							<li><a href="#">2</a></li>
							<li><a href="#">3</a></li>
							<li><a href="#">4</a></li>
							<li>
								<a href="#"><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24"><path d="M17.92,11.62a1,1,0,0,0-.21-.33l-5-5a1,1,0,0,0-1.42,1.42L14.59,11H7a1,1,0,0,0,0,2h7.59l-3.3,3.29a1,1,0,0,0,0,1.42,1,1,0,0,0,1.42,0l5-5a1,1,0,0,0,.21-.33A1,1,0,0,0,17.92,11.62Z"/></svg></a>
							</li>
						</ul>
					</div>
				</div>
			</div>
			<!-- end paginator -->
		</div>
	</main>
	<!-- end main content -->

	<?php
	include('footer.php')
	?>
