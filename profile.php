<?php
include('top.php');
$isd="";
$isd2="";
if(isset($_SESSION['USER_ID'])){
	$uid=$_SESSION['USER_ID'];
	$isd2=$_SESSION['USER_ID'];
}
if(isset($_GET['id'])){
	$id=get_safe_value($_GET['id']);
	$isd=get_safe_value($_GET['id']);
	$getUserDetails=getUserDetailsByid($id);
}else{
	$getUserDetails=getUserDetailsByid($uid);
}

if(empty($_GET['id']) && empty($_SESSION['USER_ID'])){
	redirect('index');
}
?>

	<!-- main content -->

	<main class="main">
		<div class="main__author" data-bg="<?php echo PRODUCT_IMAGE_SITE_PATH.$getUserDetails['image2']?>"></div>
		<div class="container">
			<div class="row row--grid">
				<div class="col-12 col-xl-3">
					<div class="author author--page">
						<div class="author__meta">
							<a href="<?php echo PRODUCT_IMAGE_SITE_PATH.$getUserDetails['image']?>" class="author__avatar author__avatar--verified">
									<img src="<?php echo PRODUCT_IMAGE_SITE_PATH.$getUserDetails['image']?>" alt="">
									</a>
							<h1 class="author__name"><a href="profile"><?php echo $getUserDetails['firstname']." ". $getUserDetails['lastname'];?></a></h1>
							<h2 class="author__nickname"><a href="profile">@<?php echo $getUserDetails['name'];?></a></h2>
							<p class="author__text"><?php echo $getUserDetails['bio'];?></p>
							<?php
							if($id=$uid) {?>
								<div class="author__code">
									<input type="text" value="<?php echo FRONT_SITE_PATH."signup?referral_code=".$getUserDetails['referral_code']?>" id="author-code">
									<button type="button">
										<span>Copied</span>
										<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24"><path d="M18,19H6a3,3,0,0,1-3-3V8A1,1,0,0,0,1,8v8a5,5,0,0,0,5,5H18a1,1,0,0,0,0-2Zm5-9.06a1.31,1.31,0,0,0-.06-.27l0-.09a1.07,1.07,0,0,0-.19-.28h0l-6-6h0a1.07,1.07,0,0,0-.28-.19l-.09,0L16.06,3H8A3,3,0,0,0,5,6v8a3,3,0,0,0,3,3H20a3,3,0,0,0,3-3V10S23,10,23,9.94ZM17,6.41,19.59,9H18a1,1,0,0,1-1-1ZM21,14a1,1,0,0,1-1,1H8a1,1,0,0,1-1-1V6A1,1,0,0,1,8,5h7V8a3,3,0,0,0,3,3h3Z"/></svg>
									</button>
								</div>
						<?php	}?>

							<a href="#" class="author__link"><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24"><path d="M21.41,8.64s0,0,0-.05a10,10,0,0,0-18.78,0s0,0,0,.05a9.86,9.86,0,0,0,0,6.72s0,0,0,.05a10,10,0,0,0,18.78,0s0,0,0-.05a9.86,9.86,0,0,0,0-6.72ZM4.26,14a7.82,7.82,0,0,1,0-4H6.12a16.73,16.73,0,0,0,0,4Zm.82,2h1.4a12.15,12.15,0,0,0,1,2.57A8,8,0,0,1,5.08,16Zm1.4-8H5.08A8,8,0,0,1,7.45,5.43,12.15,12.15,0,0,0,6.48,8ZM11,19.7A6.34,6.34,0,0,1,8.57,16H11ZM11,14H8.14a14.36,14.36,0,0,1,0-4H11Zm0-6H8.57A6.34,6.34,0,0,1,11,4.3Zm7.92,0h-1.4a12.15,12.15,0,0,0-1-2.57A8,8,0,0,1,18.92,8ZM13,4.3A6.34,6.34,0,0,1,15.43,8H13Zm0,15.4V16h2.43A6.34,6.34,0,0,1,13,19.7ZM15.86,14H13V10h2.86a14.36,14.36,0,0,1,0,4Zm.69,4.57a12.15,12.15,0,0,0,1-2.57h1.4A8,8,0,0,1,16.55,18.57ZM19.74,14H17.88A16.16,16.16,0,0,0,18,12a16.28,16.28,0,0,0-.12-2h1.86a7.82,7.82,0,0,1,0,4Z"/></svg> <?php echo $getUserDetails['website'];?></a>
							<div class="author__social">
								<a href="<?php echo $getUserDetails['instagram'];?>" target="_blank"><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24"><path d="M17.34,5.46h0a1.2,1.2,0,1,0,1.2,1.2A1.2,1.2,0,0,0,17.34,5.46Zm4.6,2.42a7.59,7.59,0,0,0-.46-2.43,4.94,4.94,0,0,0-1.16-1.77,4.7,4.7,0,0,0-1.77-1.15,7.3,7.3,0,0,0-2.43-.47C15.06,2,14.72,2,12,2s-3.06,0-4.12.06a7.3,7.3,0,0,0-2.43.47A4.78,4.78,0,0,0,3.68,3.68,4.7,4.7,0,0,0,2.53,5.45a7.3,7.3,0,0,0-.47,2.43C2,8.94,2,9.28,2,12s0,3.06.06,4.12a7.3,7.3,0,0,0,.47,2.43,4.7,4.7,0,0,0,1.15,1.77,4.78,4.78,0,0,0,1.77,1.15,7.3,7.3,0,0,0,2.43.47C8.94,22,9.28,22,12,22s3.06,0,4.12-.06a7.3,7.3,0,0,0,2.43-.47,4.7,4.7,0,0,0,1.77-1.15,4.85,4.85,0,0,0,1.16-1.77,7.59,7.59,0,0,0,.46-2.43c0-1.06.06-1.4.06-4.12S22,8.94,21.94,7.88ZM20.14,16a5.61,5.61,0,0,1-.34,1.86,3.06,3.06,0,0,1-.75,1.15,3.19,3.19,0,0,1-1.15.75,5.61,5.61,0,0,1-1.86.34c-1,.05-1.37.06-4,.06s-3,0-4-.06A5.73,5.73,0,0,1,6.1,19.8,3.27,3.27,0,0,1,5,19.05a3,3,0,0,1-.74-1.15A5.54,5.54,0,0,1,3.86,16c0-1-.06-1.37-.06-4s0-3,.06-4A5.54,5.54,0,0,1,4.21,6.1,3,3,0,0,1,5,5,3.14,3.14,0,0,1,6.1,4.2,5.73,5.73,0,0,1,8,3.86c1,0,1.37-.06,4-.06s3,0,4,.06a5.61,5.61,0,0,1,1.86.34A3.06,3.06,0,0,1,19.05,5,3.06,3.06,0,0,1,19.8,6.1,5.61,5.61,0,0,1,20.14,8c.05,1,.06,1.37.06,4S20.19,15,20.14,16ZM12,6.87A5.13,5.13,0,1,0,17.14,12,5.12,5.12,0,0,0,12,6.87Zm0,8.46A3.33,3.33,0,1,1,15.33,12,3.33,3.33,0,0,1,12,15.33Z"/></svg></a>

								<a href="<?php echo $getUserDetails['twitter'];?>" target="_blank"><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24"><path d="M22,5.8a8.49,8.49,0,0,1-2.36.64,4.13,4.13,0,0,0,1.81-2.27,8.21,8.21,0,0,1-2.61,1,4.1,4.1,0,0,0-7,3.74A11.64,11.64,0,0,1,3.39,4.62a4.16,4.16,0,0,0-.55,2.07A4.09,4.09,0,0,0,4.66,10.1,4.05,4.05,0,0,1,2.8,9.59v.05a4.1,4.1,0,0,0,3.3,4A3.93,3.93,0,0,1,5,13.81a4.9,4.9,0,0,1-.77-.07,4.11,4.11,0,0,0,3.83,2.84A8.22,8.22,0,0,1,3,18.34a7.93,7.93,0,0,1-1-.06,11.57,11.57,0,0,0,6.29,1.85A11.59,11.59,0,0,0,20,8.45c0-.17,0-.35,0-.53A8.43,8.43,0,0,0,22,5.8Z"/></svg></a>

							</div>
							<?php if (isset($_POST['follow'])) {
								$isd2=$_SESSION['USER_ID'];
								$isd=$_GET['id'];
								$check_follow=mysqli_num_rows(mysqli_query($con,"select * from follow where user_id='$isd' and follower_id='$isd2'"));
								if($check_follow>0){

								}else{
										mysqli_query($con,"insert into follow(user_id,follower_id) values('$isd','$isd2')");
								}
							}
							if (isset($_POST['unfollow'])) {
								$isd2=$_SESSION['USER_ID'];
								$isd=$_GET['id'];
								$check_follow=mysqli_num_rows(mysqli_query($con,"select * from follow where user_id='$isd' and follower_id='$isd2'"));
								if($check_follow>0){
									mysqli_query($con,"delete from follow where user_id='$isd' and follower_id='$isd2'");
								}
							}

							?>

							<form class="author__wrap" method="post">
							<div class="author__wrap">
									<?php $query = "SELECT COUNT(*) as count from follow where user_id='$isd'";
									$query_result = mysqli_query($con , $query);
									while ($row = mysqli_fetch_assoc($query_result)) {
										$output = $row['count'];
									} ?>
									<div class="author__followers">
									<p><?php echo $output; ?></p>
									<span>Followers</span>
								</div>
								<?php
								if (empty($_GET['id'])) {

								}else {
									if(($_GET['id'])==($_SESSION['USER_ID'])){

									}else {
										?>
										<?php
										$check_follow=mysqli_num_rows(mysqli_query($con,"select * from follow where user_id='$isd' and follower_id='$isd2'"));
										if($check_follow>0){?>
											<button class="author__follow" name="unfollow" type="submit">Unfollow</button>
											<?php
										}else {
											?>
											<button class="author__follow" name="follow" type="submit">Follow</button>
											<?php
										}?>

										<?php
									}
								}
								?>
							</div>
							</form>

								<?php
								if (empty($_GET['id'])) {
								?><div class="author__wrap">
									<form class="" action="create" method="post">
										<button class="author__follow" type="submit">Create Nft</button>
									</form>
								</div><?php
								}else	if(($_GET['id'])==($_SESSION['USER_ID'])){?>
									<div class="author__wrap">
										<form class="" action="create" method="post">
											<button class="author__follow" type="submit">Create Nft</button>
										</form>
									</div>
									<?php
								}
								 ?>
						</div>
					</div>
				</div>

				<div class="col-12 col-xl-9">
					<div class="profile">
						<!-- tabs nav -->
						<ul class="nav nav-tabs profile__tabs" id="profile__tabs" role="tablist">
							<li class="nav-item">
								<a class="nav-link active" data-toggle="tab" href="#tab-1" role="tab" aria-controls="tab-1" aria-selected="true">On Sale</a>
							</li>
							<?php
							if (empty($_GET['id'])) {?>
								<li class="nav-item">
									<a class="nav-link" data-toggle="tab" href="#tab-2" role="tab" aria-controls="tab-2" aria-selected="false">Created</a>
								</li>

								<li class="nav-item">
									<a class="nav-link" data-toggle="tab" href="#tab-4" role="tab" aria-controls="tab-4" aria-selected="false">Settings</a>
								</li>
							<?php }elseif(($_GET['id'])==($_SESSION['USER_ID'])){?>
							<li class="nav-item">
								<a class="nav-link" data-toggle="tab" href="#tab-2" role="tab" aria-controls="tab-2" aria-selected="false">Created</a>
							</li>

							<li class="nav-item">
								<a class="nav-link" data-toggle="tab" href="#tab-4" role="tab" aria-controls="tab-4" aria-selected="false">Settings</a>
							</li>

							<?php } ?>
						</ul>
						<!-- end tabs nav -->
					</div>

					<!-- content tabs -->
					<div class="tab-content">
						<div class="tab-pane fade show active" id="tab-1" role="tabpanel">
							<div class="row row--grid">
								<?php
								if (isset($_GET['id'])) {
									$use=$_GET['id'];
								}else {
									$use=$_SESSION['USER_ID'];
								}

									$sql="select * from assets where owner_id='$use' and status='1'";
								  $res=mysqli_query($con,$sql);
								               ?>
								               <?php
								               while($row=mysqli_fetch_assoc($res)){ ?>
								<div class="col-12 col-sm-6 col-lg-4">
									<!-- card -->
									<div class="card">
										<a href="item?id=<?php echo $row['id']?>" class="card__cover">
											<img src="<?php echo  PRODUCT_IMAGE_SITE_PATH.$row['file']?>" alt="">
											<span class="card__time card__time--clock">
												<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24"><path d="M8.46777,8.39453l-.00225.00183-.00214.00208ZM18.42188,8.208a1.237,1.237,0,0,0-.23-.17481.99959.99959,0,0,0-1.39941.41114,5.78155,5.78155,0,0,1-1.398,1.77734,8.6636,8.6636,0,0,0,.1333-1.50977,8.71407,8.71407,0,0,0-4.40039-7.582,1.00009,1.00009,0,0,0-1.49121.80567A7.017,7.017,0,0,1,7.165,6.87793l-.23047.1875a8.51269,8.51269,0,0,0-1.9873,1.8623A8.98348,8.98348,0,0,0,8.60254,22.83594.99942.99942,0,0,0,9.98,21.91016a1.04987,1.04987,0,0,0-.0498-.3125,6.977,6.977,0,0,1-.18995-2.58106,9.004,9.004,0,0,0,4.3125,4.0166.997.997,0,0,0,.71534.03809A8.99474,8.99474,0,0,0,18.42188,8.208ZM14.51709,21.03906a6.964,6.964,0,0,1-3.57666-4.40234,8.90781,8.90781,0,0,1-.17969-.96387,1.00025,1.00025,0,0,0-.79931-.84473A.982.982,0,0,0,9.77,14.80957a.99955.99955,0,0,0-.8667.501,8.9586,8.9586,0,0,0-1.20557,4.71777,6.98547,6.98547,0,0,1-1.17529-9.86816,6.55463,6.55463,0,0,1,1.562-1.458.74507.74507,0,0,0,.07422-.05469s.29669-.24548.30683-.2511a8.96766,8.96766,0,0,0,2.89874-4.63269,6.73625,6.73625,0,0,1,1.38623,8.08789,1.00024,1.00024,0,0,0,1.18359,1.418,7.85568,7.85568,0,0,0,3.86231-2.6875,7.00072,7.00072,0,0,1-3.2793,10.457Z"/></svg>
												<span class="card__clock card__clock--2"></span>
											</span>
										</a>
										<h3 class="card__title"><a href="item?id=<?php echo $row['id']?>"><?php echo $row['name']; ?></a></h3>
										<div class="card__author card__author--verified">
											<?php getUserDetailsByid($row['owner_id']) ?>
											<img src="<?php echo PRODUCT_IMAGE_SITE_PATH.$getUserDetails['image']; ?>" alt="">
											<a href="profile?id=<?php echo $getUserDetails['id']; ?>"><?php echo $getUserDetails['name']; ?></a>
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
									<!-- end card -->
								</div>
							<?php } ?>


							</div>

							<div class="row row--grid">
								<div class="col-12">
									<button class="main__load" type="button" data-toggle="collapse" data-target="#collapsemore" aria-expanded="false" aria-controls="collapsemore">Load more</button>
								</div>
							</div>
							<!-- end collapse -->
						</div>

						<div class="tab-pane fade" id="tab-2" role="tabpanel">
							<div class="row row--grid">
								<div class="col-12 col-sm-6 col-lg-4">
									<!-- card -->
									<?php
									$uses=$_SESSION['USER_ID'];
				          $sql="select * from assets where creator_id='$uses'";
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
											<a href="create?id=<?php echo $row['id']?>">Edit</a>
				              </button>
				            </div>
				          </div>
				        <?php } ?>
							</div>
						</div>
									<!-- end card -->

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

						<div class="tab-pane fade" id="tab-4" role="tabpanel">
							<div class="row row--grid">
								<!-- details form -->
								<div class="col-12 col-lg-6">
									<form id="edit-form" class="sign__form sign__form--profile" method="post">
										<div class="row">
											<div class="col-12">
												<h4 class="sign__title">Profile details</h4>
											</div>


											<div class="col-12 col-md-6 col-lg-12 col-xl-6">
												<div class="sign__group">
													<label class="sign__label" for="username">Username</label>
													<input id="name" type="text" name="name" class="sign__input" value="<?php echo $getUserDetails['name'];?>">
												</div>
											</div>

											<div class="col-12 col-md-6 col-lg-12 col-xl-6">
												<div class="sign__group">
													<label class="sign__label" for="email">Email</label>
													<input id="email" type="text" name="email" class="sign__input" value="<?php echo $getUserDetails['email'];?>">
												</div>
											</div>

											<div class="col-12 col-md-6 col-lg-12 col-xl-6">
												<div class="sign__group">
													<label class="sign__label" for="firstname">First name</label>
													<input id="firstname" type="text" name="firstname" class="sign__input" value="<?php echo $getUserDetails['firstname'];?>">
												</div>
											</div>

											<div class="col-12 col-md-6 col-lg-12 col-xl-6">
												<div class="sign__group">
													<label class="sign__label" for="lastname">Last name</label>
													<input id="lastname" type="text" name="lastname" class="sign__input" value="<?php echo $getUserDetails['lastname'];?>">
												</div>
											</div>

											<div class="col-12 col-md-6 col-lg-12 col-xl-6">
												<div class="sign__group">
													<label class="sign__label" for="lastname">Mobile</label>
													<input id="mobile" type="text" name="mobile" class="sign__input" value="<?php echo $getUserDetails['mobile'];?>">
												</div>
											</div>

											<div class="col-12 col-md-6 col-lg-12 col-xl-6">
												<div class="sign__group">
													<label class="sign__label" for="select">Gender</label>
													<select name="gender" id="gender" class="sign__select">
														<option value="<?php echo $getUserDetails['gender'];?>"><?php echo $getUserDetails['gender'];?></option>
														<option value="male">male</option>
														<option value="female">female</option>
													</select>
												</div>
												<span class="sign__text" id="gender_error"></span>
											</div>

											<div class="col-12 col-md-6 col-lg-12 col-xl-6">
												<div class="sign__group">
													<label class="sign__label" for="lastname">Website</label>
													<input id="website" type="text" name="website" class="sign__input" value="<?php echo $getUserDetails['website'];?>">
												</div>
											</div>

											<div class="col-12 col-md-6 col-lg-12 col-xl-6">
												<div class="sign__group">
													<label class="sign__label" for="lastname">Instagram</label>
													<input id="instagram" type="text" name="instagram" class="sign__input" value="<?php echo $getUserDetails['instagram'];?>">
												</div>
											</div>

											<div class="col-12 col-md-6 col-lg-12 col-xl-6">
												<div class="sign__group">
													<label class="sign__label" for="lastname">Twitter</label>
													<input id="twitter" type="text" name="twitter" class="sign__input" value="<?php echo $getUserDetails['twitter'];?>">
												</div>
											</div>

											<div class="col-12 col-md-6 col-lg-12 col-xl-6">
												<div class="sign__group">
													<label class="sign__label" for="lastname">Bio</label>
													<input id="bio" type="text" name="bio" class="sign__input" value="<?php echo $getUserDetails['bio'];?>">
												</div>
												<span class="sign__text" id="bio_error"></span>
											</div>
											<input type="hidden" id="typee" name="typee" value="edit"/>
											<input type="hidden" id="uidd" name="uidd" value="<?php echo $_SESSION['USER_ID']; ?>"/>

											<div class="col-12">
												<button class="sign__btn" type="button" onclick="user_edit()">Save</button>
											</div>
											<span class="sign__text" id="save"></span>
										</div>
									</form>
								</div>
								<!-- end details form -->

								<!-- password form -->
								<div class="col-12 col-lg-6">
									<form id="change-form" class="sign__form sign__form--profile" method="post">
										<div class="row">
											<div class="col-12">
												<h4 class="sign__title">Change password</h4>
											</div>

											<div class="col-12 col-md-6 col-lg-12 col-xl-6">
												<div class="sign__group">
													<label class="sign__label" for="oldpass">Old password</label>
													<input id="password" type="password" name="password" class="sign__input">
												</div>
												<span class="sign__text" id="password_error"></span>
											</div>

											<div class="col-12 col-md-6 col-lg-12 col-xl-6">
												<div class="sign__group">
													<label class="sign__label" for="newpass">New password</label>
													<input id="new_password" type="password" name="new_password" class="sign__input">
												</div>
												<span class="sign__text" id="new_password_error"></span>
											</div>
											<input type="hidden" id="type" name="type" value="change"/>
											<input type="hidden" id="uid" name="uid" value="<?php echo $_SESSION['USER_ID']; ?>"/>

											<div class="col-12">
												<button class="sign__btn" type="button" onclick="user_change()">Change</button>
											</div>
											<span class="sign__text" id="update"></span>
										</div>
									</form>
								</div>
								<!-- end password form -->
								<?php
								if(isset($_POST['submit'])){
									$uid=$_SESSION['USER_ID'];
									$type=$_FILES['image']['type'];
									$type1=$_FILES['image2']['type'];
									if($type!='image/jpeg' && $type!='image/png' && $type1!='image/jpeg' && $type1!='image/png'){
									redirect('profile');
									}else{
									if($_FILES['image']['type']==''){

									}else{
									$image=rand(111111111,999999999).'_'.$_FILES['image']['name'];
									move_uploaded_file($_FILES['image']['tmp_name'],PRODUCT_IMAGE_SERVER_PATH.$image);
									mysqli_query($con,"update user set image='$image' where id='$uid'");
								  }
								  if($_FILES['image2']['type']==''){

									}else{
								  $image2=rand(111111111,999999999).'_'.$_FILES['image2']['name'];
								  move_uploaded_file($_FILES['image2']['tmp_name'],PRODUCT_IMAGE_SERVER_PATH.$image2);
								  mysqli_query($con,"update user set image2='$image2' where id='$uid'");
							}
						  }
							redirect('index');
							}
									 ?>
								<!-- password form -->
								<div class="col-12 col-lg-6">
									<form class="sign__form sign__form--profile" method="post" enctype="multipart/form-data">
										<div class="row">
											<div class="col-12">
												<h4 class="sign__title">Change Profile Picture</h4>
											</div>

											<div class="col-12 col-md-6 col-lg-12 col-xl-6">
												<div class="sign__group">
													<label class="sign__label" for="oldpass">Profile picture</label>
													<input type="file" name="image" class="sign__input">
												</div>
											</div>

											<div class="col-12 col-md-6 col-lg-12 col-xl-6">
												<div class="sign__group">
													<label class="sign__label" for="newpass">Cover Image</label>
													<input type="file" name="image2" class="sign__input">
												</div>
											</div>

											<div class="col-12">
												<button class="sign__btn" type="submit" name="submit">Submit</button>
											</div>
										</div>
									</form>
								</div>
								<!-- end password form -->
							</div>
						</div>
					</div>
					<!-- end content tabs -->
				</div>
			</div>
		</div>
	</main>
	<!-- end main content -->

	<?php
	include('footer.php');
	?>
