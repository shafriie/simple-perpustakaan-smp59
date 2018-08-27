<?php 

$url = $this->uri->segment(1);

 ?>

<div id="nav-menu" class="top-bar">
    <div class="container">
        <!-- <div class="top-social">
            <a href=""><i class="fa fa-rss"></i></a>
            <a href=""><i class="fa fa-twitter"></i></a>
            <a href=""><i class="fa fa-facebook"></i></a>
            <a href=""><i class="fa fa-skype"></i></a>
            <a href=""><i class="fa fa-google-plus"></i></a>
            <a href=""><i class="fa fa-pinterest"></i></a>
        </div> -->
        <div class="top-contact-info">
            <!-- <a href=""> <span><i class="fa fa-envelope"></i></span> info@domain.com</a> -->
            <?php if (!$this->session->userdata('logged_in')): ?>
                <a href="#" onclick="show_login()"><span><i class="fa fa-lock"></i></span> login</a>   
                <?php else: ?>
                    <a href="<?php echo base_url('logout'); ?>"><span><i class="fa fa-lock"></i></span> logout</a>   
            <?php endif ?>

            
            <!-- <a href="<?=base_url('register');?>"> <span><i class="fa fa-user"></i></span> register</a> -->
        </div>
    </div>
</div>
<!--Header Top end-->

<!-- Navigation area starts -->
    <div class="menu-area navbar-fixed-top">
        <div class="container">
            <div class="row">
                <!-- Navigation starts -->
                <div class="col-md-12">
                    <div class="mainmenu">
                        <div class="navbar navbar-nobg">
                            <div class="navbar-header">
                                <a class="navbar-brand" href="<?php echo base_url('dashboard'); ?>"><h1 style="color: black">Library 59</h1></a>
                                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                                    <span class="sr-only">Toggle navigation</span>
                                    <span class="icon-bar"></span>
                                    <span class="icon-bar"></span>
                                    <span class="icon-bar"></span>
                                </button>
                            </div>

                            <div class="navbar-collapse collapse">
                                <nav>
                                    <?php if ($this->session->userdata('logged_in')): ?>
                                        <ul class="nav navbar-nav navbar-right">
                                            <li class="<?php echo ($url == 'dashboard')?'active':'' ?>"><a href="<?php echo base_url('dashboard'); ?>">Dashboard</a></li>
                                            <li><a class="smooth_scroll">Siswa</a></li>
                                            <li class="<?php echo ($url == 'buku')?'active':'' ?>"><a href="<?php echo base_url('buku'); ?>" >Buku</a></li>
                                            <li><a class="smooth_scroll">Peminjaman</a></li>
                                            <li><a class="smooth_scroll">Pengembalian</a></li>
                                        </ul> 
                                        <?php else: ?>
                                            <ul class="nav navbar-nav navbar-right">
                                                <li class="active"><a class="smooth_scroll" href="#slider">Home</a></li>
                                                <li><a class="smooth_scroll" href="#about">About</a></li>
                                                <li><a class="smooth_scroll" href="#service">Service</a></li>
                                                <li><a class="smooth_scroll" href="#pricing">Book</a></li>
                                            </ul>
                                    <?php endif ?>
                                    
                                </nav>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- Navigation ends -->

            </div>
        </div>
    </div>
    <!-- Navigation area ends 