<?php $this->load->view('includes/header', compact('pageTitle')) ?>
<div class="page-header">
	<h3 class="page-title">
		<span class="page-title-icon bg-gradient-primary text-white mr-2"><i class="mdi mdi-format-list-bulleted"></i></span> Edit Surat Masuk
	</h3>
</div>
<div class="row">
	<div class="col-md-8 grid-margin stretch-card">
		<div class="card">
			<div class="card-body">
				<form class="forms-sample">
					<div class="form-group row">
						<label for="exampleInputUsername2" class="col-sm-3 col-form-label">Tanggal Terima</label>
						<div class="col-sm-9">
							<input type="text" class="form-control datepicker" id="exampleInputUsername2" placeholder="tanggal terima" value="20-12-2019">
						</div>
					</div>
					<div class="form-group row">
						<label for="exampleInputEmail2" class="col-sm-3 col-form-label">Tanggal Surat</label>
						<div class="col-sm-9">
							<input type="text" class="form-control datepicker" id="exampleInputEmail2" placeholder="tanggal surat" value="22-02-2019">
						</div>
					</div>
					<div class="form-group row">
						<label for="sifatSurat" class="col-sm-3 col-form-label">Sifat Surat</label>
						<div class="col-sm-9">
							<select id="sifatSurat" name="JenisSurat" class="form-control">
								<option>Rahasia</option>
								<option>Biasa</option>
								<option>Penting</option>
							</select>
						</div>
					</div>

					<div class="form-group row">
						<label for="jenisSurat" class="col-sm-3 col-form-label">Jenis Surat</label>
						<div class="col-sm-9">
							<select id="jenisSurat" name="jenisSurat" class="form-control">
								<option>Undangan</option>
								<option>Surat Biasa</option>
							</select>
						</div>
					</div>
					<div class="form-group row">
						<label for="exampleInputConfirmPassword2" class="col-sm-3 col-form-label">Nomor Surat</label>
						<div class="col-sm-9">
							<input type="text" class="form-control" id="exampleInputConfirmPassword2" placeholder="Nomor Surat" value="999/JK.2/KL.822H/2/12/2019">
						</div>
					</div>

					

					<div class="form-group row">
						<label for="exampleInputConfirmPassword2" class="col-sm-3 col-form-label">Perihal</label>
						<div class="col-sm-9">
							<input type="text" class="form-control" id="exampleInputConfirmPassword2" placeholder="Perihal" value="Undangan Narasumber">
						</div>
					</div>
					<div class="form-group row">
						<label for="exampleInputConfirmPassword2" class="col-sm-3 col-form-label">Nama Pengirim</label>
						<div class="col-sm-9">
							<input type="text" class="form-control" id="exampleInputConfirmPassword2" placeholder="Nama Pengirim" value="Kementerian Dalam Negeri">
						</div>
					</div>
					<div class="form-group row">
						<label for="exampleInputConfirmPassword2" class="col-sm-3 col-form-label">Kepada</label>
						<div class="col-sm-9">
							<input type="text" class="form-control" id="exampleInputConfirmPassword2" placeholder="Kepada" value="Biro Hukum dan Kerjasama Luar Negeri">
						</div>
					</div>
					<div class="form-group row">
						<label for="exampleInputConfirmPassword2" class="col-sm-3 col-form-label">Ringkasan</label>
						<div class="col-sm-9">
							<textarea name="ringkasan" class="form-control" placeholder="Ringkasan" ></textarea>
						</div>
					</div>


					

					<div class="row">
						<div class="col-sm-9 offset-3">
							<a href="<?php echo base_url('surat/index')?>" class="btn btn-gradient-primary btn-icon-text">Edit Surat</a>
							<a href="<?php echo base_url('surat/index')?>" class="btn btn-gradient-primary btn-icon-text">Batal</a>
							
						</div>
					</div>
				</form>
			</div>
		</div>
	</div>
</div>
<?php $this->load->view('includes/footer') ?>
<script>
    (function ($) {
        'use strict';
        $(function () {
            $('.datepicker').datepicker({
            });
        });
    })(jQuery);
</script>
