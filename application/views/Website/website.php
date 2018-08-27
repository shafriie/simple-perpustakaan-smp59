<!DOCTYPE html>
<html lang="en">
<head>

    <!-- meta -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport"       content="width=device-width, initial-scale=1.0">
    <meta name="description"    content="LookBusiness - One Page Multipurpose Html Template">
    <meta name="keywords"       content="business, responsive, multipurpose, onepage, corporate, clean">
    <meta name="author"         content="Designcarebd">

    <!-- Site title -->
    <title>Perpustakaan SMPN 59</title>

    <!-- favicon -->
    <link rel="shortcut icon" type="image/x-icon" href="<?=base_url('assets/');?>img/favicon.png.jpeg">

    <!-- Bootstrap css -->
    <link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" rel="stylesheet">

    <!--Font Awesome css -->
    <link href="<?=base_url('assets/');?>css/font-awesome.min.css" rel="stylesheet">


    <!-- Normalizer css -->
    <link href="<?=base_url('assets/');?>css/normalize.css" rel="stylesheet">

    <!-- Owl Carousel css -->
    <link href="<?=base_url('assets/');?>css/owl.carousel.min.css" rel="stylesheet">
    <link href="<?=base_url('assets/');?>css/owl.transitions.css" rel="stylesheet">

    <!-- Magnific popup css -->
    <link href="<?=base_url('assets/');?>css/magnific-popup.css" rel="stylesheet">

    <!-- animate css -->
    <link href="<?=base_url('assets/');?>css/animate.css" rel="stylesheet">

    <!-- START Site css -->
    <link href="<?=base_url('assets/');?>css/style.css" rel="stylesheet">
    <!-- END Site css -->
    <link href="<?=base_url('assets/');?>css/main.css" rel="stylesheet">
    <link href="<?=base_url('assets/');?>css/util.css" rel="stylesheet">
    <link href="<?=base_url('assets/');?>css/switchery.min.css" rel="stylesheet">

    <!-- Responsive css -->
    <link href="<?=base_url('assets/');?>css/responsive.css" rel="stylesheet">

    <link rel="stylesheet" href="https://cdn.datatables.net/1.10.16/css/dataTables.bootstrap.min.css" type="text/css" />

    <link rel="stylesheet" href="https://cdn.datatables.net/responsive/2.2.1/css/responsive.dataTables.min.css" type="text/css" />




    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
    <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->

</head>

<body>

<!-- Preloader starts-->
<!-- <div id="preloader"></div> -->
<!-- Preloader ends -->

<!-- HEADER STARTED -->
<?php $this->load->view('layout/header'); ?>
<!-- END HEADER -->

<div class="clearfix space"></div>

<!-- Slider area starts -->
<section id="slider">
    <div id="carousel-example-generic" class="carousel slide carousel-fade">
        <div class="carousel-inner" role="listbox">

            <!-- Item 1 -->
            <div class="item active slide1">
                <div class="container">
                    <div class="caption-area">
                        <div class="caption">
                            <h1>Perputakaan</h1>
                            <p>Gudang Ilmu</p>
                            <!-- <a href="#" class="btn btn-active">PURCHASE NOW</a>
                            <a href="#" class="btn">LEARN MORE</a> -->
                        </div>

                    </div>
                </div>
            </div>

            <!-- Item 2 -->
            <div class="item slide2">
                <div class="container">
                    <div class="caption-area">
                        <div class="caption">
                            <h1>Mencari Ilmu</h1>
                            <p>Tuntutlah ilmu sampai ke negeri cina</p>
                            <!-- <a href="#" class="btn btn-active">PURCHASE NOW</a>
                            <a href="#" class="btn">LEARN MORE</a> -->
                        </div>

                    </div>
                </div>
            </div>

            <!-- Item 3 -->
            <div class="item slide3">
                <div class="container">
                    <div class="caption-area">
                        <div class="caption">
                            <h1>Rajin pangkal Kaya</h1>
                            <p>Semangat Trus </p>
                            <!-- <a href="#" class="btn btn-active">PURCHASE NOW</a>
                            <a href="#" class="btn">LEARN MORE</a> -->
                        </div>

                    </div>
                </div>
            </div>
        </div>
        <!-- End Wrapper for slides-->

        <!-- Carousel Pagination -->

        <div class="container">
            <div class="row bullets-area">
                <ol class="carousel-indicators">
                    <li data-target="#carousel-example-generic" data-slide-to="0" class="active"></li>
                    <li data-target="#carousel-example-generic" data-slide-to="1"></li>
                    <li data-target="#carousel-example-generic" data-slide-to="2"></li>
                </ol>
            </div>
        </div>

    </div>
