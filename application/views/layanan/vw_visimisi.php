<!DOCTYPE html>
<html lang="en">
<head>
<?php $this->load->view('layanan/_partials/head.php'); ?>
</head>
<body class="nav-md">
<?php $this->load->view('layanan/_partials/top.php'); ?>
<?php $this->load->view('layanan/_partials/menu.php'); ?>
         
<!-- page content -->
<div class="right_col" role="main">
        <br />
        <div class="row justify-content-center">
          <div class="bd-example">
            <div id="carouselExampleCaptions" class="carousel slide" data-ride="carousel">
              <ol class="carousel-indicators">
                <li data-target="#carouselExampleCaptions" data-slide-to="0" class="active"></li>
                <li data-target="#carouselExampleCaptions" data-slide-to="1"></li>
              </ol>
              <div class="carousel-inner">

                <div class="carousel-item active">

                  <img src="<?php echo base_url();?>assets/images/profilbg.png" class="d-block " style="height:565px" alt="...">
                  <div class="carousel-caption d-none d-md-block">
                    <h5>Profil Kelurahan Sako</h5>
                  </div>
                </div>
                <div class="carousel-item">
                  <img src="<?php echo base_url();?>assets/images/visimisi.png" class="d-block " style="height:565px" alt="...">
                  <div class="carousel-caption d-none d-md-block">
                    <h5>Visi Misi</h5>

                  </div>
                </div>
              </div>
              <a class="carousel-control-prev" href="#carouselExampleCaptions" role="button" data-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="sr-only">Previous</span>
              </a>
              <a class="carousel-control-next" href="#carouselExampleCaptions" role="button" data-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="sr-only">Next</span>
              </a>
            </div>
          </div>
        </div>
      </div>




    </div>
  </div>
  </div>
  <!-- /page content -->

<?php $this->load->view('layanan/_partials/footer.php'); ?>