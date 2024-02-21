@extends('front.layout.main-layout')

@section('content')
		@include('front.widget.slider')

		@include('front.widget.about-block')
		
		@include('front.widget.discover-block')
		


		<!-- Start Our Product Area -->
		<section class="our-product-area ptb-100">
			<div class="container-fluid">
				<div class="row">
					<div class="section-title">
						<span>Our Product</span>
						<h2>Featured Wines Collections</h2>
						<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Quis ipsum suspendisse ultrices.</p>
					</div>
				</div>
				<div class="product-wrap product-wraps owl-carousel owl-theme">
					<div class="single-product">
						<div class="product-img">
							<img src="{{asset('frontend')}}/img/home-one/product/1.png" alt="Product">
						</div>
						<div class="product-details">
							<a href="#">Shop Now</a>
							<h3>Burgundy</h3>
							<ul>
								<li>
									<i class="fa fa-star"></i>
								</li>
								<li>
									<i class="fa fa-star"></i>
								</li>
								<li>
									<i class="fa fa-star"></i>
								</li>
								<li>
									<i class="fa fa-star"></i>
								</li>
								<li>
									<i class="fa fa-star"></i>
								</li>
							</ul>
							<span>$229.50</span>
						</div>
					</div>
					<div class="single-product">
						<div class="product-img">
							<img src="{{asset('frontend')}}/img/home-one/product/2.png" alt="Product">
						</div>
						<div class="product-details">
							<a href="#">Shop Now</a>
							<h3>Red Wine</h3>
							<ul>
								<li>
									<i class="fa fa-star"></i>
								</li>
								<li>
									<i class="fa fa-star"></i>
								</li>
								<li>
									<i class="fa fa-star"></i>
								</li>
								<li>
									<i class="fa fa-star"></i>
								</li>
								<li>
									<i class="fa fa-star"></i>
								</li>
							</ul>
							<span>$299.70</span>
						</div>
					</div>
					<div class="single-product">
						<div class="product-img">
							<img src="{{asset('frontend')}}/img/home-one/product/3.png" alt="Product">
						</div>
						<div class="product-details">
							<a href="#">Shop Now</a>
							<h3>Goose Berry</h3>
							<ul>
								<li>
									<i class="fa fa-star"></i>
								</li>
								<li>
									<i class="fa fa-star"></i>
								</li>
								<li>
									<i class="fa fa-star"></i>
								</li>
								<li>
									<i class="fa fa-star"></i>
								</li>
								<li>
									<i class="fa fa-star"></i>
								</li>
							</ul>
							<span>$299.70</span>
						</div>
					</div>
					<div class="single-product">
						<div class="product-img">
							<img src="{{asset('frontend')}}/img/home-one/product/4.png" alt="Product">
						</div>
						<div class="product-details">
							<a href="#">Shop Now</a>
							<h3>La Katina</h3>
							<ul>
								<li>
									<i class="fa fa-star"></i>
								</li>
								<li>
									<i class="fa fa-star"></i>
								</li>
								<li>
									<i class="fa fa-star"></i>
								</li>
								<li>
									<i class="fa fa-star"></i>
								</li>
								<li>
									<i class="fa fa-star"></i>
								</li>
							</ul>
							<span>$259.70</span>
						</div>
					</div>
					<div class="single-product">
						<div class="product-img">
							<img src="{{asset('frontend')}}/img/home-one/product/1.png" alt="Product">
						</div>
						<div class="product-details">
							<a href="#">Shop Now</a>
							<h3>Burgundy</h3>
							<ul>
								<li>
									<i class="fa fa-star"></i>
								</li>
								<li>
									<i class="fa fa-star"></i>
								</li>
								<li>
									<i class="fa fa-star"></i>
								</li>
								<li>
									<i class="fa fa-star"></i>
								</li>
								<li>
									<i class="fa fa-star"></i>
								</li>
							</ul>
							<span>$229.50</span>
						</div>
					</div>
					<div class="single-product">
						<div class="product-img">
							<img src="{{asset('frontend')}}/img/home-one/product/4.png" alt="Product">
						</div>
						<div class="product-details">
							<a href="#">Shop Now</a>
							<h3>La Katina</h3>
							<ul>
								<li>
									<i class="fa fa-star"></i>
								</li>
								<li>
									<i class="fa fa-star"></i>
								</li>
								<li>
									<i class="fa fa-star"></i>
								</li>
								<li>
									<i class="fa fa-star"></i>
								</li>
								<li>
									<i class="fa fa-star"></i>
								</li>
							</ul>
							<span>$259.50</span>
						</div>
					</div>
				</div>
			</div>
		</section>
		<!-- End Our Product Area -->

		<!-- Start The Events Area -->
		<section class="the-events-area ptb-100-70">
			<div class="container">
				<div class="row align-items-center">
					<div class="col-lg-6">
						<div class="row">
							<div class="col-lg-6 col-sm-6">
								<div class="single-events">
									<img src="{{asset('frontend')}}/img/home-two/events/1.jpg" alt="">
								</div>
							</div>
							<div class="col-lg-6 col-sm-6">
								<div class="single-events events-change">
									<img src="{{asset('frontend')}}/img/home-two/events/2.jpg" alt="">
								</div>
							</div>
							<div class="col-lg-6 col-sm-6">
								<div class="single-events events-changes">
									<img src="{{asset('frontend')}}/img/home-two/events/3.jpg" alt="">
								</div>
							</div>
							<div class="col-lg-6 col-sm-6">
								<div class="single-events">
									<img src="{{asset('frontend')}}/img/home-two/events/4.jpg" alt="">
								</div>
							</div>
						</div>
					</div>
					<div class="col-lg-6">
						<div class="section-title">
							<span>The Events</span>
							<h2>Weedding & Private Events</h2>
							<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit,  do eiusmod tempor incididunt ut labore magna aliqua. Quis ipsum suspendisse ultrices gravida. Risu viver maecenas accumsan lacus vel facilisis. Lorem ipsum dolor sit amet, consectetur adipiscing elit,  do eiusmod tempor incididunt ut labore magna aliqua.</p>

							<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit,  do eiusmod tempor incididunt ut labore magna aliqua. Quis ipsum suspendisse ultrices gravida. Risu viver maecenas accumsan.</p>
							<a class="default-btn" href="event-details.html">Event Details</a>
						</div>
					</div>
				</div>
			</div>
		</section>
		<!-- End The Events Area -->

		<!-- Start Our Products Area -->
		<section class="our-products-area ptb-100">
			<div class="container">
				<div class="row">
					<div class="section-title">
						<span>Our Products</span>
						<h2>Deal of The Week</h2>
						<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Quis ipsum suspendisse ultrices.</p>
					</div>
				</div>
				<div class="row">
					<div class="col-lg-6">
						<div class="products-img">
							<img src="{{asset('frontend')}}/img/home-two/products.png" alt="Products">
						</div>
						<div id="timer">
							<div class="timer">
								<img src="{{asset('frontend')}}/img/shape/service-shape-2.png" alt="">
								<div class="timer-shape">
									<div class="time-cap" id="days"></div>
								</div>
							</div>
							<div class="timer">
								<img src="{{asset('frontend')}}/img/shape/service-shape-2.png" alt="">
								<div class="timer-shape">
									<div class="time-cap" id="hours"></div>
								</div>
							</div>
							<div class="timer">
								<img src="{{asset('frontend')}}/img/shape/service-shape-2.png" alt="">
								<div class="timer-shape">
									<div class="time-cap" id="minutes"></div>
								</div>
							</div>
							<div class="timer">
								<img src="{{asset('frontend')}}/img/shape/service-shape-2.png" alt="">
								<div class="timer-shape">
									<div class="time-cap" id="seconds"></div>
								</div>
							</div>
						</div>
					</div>
					<div class="col-lg-6">
						<div class="products-details">
							<h3>Buy More Save More</h3>
							<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Quis ipsum suspendisse ultrices gravida. Risus commodo viverra maecenas accumsan lacus vel facilisis. Lorem ipsum dolor sit amet, consectetur sit amet, consectetur adipiscing elit</p>
							<span>$49.99</span>
							<a href="shop-details.html">
								Buy Now
							</a>
						</div>
					</div>
				</div>
			</div>
		</section>
		<!-- End Our Products Area -->

		<!-- Start Testimonial Area -->
		<section class="testimonials-area ptb-100-70">
			<div class="container">
				<div class="row">
					<div class="section-title">
						<span>Testimonial</span>
						<h2>What Client Say</h2>
						<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Quis ipsum suspendisse ultrices.</p>
					</div>
				</div>
				<div class="row">
					<div class="testimonial-wrapper owl-carousel owl-theme">
						<div class="singel-testimonial">
							<div class="testimonial-img">
								<img src="{{asset('frontend')}}/img/home-one/testimonial/1.jpg" alt="Testimonial">
							</div>
							<div class="testimonial-text">
								<h3>John Addison</h3>
								<span>Designer</span>
								<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt  labore magna aliqua. Quis ipsum suspendisse ultrices gravida.</p>
								<ul>
									<li>
										<i class="fa fa-star"></i>
									</li>
									<li>
										<i class="fa fa-star"></i>
									</li>
									<li>
										<i class="fa fa-star"></i>
									</li>
									<li>
										<i class="fa fa-star"></i>
									</li>
									<li>
										<i class="fa fa-star"></i>
									</li>
								</ul>
								<div class="queat">
									<i class="flaticon-right-quotation-1"></i>
								</div>
							</div>
						</div>
						<div class="singel-testimonial">
							<div class="testimonial-img">
								<img src="{{asset('frontend')}}/img/home-one/testimonial/2.jpg" alt="Testimonial">
							</div>
							<div class="testimonial-text">
								<h3>Jon Meair</h3>
								<span>Businessman</span>
								<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt  labore magna aliqua. Quis ipsum suspendisse ultrices gravida.</p>
								<ul>
									<li>
										<i class="fa fa-star"></i>
									</li>
									<li>
										<i class="fa fa-star"></i>
									</li>
									<li>
										<i class="fa fa-star"></i>
									</li>
									<li>
										<i class="fa fa-star"></i>
									</li>
									<li>
										<i class="fa fa-star"></i>
									</li>
								</ul>
								<div class="queat">
									<i class="flaticon-right-quotation-1"></i>
								</div>
							</div>
						</div>
						<div class="singel-testimonial">
							<div class="testimonial-img">
								<img src="{{asset('frontend')}}/img/home-one/testimonial/1.jpg" alt="Testimonial">
							</div>
							<div class="testimonial-text">
								<h3>John Addison</h3>
								<span>Designer</span>
								<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt  labore magna aliqua. Quis ipsum suspendisse ultrices gravida.</p>
								<ul>
									<li>
										<i class="fa fa-star"></i>
									</li>
									<li>
										<i class="fa fa-star"></i>
									</li>
									<li>
										<i class="fa fa-star"></i>
									</li>
									<li>
										<i class="fa fa-star"></i>
									</li>
									<li>
										<i class="fa fa-star"></i>
									</li>
								</ul>
								<div class="queat">
									<i class="flaticon-right-quotation-1"></i>
								</div>
							</div>
						</div>
						<div class="singel-testimonial">
							<div class="testimonial-img">
								<img src="{{asset('frontend')}}/img/home-one/testimonial/2.jpg" alt="Testimonial">
							</div>
							<div class="testimonial-text">
								<h3>Jon Meair</h3>
								<span>Businessman</span>
								<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt  labore magna aliqua. Quis ipsum suspendisse ultrices gravida.</p>
								<ul>
									<li>
										<i class="fa fa-star"></i>
									</li>
									<li>
										<i class="fa fa-star"></i>
									</li>
									<li>
										<i class="fa fa-star"></i>
									</li>
									<li>
										<i class="fa fa-star"></i>
									</li>
									<li>
										<i class="fa fa-star"></i>
									</li>
								</ul>
								<div class="queat">
									<i class="flaticon-right-quotation-1"></i>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</section>
		<!-- End Testimonial Area -->

		<!-- Start Blog Area -->
		<section class="blog-area">
			<div class="container">
				<div class="row">
					<div class="section-title">
						<span>Vineyard</span>
						<h2>Blog Wines</h2>
						<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Quis ipsum suspendisse ultrices.</p>
					</div>
				</div>
				<div class="row">
					<div class="col-lg-6 col-md-6">
						<div class="single-blog">
							<div class="row align-items-center">
								<div class="col-lg-12 col-xl-6 pr-0">
									<div class="blog-img">
										<a href="blog-details.html">
											<img src="{{asset('frontend')}}/img/home-one/blog/1.jpg" alt="Blog">
										</a>	
									</div>
								</div>
								<div class="col-lg-12 col-xl-6 pl-0">
									<div class="blog-text">
										<span>
											<i class="fa fa-calendar"></i>
											07 April 2019
										</span>
										<h3>
											<a href="blog-details.html">The Recipe from a Winemaker’s Restaurent</a>
										</h3>
										<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
										<a class="read-more" href="blog-details.html">
											Continue
											<i class="flaticon-right-arrow"></i>
										</a>
									</div>
								</div>
							</div>
						</div>
					</div>
					<div class="col-lg-6 col-md-6">
						<div class="single-blog">
							<div class="row align-items-center">
								<div class="col-lg-12 col-xl-6 pr-0">
									<div class="blog-img">
										<a href="blog-details.html">
											<img src="{{asset('frontend')}}/img/home-one/blog/2.jpg" alt="Blog">
										</a>	
									</div>
								</div>
								<div class="col-lg-12 col-xl-6 pl-0">
									<div class="blog-text">
										<span>
											<i class="fa fa-calendar"></i>
											07 May 2019
										</span>
										<h3>
											<a href="blog-details.html">The Different taste of Wines Collection</a>
										</h3>
										<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
										<a class="read-more" href="blog-details.html">
											Continue
											<i class="flaticon-right-arrow"></i>
										</a>
									</div>
								</div>
							</div>
						</div>
					</div>
					<div class="col-lg-6 col-md-6">
						<div class="single-blog">
							<div class="row align-items-center">
								<div class="col-lg-12 col-xl-6 pr-0">
									<div class="blog-img">
										<a href="blog-details.html">
											<img src="{{asset('frontend')}}/img/home-one/blog/3.jpg" alt="Blog">
										</a>	
									</div>
								</div>
								<div class="col-lg-12 col-xl-6 pl-0">
									<div class="blog-text">
										<span>
											<i class="fa fa-calendar"></i>
											07 jun 2019
										</span>
										<h3>
											<a href="blog-details.html">Bruce Neyar of  Neyars Vineyard Collection</a>
										</h3>
										<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
										<a class="read-more" href="blog-details.html">
											Continue
											<i class="flaticon-right-arrow"></i>
										</a>
									</div>
								</div>
							</div>
						</div>
					</div>
					<div class="col-lg-6 col-md-6">
						<div class="single-blog">
							<div class="row align-items-center">
								<div class="col-lg-12 col-xl-6 pr-0">
									<div class="blog-img">
										<a href="blog-details.html">
											<img src="{{asset('frontend')}}/img/home-one/blog/4.jpg" alt="Blog">
										</a>	
									</div>
								</div>
								<div class="col-lg-12 col-xl-6 pl-0">
									<div class="blog-text">
										<span>
											<i class="fa fa-calendar"></i>
											07 July 2019
										</span>
										<h3>
											<a href="blog-details.html">William Shatner’s New Wine Enterprise</a>
										</h3>
										<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
										<a class="read-more" href="blog-details.html">
											Continue
											<i class="flaticon-right-arrow"></i>
										</a>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</section>
		<!-- End Blog Area -->

		<!-- Start Start Subscribe area -->
		<div class="subscribe-area">
			<div class="container">
				<div class="row">
					<div class="section-title">
						<h2>Subscribe To Newsletter</h2>
						<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Quis ipsum suspendisse ultrices.</p>
					</div>
				</div>
				<div class="row">
					<div class="col-md-6 offset-md-3">
						<div class="widget subscribe">
							<form class="newsletter-form search-form" data-toggle="validator">
                                <input type="email" class="input-newsletter search-field" placeholder="Enter email address" name="EMAIL" required autocomplete="off">
            
                                <button type="submit" class="search-submit default-btn">Sbuscribe</button>
                                <div id="validator-newsletter" class="form-result"></div>
                            </form>
						</div>
					</div>
				</div>
			</div>
		</div>
		<!-- Start End Subscribe area -->

		<!-- Start Partner Logo area -->
        <div class="partner-area ptb-100">
			<div class="container">
				<div class="partner-weap owl-carousel owl-theme">
					<div class="single-logo">
						<img src="{{asset('frontend')}}/img/home-one/partner-logo/1.png" alt="Logo">
					</div>
					<div class="single-logo">
						<img src="{{asset('frontend')}}/img/home-one/partner-logo/2.png" alt="Logo">
					</div>
					<div class="single-logo">
						<img src="{{asset('frontend')}}/img/home-one/partner-logo/4.png" alt="Logo">
					</div>
					<div class="single-logo">
						<img src="{{asset('frontend')}}/img/home-one/partner-logo/5.png" alt="Logo">
					</div>
					<div class="single-logo">
						<img src="{{asset('frontend')}}/img/home-one/partner-logo/6.png" alt="Logo">
					</div>
				</div>
			</div>
		</div>
		<!-- Start End Partner Logo area -->

       
@endsection