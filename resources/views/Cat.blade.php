@extends('layouts.home')
@section('content')
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
		</div>
		<!-- Tab End -->
	</div>
	<div class="row">
		<div class="col">
			<div class="tab-content">
				<!-- 1st tab start -->
				<div class="tab-pane fade show active" id="tab-product-new-arrivals">
					<div class="row">
						@foreach($posts as $post)
						<div class="col-lg-3 col-md-6 col-sm-6 col-xs-6 mb-6" data-aos="fade-up" data-aos-delay="200">
							<!-- Single Prodect -->
							
							<div class="product">
								<div class="thumb">
									<a href="shop-left-sidebar.html" class="image">
										<img src="{{$post['image']}}" alt="Product" />
										<img class="hover-image" src="{{$post['image']}}" alt="Product" />
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
									<h5 class="title"><a href="products/{{$post['id']}}" method="GET">{{$post['decor']}}</a></h5>
									<span class="price">
										<span class="new">Цена : {{$post['price']}}</span>
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
						<div class="col-lg-3 col-md-6 col-sm-6 col-xs-6 mb-6" data-aos="fade-up" data-aos-delay="200">
							<!-- Single Prodect -->
							<div class="product">
								<div class="thumb">
									<a href="shop-left-sidebar.html" class="image">
										<img src="assets/images/product-image/1.jpg" alt="Product" />
										<img class="hover-image" src="assets/images/product-image/2.jpg" alt="Product" />
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
									<h5 class="title"><a href="shop-left-sidebar.html">ЛДСП </a></h5>
									<span class="price">
										<span class="new">$38.50</span>
									</span>
								</div>
							</div>
						</div>

						<div class="col-lg-3 col-md-6 col-sm-6 col-xs-6 mb-6" data-aos="fade-up" data-aos-delay="400">
							<!-- Single Prodect -->
							<div class="product">
								<div class="thumb">
									<a href="shop-left-sidebar.html" class="image">
										<img src="assets/images/product-image/3.jpg" alt="Product" />
										<img class="hover-image" src="assets/images/product-image/4.jpg" alt="Product" />
									</a>
									<span class="badges">
										<span class="sale">-10%</span>
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
									<h5 class="title"><a href="shop-left-sidebar.html">ЛДСП</a></h5>
									<span class="price">
										<span class="new">$38.50</span>
									<span class="old">$48.50</span>
									</span>
								</div>
							</div>
							<!-- Single Prodect -->
						</div>
						<div class="col-lg-3 col-md-6 col-sm-6 col-xs-6 mb-6" data-aos="fade-up" data-aos-delay="600">
							<!-- Single Prodect -->
							<div class="product">
								<div class="thumb">
									<a href="shop-left-sidebar.html" class="image">
										<img src="assets/images/product-image/5.jpg" alt="Product" />
										<img class="hover-image" src="assets/images/product-image/6.jpg" alt="Product" />
									</a>
									<span class="badges">
										<span class="sale">-7%</span>
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
									<h5 class="title"><a href="shop-left-sidebar.html">ЛДСП</a></h5>
									<span class="price">
										<span class="new">$30.50</span>
									<span class="old">$38.00</span>
									</span>
								</div>
							</div>
						</div>
						<div class="col-lg-3 col-md-6 col-sm-6 col-xs-6 mb-6" data-aos="fade-up" data-aos-delay="800">
							<!-- Single Prodect -->
							<div class="product">
								<div class="thumb">
									<a href="shop-left-sidebar.html" class="image">
										<img src="assets/images/product-image/7.jpg" alt="Product" />
										<img class="hover-image" src="assets/images/product-image/8.jpg" alt="Product" />
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
									<h5 class="title"><a href="shop-left-sidebar.html">Living & Bedroom Chair</a></h5>
									<span class="price">
										<span class="new">$38.50</span>
									</span>
								</div>
							</div>
							<!-- Single Prodect -->
						</div>
						<div class="col-lg-3 col-md-6 col-sm-6 col-xs-6 mb-md-30px mb-lm-30px" data-aos="fade-up" data-aos-delay="200">
							<!-- Single Prodect -->
							<div class="product">
								<div class="thumb">
									<a href="shop-left-sidebar.html" class="image">
										<img src="assets/images/product-image/1.jpg" alt="Product" />
										<img class="hover-image" src="assets/images/product-image/2.jpg" alt="Product" />
									</a>
									<span class="badges">
										<span class="sale">-5%</span>
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
									<h5 class="title"><a href="shop-left-sidebar.html">Living & Bedroom Table</a></h5>
									<span class="price">
										<span class="new">$38.50</span>
									<span class="old">$40.50</span>
									</span>
								</div>
							</div>
						</div>
						<div class="col-lg-3 col-md-6 col-sm-6 col-xs-6  mb-md-30px mb-lm-30px" data-aos="fade-up" data-aos-delay="400">
							<!-- Single Prodect -->
							<div class="product">
								<div class="thumb">
									<a href="shop-left-sidebar.html" class="image">
										<img src="assets/images/product-image/3.jpg" alt="Product" />
										<img class="hover-image" src="assets/images/product-image/4.jpg" alt="Product" />
									</a>
									<span class="badges">
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
									<h5 class="title"><a href="shop-left-sidebar.html">Wooden decorations</a></h5>
									<span class="price">
										<span class="new">$38.50</span>
									</span>
								</div>
							</div>
							<!-- Single Prodect -->
						</div>
						<div class="col-lg-3 col-md-6 col-sm-6 col-xs-6 mb-es-30px" data-aos="fade-up" data-aos-delay="600">
							<!-- Single Prodect -->
							<div class="product">
								<div class="thumb">
									<a href="shop-left-sidebar.html" class="image">
										<img src="assets/images/product-image/5.jpg" alt="Product" />
										<img class="hover-image" src="assets/images/product-image/6.jpg" alt="Product" />
									</a>
									<span class="badges">
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
									<h5 class="title"><a href="shop-left-sidebar.html">High quality vase bottle</a></h5>
									<span class="price">
										<span class="new">$30.50</span>
									</span>
								</div>
							</div>
						</div>
						<div class="col-lg-3 col-md-6 col-sm-6 col-xs-6 " data-aos="fade-up" data-aos-delay="800">
							<!-- Single Prodect -->
							<div class="product">
								<div class="thumb">
									<a href="shop-left-sidebar.html" class="image">
										<img src="assets/images/product-image/7.jpg" alt="Product" />
										<img class="hover-image" src="assets/images/product-image/8.jpg" alt="Product" />
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
									<h5 class="title"><a href="shop-left-sidebar.html">Living & Bedroom Chair</a></h5>
									<span class="price">
										<span class="new">$38.50</span>
									</span>
								</div>
							</div>
							<!-- Single Prodect -->
						</div>
					</div>
				</div>
				<!-- 2nd tab end -->
				<!-- 3rd tab start -->
				<div class="tab-pane fade" id="tab-product-sale-item">
					<div class="row">
						<div class="col-lg-3 col-md-6 col-sm-6 col-xs-6 mb-6" data-aos="fade-up" data-aos-delay="200">
							<!-- Single Prodect -->
							<div class="product">
								<div class="thumb">
									<a href="shop-left-sidebar.html" class="image">
										<img src="assets/images/product-image/1.jpg" alt="Product" />
										<img class="hover-image" src="assets/images/product-image/2.jpg" alt="Product" />
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
									<h5 class="title"><a href="shop-left-sidebar.html">Simple minimal Chair </a></h5>
									<span class="price">
										<span class="new">$38.50</span>
									</span>
								</div>
							</div>
						</div>
						<div class="col-lg-3 col-md-6 col-sm-6 col-xs-6 mb-6" data-aos="fade-up" data-aos-delay="400">
							<!-- Single Prodect -->
							<div class="product">
								<div class="thumb">
									<a href="shop-left-sidebar.html" class="image">
										<img src="assets/images/product-image/3.jpg" alt="Product" />
										<img class="hover-image" src="assets/images/product-image/4.jpg" alt="Product" />
									</a>
									<span class="badges">
										<span class="sale">-10%</span>
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
									<h5 class="title"><a href="shop-left-sidebar.html">Wooden decorations</a></h5>
									<span class="price">
										<span class="new">$38.50</span>
									<span class="old">$48.50</span>
									</span>
								</div>
							</div>
							<!-- Single Prodect -->
						</div>
						<div class="col-lg-3 col-md-6 col-sm-6 col-xs-6 mb-6" data-aos="fade-up" data-aos-delay="600">
							<!-- Single Prodect -->
							<div class="product">
								<div class="thumb">
									<a href="shop-left-sidebar.html" class="image">
										<img src="assets/images/product-image/5.jpg" alt="Product" />
										<img class="hover-image" src="assets/images/product-image/6.jpg" alt="Product" />
									</a>
									<span class="badges">
										<span class="sale">-7%</span>
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
									<h5 class="title"><a href="shop-left-sidebar.html">High quality vase bottle</a></h5>
									<span class="price">
										<span class="new">$30.50</span>
									<span class="old">$38.00</span>
									</span>
								</div>
							</div>
						</div>
						<div class="col-lg-3 col-md-6 col-sm-6 col-xs-6 mb-6" data-aos="fade-up" data-aos-delay="800">
							<!-- Single Prodect -->
							<div class="product">
								<div class="thumb">
									<a href="shop-left-sidebar.html" class="image">
										<img src="assets/images/product-image/7.jpg" alt="Product" />
										<img class="hover-image" src="assets/images/product-image/8.jpg" alt="Product" />
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
									<h5 class="title"><a href="shop-left-sidebar.html">Living & Bedroom Chair</a></h5>
									<span class="price">
										<span class="new">$38.50</span>
									</span>
								</div>
							</div>
							<!-- Single Prodect -->
						</div>
						<div class="col-lg-3 col-md-6 col-sm-6 col-xs-6 mb-md-30px mb-lm-30px" data-aos="fade-up" data-aos-delay="200">
							<!-- Single Prodect -->
							<div class="product">
								<div class="thumb">
									<a href="shop-left-sidebar.html" class="image">
										<img src="assets/images/product-image/1.jpg" alt="Product" />
										<img class="hover-image" src="assets/images/product-image/2.jpg" alt="Product" />
									</a>
									<span class="badges">
										<span class="sale">-5%</span>
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
									<h5 class="title"><a href="shop-left-sidebar.html">Living & Bedroom Table</a></h5>
									<span class="price">
										<span class="new">$38.50</span>
									<span class="old">$40.50</span>
									</span>
								</div>
							</div>
						</div>
						<div class="col-lg-3 col-md-6 col-sm-6 col-xs-6  mb-md-30px mb-lm-30px" data-aos="fade-up" data-aos-delay="400">
							<!-- Single Prodect -->
							<div class="product">
								<div class="thumb">
									<a href="shop-left-sidebar.html" class="image">
										<img src="assets/images/product-image/3.jpg" alt="Product" />
										<img class="hover-image" src="assets/images/product-image/4.jpg" alt="Product" />
									</a>
									<span class="badges">
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
									<h5 class="title"><a href="shop-left-sidebar.html">Wooden decorations</a></h5>
									<span class="price">
										<span class="new">$38.50</span>
									</span>
								</div>
							</div>
							<!-- Single Prodect -->
						</div>
						<div class="col-lg-3 col-md-6 col-sm-6 col-xs-6 mb-es-30px" data-aos="fade-up" data-aos-delay="600">
							<!-- Single Prodect -->
							<div class="product">
								<div class="thumb">
									<a href="shop-left-sidebar.html" class="image">
										<img src="assets/images/product-image/5.jpg" alt="Product" />
										<img class="hover-image" src="assets/images/product-image/6.jpg" alt="Product" />
									</a>
									<span class="badges">
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
									<h5 class="title"><a href="shop-left-sidebar.html">High quality vase bottle</a></h5>
									<span class="price">
										<span class="new">$30.50</span>
									</span>
								</div>
							</div>
						</div>
						<div class="col-lg-3 col-md-6 col-sm-6 col-xs-6 " data-aos="fade-up" data-aos-delay="800">
							<!-- Single Prodect -->
							<div class="product">
								<div class="thumb">
									<a href="shop-left-sidebar.html" class="image">
										<img src="assets/images/product-image/7.jpg" alt="Product" />
										<img class="hover-image" src="assets/images/product-image/8.jpg" alt="Product" />
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
									<h5 class="title"><a href="shop-left-sidebar.html">Living & Bedroom Chair</a></h5>
									<span class="price">
										<span class="new">$38.50</span>
									</span>
								</div>
							</div>
							<!-- Single Prodect -->
						</div>
					</div>
				</div>
				<!-- 3rd tab end -->
				<!-- 4th tab start -->
				<div class="tab-pane fade" id="tab-product-on-sales">
					<div class="row">
						<div class="col-lg-3 col-md-6 col-sm-6 col-xs-6 mb-6" data-aos="fade-up" data-aos-delay="200">
							<!-- Single Prodect -->
							<div class="product">
								<div class="thumb">
									<a href="shop-left-sidebar.html" class="image">
										<img src="assets/images/product-image/1.jpg" alt="Product" />
										<img class="hover-image" src="assets/images/product-image/2.jpg" alt="Product" />
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
									<h5 class="title"><a href="shop-left-sidebar.html">Simple minimal Chair </a></h5>
									<span class="price">
										<span class="new">$38.50</span>
									</span>
								</div>
							</div>
						</div>
						<div class="col-lg-3 col-md-6 col-sm-6 col-xs-6 mb-6" data-aos="fade-up" data-aos-delay="400">
							<!-- Single Prodect -->
							<div class="product">
								<div class="thumb">
									<a href="shop-left-sidebar.html" class="image">
										<img src="assets/images/product-image/3.jpg" alt="Product" />
										<img class="hover-image" src="assets/images/product-image/4.jpg" alt="Product" />
									</a>
									<span class="badges">
										<span class="sale">-10%</span>
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
									<h5 class="title"><a href="shop-left-sidebar.html">Wooden decorations</a></h5>
									<span class="price">
										<span class="new">$38.50</span>
									<span class="old">$48.50</span>
									</span>
								</div>
							</div>
							<!-- Single Prodect -->
						</div>
						<div class="col-lg-3 col-md-6 col-sm-6 col-xs-6 mb-6" data-aos="fade-up" data-aos-delay="600">
							<!-- Single Prodect -->
							<div class="product">
								<div class="thumb">
									<a href="shop-left-sidebar.html" class="image">
										<img src="assets/images/product-image/5.jpg" alt="Product" />
										<img class="hover-image" src="assets/images/product-image/6.jpg" alt="Product" />
									</a>
									<span class="badges">
										<span class="sale">-7%</span>
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
									<h5 class="title"><a href="shop-left-sidebar.html">High quality vase bottle</a></h5>
									<span class="price">
										<span class="new">$30.50</span>
									<span class="old">$38.00</span>
									</span>
								</div>
							</div>
						</div>
						<div class="col-lg-3 col-md-6 col-sm-6 col-xs-6 mb-6" data-aos="fade-up" data-aos-delay="800">
							<!-- Single Prodect -->
							<div class="product">
								<div class="thumb">
									<a href="shop-left-sidebar.html" class="image">
										<img src="assets/images/product-image/7.jpg" alt="Product" />
										<img class="hover-image" src="assets/images/product-image/8.jpg" alt="Product" />
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
									<h5 class="title"><a href="shop-left-sidebar.html">Living & Bedroom Chair</a></h5>
									<span class="price">
										<span class="new">$38.50</span>
									</span>
								</div>
							</div>
							<!-- Single Prodect -->
						</div>
						<div class="col-lg-3 col-md-6 col-sm-6 col-xs-6 mb-md-30px mb-lm-30px" data-aos="fade-up" data-aos-delay="200">
							<!-- Single Prodect -->
							<div class="product">
								<div class="thumb">
									<a href="shop-left-sidebar.html" class="image">
										<img src="assets/images/product-image/1.jpg" alt="Product" />
										<img class="hover-image" src="assets/images/product-image/2.jpg" alt="Product" />
									</a>
									<span class="badges">
										<span class="sale">-5%</span>
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
									<h5 class="title"><a href="shop-left-sidebar.html">Living & Bedroom Table</a></h5>
									<span class="price">
										<span class="new">$38.50</span>
									<span class="old">$40.50</span>
									</span>
								</div>
							</div>
						</div>
						<div class="col-lg-3 col-md-6 col-sm-6 col-xs-6  mb-md-30px mb-lm-30px" data-aos="fade-up" data-aos-delay="400">
							<!-- Single Prodect -->
							<div class="product">
								<div class="thumb">
									<a href="shop-left-sidebar.html" class="image">
										<img src="assets/images/product-image/3.jpg" alt="Product" />
										<img class="hover-image" src="assets/images/product-image/4.jpg" alt="Product" />
									</a>
									<span class="badges">
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
									<h5 class="title"><a href="shop-left-sidebar.html">Wooden decorations</a></h5>
									<span class="price">
										<span class="new">$38.50</span>
									</span>
								</div>
							</div>
							<!-- Single Prodect -->
						</div>
						<div class="col-lg-3 col-md-6 col-sm-6 col-xs-6 mb-es-30px" data-aos="fade-up" data-aos-delay="600">
							<!-- Single Prodect -->
							<div class="product">
								<div class="thumb">
									<a href="shop-left-sidebar.html" class="image">
										<img src="assets/images/product-image/5.jpg" alt="Product" />
										<img class="hover-image" src="assets/images/product-image/6.jpg" alt="Product" />
									</a>
									<span class="badges">
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
									<h5 class="title"><a href="shop-left-sidebar.html">High quality vase bottle</a></h5>
									<span class="price">
										<span class="new">$30.50</span>
									</span>
								</div>
							</div>
						</div>
						<div class="col-lg-3 col-md-6 col-sm-6 col-xs-6 " data-aos="fade-up" data-aos-delay="800">
							<!-- Single Prodect -->
							<div class="product">
								<div class="thumb">
									<a href="shop-left-sidebar.html" class="image">
										<img src="assets/images/product-image/7.jpg" alt="Product" />
										<img class="hover-image" src="assets/images/product-image/8.jpg" alt="Product" />
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
									<h5 class="title"><a href="shop-left-sidebar.html">Living & Bedroom Chair</a></h5>
									<span class="price">
										<span class="new">$38.50</span>
									</span>
								</div>
							</div>
							<!-- Single Prodect -->
						</div>
					</div>
				</div>
				<!-- 4th tab end -->
			</div>
		</div>
	</div>
</div>
@endsection
