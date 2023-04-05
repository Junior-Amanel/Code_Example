@extends('layouts.home')
@section('content')

<!-- Hero/Intro Slider Start -->
<div class="section ">
	<div class="hero-slider swiper-container slider-nav-style-1 slider-dot-style-1 dot-color-white">
		<!-- Hero slider Active -->
		<div class="swiper-wrapper">
			<!-- Single slider item -->
			<div class="hero-slide-item slider-height-2 swiper-slide d-flex">
				<div class="hero-bg-image">
					<img src="images/home_slider_2.jpg" alt="">
				</div>
				<div class="container align-self-center">
					<div class="row justify-content-center">
						<div class="col-md-8 offset-2 align-self-center m-auto">
							<div class="hero-slide-content hero-slide-content-2 slider-animated-1 text-center">
								<span class="category">Мебель</span>
								<h2 class="title-1">Собери мебель Мечты</h2>
								<a href="/Cat/ldsp" class="btn btn-lg btn-primary btn-hover-dark mt-5">Shop Now</a>
							</div>
						</div>
					</div>
				</div>
			</div>
			<!-- Single slider item -->

			<div class="hero-slide-item slider-height-2 swiper-slide d-flex text-center">
				<div class="hero-bg-image">
					<img src="images/home_slider_1.jpg" alt="">
				</div>
				<div class="container align-self-center">
					<div class="row justify-content-center">
						<div class="col-md-8 offset-2 align-self-center m-auto">
							<div class="hero-slide-content hero-slide-content-2 slider-animated-1">
								<span class="category">Фурнитуры</span>
								<h2 class="title-1">Собери мебель Мечты</h2>
								<p class="w-100">Torem ipsum dolor sit amet, consectetur adipisicing elitsed do eiusmo tempor incididunt ut labore et dolore magna</p>
								<a href="/Cat/mdf" class="btn btn-lg btn-primary btn-hover-dark mt-5">Shop Now</a>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
		<!-- Add Pagination -->
		<div class="swiper-pagination swiper-pagination-white"></div>
		<!-- Add Arrows -->
		<div class="swiper-buttons">
			<div class="swiper-button-next"></div>
			<div class="swiper-button-prev"></div>
		</div>
	</div>
</div>

<div class="section pb-100px pt-100px">
	<div class="container">
		<!-- Banners Start -->
		<div class="row">
			<!-- Banner Start -->
			<div class="col-lg-4 col-12 mb-md-30px mb-lm-30px" data-aos="fade-up" data-aos-delay="200">
				<div class="banner-2">
					<img src="assets/images/banner/5.jpg" alt="" />
					<div class="info justify-content-start">
						<div class="content align-self-center">
							<h3 class="title">
								Kronospan
							</h3>
							
						</div>
					</div>
				</div>
			</div>
			<!-- Banner End -->

			<!-- Banner Start -->
			<div class="col-lg-4 col-12 mb-md-30px mb-lm-30px" data-aos="fade-up" data-aos-delay="400">
				<div class="banner-2">
					<img src="assets/images/banner/6.jpg" alt="" />
					<div class="info justify-content-start">
						<div class="content align-self-center">
							<h3 class="title">
								Living Room <br /> Collection </h3>
							
						</div>
					</div>
				</div>
			</div>
			<!-- Banner End -->

			<!-- Banner Start -->
			<div class="col-lg-4 col-12" data-aos="fade-up" data-aos-delay="600">
				<div class="banner-2">
					<img src="assets/images/banner/7.jpg" alt="" />
					<div class="info justify-content-start">
						<div class="content align-self-center">
							<h3 class="title">
								Children Room <br /> Collection
							</h3>
							<a href="shop-left-sidebar.html" class="shop-link">Shop Now</a>
						</div>
					</div>
				</div>
			</div>
			<!-- Banner End -->
		</div>
		<!-- Banners End -->
	</div>
</div>

