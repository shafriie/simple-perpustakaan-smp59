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



<!-- Price area starts -->
<section id="pricing" class="pricing-area section-big">
    <div class="container">

        <div class="row">
            <div class="col-md-12 text-center">
                <div class="section-title mb-30">
                    <h2>Daftar Buku</h2>
                    <p>Disini data data buku </p>
                    <p align="center"><a href="<?php echo base_url('buku/add'); ?>" class="btn btn-danger btn-sm">Add (+)</a></p>
                </div>
            </div>
        </div>

        <div class="row">

            <!-- Pricing Table -->
            <div class="col-md-12">
                <table id="example" class="table table-striped table-bordered display responsive nowrap" width="100%" cellspacing="0">
                    <thead>
                    <tr>
                        <th>No</th>
                        <th>Kode Buku</th>
                        <th>Nama Buku</th>
                        <th>Nama Pengarang</th>
                        <th>Nama Penerbit</th>
                        <th>Tahun Terbit</th>
                        <th>Action</th>
                    </tr>
                    </thead>
                    <tbody>
                        <?php 
                        $no=0;
                        foreach ($bukus as $buku): $no++; ?>
                            <tr>
                                <td><?php echo $no ?></td>
                                <td><?php echo $buku['kd_buku']; ?></td>
                                <td><?php echo $buku['nama_buku']; ?></td>
                                <td><?php echo $buku['nama_pengarang']; ?></td>
                                <td><?php echo $buku['nama_penerbit']; ?></td>
                                <td><?php echo $buku['tahun_terbit']; ?></td>
                                <td>
                                    <a href="<?php echo base_url('buku/editData/'.$buku['id']); ?>" class="glyphicon glyphicon-pencil"></a>
                                    -   
                                    <a onclick="return confirm('Apakah anda ingin menghapus data ini?');" href="<?php echo base_url('Buku/deleteData/'.$buku['id']); ?>" class="glyphicon glyphicon-trash"></a>
                                </td>
                                
                            </tr>
                        <?php endforeach ?>
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
