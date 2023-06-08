<section id="maps">
        <div class="row">
            <div class="col">
                <iframe
                    src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3984.6186887137437!2d104.78295191439693!3d-2.9254624978692507!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e3b76cb3f70a109%3A0xeaa8c785aa52eba2!2sKantor%20Lurah%20Sako%20Palembang!5e0!3m2!1sen!2sid!4v1650526932185!5m2!1sen!2sid"
                    width="100%" height="650" frameborder="0" style="border:0;" allowfullscreen="" aria-hidden="false"
                    tabindex="0"></iframe>
            </div>
        </div>
    </section>

    <section id="footer">
        <div class="container">
            <div class="row">
                <div class="col-lg-3">
                    <img class="img-logo" src="<?php echo base_url('assets/images/E-KSAKO.png');?>">
                    <img class="img-logo2" src="<?php echo base_url('assets/images/plg.png');?>">
                </div>
                <div class="col-lg-4">
                    <h5>INFO KONTAK</h5>
                    <p>
                        Jalan Siaran
                        Lrg. Cempaka IV Rt.017 Rw.007
                        Palembang, Sumatera Selatan,
                        Indonesia 30163
                    </p>
                    <br>
                    <h5>KONTAK</h5>
                    <p>0711-813-877</p>
                    
                </div>
               
                <div class="col-lg-2">
                <h5>Contact Us</h5>
                    <p>Hubungi kami melalui form berikut</p>
                </div>
                <div class="col-lg-2">
                    <form action="<?php echo base_url(); ?>/homepage/proses" method="post">
                        <div>
                            <label for="name">Name</label>
                            <input type="text" name="name" placeholder="your name" required />
                        </div>
                        <div>
                            <label for="email">Email</label>
                            <input type="email" name="email" placeholder="your email address" required />
                        </div>
                        <div>
                            <label for="messaage">Message</label><br>
                            <textarea name="message" cols="30" rows="3" placeholder="write your message" required></textarea>
                        </div>

                        <div>
                            <input type="submit" value="Kirim">
                            <input type="reset" value="Reset">
                        </div>
                    </form>
                </div>
            </div>
            <hr style="border-color: white;">
        </div>
        <div class="row justify-content-end">
            <div class="col-lg-5">
                <h6>© Copyright 2022 E-KSAKO All Rights Reserved.
                </h6>
            </div>
        </div>
    </section>

    <script src="<?php echo base_url('assets/js/scrollreveal.js');?>"></script>
    <script>
        ScrollReveal().reveal('h1', { origin: 'right', distance: '100px', scale: 0.85, delay: 500, reset: true });
        ScrollReveal().reveal('p', { origin: 'left', distance: '100px', scale: 0.85, delay: 500, reset: true });
        ScrollReveal().reveal('.tech', { origin: 'right', distance: '100px', scale: 0.85, delay: 500, reset: true });
        ScrollReveal().reveal('.gmbr-bglurah', { origin: 'right', distance: '100px', scale: 0.85, delay: 500, reset: true });
        ScrollReveal().reveal('.network', { origin: 'right', distance: '100px', scale: 0.85, delay: 500, reset: true });
        ScrollReveal().reveal('.profisi-1', { origin: 'left', distance: '500px', scale: 0.85, delay: 500, reset: true });
        ScrollReveal().reveal('.profisi', { origin: 'left', distance: '500px', scale: 0.85, delay: 500, reset: true });
        ScrollReveal().reveal('.profisi-2', { origin: 'left', distance: '500px', scale: 0.85, delay: 500, reset: true });
        ScrollReveal().reveal('.profisi-3', { origin: 'right', distance: '100px', scale: 0.85, delay: 500, reset: true });
        ScrollReveal().reveal('.p-isi', { origin: 'right', distance: '100px', scale: 0.85, delay: 500, reset: true });
        ScrollReveal().reveal('.icon', { origin: 'top', distance: '200px', scale: 0.85, delay: 500, reset: true });
    </script>
    <script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>
	<?php if($this->session->flashdata('success_feedback')): ?>
		<script>
			const Toast = Swal.mixin({
				toast: true,
				position: 'top-end',
				showConfirmButton: false,
				timer: 3000,
				timerProgressBar: false,
				didOpen: (toast) => {
					toast.addEventListener('mouseenter', Swal.stopTimer)
					toast.addEventListener('mouseleave', Swal.resumeTimer)
				}
			})

			Toast.fire({
				icon: 'success',
				title: '<?= $this->session->flashdata('success_feedback') ?>'
			})
		</script>
	<?php endif ?>