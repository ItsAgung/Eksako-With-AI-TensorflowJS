<!DOCTYPE html>
<html lang="en">

<head>
	<?php $this->load->view('admin/_partials/head.php') ?>
</head>

<body>
	<main class="main">
		<?php $this->load->view('admin/_partials/side_nav.php') ?>

		<div class="content">
			<h1>VALIDASI SURAT</h1>


			<?php foreach($sktmdatas as $sktmdata): ?>
			<div class="card">
				<div class="card-header">
					<div>
						<b><?= $sktmdata->nama ?></b> <small class="text-gray"><?= $sktmdata->nik ?></small>
					</div>
					<div><small class="text-gray"><?= $sktmdata->created_at ?></small></div>
				</div>
				<label for="exampleInputFile">Surat yang telah dibuat:</label>
                            <div class="form-group">
                              <div class="file-loading">
                                <input type="file" class="file" id="validasi" name="validasi" data-theme="fas" style="display: none;">
                              </div>
							</div>
				<a href="#" 
					data-delete-url="<?= site_url('admin/surat/delete/'.$sktmdata->nosurat) ?>" 
					class="button button-danger button-small" 
					role="button"
					onclick="deleteConfirm(this)">Delete</a>
					<br>
					
				<a href="<?php echo site_url('admin/digital_sign/sign'); ?>" 
				data-delete-url="<?= site_url('admin/surat/delete/'.$sktmdata->nosurat) ?>" 
					class="button button-success button-small" 
					role="button"
					onclick="validasiConfirm(this)" >Validasi</a>
					
			</div>
			<script>
			$("#validasi").fileinput({
				language: 'id',
				'showCaption': false,
				'showUpload': false,
				'showRemove': false,
				'showBrowse': false,
				dropZoneEnabled: false,
				maxFileSize: 5000,
				uploadUrl: "#",
				pdfRendererUrl: 'https://plugins.krajee.com/pdfjs/web/viewer.html',
				uploadAsync: false,
				minFileCount: 2,
				maxFileCount: 5,
				overwriteInitial: false,
				initialPreview: [
					// PDF DATA
					'http://localhost/eksako/ttd/belum_ttd/<?= $sktmdata->suratfix ?>',
				
					
			
				],
				initialPreviewAsData: true, // identify if you are sending preview data only and not the raw markup
				initialPreviewFileType: 'image', // image is the default and can be overridden in config below
				initialPreviewConfig: [
					{
						type: "pdf",
						caption: "SKTM",
						size: 8000, 
						url: "$urlD", 
						key: 10, 
						downloadUrl: false}, // disable download

					

				]
			});
			</script>
			<?php endforeach ?>

			<?php $this->load->view('admin/_partials/footer.php') ?>
		</div>
	</main>

	<script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>
	<script>
		function deleteConfirm(event){
			Swal.fire({
				title: 'Delete Confirmation!',
				text: 'Are you sure to delete the item?',
				icon: 'warning',
				showCancelButton: true,
				cancelButtonText: 'No',
				confirmButtonText: 'Yes Delete',
				confirmButtonColor: 'red'
			}).then(dialog => {
				if(dialog.isConfirmed){
					window.location.assign(event.dataset.deleteUrl);
				}
			});
		}

		function validasiConfirm(event){
			Swal.fire({
				title: 'Validasi Surat',
				text: 'Anda yakin ingin validasi?',
				icon: 'warning',
				showCancelButton: true,
				cancelButtonText: 'No',
				confirmButtonText: 'Yes',
				confirmButtonColor: 'green'
			}).then(dialog => {
				if(dialog.isConfirmed){
					window.location.assign(event.dataset.deleteUrl);
				}
			});
		}
	</script>

	<?php if($this->session->flashdata('message')): ?>
		<script>
			const Toast = Swal.mixin({
				toast: true,
				position: 'top-end',
				showConfirmButton: false,
				timer: 3000,
				timerProgressBar: true,
				didOpen: (toast) => {
					toast.addEventListener('mouseenter', Swal.stopTimer)
					toast.addEventListener('mouseleave', Swal.resumeTimer)
				}
			})

			Toast.fire({
				icon: 'success',
				title: '<?= $this->session->flashdata('message') ?>'
			})
		</script>
	<?php endif ?>

	
</body>

</html>