<div class="container">
	<div class="row">
		<div class="col-md-12 text-center" data-aos="fade-up">
			<div class="section-title mb-0">
				<h2 class="title">Наши продукты</h2>
				<p class="sub-title mb-6">Мы работаем чтобы вы были в комфорте</p>
			</div>
		</div>

		<!-- Tab Start -->
		<div class="col-md-12 text-center mb-8" data-aos="fade-up" data-aos-delay="200">
			<ul class="product-tab-nav nav justify-content-center">
				<li class="nav-item"><a class="nav-link active" data-bs-toggle="tab" href="#tab-product-new-arrivals">ЛДСП</a></li>
				<li class="nav-item"><a class="nav-link" data-bs-toggle="tab" href="#tab-product-best-sellers">МДФ</a></li>
				<li class="nav-item"><a class="nav-link" data-bs-toggle="tab" href="#tab-product-sale-item">ПВХ</a></li>
				<li class="nav-item"><a class="nav-link" data-bs-toggle="tab" href="#tab-product-stol">Столешницы</a></li>
				<li class="nav-item"><a class="nav-link" data-bs-toggle="tab" href="#tab-product-fartuc">Фартуки</a></li>
				<li class="nav-item"><a class="nav-link" data-bs-toggle="tab" href="#tab-product-furn">Фурнитуры</a></li>
			</ul>
		</div>
		<!-- Tab End -->
	</div>
	<div class="row">
		<div class="col">
			<div class="tab-content">
				<!-- 1st tab start -->
				<div class="tab-pane fade show active" id="tab-product-new-arrivals">
					<div class="row">
						@foreach($ldsp as $ldsp)
						<div class="col-lg-3 col-md-6 col-sm-6 col-xs-6 mb-6" data-aos="fade-up" data-aos-delay="200">
							<!-- Single Prodect -->
							
							<div class="product">
								<div class="thumb">
									<a href="shop-left-sidebar.html" class="image">
										<img src="{{$ldsp['image']}}" alt="Product" />
										<img class="hover-image" src="{{$ldsp['image']}}" alt="Product" />
									</a>
									<span class="badges">
										<span class="new">New</span>
									</span>
									<div class="actions">
										<a href="wishlist.html" class="action wishlist" title="Wishlist"><i
												class="icon-heart"></i></a>
										<a href="#" class="action quickview" data-link-action="quickview" title="Quick view" data-bs-toggle="modal" data-bs-target="#exampleModal"><i
												class="icon-size-fullscreen"></i></a>
										<a href="compare.html" class="action compare" title="Compare"><i
												class="icon-refresh"></i></a>
									</div>
									<button title="Add To Cart" class=" add-to-cart">Add
										To Cart</button>
								</div>
								<div class="content">
									<h5 class="title"><a href="products/{{$ldsp['id']}}" method="GET">{{$ldsp['decor']}}</a></h5>
									<span class="price">
										<span class="new">Цена : {{$ldsp['price']}}</span>
									</span>
								</div>
								
							</div>
							
						</div>
						@endforeach
					</div>
				</div>
				<!-- 1st tab end -->
				<!-- 2nd tab start -->
				<div class="tab-pane fade" id="tab-product-best-sellers">
					<div class="row">
						@foreach($mdf as $mdf)
						<div class="col-lg-3 col-md-6 col-sm-6 col-xs-6 mb-6" data-aos="fade-up" data-aos-delay="200">
							<!-- Single Prodect -->
							<div class="product">
								<div class="thumb">
									<a href="shop-left-sidebar.html" class="image">
										<img src="{{$mdf['image']}}" alt="Product" />
										<img class="hover-image" src="{{$mdf['image']}}" alt="Product" />
									</a>
									<span class="badges">
										<span class="new">New</span>
									</span>
									<div class="actions">
										<a href="wishlist.html" class="action wishlist" title="Wishlist"><i
												class="icon-heart"></i></a>
										<a href="#" class="action quickview" data-link-action="quickview" title="Quick view" data-bs-toggle="modal" data-bs-target="#exampleModal"><i
												class="icon-size-fullscreen"></i></a>
										<a href="compare.html" class="action compare" title="Compare"><i
												class="icon-refresh"></i></a>
									</div>
									<button title="Add To Cart" class=" add-to-cart">Add
										To Cart</button>
								</div>
								<div class="content">
									<h5 class="title"><a href="products/{{$mdf['id']}}" method="GET">{{$mdf['decor']}}</a></h5>
									<span class="price">
										<span class="new">Цена : {{$mdf['price']}}</span>
									</span>
								</div>
							</div>
						</div>
						@endforeach
					</div>
				</div>
				<!-- 2nd tab end -->
				<!-- 3rd tab start -->
									<div class="tab-pane fade" id="tab-product-sale-item">
										<div class="row">
											@foreach($pvh as $pvh)
											<div class="col-lg-3 col-md-6 col-sm-6 col-xs-6 mb-6" data-aos="fade-up" data-aos-delay="200">
												<!-- Single Prodect -->
												<div class="product">
													<div class="thumb">
														<a href="shop-left-sidebar.html" class="image">
															<img src="{{$pvh['image']}}" alt="Product" />
															<img class="hover-image" src="{{$pvh['image']}}" alt="Product" />
														</a>
														<span class="badges">
															<span class="new">New</span>
														</span>
														<div class="actions">
															<a href="wishlist.html" class="action wishlist" title="Wishlist"><i
																	class="icon-heart"></i></a>
															<a href="#" class="action quickview" data-link-action="quickview" title="Quick view" data-bs-toggle="modal" data-bs-target="#exampleModal"><i
																	class="icon-size-fullscreen"></i></a>
															<a href="compare.html" class="action compare" title="Compare"><i
																	class="icon-refresh"></i></a>
														</div>
														<button title="Add To Cart" class=" add-to-cart">Add
															To Cart</button>
													</div>
													<div class="content">
														<h5 class="title"><a href="products/{{$pvh['id']}}" method="GET">{{$pvh['decor']}}</a></h5>
														<span class="price">
															<span class="new">Цена : {{$pvh['price']}}</span>
														</span>
													</div>
												</div>
											</div>
											@endforeach
										</div>
									</div>
				<!-- 3rd tab end -->
				<!-- 4th tab start -->
				<div class="tab-pane fade" id="tab-product-stol">
					<div class="row">
						@foreach($stol as $stol)
						<div class="col-lg-3 col-md-6 col-sm-6 col-xs-6 mb-6" data-aos="fade-up" data-aos-delay="200">
							<!-- Single Prodect -->
							<div class="product">
								<div class="thumb">
									<a href="shop-left-sidebar.html" class="image">
										<img src="{{$stol['image']}}" alt="Product" />
										<img class="hover-image" src="{{$stol['image']}}" alt="Product" />
									</a>
									<span class="badges">
										<span class="new">New</span>
									</span>
									<div class="actions">
										<a href="wishlist.html" class="action wishlist" title="Wishlist"><i
												class="icon-heart"></i></a>
										<a href="#" class="action quickview" data-link-action="quickview" title="Quick view" data-bs-toggle="modal" data-bs-target="#exampleModal"><i
												class="icon-size-fullscreen"></i></a>
										<a href="compare.html" class="action compare" title="Compare"><i
												class="icon-refresh"></i></a>
									</div>
									<button title="Add To Cart" class=" add-to-cart">Add
										To Cart</button>
								</div>
								<div class="content">
									<h5 class="title"><a href="products/{{$stol['id']}}" method="GET">{{$stol['decor']}}</a></h5>
									<span class="price">
										<span class="new">Цена : {{$stol['price']}}</span>
									</span>
								</div>
							</div>
						</div>
						@endforeach
					</div>
				</div>
				<!-- 4th tab end -->
				<!-- 5th tab start -->
				<div class="tab-pane fade" id="tab-product-fartuc">
					<div class="row">
						@foreach($fartuc as $fartuc)
						<div class="col-lg-3 col-md-6 col-sm-6 col-xs-6 mb-6" data-aos="fade-up" data-aos-delay="200">
							<!-- Single Prodect -->
							<div class="product">
								<div class="thumb">
									<a href="shop-left-sidebar.html" class="image">
										<img src="{{$fartuc['image']}}" alt="Product" />
										<img class="hover-image" src="{{$fartuc['image']}}" alt="Product" />
									</a>
									<span class="badges">
										<span class="new">New</span>
									</span>
									<div class="actions">
										<a href="wishlist.html" class="action wishlist" title="Wishlist"><i
												class="icon-heart"></i></a>
										<a href="#" class="action quickview" data-link-action="quickview" title="Quick view" data-bs-toggle="modal" data-bs-target="#exampleModal"><i
												class="icon-size-fullscreen"></i></a>
										<a href="compare.html" class="action compare" title="Compare"><i
												class="icon-refresh"></i></a>
									</div>
									<button title="Add To Cart" class=" add-to-cart">Add
										To Cart</button>
								</div>
								<div class="content">
									<h5 class="title"><a href="products/{{$fartuc['id']}}" method="GET">{{$fartuc['decor']}}</a></h5>
									<span class="price">
										<span class="new">Цена : {{$fartuc['price']}}</span>
									</span>
								</div>
							</div>
						</div>
						@endforeach
					</div>
				</div>
				<!-- 5th tab end -->
				<!-- 6th tab start -->
				<div class="tab-pane fade" id="tab-product-furn">
					<div class="row">
						@foreach($furniture as $furniture)
						<div class="col-lg-3 col-md-6 col-sm-6 col-xs-6 mb-6" data-aos="fade-up" data-aos-delay="200">
							<!-- Single Prodect -->
							<div class="product">
								<div class="thumb">
									<a href="shop-left-sidebar.html" class="image">
										<img src="{{$furniture['image']}}" alt="Product" />
										<img class="hover-image" src="{{$furniture['image']}}" alt="Product" />
									</a>
									<span class="badges">
										<span class="new">New</span>
									</span>
									<div class="actions">
										<a href="wishlist.html" class="action wishlist" title="Wishlist"><i
												class="icon-heart"></i></a>
										<a href="#" class="action quickview" data-link-action="quickview" title="Quick view" data-bs-toggle="modal" data-bs-target="#exampleModal"><i
												class="icon-size-fullscreen"></i></a>
										<a href="compare.html" class="action compare" title="Compare"><i
												class="icon-refresh"></i></a>
									</div>
									<button title="Add To Cart" class=" add-to-cart">Add
										To Cart</button>
								</div>
								<div class="content">
									<h5 class="title"><a href="products/{{$furniture['id']}}" method="GET">{{$furniture['decor']}}</a></h5>
									<span class="price">
										<span class="new">Цена : {{$furniture['price']}}</span>
									</span>
								</div>
							</div>
						</div>
						@endforeach
					</div>
				</div>
				<!-- 6th tab end -->
			</div>
		</div>
	</div>
</div>
@endsection
