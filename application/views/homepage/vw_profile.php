<!doctype html>
<html lang="en">

<head>
<?php $this->load->view('homepage/_partials/head.php') ?>
<link rel="stylesheet" href="<?php echo base_url();?>assets/css/style.css">
    <title>Profile</title>
    <style>
        @import url("https://fonts.googleapis.com/css2?family=Poppins:wght@200;300;400;500;600;700;800&display=swap");
    #Banner-profile .container .profisi {
    width: 1100px;
    height: 500px;
    color: white;
    margin-top: 5%;
    background-image: url('<?php echo base_url();?>assets/images/bgpro.png');
    border-radius: 10px 10px 10px 10px;
    background-color: rgb(137, 43, 226);
    box-shadow: 4px 4px 4px;
    }
    body {
            background-image: linear-gradient(to right top, #051937, #004d7a, #008793, #00bf72, #a8eb12);
		font-family: "Poppins", serif;
        }
    </style>

</head>

<body>
<?php $this->load->view('homepage/_partials/navbar.php') ?>


    <!-- Banner -->


        <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
            <ol class="carousel-indicators">
                <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
                <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
                <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
            </ol>
            <div class="carousel-inner">
                <div class="carousel-item active">
                    <img  src="<?php echo base_url();?>assets/images/b1.jpg"  width="100%" height="580px" class="d-block w-100 " alt="...">
                </div>
                <div class="carousel-item">
                    <img  src="<?php echo base_url();?>assets/images/b2.jpg" width="100%" height="580px"  class="d-block w-100" alt="...">
                </div>
                <div class="carousel-item">
                    <img  src="<?php echo base_url();?>assets/images/b3.jpg"  width="100%" height="580px"  class="d-block w-100" alt="...">
                </div>
            </div>
            
            <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="sr-only">Previous</span>
            </a>
            <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="sr-only">Next</span>
            </a>
        </div>
    <!-- Akhir Banner -->

    <!-- Banner profile -->
    <section id="Banner-profile">
        <div class="container">

            <div class="profisi">
                <h1>PROFIL</h1>
                <div class="p-isi">
                    <p>
                        Kelurahan Sako Palembang terletak di sebelah utara dari Pusat Pemerintahan
                        Kecamatan Sako yang sebagian besar merupakan daerah dataran sedang dengan
                        ketinggian
                        5 mdpl yang memiliki luas wilayah 621,7 Ha dengan suhu udara rata – rata 22o C
                        – 32o C
                        dengan batas – batas wilayah sebagai berikut :
                        Sebelah Utara berbatasan dengan Kelurahan Kenten Kabupaten Banyuasin.
                        Sebelah Selatan berbatasan dengan Kelurahan Sialang Kecamatan Sako Kota Palembang.
                        Sebelah Barat berbatasan dengan Kelurahan Sako Baru Kecamatan Sako KotaPalembang.
                        Sebelah Timur berbatasan dengan Kelurahan Lebung Gajah Kecamatan Sematang Borang
                        Kota Palembang.
                        Perkembangan jumlah Penduduk Kelurahan Sako sampai akhir Bulan Juli Tahun 2021 yaitu :
                        Jumlah Penduduk = 39.573 Jiwa
                        Jumlah Kartu Keluarga ( KK ) = 1021 KK
                        Jumlah RT ( setelah pemekaran ) = 108 RT
                        Jumlah RssW = 33 RW
                        Pada umumnya mata pencaharian penduduk Kelurahan Sako yang paling dominan adalah
                        Buruh, Pegawai Swasta, Wiraswasta, Padagang, dan PNS (Pegawai Negeri Sipil).
                        Orbitasi (Jarak dari Pusat Pemerintahan)
                        Jarak dari Pusat Pemerintahan Kecamatan : 1 Km.
                        Jarak dari Pusat Pemerintahan Kota : 10 Km.
                        Jarak dari Pusat Pemerintahan Provinsi : 12 Km.

                    </p>
                </div>
            </div>


        </div>
    </section>
    <!-- AKhir Banner Profile -->

<?php $this->load->view('homepage/_partials/footer.php') ?>

</body>

</html>