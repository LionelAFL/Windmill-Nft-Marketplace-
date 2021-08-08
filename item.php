<?php
include('top.php');
if(isset($_GET['id'])){
$id = get_safe_value($_GET['id']);
}else {
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
						<li class="breadcrumb__item"><a href="index">Home</a></li>
						<li class="breadcrumb__item breadcrumb__item--active">Item</li>
					</ul>
				</div>
				<!-- end breadcrumb -->

				<!-- title -->
				<div class="col-12">
					<div class="main__title main__title--page">
						<h1>Exclusive digital asset</h1>
					</div>
				</div>
				<!-- end title -->
			</div>
      <?php
      $sql="select * from assets where id='$id'";
      $res=mysqli_query($con,$sql);
                   ?>
                   <?php
                   while($row=mysqli_fetch_assoc($res)){ ?>
			<div class="row">
				<!-- content -->
				<div class="col-12 col-xl-8">
					<div class="asset__item">
						<a class="asset__img" href="<?php echo  PRODUCT_IMAGE_SITE_PATH.$row['file']?>"><img src="<?php echo  PRODUCT_IMAGE_SITE_PATH.$row['file']?>" alt=""></a>

												<!-- likes -->
						<button class="asset__likes" type="button">
							<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24"><path d="M20.16,5A6.29,6.29,0,0,0,12,4.36a6.27,6.27,0,0,0-8.16,9.48l6.21,6.22a2.78,2.78,0,0,0,3.9,0l6.21-6.22A6.27,6.27,0,0,0,20.16,5Zm-1.41,7.46-6.21,6.21a.76.76,0,0,1-1.08,0L5.25,12.43a4.29,4.29,0,0,1,0-6,4.27,4.27,0,0,1,6,0,1,1,0,0,0,1.42,0,4.27,4.27,0,0,1,6,0A4.29,4.29,0,0,1,18.75,12.43Z"></path></svg>
							<span>358</span>
						</button>
						<!-- end likes -->
					</div>
				</div>
				<!-- end content -->

				<!-- sidebar -->
				<div class="col-12 col-xl-4">
					<div class="asset__info">
						<div class="asset__desc">
							<h2>Descriptions</h2>
							<p><?php echo $row['details']; ?></p>
						</div>

						<ul class="asset__authors">
							<li>
								<span>Creator</span>
                <?php getUserDetailsByid($row['owner_id']) ?>
								<div class="asset__author asset__author--verified">
                  <img src="<?php echo PRODUCT_IMAGE_SITE_PATH.$getUserDetails['image']; ?>" alt="">
                  <a href="profile?id=<?php echo $getUserDetails['id']; ?>">@<?php echo $getUserDetails['name']; ?></a>
								</div>
							</li>
						</ul>

						<!-- tabs -->
						<ul class="nav nav-tabs asset__tabs" role="tablist">
              <!---
							<li class="nav-item">
								<a class="nav-link active" data-toggle="tab" href="#tab-1" role="tab" aria-controls="tab-1" aria-selected="true">History</a>
							</li>

							<li class="nav-item">
								<a class="nav-link" data-toggle="tab" href="#tab-2" role="tab" aria-controls="tab-2" aria-selected="false">Bids</a>
							</li> --->


							<li class="nav-item">
								<a class="nav-link" data-toggle="tab" href="#tab-3" role="tab" aria-controls="tab-3" aria-selected="false">Details</a>
							</li>
						</ul>

						<div class="tab-content">
						<!--	<div class="tab-pane fade show active" id="tab-1" role="tabpanel">
								<div class="asset__actions asset__actions--scroll" id="asset__actions--scroll">
									<div class="asset__action asset__action--verified">
										<img src="img/avatars/avatar10.jpg" alt="">
										<p>Bid placed for <b>11.00 ETH</b> 4 hours ago <br>by <a href="author.html">@erikkk</a></p>
									</div>

									<div class="asset__action asset__action--verified">
										<img src="img/avatars/avatar4.jpg" alt="">
										<p>Bid placed for <b>10.00 ETH</b> 5 hours ago <br>by <a href="author.html">@johndoe</a></p>
									</div>

									<div class="asset__action asset__action--verified">
										<img src="img/avatars/avatar6.jpg" alt="">
										<p>Bid placed for <b>2.508 ETH</b> 5 hours ago <br>by <a href="author.html">@n1ckname</a></p>
									</div>

									<div class="asset__action asset__action--verified">
										<img src="img/avatars/avatar4.jpg" alt="">
										<p>Bid placed for <b>2.2799 ETH</b> 6 hours ago <br>by <a href="author.html">@johndoe</a></p>
									</div>

									<div class="asset__action asset__action--verified">
										<img src="img/avatars/avatar5.jpg" alt="">
										<p>Put on sale for <b>0.55 ETH</b> 1 days ago <br>by <a href="author.html">@midinh</a></p>
									</div>
								</div>
							</div>

							<div class="tab-pane fade" id="tab-2" role="tabpanel">
								<div class="asset__actions">
									<div class="asset__action asset__action--verified">
										<img src="img/avatars/avatar10.jpg" alt="">
										<p>Bid placed for <b>11.00 ETH</b> 4 hours ago <br>by <a href="author.html">@erikkk</a></p>
									</div>

									<div class="asset__action asset__action--verified">
										<img src="img/avatars/avatar4.jpg" alt="">
										<p>Bid placed for <b>10.00 ETH</b> 5 hours ago <br>by <a href="author.html">@johndoe</a></p>
									</div>

									<div class="asset__action asset__action--verified">
										<img src="img/avatars/avatar6.jpg" alt="">
										<p>Bid placed for <b>2.508 ETH</b> 5 hours ago <br>by <a href="author.html">@n1ckname</a></p>
									</div>
								</div>
							</div>-->

							<div class="tab-pane fade" id="tab-3" role="tabpanel">
								<ul class="asset__authors asset__authors--tab">
									<li>
										<span>Owner</span>
										<div class="asset__author asset__author--verified">
                      <img src="<?php echo PRODUCT_IMAGE_SITE_PATH.$getUserDetails['image']; ?>" alt="">
                      <a href="profile?id=<?php echo $getUserDetails['id']; ?>">@<?php echo $getUserDetails['name']; ?></a>
										</div>
									</li>
									<li>
										<span>Date created</span>
										<p><?php echo $row['added_on']; ?></p>
									</li>
								</ul>
							</div>
						</div>
            
						<!-- end tabs

						<div class="asset__wrap">
							<div class="asset__timer">
								<span><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24"><path d="M18.3,8.59l.91-.9a1,1,0,0,0-1.42-1.42l-.9.91a8,8,0,0,0-9.79,0l-.91-.92A1,1,0,0,0,4.77,7.69l.92.91A7.92,7.92,0,0,0,4,13.5,8,8,0,1,0,18.3,8.59ZM12,19.5a6,6,0,1,1,6-6A6,6,0,0,1,12,19.5Zm-2-15h4a1,1,0,0,0,0-2H10a1,1,0,0,0,0,2Zm3,6a1,1,0,0,0-2,0v1.89a1.5,1.5,0,1,0,2,0Z"/></svg> Auction ends in</span>
								<div class="asset__clock"></div>
							</div>

							<div class="asset__price">
								<span>Minimum bid</span>
								<span>0.2 ETH</span>
							</div>
						</div>-->

						<!-- actions -->
            <div class="asset__btns">
							<button class="asset__btn asset__btn--full asset__btn--clr open-modal" type="button">Buy - 3.19 USD</button>
						</div>
						<!-- end actions -->
					</div>
				</div>
				<!-- end sidebar -->
			</div>
<?php } ?>
			<!-- explore -->
			<section class="row row--grid">
				<!-- title -->
				<div class="col-12">
					<div class="main__title main__title--border-top">
						<h2><a href="explore">Other artist assets</a></h2>
					</div>
				</div>
				<!-- end title -->

				<!-- carousel -->
				<div class="col-12">
					<div class="main__carousel-wrap">
						<div class="main__carousel main__carousel--explore owl-carousel" id="explore">

              <!-- card -->
              <?php
              $use=$getUserDetails['id'];
              $sql="select * from assets where owner_id='$use'";
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

                  <button class="card__likes" type="button">
                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24"><path d="M20.16,5A6.29,6.29,0,0,0,12,4.36a6.27,6.27,0,0,0-8.16,9.48l6.21,6.22a2.78,2.78,0,0,0,3.9,0l6.21-6.22A6.27,6.27,0,0,0,20.16,5Zm-1.41,7.46-6.21,6.21a.76.76,0,0,1-1.08,0L5.25,12.43a4.29,4.29,0,0,1,0-6,4.27,4.27,0,0,1,6,0,1,1,0,0,0,1.42,0,4.27,4.27,0,0,1,6,0A4.29,4.29,0,0,1,18.75,12.43Z"/></svg>
                    <span>189</span>
                  </button>
                </div>
              </div>
            <?php } ?>
    					<!-- end card -->
          </div>
        </div>

						<button class="main__nav main__nav--prev" data-nav="#explore" type="button"><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24"><path d="M17,11H9.41l3.3-3.29a1,1,0,1,0-1.42-1.42l-5,5a1,1,0,0,0-.21.33,1,1,0,0,0,0,.76,1,1,0,0,0,.21.33l5,5a1,1,0,0,0,1.42,0,1,1,0,0,0,0-1.42L9.41,13H17a1,1,0,0,0,0-2Z"/></svg></button>
						<button class="main__nav main__nav--next" data-nav="#explore" type="button"><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24"><path d="M17.92,11.62a1,1,0,0,0-.21-.33l-5-5a1,1,0,0,0-1.42,1.42L14.59,11H7a1,1,0,0,0,0,2h7.59l-3.3,3.29a1,1,0,0,0,0,1.42,1,1,0,0,0,1.42,0l5-5a1,1,0,0,0,.21-.33A1,1,0,0,0,17.92,11.62Z"/></svg></button>
					</div>
				</div>
				<!-- end carousel -->
			</section>
			<!-- end explore -->
		</div>
	</main>
	<!-- end main content -->

<?php
include('footer.php');
?>