</section>
<!-- Slider area ends -->

<!-- about-area start -->
<section id="about" class="about-area section-big">
    <div class="container">
        <div class="row">
            <div class="col-md-12 text-center">
                <div class="section-title mb-30">
                    <h2>About US</h2>
                    <p>SMPN 59 adalah SMP yang terletak bendungan jago</p>
                </div>
            </div>
        </div>
        <div class="row mt-30">
            <!-- About Image -->
            <div class="col-md-6">
                <div class="about-image">
                    <img src="assets/img/about/about-img2.jpg" alt="">
                </div>
            </div>

            <!-- About text -->
            <div class="col-md-6">
                <div class="about-text">
                    <h2>SMPN 59 </h2>
                    <p>Testing Safri</p>

                    <div class="row">

                        <div class="about-box col-sm-6 col-xs-12">
                            <i class="fa fa-rocket"></i>
                            <h4>Unique design</h4>
                            <p>Cool and keren</p>
                        </div>

                        <div class="about-box col-sm-6 col-xs-12">
                            <i class="fa fa-paper-plane"></i>
                            <h4>Easy to customize</h4>
                            <p>Safri testing</p>
                        </div>

                    </div>
                    <!-- <a href="" class="btn btn-about">read more</a> -->
                </div>
            </div>
        </div>



    </div>

</section><!-- About area ends -->



<!-- fun-facts area starts -->
<section id="fun-facts" class="fun-facts-area section-small">
    <div class="container">
        <div class="row">
            <!-- <div class="col-sm-6 col-md-3">
                <div class="fun-fact text-center mb-30">
                    <h3><span class="timer">50</span></h3>
                    <p>Years of Experience</p>
                </div>
            </div>
            <div class="col-sm-6 col-md-3">
                <div class="fun-fact text-center mb-30">
                    <h3> <span class="timer">950</span></h3>
                    <p>Happy Customer</p>
                </div>
            </div>
            <div class="col-sm-6 col-md-3">
                <div class="fun-fact text-center mb-30">
                    <h3> <span class="timer">80</span></h3>
                    <p>Number of Mamber</p>
                </div>
            </div>
            <div class="col-sm-6 col-md-3">
                <div class="fun-fact text-center mb-30">
                    <h3> <span class="timer">80</span></h3>
                    <p>Awsome Awards</p>
                </div>
            </div> -->
        </div>
    </div>
</section><!-- fun-facts area ends -->



<!-- Service area starts -->
<section id="service" class="service-area section-big">
    <div class="container">

        <div class="row">
            <div class="col-md-12 text-center">
                <div class="section-title mb-30">
                    <h2>SERVICE WE PROVIDE</h2>
                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam.</p>
                </div>
            </div>
        </div>

        <div class="row">

            <div class="home-services">

                <!-- Service box -->
                <div class="col-md-4 col-sm-6 col-xs-12">
                    <a href="<?=base_url('detail/1');?>">
                        <div class="service-box mt-30">
                            <i class="fa fa-pencil-square-o"></i>
                            <h3 class="subtitle">Well Coded</h3>
                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore.</p>
                        </div>
                    </a>
                </div>

                <!-- Service box -->
                <div class="col-md-4 col-sm-6 col-xs-12">
                    <a href="<?=base_url('detail/1');?>">
                    <div class="service-box  mt-30">
                        <i class="fa fa-cog"></i>
                        <h3 class="subtitle">Clean Design</h3>
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore.</p>
                    </div>
                    </a>
                </div>

                <!-- Service box -->
                <div class="col-md-4 col-sm-6 col-xs-12">
                    <a href="<?=base_url('detail/1');?>">
                    <div class="service-box  mt-30">
                        <i class="fa fa-television"></i>
                        <h3 class="subtitle">24/7 Support</h3>
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore.</p>
                    </div>
                    </a>
                </div>

                <!-- Service box -->
                <div class="col-md-4 col-sm-6 col-xs-12">
                    <a href="<?=base_url('detail/1');?>">
                    <div class="service-box  mt-30">
                        <i class="fa fa-shopping-cart"></i>
                        <h3 class="subtitle">Fully Responsive</h3>
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore.</p>
                    </div>
                    </a>
                </div>

                <!-- Service box -->
                <div class="col-md-4 col-sm-6 col-xs-12">
                    <a href="<?=base_url('detail/1');?>">
                    <div class="service-box  mt-30">
                        <i class="fa fa-lightbulb-o"></i>
                        <h3 class="subtitle">Well Documented</h3>
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore.</p>
                    </div>
                    </a>
                </div>

                <!-- Service box -->
                <div class="col-md-4 col-sm-6 col-xs-12">
                    <a href="<?=base_url('detail/1');?>">
                    <div class="service-box  mt-30" >
                        <i class="fa fa-envelope"></i>
                        <h3 class="subtitle">Social Share</h3>
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore.</p>
                    </div>
                    </a>
                </div>
            </div>
        </div>
    </div>
