<?php $this->load->view('home/header') ?>

    <!--Header-area-->
    <header class="header-area overlay full-height relative v-center" id="home-page">
        <div class="absolute anlge-bg"></div>
        <div class="container">
            <div class="row v-center">
                <div class="col-xs-12 col-md-7 header-text">
                    <h2></h2>
                    <div class="">
                        <img src="<?php echo base_url('assets/')?>img/Code.png" style="max-height: 150px" alt="">
                    </div>
                    <p>
                    </p>
                    <p><strong>FF Laundry </strong>adalah perusahaan yang bergerak di bidang jasa yang akan memenuhi kebutuhan pelanggan dalam hal perawatan pakaian secara professional, dan dengan konsep terbaru yang lebih baik, yaitu : 
“ Laundry, Dry Cleaning & Wet Clean “.</p>
                    
                </div>
                <div class="hidden-xs hidden-sm col-md-5 text-right">
                    <div class="screen-box screen-slider">
                        <div class="item">
                            <img src="<?php echo base_url('assets/') ?>img/1.jpg" alt="">
                        </div>
                        <div class="item">
                            <img src="<?php echo base_url('assets/') ?>img/2.jpg" alt="">
                        </div>
                        
                    </div>
                </div>
            </div>
        </div>
    </header>
    <!--Header-area/-->



    <!--Feature-area-->
    <section class="gray-bg section-padding" id="service-page">
        <div class="container">
            <div class="row">
                <div class="col-xs-12 col-sm-4">
                </div>
                <div class="col-xs-12 col-sm-4 mx-auto">
                    <div class="box">
                        <div class="box-icon">
                            <img src="<?php echo base_url('assets/') ?>img/Code.png" style="max-height: 150px" alt="">
                        </div>
                        <h4>Track</h4>
                        <form action="<?php echo base_url('Home/track') ?>" method="post">
                        <input type="text" class="form-control" name="nomor">
                        <input type="submit" class="btn btn-block btn-primary btn-lg" value="Track">
                        <?php if (isset($track)): ?>
                            <div class="alert alert-primary">
                                <?php echo $track ?>
                            </div>
                        <?php endif ?>
                    </form>
                    </div>
                </div>
                
            </div>
        </div>
    </section>
    <!--Feature-area/-->

    <section class="angle-bg sky-bg section-padding" id="feature-page">
        <div class="container">
            <div class="row">
                <div class="col-xs-12">
                    <div id="caption_slide" class="carousel slide caption-slider" data-ride="carousel">
                        <div class="carousel-inner" role="listbox">
                            <div class="item row">
                                <div class="v-center">
                                    <div class="col-xs-12 col-md-6">
                                        <div class="caption-title" data-animation="animated fadeInUp">
                                            <h2>Cuci Basah</h2>
                                        </div>
                                        <div class="caption-desc" data-animation="animated fadeInUp">
                                            <p>kami memfasilitasi bagi mereka yang hanya berkenan untuk
                                            memcuci tanpa kering dengan jangka pengambilan yang telah di tentukan karena 
                                            untuk mengantisipasi kerusakan terhadap pakaian anda</p>
                                        </div>
                                        <div class="caption-button" data-animation="animated fadeInUp">
                                            <a href="#" class="button">Read more</a>
                                        </div>
                                    </div>
                                    <div class="col-xs-6 col-md-3">
                                        <div class="caption-photo" data-animation="animated fadeInRight">
                                            <img src="<?php echo base_url('assets/') ?>img/laundry1.jpg" alt="" style="width: 300px">
                                        </div>
                                    </div>
                                    <div class="col-xs-6 col-md-3">
                                    </div>
                                </div>
                            </div>
                            <div class="item row">
                                <div class="v-center">
                                    <div class="col-xs-12 col-md-6">
                                        <div class="caption-title" data-animation="animated fadeInUp">
                                            <h2>Cuci Setrika</h2>
                                        </div>
                                        <div class="caption-desc" data-animation="animated fadeInUp">
                                            <p>Dengan ini kami pun memberikan fasilitas teradap pelanggan jika kalian 
                                            ingin merapikan pakaian kalian sendiri</p>
                                        </div>
                                        <div class="caption-button" data-animation="animated fadeInUp">
                                            <a href="#" class="button">Read more</a>
                                        </div>
                                    </div>
                                    <div class="col-xs-6 col-md-3">
                                    </div>
                                    <div class="col-xs-6 col-md-3">
                                        <div class="caption-photo " data-animation="animated fadeInRight">
                                            <img src="<?php echo base_url('assets/') ?>img/laundry2.jpg" alt="" style="width: 300px">
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="item row">
                                <div class="v-center">
                                    <div class="col-xs-12 col-md-6">
                                        <div class="caption-title" data-animation="animated fadeInUp">
                                            <h2>Cuci Kering</h2>
                                        </div>
                                        <div class="caption-desc" data-animation="animated fadeInUp">
                                            <p>Fasilitas ini memberikan kepuasan dan penyelesaian yang efisien karena kalian bisa 
                                            langsung menggunakan pakaian kalian langsung karena sudah rapi</p>
                                        </div>
                                        <div class="caption-button" data-animation="animated fadeInUp">
                                            <a href="#" class="button">Read more</a>
                                        </div>
                                    </div>
                                    <div class="col-xs-6 col-md-3">
                                        <div class="caption-photo" data-animation="animated fadeInRight">
                                            <img src="<?php echo base_url('assets/') ?>img/laundry3.jpg" alt="" style="width: 300px">
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- Indicators -->
                        <ol class="carousel-indicators caption-indector">
                            <li data-target="#caption_slide" data-slide-to="0" class="active">
                                <strong>Cuci Basah </strong>
                            </li>
                            <li data-target="#caption_slide" data-slide-to="1">
                                <strong>Cuci Setrika </strong>
                            </li>
                            <li data-target="#caption_slide" data-slide-to="2">
                                <strong>Cuci Kering </strong>
                            </li>
                            
                        </ol>
                    </div>
                </div>
            </div>
        </div>
    </section>



    <section class="gray-bg section-padding">
        <div class="container">
            <div class="row">
                <div class="col-xs-12 col-sm-6 col-sm-offset-3 text-center">
                    <div class="page-title">
                        <h2>Spesial Facility</h2>
                        <p>Memberikan kenyamanan serta keamanan terhadap pakaian anda</p>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-xs-12 col-sm-6 col-md-4">
                    <div class="box">
                        <div class="box-icon">
                            <img src="<?php echo base_url('assets_home/') ?>images/portfolio-icon-1.png" alt="">
                        </div>
                        <h3>Parfum</h3>
                        <p>pewangi yang kami gunakan adalah wangi wangian yang telah diuji ketahanannya dan keamanannya </p>
                    </div>
                </div>
                <div class="col-xs-12 col-sm-6 col-md-4">
                    <div class="box">
                        <div class="box-icon">
                            <img src="<?php echo base_url('assets_home/') ?>images/portfolio-icon-2.png" alt="">
                        </div>
                        <h3>Treatment</h3>
                        <p>prosedur kami telah di uji keamanannya </p>
                    </div>
                </div>
                <div class="col-xs-12 col-sm-6 col-md-4">
                    <div class="box">
                        <div class="box-icon">
                            <img src="<?php echo base_url('assets_home/') ?>images/portfolio-icon-3.png" alt="">
                        </div>
                        <h3>Kontak Aktif</h3>
                        <p>kami memfasilitasi terhadap kalian yang ingin berkeluh kesah</p>
                    </div>
                </div>
                <div class="col-xs-12 col-sm-6 col-md-4">
                    <div class="box">
                        <div class="box-icon">
                            <img src="<?php echo base_url('assets_home/') ?>images/portfolio-icon-4.png" alt="">
                        </div>
                        <h3>Siap Dan laksanakan</h3>
                        <p>ketika barang telah jadi maka kami akan sengera menginformasikan kepada anda</p>
                    </div>
                </div>
            </div>
        </div>
    </section>




    <section class="price-area overlay section-padding" id="price-page">
        <div class="container">
            <div class="row">
                <div class="col-xs-12 col-sm-6 col-sm-offset-3 text-center">
                    <div class="page-title">
                        <h2>LIST HARGA</h2>
                        <p></p>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-xs-12 col-sm-4">
                    <div class="price-table">
                        <h3 class="text-uppercase price-title">Cuci Basah</h3>
                        <hr>
                        <ul class="list-unstyled">
                           
                            <li><strong>100% dari harga per-item</strong></li>
                            
                        </ul>
                        
                    </div>
                </div>
                <div class="col-xs-12 col-sm-4">
                    <div class="price-table active">
                        <span class="price-info"><span class="ti-crown"></span></span>
                        <h3 class="text-uppercase price-title">Cuci Kering</h3>
                        <hr>
                        <ul class="list-unstyled">
                            <li><strong>120% dari harga per-item</strong></li>
                        </ul>
                        
                    </div>
                </div>
                <div class="col-xs-12 col-sm-4">
                    <div class="price-table">
                        <h3 class="text-uppercase price-title">Cuci Setrika</h3>
                        <hr>
                        <ul class="list-unstyled">
                            <li><strong>150% dari harga per-item</strong></li>
                            
                        </ul>
                        
                    </div>
                </div>
            </div>
        </div>
    </section>

    <footer class="footer-area relative sky-bg" id="contact-page">
        <div class="absolute footer-bg"></div>
        <div class="footer-top">
            <div class="container">
                <div class="row">
                    <div class="col-xs-12 col-sm-6 col-sm-offset-3 text-center">
                        <div class="page-title">
                            <h2>Contact with us</h2>
                            
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-4" style="margin-left:37%">
                        <address class="side-icon-boxes">
                            <div class="side-icon-box">
                                <div class="side-icon">
                                    <img src="<?php echo base_url('assets_home/') ?>images/location-arrow.png" alt="">
                                </div>
                                <p><strong>Address: </strong> Jl. Kembang Turi 50 <br />USA</p>
                            </div>
                            <div class="side-icon-box">
                                <div class="side-icon">
                                    <img src="<?php echo base_url('assets_home/') ?>images/phone-arrow.png" alt="">
                                </div>
                                <p><strong>Telephone: </strong>
                                    <a href="callto:089098768543">+089098768543</a> 
                                </p>
                            </div>
                            <div class="side-icon-box">
                                <div class="side-icon">
                                    <img src="<?php echo base_url('assets_home/') ?>images/mail-arrow.png" alt="">
                                </div>
                                <p><strong>E-mail: </strong>
                                    <a href="mailto:youremail@example.com">farfahlaundry@gmail.com</a> 
                                </p>
                            </div>
                        </address>
                    </div>
                
                </div>
            </div>
        </div>
        <div class="footer-middle">
            <div class="container">
                <div class="row">
                    <div class="col-xs-12 col-sm-6 pull-right">
                        <ul class="social-menu text-right x-left">
                            <li><a href="#"><i class="ti-facebook"></i></a></li>
                            <li><a href="#"><i class="ti-twitter"></i></a></li>
                            <li><a href="#"><i class="ti-google"></i></a></li>
                            <li><a href="#"><i class="ti-linkedin"></i></a></li>
                            <li><a href="#"><i class="ti-github"></i></a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
        <div class="footer-bottom">
            <div class="container">
                <div class="row">
                    <div class="col-xs-12 text-center">
                        <p>&copy;Copyright 2018 All right resurved.  This template is made with <i class="ti-heart" aria-hidden="true"></i> by <a href="https://colorlib.com">Colorlib</a></p>
                    </div>
                </div>
            </div>
        </div>
    </footer>

<?php $this->load->view('home/footer') ?>