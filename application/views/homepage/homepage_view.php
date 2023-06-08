<!DOCTYPE html>
<html lang="en">
 <head>
    <?php $this->load->view('homepage/_partials/head.php') ?>
    <title>E-KSAKO - Aplikasi Pelayanan Masyarakat Kelurahan Sako</title>
    <style>
        @import url("https://fonts.googleapis.com/css2?family=Poppins:wght@200;300;400;500;600;700;800&display=swap");
        body{
            font-family: "Poppins", serif;
        }
    #Banner {
    background-image: url(<?php echo base_url('assets/images/bgawal.jpg');?>);
    width: 100%;
    height: 596px;
    color: white;
    padding-top: 289px;
    background-position: center;
    background-size: cover;
    }
    </style>
 </head>

 <body>

    <?php $this->load->view('homepage/_partials/navbar.php') ?>

    <!-- Banner -->
    <section id="Banner">
        <div class="container">
            <div class="row text-left justify-content-left">
                <div class="col-lg-6">
                    <h1>SOLUSI
                        MUDAH DALAM MEMBERIKAN
                        PELAYANAN YANG LEBIH PADU</h1>
                    <p>E-KSAKO adalah sebuah layanan berbasis website yang bertujuan untuk mempermudah
                        dalam pengelolaan dan pemrosesan pembuatan surat menyurat
                        dan kebutuhan masyarakat lainnya.</p>
                </div>
                <div class="row text-right justify-content-right">
                    <div class="col-lg-10">
                        <img class="tech" src="<?php echo base_url('assets/images/tech.png');?>" alt="tech.png">
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Akhir Banner -->
    
    <!-- sub -->
    <section id="sub">
        <div class="container py-5 text-white">
            <div class="row">
                <div class="col-lg-3 col-md-6 col-sm col-12">
                    <div class="row">
                        <div class="col-lg-2">
                            <span><i class="fa-solid fa-headset fa-2xl"></i></span>
                        </div>
                        <div class="col-lg-10">
                            <h5>Support</h5>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 col-sm col-12 ">
                    <div class="row">
                        <div class="col-lg-2">
                            <span><i visibility: hidden class="fa-solid fa-headset fa-2xl"></i></span>
                        </div>
                        <div class="col-lg-10">
                            <h5 visibility: hidden>Support</h5>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 col-sm col-12 ">
                    <div class="row">
                        <div class="col-lg-2">
                            <span><i visibility: hidden class="fa-solid fa-headset fa-2xl"></i></span>
                        </div>
                        <div class="col-lg-10">
                            <h5 visibility: hidden>Support</h5>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3">
                    <div class="row">
                        <input type="text" placeholder="Search">
                        <button class="btn1">Search <i class="fa-solid fa-magnifying-glass "></i></button>

                    </div>

                </div>
            </div>
        </div>
    </section>
    <!-- end sub -->

    <section id="about">
        <div class="container">
            <div class="row">
                <div class="col-lg-7">
                    <div class="deskripsi1">
                        <h1>Tentang</h1>
                        <br>
                        <br>
                        <p>E-KSAKO adalah sebuah layanan berbasis website yang
                            bertujuan untuk mempermudah dalam pengelolaan dan
                            pemprosessan pembuatan surat menyurat
                            dan kebutuhan masyarakat lainnya.
                        </p>
                        <br>
                        <div class="btnpro">
                            <button class="btnpro1 btn-primary"> Login</button>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4">
                    <img class="gmbr-bglurah" src="<?php echo base_url('assets/images/bgklurah.png');?>" alt="bgklurah">
                </div>
            </div>
        </div>
    </section>

    <section id="social">
        <div class="container">
            <div class="row ">
                <div class="col-lg-5">
                    <img class="network" src="<?php echo base_url('assets/images/network 1.png');?>" alt="network">
                </div>
                <div class="col-lg-7">
                    <div class="deskripsi">
                        <h1>Kenapa E- KSAKO ??</h1>
                        <p>Kami membantu anda dalam pembuatan administrasi
                            dan pembuatan surat dan dokumen lainnya yang
                            dilakukan dengan proses yang lebih cepat efisien dan
                            terpadu.</p>
                    </div>
                </div>
            </div>
    </section>

    <section id="layanan">
        <div class="container">
            <div class="row text-center justify-content-center">
                <div class="col-lg-6 judul">
                    <h1>LAYANAN</h1>
            
                </div>
            </div>
            <div class="row">
                <div class="col-lg-3 text-center">
                    <a href="<?php echo base_url('login');?>">
                        <div class="bg-service">
                            <img class="monitor" src="<?php echo base_url('assets/images/Monitoring.png');?>" alt="monitor">
                            <p class="textm">
                            <h1>Monitoring</h1>
                            </p>
                        </div>
                    </a>
                </div>
                <div class="col-lg-3 text-center">
                    <a href="<?php echo base_url('login');?>">
                        <div class="bg-service">
                            <img class="administrasi" src="<?php echo base_url('assets/images/Administarasi.png');?>" alt="administrasi">
                            <p>
                            <h1>Administrasi</h1>
                            </p>
                        </div>
                    </a>
                </div>
                <div class="col-lg-3 text-center">
                    <a href="<?php echo base_url('login');?>">
                        <div class="bg-service">
                            <img src="<?php echo base_url('assets/images/Onlinesurat.png');?>" alt="surat_online">
                            <p>
                            <h1>Surat Online</h1>
                            </p>
                        </div>
                    </a>
                </div>
                <div class="col-lg-3 text-center">
                    <a href="<?php echo base_url('login');?>">
                        <div class="bg-service">
                            <img class="web"src="<?php echo base_url('assets/images/web.png');?>" width="105px"  alt="web">
                            <p>
                            <h1 class="bweb">Web Access</h1>
                            </p>
                        </div>
                    </a>
                </div>
            </div>
        </div>
    </section>


    <?php $this->load->view('homepage/_partials/footer.php') ?>
    

 </body>
</html>
