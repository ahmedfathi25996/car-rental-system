<!DOCTYPE html>
<html lang="en">
<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
		<!-- Favicon-->
		<link rel="shortcut icon" href="website/img/fav.png">
		<!-- Author Meta -->
		<meta name="author" content="codepixer">
		<!-- Meta Description -->
		<meta name="description" content="">
		<!-- Meta Keyword -->
		<meta name="keywords" content="">
		<!-- meta character set -->
		<meta charset="UTF-8">
		<!-- Site Title -->
		<title>Car Rentals</title>

		<link href="https://fonts.googleapis.com/css?family=Poppins:100,200,400,300,500,600,700" rel="stylesheet"> 
			<!--
            CSS
            
            ============================================= -->
            {!!Html::style('website/css/linearicons.css') !!}
            {!!Html::style('website/css/font-awesome.min.css') !!}
            {!!Html::style('website/css/bootstrap.css') !!}
            {!!Html::style('website/css/magnific-popup.css') !!}
            {!!Html::style('website/css/nice-select.css') !!}
            {!!Html::style('website/css/animate.min.css') !!}
            {!!Html::style('website/css/owl.carousel.css') !!}
            {!!Html::style('website/css/main.css') !!}
		
						
			
			<link rel="stylesheet" href="https://code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">			
			
		
<body>

        <header id="header" id="home">
			    <div class="container">
			    	<div class="row align-items-center justify-content-between d-flex">
				      <div id="logo">
				        <a href="/"><img src="website/img/logo.png" alt="" title="" /></a>
				      </div>
				      <nav id="nav-menu-container">
				        <ul class="nav-menu">
				          <li class="menu-active"><a href="/">Home</a></li>
				          <li><a href="/aboutpage">About</a></li>
				          <li><a href="/carspage">Cars</a></li>
				          <li><a href="/servicepage">Service</a></li>
				         
				          	
                          <li><a href="/contactpage">Contact</a></li>
                          <li><a href="/blogpage">Blog</a></li>
                        
                                <!-- Authentication Links -->
                                @if (Auth::guest())
                
                      <li><a href="{{ url('/login') }}">Login</a></li>
                      <li><a href="{{ url('/register') }}">Register</a></li>
                  @else
                      <li class="dropdown">
                           
                          <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">
                              {{ Auth::user()->name }} <span class="caret"></span>
                          </a>

                          <ul class="dropdown-menu" role="menu">
                             <li><a href="{{ url('/userprofile') }}"><i class="fa fa-btn fa-sign-out"></i>My Profile</a></li>
                              <li><a href="{{ url('/logout') }}"><i class="fa fa-btn fa-sign-out"></i>Logout</a></li>
                             
                          </ul>
                      </li>
                  @endif
                            
				         		          
				        </ul>
				      </nav><!-- #nav-menu-container -->		    		
			    	</div>
                </div>
               
              </header><!-- #header -->
              @yield('content')
             


              
              <footer class="footer-area section-gap">
                    <div class="container">
                        <div class="row">
                            <div class="col-lg-2 col-md-6 col-sm-6">
                                <div class="single-footer-widget">
                                    <h6>Quick links</h6>
                                    <ul>
                                        <li><a href="#">Jobs</a></li>
                                        <li><a href="#">Brand Assets</a></li>
                                        <li><a href="#">Investor Relations</a></li>
                                        <li><a href="#">Terms of Service</a></li>
                                    </ul>								
                                </div>
                            </div>
                            <div class="col-lg-2 col-md-6 col-sm-6">
                                <div class="single-footer-widget">
                                    <h6>Features</h6>
                                    <ul>
                                        <li><a href="#">Jobs</a></li>
                                        <li><a href="#">Brand Assets</a></li>
                                        <li><a href="#">Investor Relations</a></li>
                                        <li><a href="#">Terms of Service</a></li>
                                    </ul>								
                                </div>
                            </div>
                            <div class="col-lg-2 col-md-6 col-sm-6">
                                <div class="single-footer-widget">
                                    <h6>Resources</h6>
                                    <ul>
                                        <li><a href="#">Jobs</a></li>
                                        <li><a href="#">Brand Assets</a></li>
                                        <li><a href="#">Investor Relations</a></li>
                                        <li><a href="#">Terms of Service</a></li>
                                    </ul>								
                                </div>
                            </div>												
                            <div class="col-lg-2 col-md-6 col-sm-6 social-widget">
                                <div class="single-footer-widget">
                                    <h6>Follow Us</h6>
                                    <p>Let us be social</p>
                                    <div class="footer-social d-flex align-items-center">
                                        <a href="#"><i class="fa fa-facebook"></i></a>
                                        <a href="#"><i class="fa fa-twitter"></i></a>
                                        <a href="#"><i class="fa fa-dribbble"></i></a>
                                        <a href="#"><i class="fa fa-behance"></i></a>
                                    </div>
                                </div>
                            </div>							
                            <div class="col-lg-4  col-md-6 col-sm-6">
                                <div class="single-footer-widget">
                                    <h6>Newsletter</h6>
                                    <p>Stay update with our latest</p>
                                    <div class="" id="mc_embed_signup">
                                        <form target="_blank" novalidate="true" action="https://spondonit.us12.list-manage.com/subscribe/post?u=1462626880ade1ac87bd9c93a&amp;id=92a4423d01" method="get" class="form-inline">
                                            <input class="form-control" name="EMAIL" placeholder="Enter Email" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Enter Email '" required="" type="email">
                                                <button class="click-btn btn btn-default"><span class="lnr lnr-arrow-right"></span></button>
                                                <div style="position: absolute; left: -5000px;">
                                                    <input name="b_36c4fd991d266f23781ded980_aefe40901a" tabindex="-1" value="" type="text">
                                                </div>
    
                                            <div class="info"></div>
                                        </form>
                                    </div>
                                </div>
                            </div>	
                            <p class="mt-50 mx-auto footer-text col-lg-12">
                                <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
    Copyright &copy;<script>document.write(new Date().getFullYear());</script> All rights reserved | This template is made with <i class="fa fa-heart-o" aria-hidden="true"></i> by <a href="https://colorlib.com" target="_blank">Colorlib</a>
    <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
                            </p>											
                        </div>
                    </div>
                </footer>	
                <!-- End footer Area -->
                {!!Html::script('website/js/vendor/jquery-2.2.4.min.js') !!}
                {!!Html::script('website/js/vendor/bootstrap.min.js') !!}
                {!!Html::script('website/js/easing.min.js') !!}
                {!!Html::script('website/js/hoverIntent.js') !!}
                {!!Html::script('website/js/superfish.min.js') !!}
                {!!Html::script('website/js/jquery.ajaxchimp.min.js') !!}
                {!!Html::script('website/js/jquery.magnific-popup.min.js') !!}
                {!!Html::script('website/js/owl.carousel.min.js') !!}
                {!!Html::script('website/js/jquery.sticky.js') !!}
                {!!Html::script('website/js/jquery.nice-select.min.js') !!}
                {!!Html::script('website/js/waypoints.min.js') !!}
                {!!Html::script('website/js/jquery.counterup.min.js') !!}
                {!!Html::script('website/js/parallax.min.js') !!}
                {!!Html::script('website/js/mail-script.js') !!}
                {!!Html::script('website/js/main.js') !!}
    
              
                <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
               
                <script type="text/javascript" src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBhOdIF3Y9382fqJYt5I_sswSrEw5eihAA"></script>
                <script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>			
                 
               
                
               
                
               		
               
               	
               
               				
              


</body>

</html>







          
















