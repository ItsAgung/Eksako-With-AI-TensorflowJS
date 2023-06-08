<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <script src="https://kit.fontawesome.com/64d58efce2.js" crossorigin="anonymous"></script>
    <link href="<?php echo base_url('assets/css/bootstrap.min.css');?>" rel="stylesheet">
    <link rel="stylesheet" href="<?php echo base_url('assets/css/login_style.css');?>" />
    <link href="<?php echo base_url();?>assets/images/E.png" rel="shortcut icon">
    <title>Masuk | E-KSAKO</title>
</head>

<body>
    <div class="containers">
    <div class="forms-container">
      <div class="signin-signup">
        <form method="POST" action="<?php echo base_url(); ?>login/proses" class="sign-in-form">
          <h2 class="title">Silahkan Masuk</h2>
          <div class="input-field">
            <i class="fas fa-user"></i>
            <input name="nik" type="text" placeholder="NIK" />
          </div>
          <div class="input-field">
            <i class="fas fa-lock"></i>
            <input name="password" type="password" placeholder="Password" />
          </div>
          <input type="submit" value="Masuk" class="btn solid" />
          <p>Jika belum mempunyai akun silakan klik <a style="text-decoration:none"  href="<?php echo base_url();?>register">Daftar</a></p>
        </form>
        <?php 
				if($this->session->flashdata('error') !='')
				{
					echo '<div class="alertbox alert alert-danger" role="alert">';
					echo $this->session->flashdata('error');
					echo '</div>';
				}
				?>
 
				<?php 
				if($this->session->flashdata('success_register') !='')
				{
					echo '<div class="alertbox alert alert-info" role="alert">';
					echo $this->session->flashdata('success_register');
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
                <img src="<?php echo base_url('assets/images/login.svg');?>" class=" image" alt="" />
            </div>
        </div>
    </div>


</body>

</html>