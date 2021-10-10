
@extends('user.app')
@section('content')

	<!-- start banner Area -->
	<section class="banner-area">
		<div class="container">
			<div class="row fullscreen align-items-center justify-content-start">
				<div class="col-lg-12">
					<div class="active-banner-slider owl-carousel">
						<!-- single-slide -->
						<div class="row single-slide align-items-center d-flex">
							<div class="col-lg-5 col-md-6">
								<div class="banner-content">
									<h1>DEFA<br>CATALOG<br>COLLECTION!</h1>
									<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et
										dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation.</p>
									<div class="add-bag d-flex align-items-center">
										<a class="add-btn" href="{{route('user_category')}}"><span class="lnr lnr-cross"></span></a>
										<span class="add-text text-uppercase">Show More</span>
									</div>
								</div>
							</div>
							<div class="col-lg-7">
								<div class="banner-img">
									<img class="img-fluid" src="img/banner/01.png" alt="">
								</div>
							</div>
						</div>
						<!-- single-slide -->
						<div class="row single-slide">
							<div class="col-lg-5">
								<div class="banner-content">
									<h1>DEFA<br>CATALOG<br>COLLECTION!</h1>
									<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et
										dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation.</p>
									<div class="add-bag d-flex align-items-center">
										<a class="add-btn" href="{{route('user_category')}}"><span class="lnr lnr-cross"></span></a>
										<span class="add-text text-uppercase">Show More</span>
									</div>
								</div>
							</div>
							<div class="col-lg-7">
								<div class="banner-img">
									<img class="img-fluid" src="img/banner/01.png" alt="">
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>
	<!-- End banner Area -->

	<!-- start features Area -->
	<section class="features-area section_gap">
		<div class="container">
			<div class="row features-inner">
				<!-- single features -->
				<div class="col-lg-3 col-md-6 col-sm-6">
					<div class="single-features">
						<div class="f-icon">
							<i class="fas fa-box-open fa-3x"></i>
						</div>
						<h6>Original Brand</h6>
						<p>Menghadirkan Produk Original</p>
					</div>
				</div>
				<!-- single features -->
				<div class="col-lg-3 col-md-6 col-sm-6">
					<div class="single-features">
						<div class="f-icon">
							<i class="fas fa-cube fa-3x"></i>
						</div>
						<h6>Produk Terbaru</h6>
						<p>Menjual produk - produk terbaru</p>
					</div>
				</div>
				<!-- single features -->
				<div class="col-lg-3 col-md-6 col-sm-6">
					<div class="single-features">
						<div class="f-icon">
							<i class="fas fa-check fa-3x"></i>
						</div>
						<h6>Kualitas Produk Terbaik</h6>
						<p>Kulaitas produk yang dijual yang terbaik</p>
					</div>
				</div>
				<!-- single features -->
				<div class="col-lg-3 col-md-6 col-sm-6">
					<div class="single-features">
						<div class="f-icon">
							<i class="fas fa-briefcase-medical fa-3x"></i>
						</div>
						<h6>Garansi Produk</h6>
						<p>Produk yang dijual memiliki garansi resmi</p>
					</div>
				</div>
			</div>
		</div>
	</section>
	<!-- end features Area -->

	<!-- Start category Area -->
	<section class="category-area">
		<div class="container">
			<div class="row justify-content-center">               
					<div class="col-lg-6 text-center">
                        <h1>New Variant</h1>
                    </br>
                    </div>  
				<div class="col-lg-8 col-md-12">
					<div class="row">
						<div class="col-lg-8 col-md-8">
							<div class="single-deal">
								<div class="overlay"></div>
								<img class="img-fluid w-100" src="img/category/1.jpg" alt="">
								<a href="img/category/1.jpg" class="img-pop-up" target="_blank">
									<div class="deal-details">
										<h6 class="deal-title">Lamp</h6>
									</div>
								</a>
							</div>
						</div>
						<div class="col-lg-4 col-md-4">
							<div class="single-deal">
								<div class="overlay"></div>
								<img class="img-fluid w-100" src="img/category/8.png" alt="">
								<a href="img/category/8.png" class="img-pop-up" target="_blank">
									<div class="deal-details">
										<h6 class="deal-title">Lamp</h6>
									</div>
								</a>
							</div>
						</div>
						<div class="col-lg-4 col-md-4">
							<div class="single-deal">
								<div class="overlay"></div>
								<img class="img-fluid w-100" src="img/category/3.png" alt="">
								<a href="img/category/3.png" class="img-pop-up" target="_blank">
									<div class="deal-details">
										<h6 class="deal-title">Product for Couple</h6>
									</div>
								</a>
							</div>
						</div>
						<div class="col-lg-4 col-md-4">
							<div class="single-deal">
								<div class="overlay"></div>
								<img class="img-fluid w-100" src="img/category/4.png" alt="">
								<a href="img/category/4.png" class="img-pop-up" target="_blank">
									<div class="deal-details">
										<h6 class="deal-title">Sneaker for Sports</h6>
									</div>
								</a>
							</div>
						</div>
					<div class="col-lg-4 col-md-4">
                    <div class="single-deal">
                        <div class="overlay"></div>
                        <img class="img-fluid w-100" src="img/category/7.png" alt="">
                        <a href="img/category/7.png" class="img-pop-up" target="_blank">
                            <div class="deal-details">
                                <h6 class="deal-title">Sneaker for Sports</h6>
                            </div>
                        </a>
                    </div>
                </div>
            </div>
        </div>
				
	</section>
	<!-- End category Area -->

	<!-- start product Area -->
		<!-- single product slide -->    
			<div class="container">
				<div class="row justify-content-center">
					<div class="col-lg-6 text-center">
						<div class="section-title">
                        <br>
                        <br>
                        <br>
                        <br>
							<h1>Latest Products</h1>
							<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et
								dolore
								magna aliqua.</p>
						</div>
					</div>
				</div>
				<div class="row">
					<!-- single product -->
                    @foreach ($product as $products)
					<div class="col-lg-3 col-md-6">
						<div class="single-product">
							<img class="img-fluid" src="{{ Storage::url($products->image) }}" alt="">
							<div class="product-details ">
								<h5>{{$products['product_names']}}</h5>
                                <div class="product-details ">
                                    <h7>{{ $products->categories->category_names}}</h7>
								<div class="price ">
									<h6>Rp. {{number_format ($products->price)}}</h6>									
								</div>
								<div class="prd-bottom">
                                    <a href="{{ route('detail_product', $products->id) }}" class="social-info">
										<button type="submit" value="submit" class="btn primary-btn">View </button>
									</a>
								</div>
                                </div>
							</div>
						</div>
					</div>
                    @endforeach
                </div>               
            </div>
       
        
	<!-- end product Area -->

	<!-- Start exclusive deal Area -->
	<section class="exclusive-deal-area">
		<div class="container-fluid">
			<div class="row justify-content-center align-items-center">
				<div class="col-lg-6 no-padding exclusive-left">
					<div class="row clock_sec clockdiv" id="clockdiv">
						<div class="col-lg-12">
							<h1>Exclusive Hot Deal Ends Soon!</h1>
							<p>Who are in extremely love with eco friendly system.</p>
						</div>
						<div class="col-lg-12">
							<div class="row clock-wrap">
								<div class="col clockinner1 clockinner">
									<h1 class="days">150</h1>
									<span class="smalltext">Days</span>
								</div>
								<div class="col clockinner clockinner1">
									<h1 class="hours">23</h1>
									<span class="smalltext">Hours</span>
								</div>
								<div class="col clockinner clockinner1">
									<h1 class="minutes">47</h1>
									<span class="smalltext">Mins</span>
								</div>
								<div class="col clockinner clockinner1">
									<h1 class="seconds">59</h1>
									<span class="smalltext">Secs</span>
								</div>
							</div>
						</div>
					</div>
					<a href="{{route('user_category')}}" class="primary-btn">Show More</a>
				</div>
				<div class="col-lg-6 no-padding exclusive-right">
					<div class="active-exclusive-product-slider">
						<!-- single exclusive carousel -->
						@foreach ($product as $products)
						<div class="single-exclusive-slider">
							<img class="img-fluid" src="{{ Storage::url($products->image) }}" alt="">
							<div class="product-details">
								<div class="price">
									<br>
									<h6>Rp. {{number_format ($products->price)}}</h6>									
								</div>
								<h4>{{$products['product_names']}}</h4>
								<h5>{{ $products->categories->category_names}}</h5>
								<div class="add-bag d-flex align-items-center justify-content-center">
									<a class="add-btn" href="{{ route('detail_product', $products->id) }}"><i class="fas fa-eye"></i></a>
									<span class="add-text text-uppercase">View Detail</span>
								</div>
							</div>
						</div>			
						@endforeach
					</div>
				</div>
			</div>
		</div>
	</section>
	<!-- End exclusive deal Area -->

	<!-- Start brand Area -->
	<section class="brand-area section_gap">
		<div class="container">
			<div class="row">
				<a class="col single-img" href="#">
					<img class="img-fluid d-block mx-auto" src="img/brand/1.png" alt="">
				</a>
				<a class="col single-img" href="#">
					<img class="img-fluid d-block mx-auto" src="img/brand/2.png" alt="">
				</a>
				<a class="col single-img" href="#">
					<img class="img-fluid d-block mx-auto" src="img/brand/3.png" alt="">
				</a>
				<a class="col single-img" href="#">
					<img class="img-fluid d-block mx-auto" src="img/brand/4.png" alt="">
				</a>
				<a class="col single-img" href="#">
					<img class="img-fluid d-block mx-auto" src="img/brand/5.png" alt="">
				</a>
			</div>
		</div>
	</section>
	<!-- End brand Area -->

	

@endsection