</section><!-- Service area ends -->


<!-- Video area starts -->
<div id="video" class="video-area section-big">
    <div class="container text-center">
        <!-- <div class="video-content">
            <a class="popup-youtube" href="http://www.youtube.com/watch?v=xtZE3sMv6lg">
                <i class="fa fa-play"></i>
            </a>
            <h2>Watch This Video</h2>
        </div> -->
    </div>
</div><!-- Video area ends -->



<!-- Price area starts -->
<section id="pricing" class="pricing-area section-big">
    <div class="container">

        <div class="row">
            <div class="col-md-12 text-center">
                <div class="section-title mb-30">
                    <h2>Daftar Buku</h2>
                    <p>Disini data data buku </p>
                </div>
            </div>
        </div>

        <div class="row">

            <!-- Pricing Table -->
            <div class="col-md-12">
                <table id="example" class="table table-striped table-bordered display responsive nowrap" width="100%" cellspacing="0">
                    <thead>
                    <tr>
                        <th>NUMBER</th>
                        <th>TITLE</th>
                        <th>REAL NAME</th>
                        <th>RANGE</th>
                        <th>COUNTRIES NAME</th>
                        <th>CURRENCY</th>
                        <th>DAILY</th>
                        <th>WEEKLY</th>
                        <th>BIWEEKLY</th>
                        <th>MONTHLY</th>
                    </tr>
                    </thead>
                    <tbody>
                    <tr>
                        <td>1</td>
                        <td>ALBANIA 1</td>
                        <td>ACHMAD MUSTAFA</td>
                        <td>355 440 28</td>
                        <td>ALBANIA</td>
                        <td>EUR</td>
                        <td>0,11</td>
                        <td>0</td>
                        <td>0,1033</td>
                        <td>0,1350</td>
                    </tr>
                    <tr>
                        <td>2</td>
                        <td>ALBANIA 2</td>
                        <td>ACHMAD RYANDI</td>
                        <td>355 440 28</td>
                        <td>ALBANIA</td>
                        <td>EUR</td>
                        <td>0,11</td>
                        <td>0</td>
                        <td>0,1033</td>
                        <td>0,1350</td>
                    </tr>
                    <tr>
                        <td>3</td>
                        <td>ALBANIA 3</td>
                        <td>ACHMAD SYAMSUDIN</td>
                        <td>355 440 28</td>
                        <td>ALBANIA</td>
                        <td>EUR</td>
                        <td>0,11</td>
                        <td>0</td>
                        <td>0,1033</td>
                        <td>0,1350</td>
                    </tr>
                    <tr>
                        <td>4</td>
                        <td>ALBANIA 4</td>
                        <td>ACHMAD MAULANA</td>
                        <td>355 440 28</td>
                        <td>ALBANIA</td>
                        <td>EUR</td>
                        <td>0,11</td>
                        <td>0</td>
                        <td>0,1033</td>
                        <td>0,1350</td>
                    </tr>
                    <tr>
                        <td>5</td>
                        <td>ALBANIA 5</td>
                        <td>ACHMAD MAULANA</td>
                        <td>355 440 28</td>
                        <td>ALBANIA</td>
                        <td>EUR</td>
                        <td>0,11</td>
                        <td>0</td>
                        <td>0,1033</td>
                        <td>0,1350</td>
                    </tr>
                    </tbody>
                </table>
            </div>

        </div>
    </div>
</section>
<!-- Price area ends -->


<!-- FOOTER START -->
<?php $this->load->view('layout/footer'); ?>
<!-- END FOOTER -->

