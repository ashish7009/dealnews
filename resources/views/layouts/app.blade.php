<!DOCTYPE html>
<html lang="en">
   <head>
      <meta charset="utf-8">
      <meta http-equiv="X-UA-Compatible" content="IE=edge">
      <meta name="viewport" content="width=device-width, initial-scale=1">
      <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
      <title>Deals News</title>
      <link href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet" integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">
      <!-- Bootstrap -->
      <link href="{{asset('assets/css/bootstrap.min.css')}}" rel="stylesheet">
      <link href="{{asset('assets/css/style.css')}}" rel="stylesheet">
      <link rel="stylesheet" href="{{asset('assets/css/nice.css')}}">
      <link rel="stylesheet" type="text/css" href="{{asset('assets/slick/slick.css')}}">
      <link rel="stylesheet" type="text/css" href="{{asset('assets/slick/slick-theme.css')}}">
      <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
      <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
      <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
      <![endif]-->
   </head>
   <body>
      <header>
         <div class="top-header">
            <div class="container">
               <div class="row">
                  <div class="col-md-6 col-sm-12">
                     <div class="logo-part"><a href="/"><img src="{{asset('assets/images/logo.svg')}}" alt="logo"></a></div>
                     <div class="account-btn">
                        <a class="header-link" href="">GET OUR APPS</a>|
                        
                        @if (Route::has('login'))
                           @auth
                              welcome: <a class="header-link login">{{ Auth::user()->name }}</a>
                              <a class="dropdown-item" href="{{ route('logout') }}"
                                 onclick="event.preventDefault();
                                               document.getElementById('logout-form').submit();">
                                  {{ __('Logout') }}
                              </a>

                              <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                  @csrf
                              </form>
                           @else
                              <a class="header-link login" href="{{route('login')}}">SIGN IN</a>/
                              <a class="header-link register" href="{{route('register')}}">REGISTER</a>
                           @endauth
                        @endif
                     </div>
                  </div>
                  <div class="col-md-6 col-sm-12">
                     <div class="adv-part"><a href=""><img src="{{asset('assets/images/adv.gif')}}" alt="add"></a></div>
                  </div>
               </div>
            </div>
         </div>
         <div class="bottom-header">
            <div class="container">
               <nav class="navbar navbar-default">
                  <!-- Brand and toggle get grouped for better mobile display -->
                  <div class="navbar-header">
                     <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
                     <span class="sr-only">Toggle navigation</span>
                     <span class="icon-bar"></span>
                     <span class="icon-bar"></span>
                     <span class="icon-bar"></span>
                     </button>
                  </div>
                  <!-- Collect the nav links, forms, and other content for toggling -->
                  <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                     <ul class="nav navbar-nav">
                        <li class="active"><a href="#">Clothing</a></li>
                        <li><a href="#">Computers</a></li>
                        <li><a href="#">Electronics</a></li>
                        <li><a href="#">Home & Garden</a></li>
                        <li><a href="#">All Deals</a></li>
                        <li><a href="#">Editor's Choice</a></li>
                        <li><a href="#">Coupons</a></li>
                        <li><a href="#">Blog</a></li>
                        <li class="search-header">
                           <a class="search-icon" href="#"><i class="fa fa-search" aria-hidden="true"></i></a>
                           <div class="search-form">
                              <form class="navbar-form navbar-left">
                                 <div class="form-group">
                                    <input type="text" class="form-control" placeholder="Search">
                                 </div>
                                 <button type="submit" class="btn btn-default">Submit</button>
                              </form>
                           </div>
                        </li>
                     </ul>
                  </div>
                  <!-- /.navbar-collapse -->
               </nav>
            </div>
         </div>
      </header>
      <!--  ======================== Banner section ======================= -->
      @yield('content')
      
      <footer>
         <div class="container">
            <div class="row">
               <div class="col-md-3 col-sm-6 col-xs-12 footer-logo">
                  <a href="index.html"><img src="{{asset('assets/images/logo.svg')}}" alt="logo"></a>
                  <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Quis ipsum suspendisse ultrices gravida. Risus commodo viverra maecenas accumsan lacus vel facilisis. </p>
               </div>
               <div class="col-md-3 col-sm-6 col-xs-12 links">
                  <h5>DEALS</h5>
                  <ul>
                     <li><a href="">POPULAR BRANDS</a></li>
                     <li><a href="">ONLINE COUPONS</a></li>
                  </ul>
               </div>
               <div class="col-md-3 col-sm-6 col-xs-12 links">
                  <h5>HELPFUL LINKS</h5>
                  <ul>
                     <li><a href="">About Us</a></li>
                     <li><a href="">Contact Us</a></li>
                     <li><a href="">Faq</a></li>
                  </ul>
               </div>
               <div class="col-md-3 col-sm-6 col-xs-12 newsletter-form ">
                  <h5>Newsletter</h5>
                  <p>Subscribe to our weekly Newsletter and stay tuned.</p>
                  <form action="" method="post">
                     <div class="input-prepend"><span class="add-on"><i class="icon-envelope"></i></span>
                        <input type="text" id="" name="" placeholder="your@email.com">
                     </div>
                     <input type="submit" value="Subscribe Now!" class="btn btn-large" />
                  </form>
               </div>
            </div>
         </div>
         <div class="footer-bottom">
            <div class="container">
               <h6>© 2019 Dealnews</h6>
            </div>
         </div>
      </footer>
      <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
      <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
      <!-- Include all compiled plugins (below), or include individual files as needed -->
      <script src="{{asset('assets/js/bootstrap.min.js')}}"></script>
      <script src="https://code.jquery.com/jquery-2.2.0.min.js" type="text/javascript"></script>
      <script src="{{asset('assets/slick/slick.js')}}" type="text/javascript" charset="utf-8"></script>
      <script type="text/javascript">
         $(document).on('ready', function() {
                $(".lazy").slick({
             lazyLoad: 'ondemand', // ondemand progressive anticipated
               dots: true,
             infinite: true
         
           });
         });
         
         
      </script>
      <script>
         $(window).scroll(function() {    
           var scroll = $(window).scrollTop();
         
           if (scroll >= 50) {
               $("header").addClass("fix-Header");
           } else {
               $("header").removeClass("fix-Header");
           }
         });
      </script>
      <script type="text/javascript">
         $(".search-icon").click(function(){
         $(".search-form").toggle();
         });
      </script>
      <script type="text/javascript">
         $(document).on('ready', function() {
         
           $(".regular").slick({
             dots: false,
             infinite: true,
             slidesToShow: 5,
             slidesToScroll: 1,
               responsive: [
         {
           breakpoint: 1199,
           settings: {
             slidesToShow: 4,
             slidesToScroll: 1,
               dots: false,
             infinite: true,
            
           }
         },
         {
          breakpoint: 991,
           settings: {
             slidesToShow: 3,
               dots: false,
             slidesToScroll: 1,
             infinite: true,
             
           }
         },
         {
           breakpoint: 600,
           settings: {
             slidesToShow: 2,
               dots: false,
             slidesToScroll: 1
           }
         },
         {
           breakpoint: 480,
           settings: {
             slidesToShow: 1,
               dots: false,
             slidesToScroll: 1
           }
         }
         // You can unslick at a given breakpoint now by adding:
         // settings: "unslick"
         // instead of a settings object
         ]
           });
         
         });
      </script>
      <script src="{{asset('assets/js/jquery.nice-select.min.js')}}"></script>
      <script src="{{asset('assets/js/fastclick.js')}}"></script>
      <script src="{{asset('assets/js/prism.js')}}"></script>
      <script>
         $(document).ready(function() {
           $('select:not(.ignore)').niceSelect();      
           FastClick.attach(document.body);
         });    
      </script>
   </body>
</html>