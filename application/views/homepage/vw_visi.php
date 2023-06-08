<!doctype html>
<html lang="en">

<head>
<?php $this->load->view('homepage/_partials/head.php') ?>

    <title>Visi & Misi</title>
    <style>
        @import url("https://fonts.googleapis.com/css2?family=Poppins:wght@200;300;400;500;600;700;800&display=swap");
        body{
            font-family: "Poppins", serif;
        }
        #Banner-profile .container .profisi-3 {
        width: 1100px;
        height: 500px;
        color: white;
        margin-top: 5%;
        background-image: url('<?php echo base_url();?>assets/images/bgpro.png');
        border-radius: 10px 10px 10px 10px;
        background-color: rgb(137, 43, 226);
        box-shadow: 4px 4px 4px;
    }   

    </style>
</head>

<body>
<?php $this->load->view('homepage/_partials/navbar.php') ?>


    <!-- Banner profile -->
    <section id="Banner-profile">
        <div class="container">

            <div class="profisi-3">
                <h1>VISI</h1>
                <div class="p-isi">
                    <p>
                        Mewujudkan pelayanan terbaik masyarakat dibidang pemerintahan, pembangunan serta
                        kemanan dan ketertiban masyarakat di Kelurahan Sako Kecamatan Sako kota Palembang

                    </p>
                </div>
                <h1>MISI</h1>
                <div class="p-isi">
                    <p>
                    <ol>
                        <li>Memberikan pelayanan prima kepada masyarakat.</li>
                        <li>Menciptakan aparatur yang disiplin, berdedikasi tinggi dan profesional</li>
                        <li>Melaksanakan tugas berdasarkan peraturan dan perundangan - undangan yang berlaku</li>
                        <li>Melaksanakan tugas melalui perencanaan yang matang</li>
                        <li>Senantiasa mengutamakan musyawarah dan kekeluargaan</li>
                    </ol>
                    </p>
                </div>
            </div>

            <div class="icon">
                <img src="<?php echo base_url();?>assets/images/iconvisimisi.png" width="800px" height="800px">
            </div>


        </div>
    </section>
    <!-- AKhir Banner Profile -->

    <?php $this->load->view('homepage/_partials/footer.php') ?>

</body>

</html>