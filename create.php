<?php
include('top.php');
if(empty($_SESSION['USER_ID'])){
	redirect('signin');
}else{
		$uid=$_SESSION['USER_ID'];
		$getUserDetails=getUserDetailsByid($uid);
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
							<div class="author__wrap">
							<?php $query = "SELECT COUNT(*) as count from follow where user_id='$uid'";
							$query_result = mysqli_query($con , $query);
							while ($row = mysqli_fetch_assoc($query_result)) {
								$output = $row['count'];
							} ?>
							<div class="author__followers">
							<p><?php echo $output; ?></p>
							<span>Followers</span>
						</div>
							</div>
						</div>
					</div>
				</div>
				<!-- end author -->
<?php
$name='';
$details='';
$type='';
$price='';
$status='';
$msg='';
$id='';
if(isset($_GET['id'])){
	$id=get_safe_value($_GET['id']);
	$row=mysqli_fetch_assoc(mysqli_query($con,"select * from assets where id='$id'"));
	$name=$row['name'];
	$details=$row['details'];
	$type=$row['type'];
	$price=$row['price'];
	$status=$row['status'];

}
if(isset($_POST['submit'])) {
	$name=get_safe_value($_POST['name']);
	$details=get_safe_value($_POST['details']);
	$type=get_safe_value($_POST['type']);
	$price=get_safe_value($_POST['price']);
	$status=get_safe_value($_POST['status']);
	$uniq_id= substr(hash('sha256', mt_rand() . microtime()), 0, 20);
	$added_on=date('Y-m-d h:i:s');
	$uid=$_SESSION['USER_ID'];

	if ($id=='') {
		$file = $_FILES['file'];
		$fileName = $_FILES['file']['name'];
		$fileTmpName = $_FILES['file']['tmp_name'];
		$fileSize = $_FILES['file']['size'];
		$fileType = $_FILES['file']['type'];

		$fileExt = explode('.', $fileName);
		$fileActualExt = strtolower(end($fileExt));

		$allowed =  array('jpg', 'jpeg', 'png', 'mp3', 'mp4', 'x-m4v', 'm4a' );
		if (in_array($fileActualExt, $allowed)) {
			if ($fileSize < 100000) {
				$file=rand(111111111,999999999).'_'.$_FILES['file']['name'];
				move_uploaded_file($_FILES['file']['tmp_name'],PRODUCT_IMAGE_SERVER_PATH.$file);

					mysqli_query($con,"insert into assets(name,details,status,type,price,added_on,owner_id,uniq_id,file,creator_id) values('$name','$details','$status','$type','$price','$added_on','$uid','$uniq_id','$file','$uid')");
					redirect('profile');
			}else {
				$msg='file size exceeded 100mb';
			}
		}else{
			$msg='file type not allowed';
		}
	}else {
		if(($_FILES['file']=='')){
			mysqli_query($con,"update assets set name='$name', details='$details',type='$type',status='$status',price='$price' where id='$id'");
			redirect('profile');
		}else{
			$file = $_FILES['file'];
			$fileName = $_FILES['file']['name'];
			$fileTmpName = $_FILES['file']['tmp_name'];
			$fileSize = $_FILES['file']['size'];
			$fileType = $_FILES['file']['type'];

			$fileExt = explode('.', $fileName);
			$fileActualExt = strtolower(end($fileExt));

			$allowed =  array('jpg', 'jpeg', 'png', 'mp3', 'mp4', 'x-m4v', 'm4a' );
			if (in_array($fileActualExt, $allowed)) {
				if ($fileSize < 100000) {
					$file=rand(111111111,999999999).'_'.$_FILES['file']['name'];
					move_uploaded_file($_FILES['file']['tmp_name'],PRODUCT_IMAGE_SERVER_PATH.$file);

						mysqli_query($con,"update assets set name='$name', details='$details',type='$type',status='$status',price='$price',file='$file' where id='$id'");
						redirect('profile');
				}else {
					$msg='file size exceeded 100mb';
				}
			}else{
				$msg='file type not allowed';
			}
}
}
}


?>
				<div class="col-12 col-xl-9">
					<!-- title -->
					<div class="main__title main__title--create">
						<h2>Create collectible item</h2>
					</div>
					<!-- end title -->

					<!-- create form -->
					<form class="sign__form sign__form--create" method="post" enctype="multipart/form-data">
						<div class="row">
							<div class="col-12">
								<h4 class="sign__title">Upload file</h4>
							</div>

							<div class="col-12">
								<div class="sign__file">
									<label id="file1" for="sign__file-upload">e. g. Image, Audio, Video</label>
									<input data-name="#file" id="sign__file-upload" name="file" class="sign__file-upload" type="file">
								</div>
							</div>

							<div class="col-12">
								<h4 class="sign__title">Item details</h4>
							</div>

							<div class="col-12">
								<div class="sign__group">
									<label class="sign__label" for="itemname">Item name</label>
									<input type="text" name="name" class="sign__input" placeholder="e. g. 'Crypto Heart'" required value="<?php echo $name ?>">
								</div>
							</div>

							<div class="col-12">
								<div class="sign__group">
									<label class="sign__label" for="details">Description</label>
									<textarea id="description" name="details" class="sign__textarea" placeholder="e. g. 'After purchasing you will able to receive...'" required><?php echo $details ?></textarea>
								</div>
							</div>

							<div class="col-12 col-md-4">
								<div class="sign__group">
									<label class="sign__label" for="type">File type</label>
									<select name="type" class="sign__select" required value="<?php echo $type ?>">
										<option value="1">Image</option>
										<option value="2">Audio</option>
										<option value="3">Video</option>
									</select>
								</div>
							</div>

							<div class="col-12 col-md-4">
								<div class="sign__group">
									<label class="sign__label" for="price">Price</label>
									<input type="text" name="price" class="sign__input" placeholder="price" required value="<?php echo $price ?>">
								</div>
							</div>

							<div class="col-12 col-md-4">
								<div class="sign__group">
									<label class="sign__label" for="status">Status</label>
									<select name="status" class="sign__select" required value="<?php echo $status ?>">
										<option value="1">Put on Sale</option>
									</select>
								</div>
							</div>

							<div class="col-12 col-xl-3">
								<button type="submit" class="sign__btn" name="submit">Create item</button>
							</div>
							<span><?php echo $msg; ?></span>
						</div>
					</form>
					<!-- end create form -->
				</div>
			</div>
		</div>
	</main>
	<!-- end main content -->

<?php
include('footer.php');
?>
