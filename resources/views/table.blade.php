<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="icon" href="img/favicon.png" type="image/x-icon" />
        <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
        <title>fpurestaurantuew.com</title>

        <!-- Icon css link -->
        <link href="vendors/material-icon/css/materialdesignicons.min.css" rel="stylesheet">
        <link href="css/font-awesome.min.css" rel="stylesheet">
        <link href="vendors/linears-icon/style.css" rel="stylesheet">
        <!-- Bootstrap -->
        <link href="css/bootstrap.min.css" rel="stylesheet">

        <!-- Extra plugin css -->
        <link href="vendors/bootstrap-selector/bootstrap-select.css" rel="stylesheet">
        <link href="vendors/bootatrap-date-time/bootstrap-datetimepicker.min.css" rel="stylesheet">
        <link href="vendors/owl-carousel/assets/owl.carousel.css" rel="stylesheet">

        <link href="css/style.css" rel="stylesheet">
        <link href="css/responsive.css" rel="stylesheet">

        <style>
            #map {
              width: 100%;
              height: 300px;
            }
           </style>
           
        <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
        <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
        <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
        <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
        <![endif]-->
    </head>
    <body>

       <div id="preloader">
            <div class="loader absolute-center">
                <div class="loader__box"><b class="top"></b></div>
                <div class="loader__box"><b class="top"></b></div>
                <div class="loader__box"><b class="top"></b></div>
            </div>
        </div>

        <!--================ Frist hader Area =================-->
        <div class="first_header">
            <div class="container">
                <div class="row">
                    <div class="col-md-4">
                        <div class="header_contact_details">
                            <a href="#"><i class="#"></i>+233 026 784 4749</a>
                            <a href="#"><i class="#"></i>+233 024 415 5182</a>
                            <a href="#"><i class="#"></i>+233 024 441 7022</a>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="event_btn_inner">
                           
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="header_social">
                            <ul>
                                <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                                <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                                <li><a href="#"><i class="fa fa-instagram"></i></a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!--================End Footer Area =================-->

        <!--================End Footer Area =================-->
        <header class="main_menu_area">
            <nav class="navbar navbar-default">
                <div class="container">
                    <!-- Brand and toggle get grouped for better mobile display -->
                    <div class="navbar-header">
                        <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
                        <span class="sr-only">Toggle navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        </button>
                        <a class="navbar-brand" href="/"><img src="img/logo11.png" alt=""></a>
                    </div>

                    <!-- Collect the nav links, forms, and other content for toggling -->
                    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                        <ul class="nav navbar-nav navbar-right">
                            <li><a href="/">Home</a></li>
                            <li><a href="/about-us2">About Us</a></li>
                            <li><a href="/menu-grid">Menu</a></li>
                            <li><a href="/table">Table</a></li>
                            <li><a href="/gallery">Gallery</a></li>
                            <li><a href="/contact">Contact US</a></li>
                            <ul class="dropdown-menu">
                                    
                         </ul>
                            
                    </div><!-- /.navbar-collapse -->
                </div><!-- /.container-fluid -->
            </nav>
        </header>
        <!--================End Footer Area =================-->

        <!--================Banner Area =================-->
        <section class="banner_area_table">
            <div class="container">
                <div class="banner_content">
                  
                </div>
            </div>
        </section>
        <!--================End Banner Area =================-->

        <!--================Booking Table Area =================-->
        <section class="booking_table_area booking_area_white">
            <div class="container">
                @if(count($errors) > 0)
                    @foreach ($errors->all() as $error)
                        <div class="alert alert-danger">
                            {{ $error}}
                        </div>
                    @endforeach
                @endif
                @if (session('success'))
                    <div class="alert alert-success">
                        {{ session('success')}}
                    </div>
                @endif
                @if (session('error'))
                    <div class="alert alert-danger">
                        {{ session('error') }}
                    </div>
                @endif
                <div class="s_black_title">
                    <h3>Book a</h3>
                    <h2>Table</h2>
                </div>
                <form method="POST" action="/reservation" class="row mt-4">
                    @csrf
                        <div class="col-md-3">
                            <div class="input-append">
                                <input size="16" type="text" value="" placeholder="Name/Contact " id="name" name="name">
                                <span class="add-on"><i class="icon-th"></i></span>
                            </div>
                        </div>
                        <div class="col-md-2">
                            <div class="input-append">
                                <input size="16" type="date" value="" placeholder="date" id="date" name="date">
                                <span class="add-on"><i class="icon-th"></i></span>
                            </div>
                        </div>
                        <div class="col-md-2">
                            <div class="input-append">
                                <input size="16" type="time" value="" placeholder="" id="time" name="time">
                                <span class="add-on"><i class="icon-th"></i></span>
                            </div>
                        </div>
                        <div class="col-md-2">
                      <div class="party_size">
                                <select class="selectpicker" id="table_size" name="table_size">
                                    <option value="1">Table Size</option>
                                    <option value="1">Solo Table</option>
                                    <option value="2">Table for 2</option>
                                    <option value="3">Table for 3</option>
                                    <option value="4">Table for 4</option>
                                    <option value="5">Table for 5</option>
                                    <option value="1">Table for 6</option>
                                    <option value="2">Table for 7</option>
                                    <option value="3">Table for 8</option>
                                    <option value="4">Table for 9</option>
                                    <option value="5">Table for 10</option>
                                    <option value="1">Table for 11</option>
                                    <option value="2">Table for 12</option>
                                    <option value="3">Table for 13</option>
                                    <option value="4">Table for 14</option>
                                    <option value="5">Table for 15</option>
                                    <option value="1">Table for 16</option>
                                    <option value="2">Table for 17</option>
                                    <option value="3">Table for 18</option>
                                    <option value="4">Table for 19</option>
                                    <option value="5">Table for 20</option>
                                    <option value="1">Table for 21</option>
                                    <option value="2">Table for 22</option>
                                    <option value="3">Table for 23</option>
                                    <option value="4">Table for 24</option>
                                    <option value="5">Table for 25</option>
                                </select>
                            </div>
                        </div>
                        <div class="col-md-3">
                            <button type="submit" class="btn btn-default submit_btn">BOOK MY TABLE</button>
                        </div>
                </form>
                <div class="row mt-4" style="with:100%;margin-top:50px">
                    <div class="col-md-6">
                        <div id="map"></div>
                    </div>
                    <div class="col-sm-6"> 
                        <div class="map_contact_info">
                            <h3>Contact Information</h3>
                            <ul>
                                <li><a href="#"><span>Address:</span>University of Education,Winneba. North Campus, Winneba, C/R</a></li>
                                <li><a href="#"><span>Phone:</span>+233 024 960 0981</a></li>
                                <li><a href="#"><span>Phone:</span>+233 020 540 9177</a></li>
                                <li><a href="#"><span>Email:</span>desk.fpurestaurant@gmail.com</a></li>
                            </ul>
                            <h4>Opening Times</h4>
                            <h5>Monday - Friday 9am - 6pm</h5>
                            <h5>Saturday 12pm - 6pm | Sunday 12pm - 6pm</h5>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!--================End Booking Table Area =================-->

        <!--================End Recent Blog Area =================-->
        <footer class="footer_area">
            <div class="footer_widget_area">
                <div class="container">
                    <div class="row">
                        <div class="col-md-3">
                            <aside class="f_widget about_widget">
                                <div class="f_w_title">
                                    <h4>ABOUT US</h4>
                                </div>
                                    <p>FPU Restaurant brings you the distinct flavour of both local and continetal cuisine to Ghana.
                                 We offer a wide variety of authentic dishes consisting of breakfast, lunch, dinner, fruit juice, Salads and Desserts to rock your taste buds.
                                <br><br>#JustGoodFood</p>
                                
                                <ul>
                                    <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                                    <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                                    <li><a href="#"><i class="fa fa-instagram"></i></a></li>
                                </ul>
                            </aside>
                        </div>
                        <div class="col-md-3">
                            <aside class="f_widget contact_widget">
                                <div class="f_w_title">
                                    <h4>CONTACT US</h4>
                                </div>
                                <p>Have questions or comments:</p>
                                <ul>
                                    <li><a href="#"><i class="fa fa-envelope"></i>desk.fpurestaurant@gmail.com</a></li>
                                    <li><a href="#"><i class="fa fa-phone"></i>+233 026 784 4749</a></li>
                                    <li><a href="#"><i class="fa fa-phone"></i>+233 024 415 5182</a></li>
                                    <li><a href="#"><i class="fa fa-phone"></i>+233 024 441 7022</a></li>
                                    <li><a href="#"><i class="fa fa-map-marker"></i>University of Education,Winneba. North Campus Winneba, C/R</a></li>
                                </ul>
                            </aside>
                        </div>
                        <div class="col-md-3">
                            <aside class="f_widget twitter_widget">
                                <div class="f_w_title">
                                    <h4>Twitter Feed</h4>
                                </div>
                                <ul>
                                    <li>
                                        <a href="#">@_sumonrahman:</a> Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat.
                                    </li>
                                    <li>
                                        <a href="#">@_sumonrahman:</a> Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat.
                                    </li>
                                </ul>
                            </aside>
                        </div>
                        <div class="col-md-3">
                            <aside class="f_widget gallery_widget">
                                <div class="f_w_title">
                                    <h4>Footer Gallery</h4>
                                </div>
                                <ul>
                                    <li><a href="#"><img src="img/gallery/f-w-gallery/f-w-gallery-1.jpg" alt=""><i class="fa fa-search"></i></a></li>
                                    <li><a href="#"><img src="img/gallery/f-w-gallery/f-w-gallery-2.jpg" alt=""><i class="fa fa-search"></i></a></li>
                                    <li><a href="#"><img src="img/gallery/f-w-gallery/f-w-gallery-3.jpg" alt=""><i class="fa fa-search"></i></a></li>
                                    <li><a href="#"><img src="img/gallery/f-w-gallery/f-w-gallery-4.jpg" alt=""><i class="fa fa-search"></i></a></li>
                                    <li><a href="#"><img src="img/gallery/f-w-gallery/f-w-gallery-5.jpg" alt=""><i class="fa fa-search"></i></a></li>
                                    <li><a href="#"><img src="img/gallery/f-w-gallery/f-w-gallery-6.jpg" alt=""><i class="fa fa-search"></i></a></li>
                                </ul>
                            </aside>
                        </div>
                    </div>
                </div>
            </div>
            <div class="copy_right_area">
                <div class="container">
                    <div class="pull-left">
                        <h5><p><!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
                        Copyright &copy;<script>document.write(new Date().getFullYear());</script> All rights reserved | <a href="/reserve">Designed by P.E. Kessie, Department of Graphic Design.</a>
                        <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
                        </p></h5>
                    </div>
                   
                </div>
            </div>
        </footer>
        <!--================End Recent Blog Area =================-->


        <script>
            // Initialize and add the map
            function initMap() {
              // The location of Winneba University
              var winneba = {lat: 5.3609, lng: -.6332};
              // The map, centered at Winneba University
              var map = new google.maps.Map(
                  document.getElementById('map'), {zoom: 10, center: winneba});
              // The marker, positioned at Winneba
              var marker = new google.maps.Marker({position: winneba, map: map});
            }
        </script>
        <script async defer
        src="https://maps.googleapis.com/maps/api/js?key=AIzaSyAZlsqpBFAPQ_LgmBPPG8PguW-oYeAxu-s&callback=initMap">
        </script>
        
            
        <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
        <script src="js/jquery-2.1.4.min.js"></script>
        <!-- Include all compiled plugins (below), or include individual files as needed -->
        <script src="js/bootstrap.min.js"></script>

        <!-- Extra plugin js -->
        <script src="vendors/bootstrap-selector/bootstrap-select.js"></script>
        <script src="vendors/bootatrap-date-time/bootstrap-datetimepicker.min.js"></script>
        <script src="vendors/owl-carousel/owl.carousel.min.js"></script>
        <script src="vendors/isotope/imagesloaded.pkgd.min.js"></script>
        <script src="vendors/isotope/isotope.pkgd.min.js"></script>
        <script src="vendors/countdown/jquery.countdown.js"></script>
        <script src="vendors/js-calender/zabuto_calendar.min.js"></script>

        <script src="js/theme.js"></script>
    </body>
</html>
