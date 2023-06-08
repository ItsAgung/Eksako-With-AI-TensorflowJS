<!DOCTYPE html>
<html lang="en">
<head>
<?php $this->load->view('layanan/_partials/head.php'); ?>
<link rel="stylesheet" href="<?php echo base_url();?>assets/css/ssktm.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.9.0/css/bootstrap-datepicker.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.9.0/js/bootstrap-datepicker.min.js"></script>
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
                <h2>Silakan isi Form dibawah ini</h2>
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
                    <form id="form" action="<?php echo base_url('layanan/letterformsktm/proses');?>" method="POST" enctype="multipart/form-data">
                    <div class="wadah">
                    <h1>Form Surat</h1>
                    <div class="form_group row">
                                <label for="jenis_lembaga_non" class="col-sm-1 col-form-label py-0"></label>
                                <div class="col-sm-10">
                                    <div class="isi-ul">
                                    <?php 
                                    if($this->session->flashdata('error') !='')
                                    {
                                        echo '<div class="alertbox alert alert-danger" role="alert">';
                                        echo $this->session->flashdata('error');
                                        echo '</div>';
                                    }
                                    ?>
                    
                                    <?php 
                                    if($this->session->flashdata('success_buatsurat') !='')
                                    {
                                        echo '<div class="alertbox alert alert-info" role="alert">';
                                        echo $this->session->flashdata('success_buatsurat');
                                        echo '<script language="javascript">' .
                                            'setTimeout(function(){ window.location.href = "/eksako/layanan/arsip"; }, 3000);' .
                                            '</script>';
                                        echo '</div>';
                                    }
                                    ?>

                                        <div class="form_group row mb-0">
                                            <label for="#" class="col-sm-3 col-form-label"> <div class="nm">
                                                <p>Nama</p>
                                            </div></label>
                                            <div class="col-sm-9">
                                                <input type="text" name="namalengkap" class="form-control input-custom mb-3"
                                                    required placeholder="Tuliskan Nama">
                                            </div>
                                        </div>

                                        <!-- nik/kk -->
                                        <div class="row">
                                            <div class="col-md-6">

                                                <!-- Tempat Surat -->
                                                <div class="form-group">
                                                    <label for="nik"><div class="nm"><p>NIK</p></div></label>
                                                    <input type="text" name="nik" class="form-control input-custom"
                                                        id="nik" placeholder="NIK 16-Digit" required>
                                                    <small id="nik-help" class="form-text text-muted">NIK Pada
                                                        KTP</small>
                                                </div>

                                            </div>
                                            <div class="col-md-6">


                                                <div class="form-group">
                                                    <label for="NO_KK"><div class="nm"><p>No. KK<p></div></label>
                                                    <input type="text" name="nokk" class="form-control input-custom"
                                                        id="NO_KK" name="NO_KK" required>
                                                    <small id="NO_KK_HELP" class="form-text text-muted">No.
                                                        KK</small>
                                                </div>

                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-md-6">

                                                <!-- Tempat Surat -->
                                                <div class="form-group">
                                                    <label for="tempat"><div class="nm"><p>Tempat</p></div></label>
                                                    <input type="text" name="tptlahir"
                                                        class="form-control input-custom" id="tempat"
                                                        placeholder="contoh : Palembang" required>
                                                    <small id="tempat-help" class="form-text text-muted">Tempat
                                                        Lahir</small>

                                                    <!-- Posisi tempat tanggal -->
                                                    <input type="hidden" name="tempat[1]" value="true">
                                                    <input type="hidden" name="tempat[2]" value="true">
                                                </div>

                                            </div>
                                            <div class="col-md-6">

                                                <!-- Tanggal Surat -->
                                                <div class="form-group">
                                                    <label for="tanggal"><div class="nm"><p>Tanggal<p></div></label>
                                                    <input id="datepicker" type="text" name="tgllahir" class="form-control input-custom"
                                                        required>
                                                    <small id="tanggal-help" class="form-text text-muted">Tanggal
                                                        Lahir</small>
                                                </div>

                                            </div>
                                        </div>
                                        <div class="form-group row mb-0">
                                            <label for="#" class="col-sm-3 col-form-label"><div class="nm"><p>Jenis Kelamin</p></div></label>
                                            <div class="col-sm-9">
                                                <select class="form-control mb-3" id="exampleFormControlSelect1"
                                                    name="jenis_kelamin">
                                                    <option selected disabled hidden>Pilih Jenis Kelamin</option>
                                                    <option value="Laki-Laki">Laki-laki</option>
                                                    <option value="Perempuan">Perempuan</option>
                                                    <br><br><br>
                                                </select>
                                            </div>
                                        </div>
                                        <div class="form-group row mb-0">
                                            <label for="#" class="col-sm-3 col-form-label"><div class="nm"><p>Kebangsaan</p></div></label>
                                            <div class="col-sm-9">
                                                <select class="form-control mb-3" id="exampleFormControlSelect1"
                                                    name="kebangsaan">
                                                    <option selected disabled hidden>Pilih Kebangsaan</option>
                                                    <option>Indonesia</option>
                                                    <option>WNA</option>
                                                    <br><br><br>
                                                </select>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="form-group row mb-0">
                                        <label for="#" class="col-sm-3 col-form-label"><div class="nm"><p>Agama</p></div>
                                        </label>
                                        <div class="col-sm-9">
                                            <select class="form-control mb-3" id="exampleFormControlSelect1"
                                                name="agama">
                                                <option selected disabled hidden>Pilih Agama</option>
                                                <option>Islam</option>
                                                <option>Kristen Protestan</option>
                                                <option>Katolik</option>
                                                <option>Hindu</option>
                                                <option>Buddha</option>
                                                <option>Konghucu</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="form-group row mb-0">
                                        <label for="#" class="col-sm-3 col-form-label"> <div class="nm"><p>Pekerjaan</p></div>
                                        </label>
                                        <div class="col-sm-9">
                                            <input type="text" row="3" name="pekerjaan"
                                                class="form-control input-custom mb-3" required
                                                placeholder="Tuliskan Pekerjaan">
                                        </div>
                                    </div>
                                    <div class="form-group row mb-4">
                                        <label for="#" class="col-sm-3 col-form-label"> <div class="nm"><p>Alamat</p></div>
                                                </label>
                                        <div class="col-sm-9">
                                            <textarea rows="3" name="alamat" class="form-control input-custom" required
                                                placeholder="Tuliskan Alamat"></textarea>
                                        </div>
                                    </div>
                                    <div class="form-group row ">
                                        <label for="jenis_lembaga_non" class="col-sm-12 col-form-label py-0">
                                            <div class="nm"><p>Alasan</p></div>
                                        <div class="col-sm-10">
                                            <textarea rows="4" name="alasan" class="form-control input-custom" required
                                                placeholder="Contoh : Surat ini dibuat sebagai syarat mengurus keringanan  Biaya UKT..."></textarea>
                                        </div>
                                    </div>
                                     <button type="submit"class="btn bg-black" id="BUAT">
                                        BUAT
                                    </button>
                                </div>
                            </div>
                 </div>
                 </form> 
                </div>
            </div>
        </div>
    </div>
</div>
            


</div>
</div>
</div>
<!-- /page content -->
<script type="text/javascript"> 
$(function() {
            $('#datepicker').datepicker({
       todayBtn: "linked",
       language: "id",
       autoclose: true,
       todayHighlight: true,
       format: 'yyyy-mm-dd' 
   });          
});


</script>

<?php $this->load->view('layanan/_partials/footer.php'); ?>