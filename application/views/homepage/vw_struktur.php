<!doctype html>
<html lang="en">

<head>
<?php $this->load->view('homepage/_partials/head.php') ?>

    <title>Struktur Organisasi</title>
    <style>
        @import url("https://fonts.googleapis.com/css2?family=Poppins:wght@200;300;400;500;600;700;800&display=swap");
        body{
            font-family: "Poppins", serif;
        }
        .p-isi-2 img{
            box-shadow: 4px 4px 4px;
            border-radius: 7px 7px 7px 7px;
        }
    </style>
</head>

<body>
<?php $this->load->view('homepage/_partials/navbar.php') ?>

    <!-- Banner profile -->
    <section id="Banner-profile">
        <div class="container">

            <div class="profisi-2">
                <h1>STRUKTUR ORGANISASI</h1>
                <div class="p-isi-2">
                    <img src="<?php echo base_url();?>assets/images/stukturorganisasi1.png" alt="struktur" width="1000px;" height="1103px;">
                </div>
            </div>


        </div>
    </section>
    <!-- AKhir Banner Profile -->

   <?php $this->load->view('homepage/_partials/footer.php') ?>

</body>

</html>