    <main>
        <!-- slider Area Start-->
        <!-- <div class="slider-area "> -->
            <!-- Mobile Menu -->
            <!-- <div class="single-slider slider-height2 d-flex align-items-center" data-background="assets/img/profile/2.png"> -->
                <!-- <div class="container">
                    <div class="row">
                        <div class="col-xl-12">
                            <div class="hero-cap text-center">
                                <h2>Sanggar Seni Asem Gede</h2>
                            </div>
                        </div>
                    </div>
                </div> -->
            <!-- </div>
        </div> -->
        <!-- slider Area End-->

        <!-- PROFILE -->
        <div class="favourite-place pt-padding " id="profile">
            <div class="container">
                <!-- <div class="text-center">
                    <h1 class="section-heading text-uppercase">Profile Sanggar Seni</h1>
                    <h2 class="section-subheading text-muted">Asem Gede</h2>
                </div> -->
                <!-- Section Tittle -->
                <div class="row">
                    <div class="col-lg-12">
                        <div class="section-tittle text-center">
                            <h2>PROFILE <br> SANGGAR SENI ASEM GEDE</h2>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-lg-4 col-sm-6 mb-4">
                        <div class="single-place mb-30">
                            <div class="place-img">
                                <img src="<?=base_url().'assets/user/';?>dep/img/profile/profile.jpg" alt="">
                            </div>
                            <div class="place-cap">
                                <div class="place-cap-top">
                                    <h3>Sejarah</h3>
                                </div>
                                <div class="text-justify">
                                    <?= str_replace(PHP_EOL, '<br>', $profile['sejarah']); ?>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-4 col-sm-6 mb-4">
                        <div class="single-place mb-30">
                            <div class="place-img">
                                <img src="<?=base_url().'assets/user/';?>dep/img/profile/profile.jpg" alt="">   
                            </div>
                            <div class="place-cap">
                                <div class="place-cap-top">
                                    <h3>Tujuan</h3>
                                </div>
                                <div class="text-justify">
                                    <?= str_replace(PHP_EOL, '<br>', $profile['tujuan']); ?>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-4 col-sm-6 mb-4">
                        <div class="single-place mb-30">
                            <div class="place-img">
                                <img src="<?=base_url().'assets/user/';?>dep/img/profile/profile.jpg" alt="">
                            </div>
                            <div class="place-cap">
                                <div class="place-cap-top">
                                    <h3>Fungsi</h3>
                                </div>
                                <div class="text-justify">
                                    <?= str_replace(PHP_EOL, '<br>', $profile['fungsi']); ?>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-4 col-sm-6 mb-4">
                        <div class="single-place mb-30">
                            <div class="place-img">
                                <img src="<?=base_url().'assets/user/';?>dep/img/profile/profile.jpg" alt="">
                            </div>
                            <div class="place-cap">
                                <div class="place-cap-top">
                                    <h3>Kontak</h3>
                                </div>
                                <div>
                                    HP/WA : <?= $profile['no_hp']; ?> <br>
                                    E-mail &nbsp;&nbsp;: <?= $profile['email']; ?>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-4 col-sm-6 mb-4">
                        <div class="single-place mb-30">
                            <div class="place-img">
                                <img src="<?=base_url().'assets/user/';?>dep/img/profile/profile.jpg" alt="">
                            </div>
                            <div class="place-cap">
                                <div class="place-cap-top">
                                    <h3>Pembayaran</h3>
                                </div>
                                <div>
                                    Nama Bank: <?= $profile['nama_bank']; ?> <br>
                                    No. Rek &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;: <?= $profile['no_rek']; ?> <br>
                                    Atas Nama : <?= $profile['atas_nama']; ?> 
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-4 col-sm-6 mb-4">
                        <div class="single-place mb-30">
                            <div class="place-img">
                                <img src="<?=base_url().'assets/user/';?>dep/img/profile/profile.jpg" alt="">
                            </div>
                            <div class="place-cap">
                                <div class="place-cap-top">
                                    <h3>Alamat</h3>
                                </div>
                                <div class="text-justify">
                                    <?= str_replace(PHP_EOL, '<br>', $profile['alamat']); ?>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </div>
        

   <!-- Contact-->
         <!-- <section style="background-color: grey">
             <div class="container" >
                <div class="text-center">
                    <br>
                    <h2 class="section-heading text-uppercase">Contact Us</h2>
                    <br>
                    <h3 class="section-subheading text-muted"></h3>
                </div>
                <form id="contactForm" name="sentMessage" novalidate="novalidate">
                    <div class="row align-items-stretch mb-6">
                        <div class="col-md-6">
                            <div class="form-group">
                                <input class="form-control" id="name" type="text" placeholder="Your Name *" required="required" data-validation-required-message="Please enter your name." />
                                <p class="help-block text-danger"></p>
                            </div>
                            <div class="form-group">
                                <input class="form-control" id="email" type="email" placeholder="Your Email *" required="required" data-validation-required-message="Please enter your email address." />
                                <p class="help-block text-danger"></p>
                            </div>
                            <div class="form-group mb-md-0">
                                <input class="form-control" id="phone" type="tel" placeholder="Your Phone *" required="required" data-validation-required-message="Please enter your phone number." />
                                <p class="help-block text-danger"></p>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group form-group-textarea mb-md-0">
                                <textarea class="form-control" id="message" placeholder="Your Message *" required="required" data-validation-required-message="Please enter a message."></textarea>
                                <p class="help-block text-danger"></p>
                            </div>
                        </div>
                    </div>
                    <div class="text-center">
                        <div id="success"></div>
                        <button class="btn btn-primary btn-xl text-uppercase" id="sendMessageButton" type="submit">Send Message</button>
                    </div>
                </form>
            </div>
            <br>
         </section> -->
            


         <footer>
        <!-- Footer Start-->
        <div class="footer-area " style="background-color: grey">
            <div class="row">
                 <div class="container">
                    <div class="row align-items-center">
                        <div class="col-lg-12 text-lg-center" style="color: white">Copyright &copy; Asem Gede <?=date('Y')?></div>
                        <br>
                        <div class="row pt-padding">
                            <div class="col-xl-5 col-lg-5 col-md-5">
                                <!-- social -->
                                <div class="footer-social f-right col-lg-4 my-3 my-lg-0 ">
                                    <a href="#"><i class="fab fa-twitter"></i></a>
                                    <a href="#"><i class="fab fa-facebook-f"></i></a>
                                    <a href="#"><i class="fab fa-instagram"></i></a>
                                </div>
                            </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Footer End-->
        </footer>   

    </main>
