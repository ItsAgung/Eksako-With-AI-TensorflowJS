<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <script src="https://kit.fontawesome.com/64d58efce2.js" crossorigin="anonymous"></script>
    <link href="<?php echo base_url('assets/css/bootstrap.min.css');?>" rel="stylesheet">
    <link rel="stylesheet" href="<?php echo base_url('assets/css/login_style.css');?>" />
    <link href="<?php echo base_url();?>assets/images/E.png" rel="shortcut icon">
    <title>Daftar | E-KSAKO</title>
</head>

<body>
    <div class="containers">
        <div class="forms-container">
            <div class="signin-signup">
                <form method="POST" action="<?php echo base_url(); ?>/register/proses" class="sign-up-form">
                    <h2 class="title"> Silakan Daftar</h2>
                    <div class="input-field2">
                        <i class="fas fa-text-width"></i>
                        <input type="text" name="nama" placeholder="Nama Lengkap" />
                    </div>
                    <div class="input-field2">
                        <i class="fas fa-user"></i>
                        <input type="text" name="nik" placeholder="NIK" />
                    </div>
                    <div class="input-field2">
                        <i class="fas fa-phone"></i>
                        <input type="text" name="nohp" placeholder="No.Handphone" />
                    </div>
                    <div class="input-field2">
                        <i class="fas fa-envelope"></i>
                        <input type="email" name="email" placeholder="Email" />
                    </div>
                    <div class="input-field2">
                        <i class="fas fa-lock"></i>
                        <input type="password" name="password" placeholder="Password" />
                    </div>
                    <input type="submit" class="btn" value="Daftar" />
                     <p>Jika sudah mempunyai akun silakan klik <a style="text-decoration:none"  href="<?php echo base_url();?>login">Masuk</a></p>
                </form>
                <?php 
                if($this->session->flashdata('error') !='')
                {
                  echo '<div class="alertbox alert alert-danger" role="alert">';
                  echo $this->session->flashdata('error');
                  echo '</div>';
                }
                ?>
            </div>
        </div>

        <div class="panels-container">
            <div class="panel left-panel">
                <div class="content">
                    <img src="<?php echo base_url('assets/images/logo.png');?>" class="image" alt="" />
                </div>
                <img src="<?php echo base_url('assets/images/signup.svg');?>" class=" image" alt="" />
            </div>
        </div>
    </div>


</body>

</html>