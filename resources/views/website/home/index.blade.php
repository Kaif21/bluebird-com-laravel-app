@extends('master.website')

@section('body')

			<!-- start banner Area -->
			<section class="banner-area relative">
				<div class="container-fluid">
					<div class="row fullscreen align-items-center justify-content-center">
						<div class="col-lg-6 col-md-12 d-flex align-self-end img-right no-padding">
							<img class="img-fluid" src="{{asset('/')}}website/assets/img/header-img.png" alt="">
						</div>
						<div class="banner-content col-lg-6 col-md-12">
							<h1 class="title-top"><span>Flat</span> 75%Off</h1>
							<h1 class="text-uppercase">
								It’s Happening <br>
								this Season!
							</h1>
							<button class="primary-btn text-uppercase"><a href="#">Purchase Now</a></button>
						</div>
					</div>
				</div>
			</section>
			<!-- End banner Area -->
            			<!-- Start category Area -->
			<section class="category-area section-gap section-gap text-white" id="catagory">
				<div class="container">
					<div class="row d-flex justify-content-center">
						<div class="menu-content pb-40">
							<div class="title text-center">
								<h1 class="mb-10 text-dark">Shop for Different Categories</h1>
								<p>Who are in extremely love with eco friendly system.</p>
							</div>
						</div>
					</div>
					<div class="row ">
						<div class="col-lg-8 col-md-8 mb-10">
							<div class="row category-bottom">
								<div class="col-lg-6 col-md-6 mb-30">
									<div class="content">
									    <a href="#" target="_blank">
									      <div class="content-overlay"></div>
									  		 <img class="content-image img-fluid d-block mx-auto" src="{{asset('/')}}website/assets/img/c1.jpg" alt="">
									      <div class="content-details fadeIn-bottom">
									        <h3 class="content-title ">Product for Women</h3>
									      </div>
									    </a>
									</div>
								</div>
								<div class="col-lg-6 col-md-6 mb-30">
									<div class="content">
									    <a href="#" target="_blank">
									      <div class="content-overlay"></div>
									  		 <img class="content-image img-fluid d-block mx-auto" src="{{asset('/')}}website/assets/img/c2.jpg" alt="">
									      <div class="content-details fadeIn-bottom">
									        <h3 class="content-title">Product for Couple</h3>
									      </div>
									    </a>
									</div>
								</div>
								<div class="col-lg-12">
									<div class="content">
										<a href="#" target="_blank">
									      <div class="content-overlay"></div>
									  		 <img class="content-image img-fluid d-block mx-auto" src="{{asset('/')}}website/assets/img/c3.jpg" alt="">
									      <div class="content-details fadeIn-bottom">
									        <h3 class="content-title">Shop Now</h3>
									      </div>
									    </a>
									</div>
							  	</div>
							</div>
						</div>
						<div class="col-lg-4 col-md-4 mb-10">
						  <div class="content">
						    <a href="#" target="_blank">
						      <div class="content-overlay"></div>
						  		 <img class="content-image img-fluid d-block mx-auto" src="{{asset('/')}}website/assets/img/c4.jpg" alt="">
						      <div class="content-details fadeIn-bottom">
						        <h3 class="content-title">Product For Men</h3>
						      </div>
						    </a>
						  </div>
						</div>
					</div>
				</div>
			</section>
			<!-- End category Area -->

			<!-- Start women-product Area -->
			<section class="women-product-area section-gap" id="women">
				<div class="container">
					<div class="countdown-content pb-40">
						<div class="title text-center">
							<h1 class="mb-10">New realeased Products</h1>
							<p>Who are in extremely love with eco friendly system.</p>
						</div>
					</div>
					<div class="row">
                        @foreach ($products as $product )
                        <a href="{{route('website.product-detail',['id'=>$product->id])}}">
						<div class="col-lg-3 col-md-6 single-product">
						  <div class="content">
						      <div class="content-overlay"></div>
						  		 <img class="content-image img-fluid d-block mx-auto" src="{{asset($product->image)}}" alt="">
						  </div>
						  <div class="price">
						  		<h5>{{$product->name}}</h5>
						  		<h3>BDT. {{$product->selling_price}}</h3>
						   </div>
						</div>
                    </a>
                        @endforeach
					</div>
				</div>
			</section>
			<!-- End women-product Area -->

			<!-- Start related-product Area -->
			<section class="related-product-area section-gap " id="latest">
				<div class="container ">
					<div class="related-content">
						<div class="title text-center">
							<h1 class="mb-10">Related Searched Products</h1>
							<p>Who are in extremely love with eco friendly system.</p>
						</div>
					</div>
					<div class="row shadow-lg rounded p-5">
						<div class="col-lg-3 col-md-4 col-sm-6 mb-20">
							<div class="single-related-product d-flex">
								<a href="#"><img src="{{asset('/')}}website/assets/img/r1.jpg" alt=""></a>
								<div class="desc">
									<a href="#" class="title">Black lace Heels</a>
									<div class="price"><span class="lnr lnr-tag"></span> $189.00</div>
								</div>
							</div>
						</div>
						<div class="col-lg-3 col-md-4 col-sm-6 mb-20">
							<div class="single-related-product d-flex">
								<a href="#"><img src="{{asset('/')}}website/assets/img/r2.jpg" alt=""></a>
								<div class="desc">
									<a href="#" class="title">Black lace Heels</a>
									<div class="price"><span class="lnr lnr-tag"></span> $189.00</div>
								</div>
							</div>
						</div>
						<div class="col-lg-3 col-md-4 col-sm-6 mb-20">
							<div class="single-related-product d-flex">
								<a href="#"><img src="{{asset('/')}}website/assets/img/r3.jpg" alt=""></a>
								<div class="desc">
									<a href="#" class="title">Black lace Heels</a>
									<div class="price"><span class="lnr lnr-tag"></span> $189.00</div>
								</div>
							</div>
						</div>
						<div class="col-lg-3 col-md-4 col-sm-6 mb-20">
							<div class="single-related-product d-flex">
								<a href="#"><img src="{{asset('/')}}website/assets/img/r4.jpg" alt=""></a>
								<div class="desc">
									<a href="#" class="title">Black lace Heels</a>
									<div class="price"><span class="lnr lnr-tag"></span> $189.00</div>
								</div>
							</div>
						</div>
						<div class="col-lg-3 col-md-4 col-sm-6 mb-20">
							<div class="single-related-product d-flex">
								<a href="#"><img src="{{asset('/')}}website/assets/img/r5.jpg" alt=""></a>
								<div class="desc">
									<a href="#" class="title">Black lace Heels</a>
									<div class="price"><span class="lnr lnr-tag"></span> $189.00</div>
								</div>
							</div>
						</div>
						<div class="col-lg-3 col-md-4 col-sm-6 mb-20">
							<div class="single-related-product d-flex">
								<a href="#"><img src="{{asset('/')}}website/assets/img/r6.jpg" alt=""></a>
								<div class="desc">
									<a href="#" class="title">Black lace Heels</a>
									<div class="price"><span class="lnr lnr-tag"></span> $189.00</div>
								</div>
							</div>
						</div>
						<div class="col-lg-3 col-md-4 col-sm-6 mb-20">
							<div class="single-related-product d-flex">
								<a href="#"><img src="{{asset('/')}}website/assets/img/r7.jpg" alt=""></a>
								<div class="desc">
									<a href="#" class="title">Black lace Heels</a>
									<div class="price"><span class="lnr lnr-tag"></span> $189.00</div>
								</div>
							</div>
						</div>
						<div class="col-lg-3 col-md-4 col-sm-6 mb-20">
							<div class="single-related-product d-flex">
								<a href="#"><img src="{{asset('/')}}website/assets/img/r8.jpg" alt=""></a>
								<div class="desc">
									<a href="#" class="title">Black lace Heels</a>
									<div class="price"><span class="lnr lnr-tag"></span> $189.00</div>
								</div>
							</div>
						</div>
						<div class="col-lg-3 col-md-4 col-sm-6">
							<div class="single-related-product d-flex">
								<a href="#"><img src="{{asset('/')}}website/assets/img/r9.jpg" alt=""></a>
								<div class="desc">
									<a href="#" class="title">Black lace Heels</a>
									<div class="price"><span class="lnr lnr-tag"></span> $189.00</div>
								</div>
							</div>
						</div>
						<div class="col-lg-3 col-md-4 col-sm-6">
							<div class="single-related-product d-flex">
								<a href="#"><img src="{{asset('/')}}website/assets/img/r10.jpg" alt=""></a>
								<div class="desc">
									<a href="#" class="title">Black lace Heels</a>
									<div class="price"><span class="lnr lnr-tag"></span> $189.00</div>
								</div>
							</div>
						</div>
						<div class="col-lg-3 col-md-4 col-sm-6">
							<div class="single-related-product d-flex">
								<a href="#"><img src="{{asset('/')}}website/assets/img/r11.jpg" alt=""></a>
								<div class="desc">
									<a href="#" class="title">Black lace Heels</a>
									<div class="price"><span class="lnr lnr-tag"></span> $189.00</div>
								</div>
							</div>
						</div>
						<div class="col-lg-3 col-md-4 col-sm-6">
							<div class="single-related-product d-flex">
								<a href="#"><img src="{{asset('/')}}website/assets/img/r12.jpg" alt=""></a>
								<div class="desc">
									<a href="#" class="title">Black lace Heels</a>
									<div class="price"><span class="lnr lnr-tag"></span> $189.00</div>
								</div>
							</div>
						</div>
					</div>
			</section>
			<!-- End related-product Area -->

			<!-- Start brand Area -->
			<section class="pb-100">
				<div class="container">
                    <div class="related-content">
						<div class="title text-center">
							<h1 class="mb-10">Popular Brands</h1>
							<p>Who are in extremely love with eco friendly system.</p>
						</div>
					</div>
					<div class="row logo-wrap ">
                        @foreach($brands as $brand)
                        <div class="col single-img">
                            <a href="{{route('website.product-brand',['id'=>$brand->id])}}">
                                <img class="d-block mx-auto" height="100" src="{{asset($brand->image)}}" alt="#">
                            </a>

                        </div>
                        @endforeach
					</div>
				</div>
			</section>
			<!-- End brand Area -->

@endsection
