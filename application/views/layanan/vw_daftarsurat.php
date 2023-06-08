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

<div class="row">
    <div class="col-md-12 col-sm-12 ">
        <div class="x_panel">
            <div class="x_title">
                <h2>Silakan Pilih Surat Dibawah ini!!</h2>
                <ul class="nav navbar-right panel_toolbox">
                    <li><a class="collapse-link"><i class="fa fa-chevron-up"></i></a>
                    </li>
                    <li class="dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button"
                            aria-expanded="false"><i class="fa fa-wrench"></i></a>
                        <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                            <a class="dropdown-item" href="#">Settings 1</a>
                            <a class="dropdown-item" href="#">Settings 2</a>
                        </div>
                    </li>
                    <li><a class="close-link"><i class="fa fa-close"></i></a>
                    </li>
                </ul>
                <div class="clearfix"></div>
            </div>
            <div class="x_content">
                <div class="bsurat" id="bsurat" name="bsurat">
                    <h1> Daftar Surat</h1>
                    <hr \>
                    <div class="pilihs">
                        <li><a href="<?php echo base_url(); ?>layanan/syaratsurat"><i class="fa fa-book fa-xl mr-2"
                                    aria-hidden="true"></i> Surat
                                Keterangan Tidak
                                Mampu</a>
                        </li>
                    
                        <li><a href="#"><i class="fa fa-book fa-xl mr-2"
                                    aria-hidden="true"></i> Surat
                                Keterangan Domisili</a>
                        </li>
                    </div>
                </div>

            </div>
        </div>
    </div>
</div>









</div>
</div>
</div>
<!-- /page content -->

<?php $this->load->view('layanan/_partials/footer.php'); ?>