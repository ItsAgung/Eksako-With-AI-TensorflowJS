<!-- header -->
<section id="header">  
        <div class="row">
            <div class="col">
                <nav class="navbar navbar-expand-lg navbar-dark">
                        <a class="navbar-brand" href="#"><img class="img-logo" src="<?php echo base_url('assets/images/E-KSAKO.png');?>"></a>
                        <a class="navbar-brand" href="#"><img class="img-logo2" src="<?php echo base_url('assets/images/plg.png');?>"></a>
                        <button class="navbar-toggler" type="button" data-toggle="collapse"
                            data-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false"
                            aria-label="Toggle navigation">
                            <span class="navbar-toggler-icon"></span>
                        </button>
                        <div class="collapse navbar-collapse justify-content-end" id="navbarNavAltMarkup">
                            <div class="navbar-nav mr-5">
                                <a class="nav-link"  href="<?php echo base_url('homepage');?>">Beranda<span class="sr-only">(current)</span></a>
                                <li class="nav-item dropdown">
                                    <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink"
                                        role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                        Profil
                                    </a>
                                    <div class="dropdown-menu " aria-labelledby="navbarDropdownMenuLink">
                                        <a class="dropdown-item" href="<?php echo base_url('profile');?>">Profil</a>
                                        <a class="dropdown-item" href="<?php echo base_url('struktur');?>">Struktur Organisasi</a>
                                        <a class="dropdown-item" href="<?php echo base_url('sejarah');?>">Sejarah</a>
                                        <a class="dropdown-item" href="<?php echo base_url('visi');?>">Visi Misi</a>
                                    </div>
                                </li>

                                <a class="nav-link" href="<?php echo base_url('homepage');?>/#about">Tentang</a>
                                <a class="nav-link" href="<?php echo base_url('homepage');?>/#footer">Kontak</a>
                                <a class="nav-link" href="<?php echo base_url('homepage');?>/#layanan">layanan</a>
                            </div>
                            <div class="btn0 mr-lg-2">
                                <form action="<?php echo base_url();?>login">
                                <input class="btn0" type="submit" value="Masuk" />
                                </form>
                            </div>
                        </div>
                    </div>
                </nav>
            </div>
        </div>
    </section>
    <!-- akhir header -->