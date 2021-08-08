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
						<li class="breadcrumb__item breadcrumb__item--active">Explore</li>
					</ul>
				</div>
				<!-- end breadcrumb -->

				<!-- title -->
				<div class="col-12">
					<div class="main__title main__title--page">
						<h1>Explore exclusive virtual digital assets</h1>
					</div>
				</div>
				<!-- end title -->

				<!-- filter -->
				<div class="col-12">
					<div class="main__filter">
						<form action="#" class="main__filter-search">
							<input type="text" placeholder="Search...">
							<button type="button"><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24"><path d="M21.71,20.29,18,16.61A9,9,0,1,0,16.61,18l3.68,3.68a1,1,0,0,0,1.42,0A1,1,0,0,0,21.71,20.29ZM11,18a7,7,0,1,1,7-7A7,7,0,0,1,11,18Z"/></svg></button>
						</form>
					</div>
				</div>
				<!-- end filter -->
			</div>

			<div class="row row--grid">
				<div class="col-12 col-sm-6 col-lg-4 col-xl-3">
					<!-- card -->
					<?php
          $sql="select * from assets where type='1'";
          $res=mysqli_query($con,$sql);
                       ?>
                       <?php
                       while($row=mysqli_fetch_assoc($res)){ ?>
          <div class="card">
            <a href="item?id=<?php echo $row['id']?>" class="card__cover">
              <img src="<?php echo  PRODUCT_IMAGE_SITE_PATH.$row['file']?>" alt="">
            </a>
            <h3 class="card__title"><a href="item?id=<?php echo $row['id']?>"><?php echo $row['name']; ?></a></h3>
            <div class="card__author">
              <?php getUserDetailsByid($row['owner_id']) ?>
              <img src="<?php echo PRODUCT_IMAGE_SITE_PATH.$getUserDetails['image']; ?>" alt="">
              <a href="profile?id=<?php echo $getUserDetails['id']; ?>">@<?php echo $getUserDetails['name']; ?></a>
            </div>
            <div class="card__info">
              <div class="card__price">
                <span>Reserve price</span>
                <span><?php echo $row['price'];?> USD</span>
              </div>

							<?php
							if (isset($_POST['dislike'])) {
								$item=$row['id'];
								$user=$_SESSION['USER_ID'];
								$check_likes=mysqli_num_rows(mysqli_query($con,"select * from likes where item_id='$item' and user_id='$user'"));
								if($check_likes>0){
									mysqli_query($con,"delete from likes where item_id='$item' and user_id='$user'");
								}
							}
							if (isset($_POST['like'])) {
								$item=$row['id'];
								$user=$_SESSION['USER_ID'];
								$check_likes=mysqli_num_rows(mysqli_query($con,"select * from likes where item_id='$item' and user_id='$user'"));
								if($check_likes>0){

								}else{
										mysqli_query($con,"insert into likes(item_id,user_id) values('$item','$user')");
									}
								}
							$item=$row['id'];
							$user=$_SESSION['USER_ID'];
							$check_likes=mysqli_num_rows(mysqli_query($con,"select * from likes where item_id='$item' and user_id='$user'"));
							if($check_likes>0){?>
	            <form method="post">
	              <button class="card__likes card__likes--active" type="submit" name="dislike">
	                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24"><path d="M20.16,5A6.29,6.29,0,0,0,12,4.36a6.27,6.27,0,0,0-8.16,9.48l6.21,6.22a2.78,2.78,0,0,0,3.9,0l6.21-6.22A6.27,6.27,0,0,0,20.16,5Zm-1.41,7.46-6.21,6.21a.76.76,0,0,1-1.08,0L5.25,12.43a4.29,4.29,0,0,1,0-6,4.27,4.27,0,0,1,6,0,1,1,0,0,0,1.42,0,4.27,4.27,0,0,1,6,0A4.29,4.29,0,0,1,18.75,12.43Z"/></svg>
	                <?php $likes=getlikes($row['id']) ?>
	                <span><?php echo $likes; ?></span>
	              </button>
	            </form>
	          <?php }else {
	          	?>
							<form method="post">
	              <button class="card__likes" type="submit" name="like">
	              <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24"><path d="M20.16,5A6.29,6.29,0,0,0,12,4.36a6.27,6.27,0,0,0-8.16,9.48l6.21,6.22a2.78,2.78,0,0,0,3.9,0l6.21-6.22A6.27,6.27,0,0,0,20.16,5Zm-1.41,7.46-6.21,6.21a.76.76,0,0,1-1.08,0L5.25,12.43a4.29,4.29,0,0,1,0-6,4.27,4.27,0,0,1,6,0,1,1,0,0,0,1.42,0,4.27,4.27,0,0,1,6,0A4.29,4.29,0,0,1,18.75,12.43Z"/></svg>
	              <?php $likes=getlikes($row['id']) ?>
	              <span><?php echo $likes; ?></span>
	            </button>
	          </form>
							<?php
	          }?>
            </div>
          </div>
        <?php } ?>
					<!-- end card -->
				</div>
			</div>

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
