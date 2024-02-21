<!doctype html>
<html lang="zxx">
    <head>
       
		@include('front.ext.head')
        <title>Giano - Winery & Wine Bar HTML Template</title>
    </head>

    <body>
		<!-- Start Preloader Area -->
		<div class="preloader">
            <div class="spinner">
                <div class="double-bounce1"></div>
                <div class="double-bounce2"></div>
            </div>
        </div>
        <!-- End Preloader Area -->



		@include('front.ext.header')

		@include('front.widget.sidebar')

        @yield('content')

		@include('front.ext.footer')

		<!-- Start Go Top Area -->
		<div class="go-top">
			<i class="fa fa-angle-double-up"></i>
			<i class="fa fa-angle-double-up"></i>
		</div>
		<!-- End Go Top Area -->

        
		@include('front.ext.script')
    </body>
</html>

