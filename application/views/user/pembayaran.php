<main>
        <!-- PROFILE -->
        <div class="favourite-place pt-padding " id="profile">
            <div class="container">

                <!-- Section Tittle -->
                <div class="row">
                    <div class="col-lg-12">
                    <?php if ($this->session->flashdata('flash')) : ?>
                        <div class="alert alert-success alert-dismissible fade show" role="alert">
                            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                            <strong><?= $this->session->flashdata('flash'); ?></strong> 
                            </div>
                            
                            <script>
                            $(".alert").alert();
                            </script>
                        <?php endif; ?>
                        <div class="text-center">
                            <h2>Silakan melakukan pembayaran melalui transfer ke: </h2>
                            <h1>Bank BJB - 0083770082100</h1>
                            <h2>atas nama Sanggar Seni Asem Gede</h2>
                        </div>
                    </div>
                </div>
                <hr>
                <div class="row">
                    <div class="col-md-12">
                        <div class="text-center">
                            <h2>Kirim bukti pembayaran ke WhatsApp</h2>
                            <h1>089651858482</h1>
                            <h2>untuk validasi</h2>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <br>
        <br>
        <br>
        <br>
         <footer>
        <!-- Footer Start-->
        <div class="footer-area " style="background-color: grey">
            <div class="row">
                 <div class="container">
                    <div class="row align-items-center">
                        <div class="col-lg-12 text-lg-center" style="color: white">Copyright © Asem Gede 2020</div>
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
