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
						<li class="breadcrumb__item breadcrumb__item--active">Explore</li>
					</ul>
				</div>
				<!-- end breadcrumb -->

				<!-- title -->
				<div class="col-12">
					<div class="main__title main__title--page">
						<h1>Explore exclusive digital assets</h1>
					</div>
				</div>
				<!-- end title -->

				<!-- tabs nav -->
				<div class="col-12">
					<ul class="nav nav-tabs main__tabs" id="main__tabs" role="tablist">
						<li class="nav-item">
							<a class="nav-link active" data-toggle="tab" href="#tab-1" role="tab" aria-controls="tab-1" aria-selected="true">All</a>
						</li>

						<li class="nav-item">
							<a class="nav-link" data-toggle="tab" href="#tab-2" role="tab" aria-controls="tab-2" aria-selected="false">Art</a>
						</li>

						<li class="nav-item">
							<a class="nav-link" data-toggle="tab" href="#tab-3" role="tab" aria-controls="tab-3" aria-selected="false">Photography</a>
						</li>

						<li class="nav-item">
							<a class="nav-link" data-toggle="tab" href="#tab-4" role="tab" aria-controls="tab-4" aria-selected="false">Memes</a>
						</li>
					</ul>
				</div>
				<!-- end tabs nav -->
			</div>

			<!-- tabs content -->
			<div class="tab-content">
				<div class="tab-pane fade show active" id="tab-1" role="tabpanel">
					<div class="row row--grid">
						<div class="col-12 col-sm-6 col-lg-4 col-xl-3">
							<!-- card -->
							<div class="card">
								<a href="item.html" class="card__cover">
									<img src="img/cover/cover1.jpg" alt="">
									<span class="card__time card__time--clock">
										<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24"><path d="M8.46777,8.39453l-.00225.00183-.00214.00208ZM18.42188,8.208a1.237,1.237,0,0,0-.23-.17481.99959.99959,0,0,0-1.39941.41114,5.78155,5.78155,0,0,1-1.398,1.77734,8.6636,8.6636,0,0,0,.1333-1.50977,8.71407,8.71407,0,0,0-4.40039-7.582,1.00009,1.00009,0,0,0-1.49121.80567A7.017,7.017,0,0,1,7.165,6.87793l-.23047.1875a8.51269,8.51269,0,0,0-1.9873,1.8623A8.98348,8.98348,0,0,0,8.60254,22.83594.99942.99942,0,0,0,9.98,21.91016a1.04987,1.04987,0,0,0-.0498-.3125,6.977,6.977,0,0,1-.18995-2.58106,9.004,9.004,0,0,0,4.3125,4.0166.997.997,0,0,0,.71534.03809A8.99474,8.99474,0,0,0,18.42188,8.208ZM14.51709,21.03906a6.964,6.964,0,0,1-3.57666-4.40234,8.90781,8.90781,0,0,1-.17969-.96387,1.00025,1.00025,0,0,0-.79931-.84473A.982.982,0,0,0,9.77,14.80957a.99955.99955,0,0,0-.8667.501,8.9586,8.9586,0,0,0-1.20557,4.71777,6.98547,6.98547,0,0,1-1.17529-9.86816,6.55463,6.55463,0,0,1,1.562-1.458.74507.74507,0,0,0,.07422-.05469s.29669-.24548.30683-.2511a8.96766,8.96766,0,0,0,2.89874-4.63269,6.73625,6.73625,0,0,1,1.38623,8.08789,1.00024,1.00024,0,0,0,1.18359,1.418,7.85568,7.85568,0,0,0,3.86231-2.6875,7.00072,7.00072,0,0,1-3.2793,10.457Z"/></svg>
										<span class="card__clock card__clock--2"></span>
									</span>
								</a>
								<h3 class="card__title"><a href="item.html">Walking on Air</a></h3>
								<div class="card__author">
									<img src="img/avatars/avatar.jpg" alt="">
									<a href="author.html">@nickname</a>
								</div>
								<div class="card__info">
									<div class="card__price">
										<span>Reserve price</span>
										<span>4.89 ETH</span>
									</div>

									<button class="card__likes" type="button">
										<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24"><path d="M20.16,5A6.29,6.29,0,0,0,12,4.36a6.27,6.27,0,0,0-8.16,9.48l6.21,6.22a2.78,2.78,0,0,0,3.9,0l6.21-6.22A6.27,6.27,0,0,0,20.16,5Zm-1.41,7.46-6.21,6.21a.76.76,0,0,1-1.08,0L5.25,12.43a4.29,4.29,0,0,1,0-6,4.27,4.27,0,0,1,6,0,1,1,0,0,0,1.42,0,4.27,4.27,0,0,1,6,0A4.29,4.29,0,0,1,18.75,12.43Z"/></svg>
										<span>189</span>
									</button>
								</div>
							</div>
							<!-- end card -->
						</div>

						<div class="col-12 col-sm-6 col-lg-4 col-xl-3">
							<!-- carousel card -->
							<div class="card">
								<div class="card__cover card__cover--carousel owl-carousel">
									<img src="img/cover/slide1.jpg" alt="">
									<img src="img/cover/slide2.jpg" alt="">
									<img src="img/cover/slide3.jpg" alt="">
								</div>

								<h3 class="card__title"><a href="item.html">To Infinity And Beyond</a></h3>
								<div class="card__author card__author--verified">
									<img src="img/avatars/avatar2.jpg" alt="">
									<a href="author.html">@johndoe</a>
								</div>
								<div class="card__info">
									<div class="card__price">
										<span>Reserve price</span>
										<span>5.04 ETH</span>
									</div>

									<button class="card__likes" type="button">
										<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24"><path d="M20.16,5A6.29,6.29,0,0,0,12,4.36a6.27,6.27,0,0,0-8.16,9.48l6.21,6.22a2.78,2.78,0,0,0,3.9,0l6.21-6.22A6.27,6.27,0,0,0,20.16,5Zm-1.41,7.46-6.21,6.21a.76.76,0,0,1-1.08,0L5.25,12.43a4.29,4.29,0,0,1,0-6,4.27,4.27,0,0,1,6,0,1,1,0,0,0,1.42,0,4.27,4.27,0,0,1,6,0A4.29,4.29,0,0,1,18.75,12.43Z"/></svg>
										<span></span>
									</button>
								</div>
							</div>
							<!-- end carousel card -->
						</div>

						<div class="col-12 col-sm-6 col-lg-4 col-xl-3">
							<!-- card -->
							<div class="card">
								<a href="item.html" class="card__cover">
									<img src="img/cover/cover2.jpg" alt="">
									<span class="card__time card__time--clock">
										<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24"><path d="M8.46777,8.39453l-.00225.00183-.00214.00208ZM18.42188,8.208a1.237,1.237,0,0,0-.23-.17481.99959.99959,0,0,0-1.39941.41114,5.78155,5.78155,0,0,1-1.398,1.77734,8.6636,8.6636,0,0,0,.1333-1.50977,8.71407,8.71407,0,0,0-4.40039-7.582,1.00009,1.00009,0,0,0-1.49121.80567A7.017,7.017,0,0,1,7.165,6.87793l-.23047.1875a8.51269,8.51269,0,0,0-1.9873,1.8623A8.98348,8.98348,0,0,0,8.60254,22.83594.99942.99942,0,0,0,9.98,21.91016a1.04987,1.04987,0,0,0-.0498-.3125,6.977,6.977,0,0,1-.18995-2.58106,9.004,9.004,0,0,0,4.3125,4.0166.997.997,0,0,0,.71534.03809A8.99474,8.99474,0,0,0,18.42188,8.208ZM14.51709,21.03906a6.964,6.964,0,0,1-3.57666-4.40234,8.90781,8.90781,0,0,1-.17969-.96387,1.00025,1.00025,0,0,0-.79931-.84473A.982.982,0,0,0,9.77,14.80957a.99955.99955,0,0,0-.8667.501,8.9586,8.9586,0,0,0-1.20557,4.71777,6.98547,6.98547,0,0,1-1.17529-9.86816,6.55463,6.55463,0,0,1,1.562-1.458.74507.74507,0,0,0,.07422-.05469s.29669-.24548.30683-.2511a8.96766,8.96766,0,0,0,2.89874-4.63269,6.73625,6.73625,0,0,1,1.38623,8.08789,1.00024,1.00024,0,0,0,1.18359,1.418,7.85568,7.85568,0,0,0,3.86231-2.6875,7.00072,7.00072,0,0,1-3.2793,10.457Z"/></svg>
										<span class="card__clock card__clock--1"></span>
									</span>
								</a>
								<h3 class="card__title"><a href="item.html">Les Immortels, the Treachery of Artificial Shadows</a></h3>
								<div class="card__author card__author--verified">
									<img src="img/avatars/avatar3.jpg" alt="">
									<a href="author.html">@neo</a>
								</div>
								<div class="card__info">
									<div class="card__price">
										<span>Current price</span>
										<span>2.61 ETH</span>
									</div>

									<button class="card__likes" type="button">
										<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24"><path d="M20.16,5A6.29,6.29,0,0,0,12,4.36a6.27,6.27,0,0,0-8.16,9.48l6.21,6.22a2.78,2.78,0,0,0,3.9,0l6.21-6.22A6.27,6.27,0,0,0,20.16,5Zm-1.41,7.46-6.21,6.21a.76.76,0,0,1-1.08,0L5.25,12.43a4.29,4.29,0,0,1,0-6,4.27,4.27,0,0,1,6,0,1,1,0,0,0,1.42,0,4.27,4.27,0,0,1,6,0A4.29,4.29,0,0,1,18.75,12.43Z"/></svg>
										<span>702</span>
									</button>
								</div>
							</div>
							<!-- end card -->
						</div>

						<div class="col-12 col-sm-6 col-lg-4 col-xl-3">
							<!-- card -->
							<div class="card">
								<a href="#modal-asset" class="card__cover open-modal">
									<img src="img/cover/cover3.jpg" alt="">
								</a>
								<h3 class="card__title"><a href="#modal-asset" class="open-modal">Flowers in Concrete (Modal)</a></h3>
								<div class="card__author">
									<img src="img/avatars/avatar4.jpg" alt="">
									<a href="author.html">@min1max</a>
								</div>
								<div class="card__info">
									<div class="card__price">
										<span>Reserve price</span>
										<span>3.19 ETH</span>
									</div>

									<button class="card__likes card__likes--active" type="button">
										<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24"><path d="M20.16,5A6.29,6.29,0,0,0,12,4.36a6.27,6.27,0,0,0-8.16,9.48l6.21,6.22a2.78,2.78,0,0,0,3.9,0l6.21-6.22A6.27,6.27,0,0,0,20.16,5Zm-1.41,7.46-6.21,6.21a.76.76,0,0,1-1.08,0L5.25,12.43a4.29,4.29,0,0,1,0-6,4.27,4.27,0,0,1,6,0,1,1,0,0,0,1.42,0,4.27,4.27,0,0,1,6,0A4.29,4.29,0,0,1,18.75,12.43Z"/></svg>
										<span>37</span>
									</button>
								</div>
							</div>
							<!-- end card -->
						</div>

						<div class="col-12 col-sm-6 col-lg-4 col-xl-3">
							<!-- card -->
							<div class="card">
								<a href="item.html" class="card__cover">
									<img src="img/cover/cover4.jpg" alt="">
								</a>
								<h3 class="card__title"><a href="item.html">Industrial Revolution</a></h3>
								<div class="card__author card__author--verified">
									<img src="img/avatars/avatar5.jpg" alt="">
									<a href="author.html">@midinh</a>
								</div>
								<div class="card__info">
									<div class="card__price">
										<span>Reserve price</span>
										<span>1.11 ETH</span>
									</div>

									<button class="card__likes" type="button">
										<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24"><path d="M20.16,5A6.29,6.29,0,0,0,12,4.36a6.27,6.27,0,0,0-8.16,9.48l6.21,6.22a2.78,2.78,0,0,0,3.9,0l6.21-6.22A6.27,6.27,0,0,0,20.16,5Zm-1.41,7.46-6.21,6.21a.76.76,0,0,1-1.08,0L5.25,12.43a4.29,4.29,0,0,1,0-6,4.27,4.27,0,0,1,6,0,1,1,0,0,0,1.42,0,4.27,4.27,0,0,1,6,0A4.29,4.29,0,0,1,18.75,12.43Z"/></svg>
										<span>23</span>
									</button>
								</div>
							</div>
							<!-- end card -->
						</div>

						<div class="col-12 col-sm-6 col-lg-4 col-xl-3">
							<!-- card -->
							<div class="card">
								<a href="item.html" class="card__cover">
									<img src="img/cover/cover5.jpg" alt="">
									<span class="card__time">15 minutes left</span>
								</a>
								<h3 class="card__title"><a href="item.html">I Love You</a></h3>
								<div class="card__author card__author--verified">
									<img src="img/avatars/avatar9.jpg" alt="">
									<a href="author.html">@nicky87</a>
								</div>
								<div class="card__info">
									<div class="card__price">
										<span>Current price</span>
										<span>0.99 ETH</span>
									</div>

									<button class="card__likes" type="button">
										<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24"><path d="M20.16,5A6.29,6.29,0,0,0,12,4.36a6.27,6.27,0,0,0-8.16,9.48l6.21,6.22a2.78,2.78,0,0,0,3.9,0l6.21-6.22A6.27,6.27,0,0,0,20.16,5Zm-1.41,7.46-6.21,6.21a.76.76,0,0,1-1.08,0L5.25,12.43a4.29,4.29,0,0,1,0-6,4.27,4.27,0,0,1,6,0,1,1,0,0,0,1.42,0,4.27,4.27,0,0,1,6,0A4.29,4.29,0,0,1,18.75,12.43Z"/></svg>
										<span>358</span>
									</button>
								</div>
							</div>
							<!-- end card -->
						</div>

						<div class="col-12 col-sm-6 col-lg-4 col-xl-3">
							<!-- video card -->
							<div class="card">
								<a href="item.html" class="card__cover card__cover--video">
									<img src="img/cover/cover6.jpg" alt="">
									<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24"><path d="M21.53,7.15a1,1,0,0,0-1,0L17,8.89A3,3,0,0,0,14,6H5A3,3,0,0,0,2,9v6a3,3,0,0,0,3,3h9a3,3,0,0,0,3-2.89l3.56,1.78A1,1,0,0,0,21,17a1,1,0,0,0,.53-.15A1,1,0,0,0,22,16V8A1,1,0,0,0,21.53,7.15ZM15,15a1,1,0,0,1-1,1H5a1,1,0,0,1-1-1V9A1,1,0,0,1,5,8h9a1,1,0,0,1,1,1Zm5-.62-3-1.5V11.12l3-1.5Z"/></svg>
								</a>
								<h3 class="card__title"><a href="item.html">Walking on Air</a></h3>
								<div class="card__author">
									<img src="img/avatars/avatar10.jpg" alt="">
									<a href="author.html">@redalert</a>
								</div>
								<div class="card__info">
									<div class="card__price">
										<span>Reserve price</span>
										<span>1.63 ETH</span>
									</div>

									<button class="card__likes" type="button">
										<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24"><path d="M20.16,5A6.29,6.29,0,0,0,12,4.36a6.27,6.27,0,0,0-8.16,9.48l6.21,6.22a2.78,2.78,0,0,0,3.9,0l6.21-6.22A6.27,6.27,0,0,0,20.16,5Zm-1.41,7.46-6.21,6.21a.76.76,0,0,1-1.08,0L5.25,12.43a4.29,4.29,0,0,1,0-6,4.27,4.27,0,0,1,6,0,1,1,0,0,0,1.42,0,4.27,4.27,0,0,1,6,0A4.29,4.29,0,0,1,18.75,12.43Z"/></svg>
										<span>90</span>
									</button>
								</div>
							</div>
							<!-- end video card -->
						</div>

						<div class="col-12 col-sm-6 col-lg-4 col-xl-3">
							<!-- card -->
							<div class="card">
								<a href="item.html" class="card__cover">
									<img src="img/cover/cover7.jpg" alt="">
								</a>
								<h3 class="card__title"><a href="item.html">Tranquility</a></h3>
								<div class="card__author">
									<img src="img/avatars/avatar11.jpg" alt="">
									<a href="author.html">@aaarthur</a>
								</div>
								<div class="card__info">
									<div class="card__price">
										<span>Reserve price</span>
										<span>2.55 ETH</span>
									</div>

									<button class="card__likes" type="button">
										<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24"><path d="M20.16,5A6.29,6.29,0,0,0,12,4.36a6.27,6.27,0,0,0-8.16,9.48l6.21,6.22a2.78,2.78,0,0,0,3.9,0l6.21-6.22A6.27,6.27,0,0,0,20.16,5Zm-1.41,7.46-6.21,6.21a.76.76,0,0,1-1.08,0L5.25,12.43a4.29,4.29,0,0,1,0-6,4.27,4.27,0,0,1,6,0,1,1,0,0,0,1.42,0,4.27,4.27,0,0,1,6,0A4.29,4.29,0,0,1,18.75,12.43Z"/></svg>
										<span>64</span>
									</button>
								</div>
							</div>
							<!-- end card -->
						</div>

						<!-- collapse -->
						<div class="col-12">
							<div class="row row--grid collapse" id="collapsemore1">
								<div class="col-12 col-sm-6 col-lg-4 col-xl-3">
									<!-- card -->
									<div class="card">
										<a href="item.html" class="card__cover">
											<img src="img/cover/cover1.jpg" alt="">
										</a>
										<h3 class="card__title"><a href="item.html">Walking on Air</a></h3>
										<div class="card__author">
											<img src="img/avatars/avatar.jpg" alt="">
											<a href="author.html">@nickname</a>
										</div>
										<div class="card__info">
											<div class="card__price">
												<span>Reserve price</span>
												<span>4.89 ETH</span>
											</div>

											<button class="card__likes" type="button">
												<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24"><path d="M20.16,5A6.29,6.29,0,0,0,12,4.36a6.27,6.27,0,0,0-8.16,9.48l6.21,6.22a2.78,2.78,0,0,0,3.9,0l6.21-6.22A6.27,6.27,0,0,0,20.16,5Zm-1.41,7.46-6.21,6.21a.76.76,0,0,1-1.08,0L5.25,12.43a4.29,4.29,0,0,1,0-6,4.27,4.27,0,0,1,6,0,1,1,0,0,0,1.42,0,4.27,4.27,0,0,1,6,0A4.29,4.29,0,0,1,18.75,12.43Z"/></svg>
												<span>189</span>
											</button>
										</div>
									</div>
									<!-- end card -->
								</div>

								<div class="col-12 col-sm-6 col-lg-4 col-xl-3">
									<!-- card -->
									<div class="card">
										<a href="item.html" class="card__cover">
											<img src="img/cover/cover8.jpg" alt="">
										</a>

										<h3 class="card__title"><a href="item.html">To Infinity And Beyond</a></h3>
										<div class="card__author card__author--verified">
											<img src="img/avatars/avatar2.jpg" alt="">
											<a href="author.html">@johndoe</a>
										</div>
										<div class="card__info">
											<div class="card__price">
												<span>Reserve price</span>
												<span>5.04 ETH</span>
											</div>

											<button class="card__likes" type="button">
												<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24"><path d="M20.16,5A6.29,6.29,0,0,0,12,4.36a6.27,6.27,0,0,0-8.16,9.48l6.21,6.22a2.78,2.78,0,0,0,3.9,0l6.21-6.22A6.27,6.27,0,0,0,20.16,5Zm-1.41,7.46-6.21,6.21a.76.76,0,0,1-1.08,0L5.25,12.43a4.29,4.29,0,0,1,0-6,4.27,4.27,0,0,1,6,0,1,1,0,0,0,1.42,0,4.27,4.27,0,0,1,6,0A4.29,4.29,0,0,1,18.75,12.43Z"/></svg>
												<span></span>
											</button>
										</div>
									</div>
									<!-- end card -->
								</div>

								<div class="col-12 col-sm-6 col-lg-4 col-xl-3">
									<!-- card -->
									<div class="card">
										<a href="item.html" class="card__cover">
											<img src="img/cover/cover2.jpg" alt="">
										</a>
										<h3 class="card__title"><a href="item.html">Les Immortels, the Treachery of Artificial Shadows</a></h3>
										<div class="card__author card__author--verified">
											<img src="img/avatars/avatar3.jpg" alt="">
											<a href="author.html">@neo</a>
										</div>
										<div class="card__info">
											<div class="card__price">
												<span>Reserve price</span>
												<span>2.61 ETH</span>
											</div>

											<button class="card__likes" type="button">
												<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24"><path d="M20.16,5A6.29,6.29,0,0,0,12,4.36a6.27,6.27,0,0,0-8.16,9.48l6.21,6.22a2.78,2.78,0,0,0,3.9,0l6.21-6.22A6.27,6.27,0,0,0,20.16,5Zm-1.41,7.46-6.21,6.21a.76.76,0,0,1-1.08,0L5.25,12.43a4.29,4.29,0,0,1,0-6,4.27,4.27,0,0,1,6,0,1,1,0,0,0,1.42,0,4.27,4.27,0,0,1,6,0A4.29,4.29,0,0,1,18.75,12.43Z"/></svg>
												<span>702</span>
											</button>
										</div>
									</div>
									<!-- end card -->
								</div>

								<div class="col-12 col-sm-6 col-lg-4 col-xl-3">
									<!-- card -->
									<div class="card">
										<a href="#modal-asset" class="card__cover open-modal">
											<img src="img/cover/cover3.jpg" alt="">
										</a>
										<h3 class="card__title"><a href="#modal-asset" class="open-modal">Flowers in Concrete (Modal)</a></h3>
										<div class="card__author">
											<img src="img/avatars/avatar4.jpg" alt="">
											<a href="author.html">@min1max</a>
										</div>
										<div class="card__info">
											<div class="card__price">
												<span>Reserve price</span>
												<span>3.19 ETH</span>
											</div>

											<button class="card__likes card__likes--active" type="button">
												<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24"><path d="M20.16,5A6.29,6.29,0,0,0,12,4.36a6.27,6.27,0,0,0-8.16,9.48l6.21,6.22a2.78,2.78,0,0,0,3.9,0l6.21-6.22A6.27,6.27,0,0,0,20.16,5Zm-1.41,7.46-6.21,6.21a.76.76,0,0,1-1.08,0L5.25,12.43a4.29,4.29,0,0,1,0-6,4.27,4.27,0,0,1,6,0,1,1,0,0,0,1.42,0,4.27,4.27,0,0,1,6,0A4.29,4.29,0,0,1,18.75,12.43Z"/></svg>
												<span>37</span>
											</button>
										</div>
									</div>
									<!-- end card -->
								</div>

								<div class="col-12 col-sm-6 col-lg-4 col-xl-3">
									<!-- card -->
									<div class="card">
										<a href="item.html" class="card__cover">
											<img src="img/cover/cover4.jpg" alt="">
										</a>
										<h3 class="card__title"><a href="item.html">Industrial Revolution</a></h3>
										<div class="card__author card__author--verified">
											<img src="img/avatars/avatar5.jpg" alt="">
											<a href="author.html">@midinh</a>
										</div>
										<div class="card__info">
											<div class="card__price">
												<span>Reserve price</span>
												<span>1.11 ETH</span>
											</div>

											<button class="card__likes" type="button">
												<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24"><path d="M20.16,5A6.29,6.29,0,0,0,12,4.36a6.27,6.27,0,0,0-8.16,9.48l6.21,6.22a2.78,2.78,0,0,0,3.9,0l6.21-6.22A6.27,6.27,0,0,0,20.16,5Zm-1.41,7.46-6.21,6.21a.76.76,0,0,1-1.08,0L5.25,12.43a4.29,4.29,0,0,1,0-6,4.27,4.27,0,0,1,6,0,1,1,0,0,0,1.42,0,4.27,4.27,0,0,1,6,0A4.29,4.29,0,0,1,18.75,12.43Z"/></svg>
												<span>23</span>
											</button>
										</div>
									</div>
									<!-- end card -->
								</div>

								<div class="col-12 col-sm-6 col-lg-4 col-xl-3">
									<!-- card -->
									<div class="card">
										<a href="item.html" class="card__cover">
											<img src="img/cover/cover5.jpg" alt="">
										</a>
										<h3 class="card__title"><a href="item.html">I Love You</a></h3>
										<div class="card__author card__author--verified">
											<img src="img/avatars/avatar9.jpg" alt="">
											<a href="author.html">@nicky87</a>
										</div>
										<div class="card__info">
											<div class="card__price">
												<span>Reserve price</span>
												<span>0.99 ETH</span>
											</div>

											<button class="card__likes" type="button">
												<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24"><path d="M20.16,5A6.29,6.29,0,0,0,12,4.36a6.27,6.27,0,0,0-8.16,9.48l6.21,6.22a2.78,2.78,0,0,0,3.9,0l6.21-6.22A6.27,6.27,0,0,0,20.16,5Zm-1.41,7.46-6.21,6.21a.76.76,0,0,1-1.08,0L5.25,12.43a4.29,4.29,0,0,1,0-6,4.27,4.27,0,0,1,6,0,1,1,0,0,0,1.42,0,4.27,4.27,0,0,1,6,0A4.29,4.29,0,0,1,18.75,12.43Z"/></svg>
												<span>358</span>
											</button>
										</div>
									</div>
									<!-- end card -->
								</div>

								<div class="col-12 col-sm-6 col-lg-4 col-xl-3">
									<!-- video card -->
									<div class="card">
										<a href="item.html" class="card__cover card__cover--video">
											<img src="img/cover/cover6.jpg" alt="">
											<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24"><path d="M21.53,7.15a1,1,0,0,0-1,0L17,8.89A3,3,0,0,0,14,6H5A3,3,0,0,0,2,9v6a3,3,0,0,0,3,3h9a3,3,0,0,0,3-2.89l3.56,1.78A1,1,0,0,0,21,17a1,1,0,0,0,.53-.15A1,1,0,0,0,22,16V8A1,1,0,0,0,21.53,7.15ZM15,15a1,1,0,0,1-1,1H5a1,1,0,0,1-1-1V9A1,1,0,0,1,5,8h9a1,1,0,0,1,1,1Zm5-.62-3-1.5V11.12l3-1.5Z"/></svg>
										</a>
										<h3 class="card__title"><a href="item.html">Walking on Air</a></h3>
										<div class="card__author">
											<img src="img/avatars/avatar10.jpg" alt="">
											<a href="author.html">@redalert</a>
										</div>
										<div class="card__info">
											<div class="card__price">
												<span>Reserve price</span>
												<span>1.63 ETH</span>
											</div>

											<button class="card__likes" type="button">
												<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24"><path d="M20.16,5A6.29,6.29,0,0,0,12,4.36a6.27,6.27,0,0,0-8.16,9.48l6.21,6.22a2.78,2.78,0,0,0,3.9,0l6.21-6.22A6.27,6.27,0,0,0,20.16,5Zm-1.41,7.46-6.21,6.21a.76.76,0,0,1-1.08,0L5.25,12.43a4.29,4.29,0,0,1,0-6,4.27,4.27,0,0,1,6,0,1,1,0,0,0,1.42,0,4.27,4.27,0,0,1,6,0A4.29,4.29,0,0,1,18.75,12.43Z"/></svg>
												<span>90</span>
											</button>
										</div>
									</div>
									<!-- end video card -->
								</div>

								<div class="col-12 col-sm-6 col-lg-4 col-xl-3">
									<!-- card -->
									<div class="card">
										<a href="item.html" class="card__cover">
											<img src="img/cover/cover7.jpg" alt="">
										</a>
										<h3 class="card__title"><a href="item.html">Tranquility</a></h3>
										<div class="card__author">
											<img src="img/avatars/avatar11.jpg" alt="">
											<a href="author.html">@aaarthur</a>
										</div>
										<div class="card__info">
											<div class="card__price">
												<span>Reserve price</span>
												<span>2.55 ETH</span>
											</div>

											<button class="card__likes" type="button">
												<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24"><path d="M20.16,5A6.29,6.29,0,0,0,12,4.36a6.27,6.27,0,0,0-8.16,9.48l6.21,6.22a2.78,2.78,0,0,0,3.9,0l6.21-6.22A6.27,6.27,0,0,0,20.16,5Zm-1.41,7.46-6.21,6.21a.76.76,0,0,1-1.08,0L5.25,12.43a4.29,4.29,0,0,1,0-6,4.27,4.27,0,0,1,6,0,1,1,0,0,0,1.42,0,4.27,4.27,0,0,1,6,0A4.29,4.29,0,0,1,18.75,12.43Z"/></svg>
												<span>64</span>
											</button>
										</div>
									</div>
									<!-- end card -->
								</div>
							</div>
						</div>

						<div class="col-12">
							<button class="main__load" type="button" data-toggle="collapse" data-target="#collapsemore1" aria-expanded="false" aria-controls="collapsemore1">Load more</button>
						</div>
						<!-- end collapse -->
					</div>
				</div>

				<div class="tab-pane fade" id="tab-2" role="tabpanel">
					<div class="row row--grid">
						<div class="col-12 col-sm-6 col-lg-4 col-xl-3">
							<!-- card -->
							<div class="card">
								<a href="item.html" class="card__cover">
									<img src="img/cover/cover7.jpg" alt="">
								</a>
								<h3 class="card__title"><a href="item.html">Walking on Air</a></h3>
								<div class="card__author">
									<img src="img/avatars/avatar.jpg" alt="">
									<a href="author.html">@nickname</a>
								</div>
								<div class="card__info">
									<div class="card__price">
										<span>Reserve price</span>
										<span>4.89 ETH</span>
									</div>

									<button class="card__likes" type="button">
										<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24"><path d="M20.16,5A6.29,6.29,0,0,0,12,4.36a6.27,6.27,0,0,0-8.16,9.48l6.21,6.22a2.78,2.78,0,0,0,3.9,0l6.21-6.22A6.27,6.27,0,0,0,20.16,5Zm-1.41,7.46-6.21,6.21a.76.76,0,0,1-1.08,0L5.25,12.43a4.29,4.29,0,0,1,0-6,4.27,4.27,0,0,1,6,0,1,1,0,0,0,1.42,0,4.27,4.27,0,0,1,6,0A4.29,4.29,0,0,1,18.75,12.43Z"/></svg>
										<span>189</span>
									</button>
								</div>
							</div>
							<!-- end card -->
						</div>

						<div class="col-12 col-sm-6 col-lg-4 col-xl-3">
							<!-- card -->
							<div class="card">
								<a href="item.html" class="card__cover">
									<img src="img/cover/cover6.jpg" alt="">
								</a>
								<h3 class="card__title"><a href="item.html">Les Immortels, the Treachery of Artificial Shadows</a></h3>
								<div class="card__author card__author--verified">
									<img src="img/avatars/avatar3.jpg" alt="">
									<a href="author.html">@neo</a>
								</div>
								<div class="card__info">
									<div class="card__price">
										<span>Reserve price</span>
										<span>2.61 ETH</span>
									</div>

									<button class="card__likes" type="button">
										<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24"><path d="M20.16,5A6.29,6.29,0,0,0,12,4.36a6.27,6.27,0,0,0-8.16,9.48l6.21,6.22a2.78,2.78,0,0,0,3.9,0l6.21-6.22A6.27,6.27,0,0,0,20.16,5Zm-1.41,7.46-6.21,6.21a.76.76,0,0,1-1.08,0L5.25,12.43a4.29,4.29,0,0,1,0-6,4.27,4.27,0,0,1,6,0,1,1,0,0,0,1.42,0,4.27,4.27,0,0,1,6,0A4.29,4.29,0,0,1,18.75,12.43Z"/></svg>
										<span>702</span>
									</button>
								</div>
							</div>
							<!-- end card -->
						</div>

						<div class="col-12 col-sm-6 col-lg-4 col-xl-3">
							<!-- card -->
							<div class="card">
								<a href="item.html" class="card__cover">
									<img src="img/cover/cover8.jpg" alt="">
									<span class="card__time">15 minutes left</span>
								</a>
								<h3 class="card__title"><a href="item.html">To Infinity And Beyond</a></h3>
								<div class="card__author card__author--verified">
									<img src="img/avatars/avatar2.jpg" alt="">
									<a href="author.html">@johndoe</a>
								</div>
								<div class="card__info">
									<div class="card__price">
										<span>Current price</span>
										<span>5.04 ETH</span>
									</div>

									<button class="card__likes" type="button">
										<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24"><path d="M20.16,5A6.29,6.29,0,0,0,12,4.36a6.27,6.27,0,0,0-8.16,9.48l6.21,6.22a2.78,2.78,0,0,0,3.9,0l6.21-6.22A6.27,6.27,0,0,0,20.16,5Zm-1.41,7.46-6.21,6.21a.76.76,0,0,1-1.08,0L5.25,12.43a4.29,4.29,0,0,1,0-6,4.27,4.27,0,0,1,6,0,1,1,0,0,0,1.42,0,4.27,4.27,0,0,1,6,0A4.29,4.29,0,0,1,18.75,12.43Z"/></svg>
										<span></span>
									</button>
								</div>
							</div>
							<!-- end card -->
						</div>

						<div class="col-12 col-sm-6 col-lg-4 col-xl-3">
							<!-- card -->
							<div class="card">
								<a href="item.html" class="card__cover">
									<img src="img/cover/cover5.jpg" alt="">
								</a>
								<h3 class="card__title"><a href="item.html">Flowers in Concrete</a></h3>
								<div class="card__author">
									<img src="img/avatars/avatar4.jpg" alt="">
									<a href="author.html">@min1max</a>
								</div>
								<div class="card__info">
									<div class="card__price">
										<span>Reserve price</span>
										<span>3.19 ETH</span>
									</div>

									<button class="card__likes card__likes--active" type="button">
										<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24"><path d="M20.16,5A6.29,6.29,0,0,0,12,4.36a6.27,6.27,0,0,0-8.16,9.48l6.21,6.22a2.78,2.78,0,0,0,3.9,0l6.21-6.22A6.27,6.27,0,0,0,20.16,5Zm-1.41,7.46-6.21,6.21a.76.76,0,0,1-1.08,0L5.25,12.43a4.29,4.29,0,0,1,0-6,4.27,4.27,0,0,1,6,0,1,1,0,0,0,1.42,0,4.27,4.27,0,0,1,6,0A4.29,4.29,0,0,1,18.75,12.43Z"/></svg>
										<span>37</span>
									</button>
								</div>
							</div>
							<!-- end card -->
						</div>

						<div class="col-12 col-sm-6 col-lg-4 col-xl-3">
							<!-- card -->
							<div class="card">
								<a href="item.html" class="card__cover">
									<img src="img/cover/cover4.jpg" alt="">
								</a>
								<h3 class="card__title"><a href="item.html">Industrial Revolution</a></h3>
								<div class="card__author card__author--verified">
									<img src="img/avatars/avatar5.jpg" alt="">
									<a href="author.html">@midinh</a>
								</div>
								<div class="card__info">
									<div class="card__price">
										<span>Reserve price</span>
										<span>1.11 ETH</span>
									</div>

									<button class="card__likes" type="button">
										<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24"><path d="M20.16,5A6.29,6.29,0,0,0,12,4.36a6.27,6.27,0,0,0-8.16,9.48l6.21,6.22a2.78,2.78,0,0,0,3.9,0l6.21-6.22A6.27,6.27,0,0,0,20.16,5Zm-1.41,7.46-6.21,6.21a.76.76,0,0,1-1.08,0L5.25,12.43a4.29,4.29,0,0,1,0-6,4.27,4.27,0,0,1,6,0,1,1,0,0,0,1.42,0,4.27,4.27,0,0,1,6,0A4.29,4.29,0,0,1,18.75,12.43Z"/></svg>
										<span>23</span>
									</button>
								</div>
							</div>
							<!-- end card -->
						</div>

						<div class="col-12 col-sm-6 col-lg-4 col-xl-3">
							<!-- card -->
							<div class="card">
								<a href="item.html" class="card__cover">
									<img src="img/cover/cover3.jpg" alt="">
								</a>
								<h3 class="card__title"><a href="item.html">I Love You</a></h3>
								<div class="card__author card__author--verified">
									<img src="img/avatars/avatar9.jpg" alt="">
									<a href="author.html">@nicky87</a>
								</div>
								<div class="card__info">
									<div class="card__price">
										<span>Reserve price</span>
										<span>0.99 ETH</span>
									</div>

									<button class="card__likes" type="button">
										<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24"><path d="M20.16,5A6.29,6.29,0,0,0,12,4.36a6.27,6.27,0,0,0-8.16,9.48l6.21,6.22a2.78,2.78,0,0,0,3.9,0l6.21-6.22A6.27,6.27,0,0,0,20.16,5Zm-1.41,7.46-6.21,6.21a.76.76,0,0,1-1.08,0L5.25,12.43a4.29,4.29,0,0,1,0-6,4.27,4.27,0,0,1,6,0,1,1,0,0,0,1.42,0,4.27,4.27,0,0,1,6,0A4.29,4.29,0,0,1,18.75,12.43Z"/></svg>
										<span>358</span>
									</button>
								</div>
							</div>
							<!-- end card -->
						</div>

						<div class="col-12 col-sm-6 col-lg-4 col-xl-3">
							<!-- video card -->
							<div class="card">
								<a href="item.html" class="card__cover card__cover--video">
									<img src="img/cover/cover2.jpg" alt="">
									<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24"><path d="M21.53,7.15a1,1,0,0,0-1,0L17,8.89A3,3,0,0,0,14,6H5A3,3,0,0,0,2,9v6a3,3,0,0,0,3,3h9a3,3,0,0,0,3-2.89l3.56,1.78A1,1,0,0,0,21,17a1,1,0,0,0,.53-.15A1,1,0,0,0,22,16V8A1,1,0,0,0,21.53,7.15ZM15,15a1,1,0,0,1-1,1H5a1,1,0,0,1-1-1V9A1,1,0,0,1,5,8h9a1,1,0,0,1,1,1Zm5-.62-3-1.5V11.12l3-1.5Z"/></svg>
								</a>
								<h3 class="card__title"><a href="item.html">Walking on Air</a></h3>
								<div class="card__author">
									<img src="img/avatars/avatar10.jpg" alt="">
									<a href="author.html">@redalert</a>
								</div>
								<div class="card__info">
									<div class="card__price">
										<span>Reserve price</span>
										<span>1.63 ETH</span>
									</div>

									<button class="card__likes" type="button">
										<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24"><path d="M20.16,5A6.29,6.29,0,0,0,12,4.36a6.27,6.27,0,0,0-8.16,9.48l6.21,6.22a2.78,2.78,0,0,0,3.9,0l6.21-6.22A6.27,6.27,0,0,0,20.16,5Zm-1.41,7.46-6.21,6.21a.76.76,0,0,1-1.08,0L5.25,12.43a4.29,4.29,0,0,1,0-6,4.27,4.27,0,0,1,6,0,1,1,0,0,0,1.42,0,4.27,4.27,0,0,1,6,0A4.29,4.29,0,0,1,18.75,12.43Z"/></svg>
										<span>90</span>
									</button>
								</div>
							</div>
							<!-- end video card -->
						</div>

						<div class="col-12 col-sm-6 col-lg-4 col-xl-3">
							<!-- card -->
							<div class="card">
								<a href="item.html" class="card__cover">
									<img src="img/cover/cover1.jpg" alt="">
									<span class="card__time">15 minutes left</span>
								</a>
								<h3 class="card__title"><a href="item.html">Tranquility</a></h3>
								<div class="card__author">
									<img src="img/avatars/avatar11.jpg" alt="">
									<a href="author.html">@aaarthur</a>
								</div>
								<div class="card__info">
									<div class="card__price">
										<span>Current price</span>
										<span>2.55 ETH</span>
									</div>

									<button class="card__likes" type="button">
										<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24"><path d="M20.16,5A6.29,6.29,0,0,0,12,4.36a6.27,6.27,0,0,0-8.16,9.48l6.21,6.22a2.78,2.78,0,0,0,3.9,0l6.21-6.22A6.27,6.27,0,0,0,20.16,5Zm-1.41,7.46-6.21,6.21a.76.76,0,0,1-1.08,0L5.25,12.43a4.29,4.29,0,0,1,0-6,4.27,4.27,0,0,1,6,0,1,1,0,0,0,1.42,0,4.27,4.27,0,0,1,6,0A4.29,4.29,0,0,1,18.75,12.43Z"/></svg>
										<span>64</span>
									</button>
								</div>
							</div>
							<!-- end card -->
						</div>

						<!-- collapse -->
						<div class="col-12">
							<div class="row row--grid collapse" id="collapsemore2">
								<div class="col-12 col-sm-6 col-lg-4 col-xl-3">
									<!-- card -->
									<div class="card">
										<a href="item.html" class="card__cover">
											<img src="img/cover/cover1.jpg" alt="">
										</a>
										<h3 class="card__title"><a href="item.html">Walking on Air</a></h3>
										<div class="card__author">
											<img src="img/avatars/avatar.jpg" alt="">
											<a href="author.html">@nickname</a>
										</div>
										<div class="card__info">
											<div class="card__price">
												<span>Reserve price</span>
												<span>4.89 ETH</span>
											</div>

											<button class="card__likes" type="button">
												<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24"><path d="M20.16,5A6.29,6.29,0,0,0,12,4.36a6.27,6.27,0,0,0-8.16,9.48l6.21,6.22a2.78,2.78,0,0,0,3.9,0l6.21-6.22A6.27,6.27,0,0,0,20.16,5Zm-1.41,7.46-6.21,6.21a.76.76,0,0,1-1.08,0L5.25,12.43a4.29,4.29,0,0,1,0-6,4.27,4.27,0,0,1,6,0,1,1,0,0,0,1.42,0,4.27,4.27,0,0,1,6,0A4.29,4.29,0,0,1,18.75,12.43Z"/></svg>
												<span>189</span>
											</button>
										</div>
									</div>
									<!-- end card -->
								</div>

								<div class="col-12 col-sm-6 col-lg-4 col-xl-3">
									<!-- card -->
									<div class="card">
										<a href="item.html" class="card__cover">
											<img src="img/cover/cover8.jpg" alt="">
										</a>

										<h3 class="card__title"><a href="item.html">To Infinity And Beyond</a></h3>
										<div class="card__author card__author--verified">
											<img src="img/avatars/avatar2.jpg" alt="">
											<a href="author.html">@johndoe</a>
										</div>
										<div class="card__info">
											<div class="card__price">
												<span>Reserve price</span>
												<span>5.04 ETH</span>
											</div>

											<button class="card__likes" type="button">
												<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24"><path d="M20.16,5A6.29,6.29,0,0,0,12,4.36a6.27,6.27,0,0,0-8.16,9.48l6.21,6.22a2.78,2.78,0,0,0,3.9,0l6.21-6.22A6.27,6.27,0,0,0,20.16,5Zm-1.41,7.46-6.21,6.21a.76.76,0,0,1-1.08,0L5.25,12.43a4.29,4.29,0,0,1,0-6,4.27,4.27,0,0,1,6,0,1,1,0,0,0,1.42,0,4.27,4.27,0,0,1,6,0A4.29,4.29,0,0,1,18.75,12.43Z"/></svg>
												<span></span>
											</button>
										</div>
									</div>
									<!-- end card -->
								</div>

								<div class="col-12 col-sm-6 col-lg-4 col-xl-3">
									<!-- card -->
									<div class="card">
										<a href="item.html" class="card__cover">
											<img src="img/cover/cover2.jpg" alt="">
										</a>
										<h3 class="card__title"><a href="item.html">Les Immortels, the Treachery of Artificial Shadows</a></h3>
										<div class="card__author card__author--verified">
											<img src="img/avatars/avatar3.jpg" alt="">
											<a href="author.html">@neo</a>
										</div>
										<div class="card__info">
											<div class="card__price">
												<span>Reserve price</span>
												<span>2.61 ETH</span>
											</div>

											<button class="card__likes" type="button">
												<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24"><path d="M20.16,5A6.29,6.29,0,0,0,12,4.36a6.27,6.27,0,0,0-8.16,9.48l6.21,6.22a2.78,2.78,0,0,0,3.9,0l6.21-6.22A6.27,6.27,0,0,0,20.16,5Zm-1.41,7.46-6.21,6.21a.76.76,0,0,1-1.08,0L5.25,12.43a4.29,4.29,0,0,1,0-6,4.27,4.27,0,0,1,6,0,1,1,0,0,0,1.42,0,4.27,4.27,0,0,1,6,0A4.29,4.29,0,0,1,18.75,12.43Z"/></svg>
												<span>702</span>
											</button>
										</div>
									</div>
									<!-- end card -->
								</div>

								<div class="col-12 col-sm-6 col-lg-4 col-xl-3">
									<!-- card -->
									<div class="card">
										<a href="#modal-asset" class="card__cover open-modal">
											<img src="img/cover/cover3.jpg" alt="">
										</a>
										<h3 class="card__title"><a href="#modal-asset" class="open-modal">Flowers in Concrete (Modal)</a></h3>
										<div class="card__author">
											<img src="img/avatars/avatar4.jpg" alt="">
											<a href="author.html">@min1max</a>
										</div>
										<div class="card__info">
											<div class="card__price">
												<span>Reserve price</span>
												<span>3.19 ETH</span>
											</div>

											<button class="card__likes card__likes--active" type="button">
												<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24"><path d="M20.16,5A6.29,6.29,0,0,0,12,4.36a6.27,6.27,0,0,0-8.16,9.48l6.21,6.22a2.78,2.78,0,0,0,3.9,0l6.21-6.22A6.27,6.27,0,0,0,20.16,5Zm-1.41,7.46-6.21,6.21a.76.76,0,0,1-1.08,0L5.25,12.43a4.29,4.29,0,0,1,0-6,4.27,4.27,0,0,1,6,0,1,1,0,0,0,1.42,0,4.27,4.27,0,0,1,6,0A4.29,4.29,0,0,1,18.75,12.43Z"/></svg>
												<span>37</span>
											</button>
										</div>
									</div>
									<!-- end card -->
								</div>

								<div class="col-12 col-sm-6 col-lg-4 col-xl-3">
									<!-- card -->
									<div class="card">
										<a href="item.html" class="card__cover">
											<img src="img/cover/cover4.jpg" alt="">
										</a>
										<h3 class="card__title"><a href="item.html">Industrial Revolution</a></h3>
										<div class="card__author card__author--verified">
											<img src="img/avatars/avatar5.jpg" alt="">
											<a href="author.html">@midinh</a>
										</div>
										<div class="card__info">
											<div class="card__price">
												<span>Reserve price</span>
												<span>1.11 ETH</span>
											</div>

											<button class="card__likes" type="button">
												<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24"><path d="M20.16,5A6.29,6.29,0,0,0,12,4.36a6.27,6.27,0,0,0-8.16,9.48l6.21,6.22a2.78,2.78,0,0,0,3.9,0l6.21-6.22A6.27,6.27,0,0,0,20.16,5Zm-1.41,7.46-6.21,6.21a.76.76,0,0,1-1.08,0L5.25,12.43a4.29,4.29,0,0,1,0-6,4.27,4.27,0,0,1,6,0,1,1,0,0,0,1.42,0,4.27,4.27,0,0,1,6,0A4.29,4.29,0,0,1,18.75,12.43Z"/></svg>
												<span>23</span>
											</button>
										</div>
									</div>
									<!-- end card -->
								</div>

								<div class="col-12 col-sm-6 col-lg-4 col-xl-3">
									<!-- card -->
									<div class="card">
										<a href="item.html" class="card__cover">
											<img src="img/cover/cover5.jpg" alt="">
										</a>
										<h3 class="card__title"><a href="item.html">I Love You</a></h3>
										<div class="card__author card__author--verified">
											<img src="img/avatars/avatar9.jpg" alt="">
											<a href="author.html">@nicky87</a>
										</div>
										<div class="card__info">
											<div class="card__price">
												<span>Reserve price</span>
												<span>0.99 ETH</span>
											</div>

											<button class="card__likes" type="button">
												<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24"><path d="M20.16,5A6.29,6.29,0,0,0,12,4.36a6.27,6.27,0,0,0-8.16,9.48l6.21,6.22a2.78,2.78,0,0,0,3.9,0l6.21-6.22A6.27,6.27,0,0,0,20.16,5Zm-1.41,7.46-6.21,6.21a.76.76,0,0,1-1.08,0L5.25,12.43a4.29,4.29,0,0,1,0-6,4.27,4.27,0,0,1,6,0,1,1,0,0,0,1.42,0,4.27,4.27,0,0,1,6,0A4.29,4.29,0,0,1,18.75,12.43Z"/></svg>
												<span>358</span>
											</button>
										</div>
									</div>
									<!-- end card -->
								</div>

								<div class="col-12 col-sm-6 col-lg-4 col-xl-3">
									<!-- video card -->
									<div class="card">
										<a href="item.html" class="card__cover card__cover--video">
											<img src="img/cover/cover6.jpg" alt="">
											<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24"><path d="M21.53,7.15a1,1,0,0,0-1,0L17,8.89A3,3,0,0,0,14,6H5A3,3,0,0,0,2,9v6a3,3,0,0,0,3,3h9a3,3,0,0,0,3-2.89l3.56,1.78A1,1,0,0,0,21,17a1,1,0,0,0,.53-.15A1,1,0,0,0,22,16V8A1,1,0,0,0,21.53,7.15ZM15,15a1,1,0,0,1-1,1H5a1,1,0,0,1-1-1V9A1,1,0,0,1,5,8h9a1,1,0,0,1,1,1Zm5-.62-3-1.5V11.12l3-1.5Z"/></svg>
										</a>
										<h3 class="card__title"><a href="item.html">Walking on Air</a></h3>
										<div class="card__author">
											<img src="img/avatars/avatar10.jpg" alt="">
											<a href="author.html">@redalert</a>
										</div>
										<div class="card__info">
											<div class="card__price">
												<span>Reserve price</span>
												<span>1.63 ETH</span>
											</div>

											<button class="card__likes" type="button">
												<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24"><path d="M20.16,5A6.29,6.29,0,0,0,12,4.36a6.27,6.27,0,0,0-8.16,9.48l6.21,6.22a2.78,2.78,0,0,0,3.9,0l6.21-6.22A6.27,6.27,0,0,0,20.16,5Zm-1.41,7.46-6.21,6.21a.76.76,0,0,1-1.08,0L5.25,12.43a4.29,4.29,0,0,1,0-6,4.27,4.27,0,0,1,6,0,1,1,0,0,0,1.42,0,4.27,4.27,0,0,1,6,0A4.29,4.29,0,0,1,18.75,12.43Z"/></svg>
												<span>90</span>
											</button>
										</div>
									</div>
									<!-- end video card -->
								</div>

								<div class="col-12 col-sm-6 col-lg-4 col-xl-3">
									<!-- card -->
									<div class="card">
										<a href="item.html" class="card__cover">
											<img src="img/cover/cover7.jpg" alt="">
										</a>
										<h3 class="card__title"><a href="item.html">Tranquility</a></h3>
										<div class="card__author">
											<img src="img/avatars/avatar11.jpg" alt="">
											<a href="author.html">@aaarthur</a>
										</div>
										<div class="card__info">
											<div class="card__price">
												<span>Reserve price</span>
												<span>2.55 ETH</span>
											</div>

											<button class="card__likes" type="button">
												<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24"><path d="M20.16,5A6.29,6.29,0,0,0,12,4.36a6.27,6.27,0,0,0-8.16,9.48l6.21,6.22a2.78,2.78,0,0,0,3.9,0l6.21-6.22A6.27,6.27,0,0,0,20.16,5Zm-1.41,7.46-6.21,6.21a.76.76,0,0,1-1.08,0L5.25,12.43a4.29,4.29,0,0,1,0-6,4.27,4.27,0,0,1,6,0,1,1,0,0,0,1.42,0,4.27,4.27,0,0,1,6,0A4.29,4.29,0,0,1,18.75,12.43Z"/></svg>
												<span>64</span>
											</button>
										</div>
									</div>
									<!-- end card -->
								</div>
							</div>
						</div>

						<div class="col-12">
							<button class="main__load" type="button" data-toggle="collapse" data-target="#collapsemore2" aria-expanded="false" aria-controls="collapsemore2">Load more</button>
						</div>
						<!-- end collapse -->
					</div>
				</div>

				<div class="tab-pane fade" id="tab-3" role="tabpanel">
					<div class="row row--grid">
						<div class="col-12 col-sm-6 col-lg-4 col-xl-3">
							<!-- card -->
							<div class="card">
								<a href="item.html" class="card__cover">
									<img src="img/cover/cover3.jpg" alt="">
									<span class="card__time">an hour left</span>
								</a>
								<h3 class="card__title"><a href="item.html">Walking on Air</a></h3>
								<div class="card__author">
									<img src="img/avatars/avatar.jpg" alt="">
									<a href="author.html">@nickname</a>
								</div>
								<div class="card__info">
									<div class="card__price">
										<span>Current price</span>
										<span>4.89 ETH</span>
									</div>

									<button class="card__likes" type="button">
										<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24"><path d="M20.16,5A6.29,6.29,0,0,0,12,4.36a6.27,6.27,0,0,0-8.16,9.48l6.21,6.22a2.78,2.78,0,0,0,3.9,0l6.21-6.22A6.27,6.27,0,0,0,20.16,5Zm-1.41,7.46-6.21,6.21a.76.76,0,0,1-1.08,0L5.25,12.43a4.29,4.29,0,0,1,0-6,4.27,4.27,0,0,1,6,0,1,1,0,0,0,1.42,0,4.27,4.27,0,0,1,6,0A4.29,4.29,0,0,1,18.75,12.43Z"/></svg>
										<span>189</span>
									</button>
								</div>
							</div>
							<!-- end card -->
						</div>

						<div class="col-12 col-sm-6 col-lg-4 col-xl-3">
							<!-- card -->
							<div class="card">
								<a href="item.html" class="card__cover">
									<img src="img/cover/cover2.jpg" alt="">
								</a>
								<h3 class="card__title"><a href="item.html">Les Immortels, the Treachery of Artificial Shadows</a></h3>
								<div class="card__author card__author--verified">
									<img src="img/avatars/avatar3.jpg" alt="">
									<a href="author.html">@neo</a>
								</div>
								<div class="card__info">
									<div class="card__price">
										<span>Reserve price</span>
										<span>2.61 ETH</span>
									</div>

									<button class="card__likes" type="button">
										<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24"><path d="M20.16,5A6.29,6.29,0,0,0,12,4.36a6.27,6.27,0,0,0-8.16,9.48l6.21,6.22a2.78,2.78,0,0,0,3.9,0l6.21-6.22A6.27,6.27,0,0,0,20.16,5Zm-1.41,7.46-6.21,6.21a.76.76,0,0,1-1.08,0L5.25,12.43a4.29,4.29,0,0,1,0-6,4.27,4.27,0,0,1,6,0,1,1,0,0,0,1.42,0,4.27,4.27,0,0,1,6,0A4.29,4.29,0,0,1,18.75,12.43Z"/></svg>
										<span>702</span>
									</button>
								</div>
							</div>
							<!-- end card -->
						</div>

						<div class="col-12 col-sm-6 col-lg-4 col-xl-3">
							<!-- carousel card -->
							<div class="card">
								<a href="item.html" class="card__cover">
									<img src="img/cover/cover1.jpg" alt="">
								</a>
								<h3 class="card__title"><a href="#">To Infinity And Beyond</a></h3>
								<div class="card__author card__author--verified">
									<img src="img/avatars/avatar2.jpg" alt="">
									<a href="author.html">@johndoe</a>
								</div>
								<div class="card__info">
									<div class="card__price">
										<span>Reserve price</span>
										<span>5.04 ETH</span>
									</div>

									<button class="card__likes" type="button">
										<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24"><path d="M20.16,5A6.29,6.29,0,0,0,12,4.36a6.27,6.27,0,0,0-8.16,9.48l6.21,6.22a2.78,2.78,0,0,0,3.9,0l6.21-6.22A6.27,6.27,0,0,0,20.16,5Zm-1.41,7.46-6.21,6.21a.76.76,0,0,1-1.08,0L5.25,12.43a4.29,4.29,0,0,1,0-6,4.27,4.27,0,0,1,6,0,1,1,0,0,0,1.42,0,4.27,4.27,0,0,1,6,0A4.29,4.29,0,0,1,18.75,12.43Z"/></svg>
										<span></span>
									</button>
								</div>
							</div>
							<!-- end carousel card -->
						</div>

						<div class="col-12 col-sm-6 col-lg-4 col-xl-3">
							<!-- card -->
							<div class="card">
								<a href="#" class="card__cover">
									<img src="img/cover/cover4.jpg" alt="">
								</a>
								<h3 class="card__title"><a href="#">Flowers in Concrete (Modal)</a></h3>
								<div class="card__author">
									<img src="img/avatars/avatar4.jpg" alt="">
									<a href="author.html">@min1max</a>
								</div>
								<div class="card__info">
									<div class="card__price">
										<span>Reserve price</span>
										<span>3.19 ETH</span>
									</div>

									<button class="card__likes card__likes--active" type="button">
										<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24"><path d="M20.16,5A6.29,6.29,0,0,0,12,4.36a6.27,6.27,0,0,0-8.16,9.48l6.21,6.22a2.78,2.78,0,0,0,3.9,0l6.21-6.22A6.27,6.27,0,0,0,20.16,5Zm-1.41,7.46-6.21,6.21a.76.76,0,0,1-1.08,0L5.25,12.43a4.29,4.29,0,0,1,0-6,4.27,4.27,0,0,1,6,0,1,1,0,0,0,1.42,0,4.27,4.27,0,0,1,6,0A4.29,4.29,0,0,1,18.75,12.43Z"/></svg>
										<span>37</span>
									</button>
								</div>
							</div>
							<!-- end card -->
						</div>

						<div class="col-12 col-sm-6 col-lg-4 col-xl-3">
							<!-- card -->
							<div class="card">
								<a href="item.html" class="card__cover">
									<img src="img/cover/cover5.jpg" alt="">
								</a>
								<h3 class="card__title"><a href="item.html">Industrial Revolution</a></h3>
								<div class="card__author card__author--verified">
									<img src="img/avatars/avatar5.jpg" alt="">
									<a href="author.html">@midinh</a>
								</div>
								<div class="card__info">
									<div class="card__price">
										<span>Reserve price</span>
										<span>1.11 ETH</span>
									</div>

									<button class="card__likes" type="button">
										<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24"><path d="M20.16,5A6.29,6.29,0,0,0,12,4.36a6.27,6.27,0,0,0-8.16,9.48l6.21,6.22a2.78,2.78,0,0,0,3.9,0l6.21-6.22A6.27,6.27,0,0,0,20.16,5Zm-1.41,7.46-6.21,6.21a.76.76,0,0,1-1.08,0L5.25,12.43a4.29,4.29,0,0,1,0-6,4.27,4.27,0,0,1,6,0,1,1,0,0,0,1.42,0,4.27,4.27,0,0,1,6,0A4.29,4.29,0,0,1,18.75,12.43Z"/></svg>
										<span>23</span>
									</button>
								</div>
							</div>
							<!-- end card -->
						</div>

						<div class="col-12 col-sm-6 col-lg-4 col-xl-3">
							<!-- card -->
							<div class="card">
								<a href="item.html" class="card__cover">
									<img src="img/cover/cover6.jpg" alt="">
								</a>
								<h3 class="card__title"><a href="item.html">I Love You</a></h3>
								<div class="card__author card__author--verified">
									<img src="img/avatars/avatar9.jpg" alt="">
									<a href="author.html">@nicky87</a>
								</div>
								<div class="card__info">
									<div class="card__price">
										<span>Reserve price</span>
										<span>0.99 ETH</span>
									</div>

									<button class="card__likes" type="button">
										<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24"><path d="M20.16,5A6.29,6.29,0,0,0,12,4.36a6.27,6.27,0,0,0-8.16,9.48l6.21,6.22a2.78,2.78,0,0,0,3.9,0l6.21-6.22A6.27,6.27,0,0,0,20.16,5Zm-1.41,7.46-6.21,6.21a.76.76,0,0,1-1.08,0L5.25,12.43a4.29,4.29,0,0,1,0-6,4.27,4.27,0,0,1,6,0,1,1,0,0,0,1.42,0,4.27,4.27,0,0,1,6,0A4.29,4.29,0,0,1,18.75,12.43Z"/></svg>
										<span>358</span>
									</button>
								</div>
							</div>
							<!-- end card -->
						</div>

						<div class="col-12 col-sm-6 col-lg-4 col-xl-3">
							<!-- video card -->
							<div class="card">
								<a href="item.html" class="card__cover card__cover--video">
									<img src="img/cover/cover7.jpg" alt="">
									<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24"><path d="M21.53,7.15a1,1,0,0,0-1,0L17,8.89A3,3,0,0,0,14,6H5A3,3,0,0,0,2,9v6a3,3,0,0,0,3,3h9a3,3,0,0,0,3-2.89l3.56,1.78A1,1,0,0,0,21,17a1,1,0,0,0,.53-.15A1,1,0,0,0,22,16V8A1,1,0,0,0,21.53,7.15ZM15,15a1,1,0,0,1-1,1H5a1,1,0,0,1-1-1V9A1,1,0,0,1,5,8h9a1,1,0,0,1,1,1Zm5-.62-3-1.5V11.12l3-1.5Z"/></svg>
								</a>
								<h3 class="card__title"><a href="item.html">Walking on Air</a></h3>
								<div class="card__author">
									<img src="img/avatars/avatar10.jpg" alt="">
									<a href="author.html">@redalert</a>
								</div>
								<div class="card__info">
									<div class="card__price">
										<span>Reserve price</span>
										<span>1.63 ETH</span>
									</div>

									<button class="card__likes" type="button">
										<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24"><path d="M20.16,5A6.29,6.29,0,0,0,12,4.36a6.27,6.27,0,0,0-8.16,9.48l6.21,6.22a2.78,2.78,0,0,0,3.9,0l6.21-6.22A6.27,6.27,0,0,0,20.16,5Zm-1.41,7.46-6.21,6.21a.76.76,0,0,1-1.08,0L5.25,12.43a4.29,4.29,0,0,1,0-6,4.27,4.27,0,0,1,6,0,1,1,0,0,0,1.42,0,4.27,4.27,0,0,1,6,0A4.29,4.29,0,0,1,18.75,12.43Z"/></svg>
										<span>90</span>
									</button>
								</div>
							</div>
							<!-- end video card -->
						</div>

						<div class="col-12 col-sm-6 col-lg-4 col-xl-3">
							<!-- card -->
							<div class="card">
								<a href="item.html" class="card__cover">
									<img src="img/cover/cover8.jpg" alt="">
								</a>
								<h3 class="card__title"><a href="item.html">Tranquility</a></h3>
								<div class="card__author">
									<img src="img/avatars/avatar11.jpg" alt="">
									<a href="author.html">@aaarthur</a>
								</div>
								<div class="card__info">
									<div class="card__price">
										<span>Reserve price</span>
										<span>2.55 ETH</span>
									</div>

									<button class="card__likes" type="button">
										<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24"><path d="M20.16,5A6.29,6.29,0,0,0,12,4.36a6.27,6.27,0,0,0-8.16,9.48l6.21,6.22a2.78,2.78,0,0,0,3.9,0l6.21-6.22A6.27,6.27,0,0,0,20.16,5Zm-1.41,7.46-6.21,6.21a.76.76,0,0,1-1.08,0L5.25,12.43a4.29,4.29,0,0,1,0-6,4.27,4.27,0,0,1,6,0,1,1,0,0,0,1.42,0,4.27,4.27,0,0,1,6,0A4.29,4.29,0,0,1,18.75,12.43Z"/></svg>
										<span>64</span>
									</button>
								</div>
							</div>
							<!-- end card -->
						</div>

						<!-- collapse -->
						<div class="col-12">
							<div class="row row--grid collapse" id="collapsemore3">
								<div class="col-12 col-sm-6 col-lg-4 col-xl-3">
									<!-- card -->
									<div class="card">
										<a href="item.html" class="card__cover">
											<img src="img/cover/cover1.jpg" alt="">
										</a>
										<h3 class="card__title"><a href="item.html">Walking on Air</a></h3>
										<div class="card__author">
											<img src="img/avatars/avatar.jpg" alt="">
											<a href="author.html">@nickname</a>
										</div>
										<div class="card__info">
											<div class="card__price">
												<span>Reserve price</span>
												<span>4.89 ETH</span>
											</div>

											<button class="card__likes" type="button">
												<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24"><path d="M20.16,5A6.29,6.29,0,0,0,12,4.36a6.27,6.27,0,0,0-8.16,9.48l6.21,6.22a2.78,2.78,0,0,0,3.9,0l6.21-6.22A6.27,6.27,0,0,0,20.16,5Zm-1.41,7.46-6.21,6.21a.76.76,0,0,1-1.08,0L5.25,12.43a4.29,4.29,0,0,1,0-6,4.27,4.27,0,0,1,6,0,1,1,0,0,0,1.42,0,4.27,4.27,0,0,1,6,0A4.29,4.29,0,0,1,18.75,12.43Z"/></svg>
												<span>189</span>
											</button>
										</div>
									</div>
									<!-- end card -->
								</div>

								<div class="col-12 col-sm-6 col-lg-4 col-xl-3">
									<!-- card -->
									<div class="card">
										<a href="item.html" class="card__cover">
											<img src="img/cover/cover8.jpg" alt="">
										</a>

										<h3 class="card__title"><a href="item.html">To Infinity And Beyond</a></h3>
										<div class="card__author card__author--verified">
											<img src="img/avatars/avatar2.jpg" alt="">
											<a href="author.html">@johndoe</a>
										</div>
										<div class="card__info">
											<div class="card__price">
												<span>Reserve price</span>
												<span>5.04 ETH</span>
											</div>

											<button class="card__likes" type="button">
												<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24"><path d="M20.16,5A6.29,6.29,0,0,0,12,4.36a6.27,6.27,0,0,0-8.16,9.48l6.21,6.22a2.78,2.78,0,0,0,3.9,0l6.21-6.22A6.27,6.27,0,0,0,20.16,5Zm-1.41,7.46-6.21,6.21a.76.76,0,0,1-1.08,0L5.25,12.43a4.29,4.29,0,0,1,0-6,4.27,4.27,0,0,1,6,0,1,1,0,0,0,1.42,0,4.27,4.27,0,0,1,6,0A4.29,4.29,0,0,1,18.75,12.43Z"/></svg>
												<span></span>
											</button>
										</div>
									</div>
									<!-- end card -->
								</div>

								<div class="col-12 col-sm-6 col-lg-4 col-xl-3">
									<!-- card -->
									<div class="card">
										<a href="item.html" class="card__cover">
											<img src="img/cover/cover2.jpg" alt="">
										</a>
										<h3 class="card__title"><a href="item.html">Les Immortels, the Treachery of Artificial Shadows</a></h3>
										<div class="card__author card__author--verified">
											<img src="img/avatars/avatar3.jpg" alt="">
											<a href="author.html">@neo</a>
										</div>
										<div class="card__info">
											<div class="card__price">
												<span>Reserve price</span>
												<span>2.61 ETH</span>
											</div>

											<button class="card__likes" type="button">
												<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24"><path d="M20.16,5A6.29,6.29,0,0,0,12,4.36a6.27,6.27,0,0,0-8.16,9.48l6.21,6.22a2.78,2.78,0,0,0,3.9,0l6.21-6.22A6.27,6.27,0,0,0,20.16,5Zm-1.41,7.46-6.21,6.21a.76.76,0,0,1-1.08,0L5.25,12.43a4.29,4.29,0,0,1,0-6,4.27,4.27,0,0,1,6,0,1,1,0,0,0,1.42,0,4.27,4.27,0,0,1,6,0A4.29,4.29,0,0,1,18.75,12.43Z"/></svg>
												<span>702</span>
											</button>
										</div>
									</div>
									<!-- end card -->
								</div>

								<div class="col-12 col-sm-6 col-lg-4 col-xl-3">
									<!-- card -->
									<div class="card">
										<a href="#modal-asset" class="card__cover open-modal">
											<img src="img/cover/cover3.jpg" alt="">
										</a>
										<h3 class="card__title"><a href="#modal-asset" class="open-modal">Flowers in Concrete (Modal)</a></h3>
										<div class="card__author">
											<img src="img/avatars/avatar4.jpg" alt="">
											<a href="author.html">@min1max</a>
										</div>
										<div class="card__info">
											<div class="card__price">
												<span>Reserve price</span>
												<span>3.19 ETH</span>
											</div>

											<button class="card__likes card__likes--active" type="button">
												<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24"><path d="M20.16,5A6.29,6.29,0,0,0,12,4.36a6.27,6.27,0,0,0-8.16,9.48l6.21,6.22a2.78,2.78,0,0,0,3.9,0l6.21-6.22A6.27,6.27,0,0,0,20.16,5Zm-1.41,7.46-6.21,6.21a.76.76,0,0,1-1.08,0L5.25,12.43a4.29,4.29,0,0,1,0-6,4.27,4.27,0,0,1,6,0,1,1,0,0,0,1.42,0,4.27,4.27,0,0,1,6,0A4.29,4.29,0,0,1,18.75,12.43Z"/></svg>
												<span>37</span>
											</button>
										</div>
									</div>
									<!-- end card -->
								</div>

								<div class="col-12 col-sm-6 col-lg-4 col-xl-3">
									<!-- card -->
									<div class="card">
										<a href="item.html" class="card__cover">
											<img src="img/cover/cover4.jpg" alt="">
										</a>
										<h3 class="card__title"><a href="item.html">Industrial Revolution</a></h3>
										<div class="card__author card__author--verified">
											<img src="img/avatars/avatar5.jpg" alt="">
											<a href="author.html">@midinh</a>
										</div>
										<div class="card__info">
											<div class="card__price">
												<span>Reserve price</span>
												<span>1.11 ETH</span>
											</div>

											<button class="card__likes" type="button">
												<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24"><path d="M20.16,5A6.29,6.29,0,0,0,12,4.36a6.27,6.27,0,0,0-8.16,9.48l6.21,6.22a2.78,2.78,0,0,0,3.9,0l6.21-6.22A6.27,6.27,0,0,0,20.16,5Zm-1.41,7.46-6.21,6.21a.76.76,0,0,1-1.08,0L5.25,12.43a4.29,4.29,0,0,1,0-6,4.27,4.27,0,0,1,6,0,1,1,0,0,0,1.42,0,4.27,4.27,0,0,1,6,0A4.29,4.29,0,0,1,18.75,12.43Z"/></svg>
												<span>23</span>
											</button>
										</div>
									</div>
									<!-- end card -->
								</div>

								<div class="col-12 col-sm-6 col-lg-4 col-xl-3">
									<!-- card -->
									<div class="card">
										<a href="item.html" class="card__cover">
											<img src="img/cover/cover5.jpg" alt="">
										</a>
										<h3 class="card__title"><a href="item.html">I Love You</a></h3>
										<div class="card__author card__author--verified">
											<img src="img/avatars/avatar9.jpg" alt="">
											<a href="author.html">@nicky87</a>
										</div>
										<div class="card__info">
											<div class="card__price">
												<span>Reserve price</span>
												<span>0.99 ETH</span>
											</div>

											<button class="card__likes" type="button">
												<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24"><path d="M20.16,5A6.29,6.29,0,0,0,12,4.36a6.27,6.27,0,0,0-8.16,9.48l6.21,6.22a2.78,2.78,0,0,0,3.9,0l6.21-6.22A6.27,6.27,0,0,0,20.16,5Zm-1.41,7.46-6.21,6.21a.76.76,0,0,1-1.08,0L5.25,12.43a4.29,4.29,0,0,1,0-6,4.27,4.27,0,0,1,6,0,1,1,0,0,0,1.42,0,4.27,4.27,0,0,1,6,0A4.29,4.29,0,0,1,18.75,12.43Z"/></svg>
												<span>358</span>
											</button>
										</div>
									</div>
									<!-- end card -->
								</div>

								<div class="col-12 col-sm-6 col-lg-4 col-xl-3">
									<!-- video card -->
									<div class="card">
										<a href="item.html" class="card__cover card__cover--video">
											<img src="img/cover/cover6.jpg" alt="">
											<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24"><path d="M21.53,7.15a1,1,0,0,0-1,0L17,8.89A3,3,0,0,0,14,6H5A3,3,0,0,0,2,9v6a3,3,0,0,0,3,3h9a3,3,0,0,0,3-2.89l3.56,1.78A1,1,0,0,0,21,17a1,1,0,0,0,.53-.15A1,1,0,0,0,22,16V8A1,1,0,0,0,21.53,7.15ZM15,15a1,1,0,0,1-1,1H5a1,1,0,0,1-1-1V9A1,1,0,0,1,5,8h9a1,1,0,0,1,1,1Zm5-.62-3-1.5V11.12l3-1.5Z"/></svg>
										</a>
										<h3 class="card__title"><a href="item.html">Walking on Air</a></h3>
										<div class="card__author">
											<img src="img/avatars/avatar10.jpg" alt="">
											<a href="author.html">@redalert</a>
										</div>
										<div class="card__info">
											<div class="card__price">
												<span>Reserve price</span>
												<span>1.63 ETH</span>
											</div>

											<button class="card__likes" type="button">
												<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24"><path d="M20.16,5A6.29,6.29,0,0,0,12,4.36a6.27,6.27,0,0,0-8.16,9.48l6.21,6.22a2.78,2.78,0,0,0,3.9,0l6.21-6.22A6.27,6.27,0,0,0,20.16,5Zm-1.41,7.46-6.21,6.21a.76.76,0,0,1-1.08,0L5.25,12.43a4.29,4.29,0,0,1,0-6,4.27,4.27,0,0,1,6,0,1,1,0,0,0,1.42,0,4.27,4.27,0,0,1,6,0A4.29,4.29,0,0,1,18.75,12.43Z"/></svg>
												<span>90</span>
											</button>
										</div>
									</div>
									<!-- end video card -->
								</div>

								<div class="col-12 col-sm-6 col-lg-4 col-xl-3">
									<!-- card -->
									<div class="card">
										<a href="item.html" class="card__cover">
											<img src="img/cover/cover7.jpg" alt="">
										</a>
										<h3 class="card__title"><a href="item.html">Tranquility</a></h3>
										<div class="card__author">
											<img src="img/avatars/avatar11.jpg" alt="">
											<a href="author.html">@aaarthur</a>
										</div>
										<div class="card__info">
											<div class="card__price">
												<span>Reserve price</span>
												<span>2.55 ETH</span>
											</div>

											<button class="card__likes" type="button">
												<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24"><path d="M20.16,5A6.29,6.29,0,0,0,12,4.36a6.27,6.27,0,0,0-8.16,9.48l6.21,6.22a2.78,2.78,0,0,0,3.9,0l6.21-6.22A6.27,6.27,0,0,0,20.16,5Zm-1.41,7.46-6.21,6.21a.76.76,0,0,1-1.08,0L5.25,12.43a4.29,4.29,0,0,1,0-6,4.27,4.27,0,0,1,6,0,1,1,0,0,0,1.42,0,4.27,4.27,0,0,1,6,0A4.29,4.29,0,0,1,18.75,12.43Z"/></svg>
												<span>64</span>
											</button>
										</div>
									</div>
									<!-- end card -->
								</div>
							</div>
						</div>

						<div class="col-12">
							<button class="main__load" type="button" data-toggle="collapse" data-target="#collapsemore3" aria-expanded="false" aria-controls="collapsemore3">Load more</button>
						</div>
						<!-- end collapse -->
					</div>
				</div>

				<div class="tab-pane fade" id="tab-4" role="tabpanel">
					<div class="row row--grid">
						<div class="col-12 col-sm-6 col-lg-4 col-xl-3">
							<!-- card -->
							<div class="card">
								<a href="item.html" class="card__cover">
									<img src="img/cover/cover7.jpg" alt="">
								</a>
								<h3 class="card__title"><a href="item.html">Walking on Air</a></h3>
								<div class="card__author">
									<img src="img/avatars/avatar.jpg" alt="">
									<a href="author.html">@nickname</a>
								</div>
								<div class="card__info">
									<div class="card__price">
										<span>Reserve price</span>
										<span>4.89 ETH</span>
									</div>

									<button class="card__likes" type="button">
										<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24"><path d="M20.16,5A6.29,6.29,0,0,0,12,4.36a6.27,6.27,0,0,0-8.16,9.48l6.21,6.22a2.78,2.78,0,0,0,3.9,0l6.21-6.22A6.27,6.27,0,0,0,20.16,5Zm-1.41,7.46-6.21,6.21a.76.76,0,0,1-1.08,0L5.25,12.43a4.29,4.29,0,0,1,0-6,4.27,4.27,0,0,1,6,0,1,1,0,0,0,1.42,0,4.27,4.27,0,0,1,6,0A4.29,4.29,0,0,1,18.75,12.43Z"/></svg>
										<span>189</span>
									</button>
								</div>
							</div>
							<!-- end card -->
						</div>

						<div class="col-12 col-sm-6 col-lg-4 col-xl-3">
							<!-- card -->
							<div class="card">
								<a href="item.html" class="card__cover">
									<img src="img/cover/cover6.jpg" alt="">
									<span class="card__time">15 minutes left</span>
								</a>
								<h3 class="card__title"><a href="item.html">Les Immortels, the Treachery of Artificial Shadows</a></h3>
								<div class="card__author card__author--verified">
									<img src="img/avatars/avatar3.jpg" alt="">
									<a href="author.html">@neo</a>
								</div>
								<div class="card__info">
									<div class="card__price">
										<span>Current price</span>
										<span>2.61 ETH</span>
									</div>

									<button class="card__likes" type="button">
										<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24"><path d="M20.16,5A6.29,6.29,0,0,0,12,4.36a6.27,6.27,0,0,0-8.16,9.48l6.21,6.22a2.78,2.78,0,0,0,3.9,0l6.21-6.22A6.27,6.27,0,0,0,20.16,5Zm-1.41,7.46-6.21,6.21a.76.76,0,0,1-1.08,0L5.25,12.43a4.29,4.29,0,0,1,0-6,4.27,4.27,0,0,1,6,0,1,1,0,0,0,1.42,0,4.27,4.27,0,0,1,6,0A4.29,4.29,0,0,1,18.75,12.43Z"/></svg>
										<span>702</span>
									</button>
								</div>
							</div>
							<!-- end card -->
						</div>

						<div class="col-12 col-sm-6 col-lg-4 col-xl-3">
							<!-- carousel card -->
							<div class="card">
								<a href="item.html" class="card__cover">
									<img src="img/cover/cover8.jpg" alt="">
								</a>
								<h3 class="card__title"><a href="#">To Infinity And Beyond</a></h3>
								<div class="card__author card__author--verified">
									<img src="img/avatars/avatar2.jpg" alt="">
									<a href="author.html">@johndoe</a>
								</div>
								<div class="card__info">
									<div class="card__price">
										<span>Reserve price</span>
										<span>5.04 ETH</span>
									</div>

									<button class="card__likes" type="button">
										<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24"><path d="M20.16,5A6.29,6.29,0,0,0,12,4.36a6.27,6.27,0,0,0-8.16,9.48l6.21,6.22a2.78,2.78,0,0,0,3.9,0l6.21-6.22A6.27,6.27,0,0,0,20.16,5Zm-1.41,7.46-6.21,6.21a.76.76,0,0,1-1.08,0L5.25,12.43a4.29,4.29,0,0,1,0-6,4.27,4.27,0,0,1,6,0,1,1,0,0,0,1.42,0,4.27,4.27,0,0,1,6,0A4.29,4.29,0,0,1,18.75,12.43Z"/></svg>
										<span></span>
									</button>
								</div>
							</div>
							<!-- end carousel card -->
						</div>

						<div class="col-12 col-sm-6 col-lg-4 col-xl-3">
							<!-- card -->
							<div class="card">
								<a href="#" class="card__cover">
									<img src="img/cover/cover5.jpg" alt="">
								</a>
								<h3 class="card__title"><a href="#">Flowers in Concrete (Modal)</a></h3>
								<div class="card__author">
									<img src="img/avatars/avatar4.jpg" alt="">
									<a href="author.html">@min1max</a>
								</div>
								<div class="card__info">
									<div class="card__price">
										<span>Reserve price</span>
										<span>3.19 ETH</span>
									</div>

									<button class="card__likes card__likes--active" type="button">
										<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24"><path d="M20.16,5A6.29,6.29,0,0,0,12,4.36a6.27,6.27,0,0,0-8.16,9.48l6.21,6.22a2.78,2.78,0,0,0,3.9,0l6.21-6.22A6.27,6.27,0,0,0,20.16,5Zm-1.41,7.46-6.21,6.21a.76.76,0,0,1-1.08,0L5.25,12.43a4.29,4.29,0,0,1,0-6,4.27,4.27,0,0,1,6,0,1,1,0,0,0,1.42,0,4.27,4.27,0,0,1,6,0A4.29,4.29,0,0,1,18.75,12.43Z"/></svg>
										<span>37</span>
									</button>
								</div>
							</div>
							<!-- end card -->
						</div>

						<div class="col-12 col-sm-6 col-lg-4 col-xl-3">
							<!-- card -->
							<div class="card">
								<a href="item.html" class="card__cover">
									<img src="img/cover/cover4.jpg" alt="">
								</a>
								<h3 class="card__title"><a href="item.html">Industrial Revolution</a></h3>
								<div class="card__author card__author--verified">
									<img src="img/avatars/avatar5.jpg" alt="">
									<a href="author.html">@midinh</a>
								</div>
								<div class="card__info">
									<div class="card__price">
										<span>Reserve price</span>
										<span>1.11 ETH</span>
									</div>

									<button class="card__likes" type="button">
										<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24"><path d="M20.16,5A6.29,6.29,0,0,0,12,4.36a6.27,6.27,0,0,0-8.16,9.48l6.21,6.22a2.78,2.78,0,0,0,3.9,0l6.21-6.22A6.27,6.27,0,0,0,20.16,5Zm-1.41,7.46-6.21,6.21a.76.76,0,0,1-1.08,0L5.25,12.43a4.29,4.29,0,0,1,0-6,4.27,4.27,0,0,1,6,0,1,1,0,0,0,1.42,0,4.27,4.27,0,0,1,6,0A4.29,4.29,0,0,1,18.75,12.43Z"/></svg>
										<span>23</span>
									</button>
								</div>
							</div>
							<!-- end card -->
						</div>

						<div class="col-12 col-sm-6 col-lg-4 col-xl-3">
							<!-- card -->
							<div class="card">
								<a href="item.html" class="card__cover">
									<img src="img/cover/cover3.jpg" alt="">
								</a>
								<h3 class="card__title"><a href="item.html">I Love You</a></h3>
								<div class="card__author card__author--verified">
									<img src="img/avatars/avatar9.jpg" alt="">
									<a href="author.html">@nicky87</a>
								</div>
								<div class="card__info">
									<div class="card__price">
										<span>Reserve price</span>
										<span>0.99 ETH</span>
									</div>

									<button class="card__likes" type="button">
										<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24"><path d="M20.16,5A6.29,6.29,0,0,0,12,4.36a6.27,6.27,0,0,0-8.16,9.48l6.21,6.22a2.78,2.78,0,0,0,3.9,0l6.21-6.22A6.27,6.27,0,0,0,20.16,5Zm-1.41,7.46-6.21,6.21a.76.76,0,0,1-1.08,0L5.25,12.43a4.29,4.29,0,0,1,0-6,4.27,4.27,0,0,1,6,0,1,1,0,0,0,1.42,0,4.27,4.27,0,0,1,6,0A4.29,4.29,0,0,1,18.75,12.43Z"/></svg>
										<span>358</span>
									</button>
								</div>
							</div>
							<!-- end card -->
						</div>

						<div class="col-12 col-sm-6 col-lg-4 col-xl-3">
							<!-- video card -->
							<div class="card">
								<a href="item.html" class="card__cover card__cover--video">
									<img src="img/cover/cover2.jpg" alt="">
									<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24"><path d="M21.53,7.15a1,1,0,0,0-1,0L17,8.89A3,3,0,0,0,14,6H5A3,3,0,0,0,2,9v6a3,3,0,0,0,3,3h9a3,3,0,0,0,3-2.89l3.56,1.78A1,1,0,0,0,21,17a1,1,0,0,0,.53-.15A1,1,0,0,0,22,16V8A1,1,0,0,0,21.53,7.15ZM15,15a1,1,0,0,1-1,1H5a1,1,0,0,1-1-1V9A1,1,0,0,1,5,8h9a1,1,0,0,1,1,1Zm5-.62-3-1.5V11.12l3-1.5Z"/></svg>
								</a>
								<h3 class="card__title"><a href="item.html">Walking on Air</a></h3>
								<div class="card__author">
									<img src="img/avatars/avatar10.jpg" alt="">
									<a href="author.html">@redalert</a>
								</div>
								<div class="card__info">
									<div class="card__price">
										<span>Reserve price</span>
										<span>1.63 ETH</span>
									</div>

									<button class="card__likes" type="button">
										<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24"><path d="M20.16,5A6.29,6.29,0,0,0,12,4.36a6.27,6.27,0,0,0-8.16,9.48l6.21,6.22a2.78,2.78,0,0,0,3.9,0l6.21-6.22A6.27,6.27,0,0,0,20.16,5Zm-1.41,7.46-6.21,6.21a.76.76,0,0,1-1.08,0L5.25,12.43a4.29,4.29,0,0,1,0-6,4.27,4.27,0,0,1,6,0,1,1,0,0,0,1.42,0,4.27,4.27,0,0,1,6,0A4.29,4.29,0,0,1,18.75,12.43Z"/></svg>
										<span>90</span>
									</button>
								</div>
							</div>
							<!-- end video card -->
						</div>

						<div class="col-12 col-sm-6 col-lg-4 col-xl-3">
							<!-- card -->
							<div class="card">
								<a href="item.html" class="card__cover">
									<img src="img/cover/cover1.jpg" alt="">
								</a>
								<h3 class="card__title"><a href="item.html">Tranquility</a></h3>
								<div class="card__author">
									<img src="img/avatars/avatar11.jpg" alt="">
									<a href="author.html">@aaarthur</a>
								</div>
								<div class="card__info">
									<div class="card__price">
										<span>Reserve price</span>
										<span>2.55 ETH</span>
									</div>

									<button class="card__likes" type="button">
										<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24"><path d="M20.16,5A6.29,6.29,0,0,0,12,4.36a6.27,6.27,0,0,0-8.16,9.48l6.21,6.22a2.78,2.78,0,0,0,3.9,0l6.21-6.22A6.27,6.27,0,0,0,20.16,5Zm-1.41,7.46-6.21,6.21a.76.76,0,0,1-1.08,0L5.25,12.43a4.29,4.29,0,0,1,0-6,4.27,4.27,0,0,1,6,0,1,1,0,0,0,1.42,0,4.27,4.27,0,0,1,6,0A4.29,4.29,0,0,1,18.75,12.43Z"/></svg>
										<span>64</span>
									</button>
								</div>
							</div>
							<!-- end card -->
						</div>

						<!-- collapse -->
						<div class="col-12">
							<div class="row row--grid collapse" id="collapsemore4">
								<div class="col-12 col-sm-6 col-lg-4 col-xl-3">
									<!-- card -->
									<div class="card">
										<a href="item.html" class="card__cover">
											<img src="img/cover/cover1.jpg" alt="">
										</a>
										<h3 class="card__title"><a href="item.html">Walking on Air</a></h3>
										<div class="card__author">
											<img src="img/avatars/avatar.jpg" alt="">
											<a href="author.html">@nickname</a>
										</div>
										<div class="card__info">
											<div class="card__price">
												<span>Reserve price</span>
												<span>4.89 ETH</span>
											</div>

											<button class="card__likes" type="button">
												<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24"><path d="M20.16,5A6.29,6.29,0,0,0,12,4.36a6.27,6.27,0,0,0-8.16,9.48l6.21,6.22a2.78,2.78,0,0,0,3.9,0l6.21-6.22A6.27,6.27,0,0,0,20.16,5Zm-1.41,7.46-6.21,6.21a.76.76,0,0,1-1.08,0L5.25,12.43a4.29,4.29,0,0,1,0-6,4.27,4.27,0,0,1,6,0,1,1,0,0,0,1.42,0,4.27,4.27,0,0,1,6,0A4.29,4.29,0,0,1,18.75,12.43Z"/></svg>
												<span>189</span>
											</button>
										</div>
									</div>
									<!-- end card -->
								</div>

								<div class="col-12 col-sm-6 col-lg-4 col-xl-3">
									<!-- card -->
									<div class="card">
										<a href="item.html" class="card__cover">
											<img src="img/cover/cover8.jpg" alt="">
										</a>

										<h3 class="card__title"><a href="item.html">To Infinity And Beyond</a></h3>
										<div class="card__author card__author--verified">
											<img src="img/avatars/avatar2.jpg" alt="">
											<a href="author.html">@johndoe</a>
										</div>
										<div class="card__info">
											<div class="card__price">
												<span>Reserve price</span>
												<span>5.04 ETH</span>
											</div>

											<button class="card__likes" type="button">
												<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24"><path d="M20.16,5A6.29,6.29,0,0,0,12,4.36a6.27,6.27,0,0,0-8.16,9.48l6.21,6.22a2.78,2.78,0,0,0,3.9,0l6.21-6.22A6.27,6.27,0,0,0,20.16,5Zm-1.41,7.46-6.21,6.21a.76.76,0,0,1-1.08,0L5.25,12.43a4.29,4.29,0,0,1,0-6,4.27,4.27,0,0,1,6,0,1,1,0,0,0,1.42,0,4.27,4.27,0,0,1,6,0A4.29,4.29,0,0,1,18.75,12.43Z"/></svg>
												<span></span>
											</button>
										</div>
									</div>
									<!-- end card -->
								</div>

								<div class="col-12 col-sm-6 col-lg-4 col-xl-3">
									<!-- card -->
									<div class="card">
										<a href="item.html" class="card__cover">
											<img src="img/cover/cover2.jpg" alt="">
										</a>
										<h3 class="card__title"><a href="item.html">Les Immortels, the Treachery of Artificial Shadows</a></h3>
										<div class="card__author card__author--verified">
											<img src="img/avatars/avatar3.jpg" alt="">
											<a href="author.html">@neo</a>
										</div>
										<div class="card__info">
											<div class="card__price">
												<span>Reserve price</span>
												<span>2.61 ETH</span>
											</div>

											<button class="card__likes" type="button">
												<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24"><path d="M20.16,5A6.29,6.29,0,0,0,12,4.36a6.27,6.27,0,0,0-8.16,9.48l6.21,6.22a2.78,2.78,0,0,0,3.9,0l6.21-6.22A6.27,6.27,0,0,0,20.16,5Zm-1.41,7.46-6.21,6.21a.76.76,0,0,1-1.08,0L5.25,12.43a4.29,4.29,0,0,1,0-6,4.27,4.27,0,0,1,6,0,1,1,0,0,0,1.42,0,4.27,4.27,0,0,1,6,0A4.29,4.29,0,0,1,18.75,12.43Z"/></svg>
												<span>702</span>
											</button>
										</div>
									</div>
									<!-- end card -->
								</div>

								<div class="col-12 col-sm-6 col-lg-4 col-xl-3">
									<!-- card -->
									<div class="card">
										<a href="#modal-asset" class="card__cover open-modal">
											<img src="img/cover/cover3.jpg" alt="">
										</a>
										<h3 class="card__title"><a href="#modal-asset" class="open-modal">Flowers in Concrete (Modal)</a></h3>
										<div class="card__author">
											<img src="img/avatars/avatar4.jpg" alt="">
											<a href="author.html">@min1max</a>
										</div>
										<div class="card__info">
											<div class="card__price">
												<span>Reserve price</span>
												<span>3.19 ETH</span>
											</div>

											<button class="card__likes card__likes--active" type="button">
												<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24"><path d="M20.16,5A6.29,6.29,0,0,0,12,4.36a6.27,6.27,0,0,0-8.16,9.48l6.21,6.22a2.78,2.78,0,0,0,3.9,0l6.21-6.22A6.27,6.27,0,0,0,20.16,5Zm-1.41,7.46-6.21,6.21a.76.76,0,0,1-1.08,0L5.25,12.43a4.29,4.29,0,0,1,0-6,4.27,4.27,0,0,1,6,0,1,1,0,0,0,1.42,0,4.27,4.27,0,0,1,6,0A4.29,4.29,0,0,1,18.75,12.43Z"/></svg>
												<span>37</span>
											</button>
										</div>
									</div>
									<!-- end card -->
								</div>

								<div class="col-12 col-sm-6 col-lg-4 col-xl-3">
									<!-- card -->
									<div class="card">
										<a href="item.html" class="card__cover">
											<img src="img/cover/cover4.jpg" alt="">
										</a>
										<h3 class="card__title"><a href="item.html">Industrial Revolution</a></h3>
										<div class="card__author card__author--verified">
											<img src="img/avatars/avatar5.jpg" alt="">
											<a href="author.html">@midinh</a>
										</div>
										<div class="card__info">
											<div class="card__price">
												<span>Reserve price</span>
												<span>1.11 ETH</span>
											</div>

											<button class="card__likes" type="button">
												<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24"><path d="M20.16,5A6.29,6.29,0,0,0,12,4.36a6.27,6.27,0,0,0-8.16,9.48l6.21,6.22a2.78,2.78,0,0,0,3.9,0l6.21-6.22A6.27,6.27,0,0,0,20.16,5Zm-1.41,7.46-6.21,6.21a.76.76,0,0,1-1.08,0L5.25,12.43a4.29,4.29,0,0,1,0-6,4.27,4.27,0,0,1,6,0,1,1,0,0,0,1.42,0,4.27,4.27,0,0,1,6,0A4.29,4.29,0,0,1,18.75,12.43Z"/></svg>
												<span>23</span>
											</button>
										</div>
									</div>
									<!-- end card -->
								</div>

								<div class="col-12 col-sm-6 col-lg-4 col-xl-3">
									<!-- card -->
									<div class="card">
										<a href="item.html" class="card__cover">
											<img src="img/cover/cover5.jpg" alt="">
										</a>
										<h3 class="card__title"><a href="item.html">I Love You</a></h3>
										<div class="card__author card__author--verified">
											<img src="img/avatars/avatar9.jpg" alt="">
											<a href="author.html">@nicky87</a>
										</div>
										<div class="card__info">
											<div class="card__price">
												<span>Reserve price</span>
												<span>0.99 ETH</span>
											</div>

											<button class="card__likes" type="button">
												<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24"><path d="M20.16,5A6.29,6.29,0,0,0,12,4.36a6.27,6.27,0,0,0-8.16,9.48l6.21,6.22a2.78,2.78,0,0,0,3.9,0l6.21-6.22A6.27,6.27,0,0,0,20.16,5Zm-1.41,7.46-6.21,6.21a.76.76,0,0,1-1.08,0L5.25,12.43a4.29,4.29,0,0,1,0-6,4.27,4.27,0,0,1,6,0,1,1,0,0,0,1.42,0,4.27,4.27,0,0,1,6,0A4.29,4.29,0,0,1,18.75,12.43Z"/></svg>
												<span>358</span>
											</button>
										</div>
									</div>
									<!-- end card -->
								</div>

								<div class="col-12 col-sm-6 col-lg-4 col-xl-3">
									<!-- video card -->
									<div class="card">
										<a href="item.html" class="card__cover card__cover--video">
											<img src="img/cover/cover6.jpg" alt="">
											<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24"><path d="M21.53,7.15a1,1,0,0,0-1,0L17,8.89A3,3,0,0,0,14,6H5A3,3,0,0,0,2,9v6a3,3,0,0,0,3,3h9a3,3,0,0,0,3-2.89l3.56,1.78A1,1,0,0,0,21,17a1,1,0,0,0,.53-.15A1,1,0,0,0,22,16V8A1,1,0,0,0,21.53,7.15ZM15,15a1,1,0,0,1-1,1H5a1,1,0,0,1-1-1V9A1,1,0,0,1,5,8h9a1,1,0,0,1,1,1Zm5-.62-3-1.5V11.12l3-1.5Z"/></svg>
										</a>
										<h3 class="card__title"><a href="item.html">Walking on Air</a></h3>
										<div class="card__author">
											<img src="img/avatars/avatar10.jpg" alt="">
											<a href="author.html">@redalert</a>
										</div>
										<div class="card__info">
											<div class="card__price">
												<span>Reserve price</span>
												<span>1.63 ETH</span>
											</div>

											<button class="card__likes" type="button">
												<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24"><path d="M20.16,5A6.29,6.29,0,0,0,12,4.36a6.27,6.27,0,0,0-8.16,9.48l6.21,6.22a2.78,2.78,0,0,0,3.9,0l6.21-6.22A6.27,6.27,0,0,0,20.16,5Zm-1.41,7.46-6.21,6.21a.76.76,0,0,1-1.08,0L5.25,12.43a4.29,4.29,0,0,1,0-6,4.27,4.27,0,0,1,6,0,1,1,0,0,0,1.42,0,4.27,4.27,0,0,1,6,0A4.29,4.29,0,0,1,18.75,12.43Z"/></svg>
												<span>90</span>
											</button>
										</div>
									</div>
									<!-- end video card -->
								</div>

								<div class="col-12 col-sm-6 col-lg-4 col-xl-3">
									<!-- card -->
									<div class="card">
										<a href="item.html" class="card__cover">
											<img src="img/cover/cover7.jpg" alt="">
										</a>
										<h3 class="card__title"><a href="item.html">Tranquility</a></h3>
										<div class="card__author">
											<img src="img/avatars/avatar11.jpg" alt="">
											<a href="author.html">@aaarthur</a>
										</div>
										<div class="card__info">
											<div class="card__price">
												<span>Reserve price</span>
												<span>2.55 ETH</span>
											</div>

											<button class="card__likes" type="button">
												<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24"><path d="M20.16,5A6.29,6.29,0,0,0,12,4.36a6.27,6.27,0,0,0-8.16,9.48l6.21,6.22a2.78,2.78,0,0,0,3.9,0l6.21-6.22A6.27,6.27,0,0,0,20.16,5Zm-1.41,7.46-6.21,6.21a.76.76,0,0,1-1.08,0L5.25,12.43a4.29,4.29,0,0,1,0-6,4.27,4.27,0,0,1,6,0,1,1,0,0,0,1.42,0,4.27,4.27,0,0,1,6,0A4.29,4.29,0,0,1,18.75,12.43Z"/></svg>
												<span>64</span>
											</button>
										</div>
									</div>
									<!-- end card -->
								</div>
							</div>
						</div>

						<div class="col-12">
							<button class="main__load" type="button" data-toggle="collapse" data-target="#collapsemore4" aria-expanded="false" aria-controls="collapsemore4">Load more</button>
						</div>
						<!-- end collapse -->
					</div>
				</div>
			</div>
			<!-- end tabs content -->
		</div>
	</main>
	<!-- end main content -->

	<?php
	include('footer.php')
	?>
