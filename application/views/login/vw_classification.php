<!DOCTYPE html>
<html lang="en">
  <head>
    <title>Face Authentication</title>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- Import the webpage's stylesheet -->
    <link rel="stylesheet" href="<?php echo base_url();?>assets/css/face_style.css">
    <link href="<?php echo base_url();?>assets/images/E.png" rel="shortcut icon">
    <style>
      @import url('https://fonts.googleapis.com/css2?family=Poppins:wght@200;300;400;500;600;700;800&display=swap');
      body {
        font-family: 'Poppins', sans-serif;
      height: 100vh;
      background: url("<?php echo base_url();?>assets/images/facebg.png");
      background-size: cover;
    }
    button {
    padding: 10px;
    font-family: 'Poppins', sans-serif;
    float: center;
    margin: 2px 3px 8px 8px;
    background-color: rgba(0, 0, 255, 0.418);
    font-family:;
    border-radius:10px;
    transition:ease 0.5s all;
}
button:hover {
    padding: 10px;
    font-family: 'Poppins', sans-serif;
    float: center;
    transform:scale(1.05);
    background-color: rgba(68, 185, 221, 0.712);
    font-family:;
    border-radius:10px;
}

    </style>
  </head>  
  <body>
  <div class="wrapper">
  <div class="card">
    <center>
    <h1 id="judul">Daftarkan Wajah Anda</h1>
    <p id="status">Harap Tunggu...</p>
    <video id="webcam" autoplay muted></video>
    </center>
    <div class="wrapperbtn">
    <button id="enableCam">Hidupkan Kamera</button>
    <button id="data1" class="dataCollector" data-1hot="0" data-name="KTP Tidak Terdeteksi">Ambil Wajah</button>
    <button id="data2" class="dataCollector" data-1hot="1" data-name="ektp">Ambil Wajah+KTP</button>
    <button id="train" class="removed" >Masuk</button>
    <button id="reset">Ambil Kembali</button>
    <button id="daftar"  >Daftar</button>
    </div>
    </center>
  </div>
  </div>
  

    <!-- Import TensorFlow.js library -->
    <script src="https://cdn.jsdelivr.net/npm/@tensorflow/tfjs@3.11.0/dist/tf.min.js" type="text/javascript"></script>

    <!-- Import the page's JavaScript to do some stuff -->
    <script type="module" src="<?php echo base_url();?>assets/js/script.js"></script>
  </body> 
</html>