<!-- login Modals -->
<form method="POST" action="<?php echo base_url('website/validate_login'); ?>">
<div class="news-modal modal fade" id="login-modal" tabindex="-1" role="dialog" aria-hidden="true">
    <div class="modal-content">
        <div class="close-modal" data-dismiss="modal">
            <div class="lr">
                <div class="rl">
                </div>
            </div>
        </div>
        <div class="container">
            <div class="row">
                <div class="col-lg-8 col-lg-offset-2">
                    <div class="modal-body">
                        <div class="limiter">
                            <div class="container-login100">
                                <div class="wrap-login100">
                                    <form class="login100-form validate-form">
					<span class="login100-form-title p-b-26">
						welcome to 
					</span>
                                        <span class="login100-form-title p-b-48">
                                            library smpn 59

						<!-- <img style="width:30% !important;" src="assets/img/logo.png" alt=""> -->
					</span>

                                        <div class="wrap-input100 validate-input" data-validate = "valid username is: a@b.c">
                                            <input class="input100" type="text" name="username">
                                            <span class="focus-input100" data-placeholder="username"></span>
                                        </div>

                                        <div class="wrap-input100 validate-input" data-validate="enter password">
						<span class="btn-show-pass">
							<i class="zmdi zmdi-eye"></i>
						</span>
                                            <input class="input100" type="password" name="password">
                                            <span class="focus-input100" data-placeholder="password"></span>
                                        </div>

                                        <div class="container-login100-form-btn">
                                            <div class="wrap-login100-form-btn">
                                                <div class="login100-form-bgbtn"></div>
                                                <button class="login100-form-btn">
                                                    login
                                                </button>
                                            </div>
                                        </div>

                                        <div style="margin: 0 auto; width: 100%;" class="text-center p-t-115">
                                            <span class="txt1">
                                                don’t have an account?
                                            </span>

                                            <a class="txt2" href="<?=base_url('register');?>">
                                                sign up
                                            </a>
                                            <br><br><br>
                                            <a class="txt2" onclick="forgot_password()" href="#">
                                                forgot password ?
                                            </a>
                                        </div>

                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
</form>

<div class="news-modal modal fade" id="forgot-modal" tabindex="-1" role="dialog" aria-hidden="true">
    <div class="modal-content">
        <div class="close-modal" data-dismiss="modal">
            <div class="lr">
                <div class="rl">
                </div>
            </div>
        </div>
        <div class="container">
            <div class="row">
                <div class="col-lg-8 col-lg-offset-2">
                    <div class="modal-body">
                        <div class="limiter">
                            <div class="container-login100">
                                <div class="wrap-login100">
                                    <form class="login100-form validate-form">
					<span class="login100-form-title p-b-26">
						reset password
					</span>
                                        <span class="login100-form-title p-b-48">
						<img style="width:30% !important;" src="assets/img/logo.png" alt="">
					</span>

                                        <div class="wrap-input100 validate-input">
                                            <input class="input100" type="text" name="username">
                                            <span class="focus-input100" data-placeholder="username"></span>
                                        </div>

                                        <div class="container-login100-form-btn">
                                            <div class="wrap-login100-form-btn">
                                                <div class="login100-form-bgbtn"></div>
                                                <button class="login100-form-btn">
                                                    reset password
                                                </button>
                                            </div>
                                        </div>

                                        <div style="margin: 0 auto; width: 100%;" class="text-center p-t-115">
                                            <span class="txt1">
                                                don’t have an account?
                                            </span>

                                            <a class="txt2" href="<?=base_url('register');?>">
                                                sign up
                                            </a>
                                        </div>

                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
</body>

<!---- JAVASCRIPT ---->

<!-- Latest jQuery -->
<script src="<?=base_url('assets/');?>js/jquery.min.js"></script>

<!-- bootstrap js-->
<script src="<?=base_url('assets/');?>js/bootstrap.min.js"></script>

<!-- Mixitup js -->
<script src="<?=base_url('assets/');?>js/jquery.mixitup.js"></script>

<!-- Owl Carousel js -->
<script src="<?=base_url('assets/');?>js/owl.carousel.min.js"></script>

<!-- Magnific popup js -->
<script src="<?=base_url('assets/');?>js/jquery.magnific-popup.min.js"></script>

<!-- Waypoint js -->
<script src="<?=base_url('assets/');?>js/jquery.waypoints.min.js"></script>

<!-- jquery.inview js -->
<script src="<?=base_url('assets/');?>js/jquery.inview.min.js"></script>

<!-- Ajax Mailchimp js -->
<script src="<?=base_url('assets/');?>js/jquery.ajaxchimp.min.js"></script>

<!-- GOOGLE MAP JS -->
<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCWGUaG5S3B5VikF8UtVCgjki1Pv_HKGgo"></script>

<!-- datatables -->
<script src="https://cdn.datatables.net/1.10.16/js/jquery.dataTables.min.js"></script>
<script src="https://cdn.datatables.net/1.10.16/js/dataTables.bootstrap.min.js"></script>
<script src="https://cdn.datatables.net/responsive/2.2.1/js/dataTables.responsive.min.js"></script>
<script type="text/javascript" src="<?=base_url('assets/');?>js/switchery.min.js"></script>
<!-- Main js-->
<script src="<?=base_url('assets/');?>js/main.js"></script>
<script src="<?=base_url('assets/');?>js/main_script.js"></script>

<script type="text/javascript">
    $(document).ready(function() {
        
    });
</script>

</html>
