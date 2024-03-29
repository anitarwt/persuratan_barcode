<?php $this->load->view('includes/header', compact('pageTitle')) ?>
<div class="page-header">
	<h3 class="page-title">
		<span class="page-title-icon bg-gradient-primary text-white mr-2"><i class="mdi mdi-format-list-bulleted"></i></span> Input Surat Masuk
	</h3>
</div>
<div class="row">
	<div class="col-md-8 grid-margin stretch-card">
		<div class="card">
			<div class="card-body">
				<form class="forms-sample" action="<?php echo base_url('surat/disposisi')?>" method="post">
					<div class="form-group row">
						<label for="exampleInputUsername2" class="col-sm-3 col-form-label">Tanggal Disposisi</label>
						<div class="col-sm-9">
							<input type="text" class="form-control datepicker" id="exampleInputUsername2" placeholder="tanggal terima">
						</div>
					</div>
					<div class="form-group row">
						<label for="sifatSurat" class="col-sm-3 col-form-label">Diteruskan kepada</label>
						<div class="col-sm-9">
							<select id="sifatSurat" name="JenisSurat" class="form-control">
								<option>Kepala Sub Bagian A</option>
								<option>Kepala Sub Bagian B</option>
								<option>Kepala Sub Bagian C</option>
								<option>Kepala Sub Bagian D</option>
							</select>
						</div>
					</div>

					<div class="form-group row">
						<label for="jenisSurat" class="col-sm-3 col-form-label">Catatan Disposisi</label>
						<div class="col-sm-9">
							<div class="row">
								<div class="col-6">
									<div class="form-group">
										<div class="form-check">
											<label class="form-check-label">
												<input type="checkbox" class="form-check-input"> Teliti </label>
										</div>
										<div class="form-check">
											<label class="form-check-label">
												<input type="checkbox" class="form-check-input"> Catat </label>
										</div>
										<div class="form-check">
											<label class="form-check-label">
												<input type="checkbox" class="form-check-input"> Pelajari </label>
										</div>
										<div class="form-check">
											<label class="form-check-label">
												<input type="checkbox" class="form-check-input"> Hadiri </label>
										</div>
										
									</div>
								</div>
								<div class="col-6">
									<div class="form-group">
										<div class="form-check">
											<label class="form-check-label">
												<input type="checkbox" class="form-check-input"> Seperlunya </label>
										</div>
										<div class="form-check">
											<label class="form-check-label">
												<input type="checkbox" class="form-check-input"> Seperlunya </label>
										</div>
										<div class="form-check">
											<label class="form-check-label">
												<input type="checkbox" class="form-check-input"> Arsip </label>
										</div>
										<div class="form-check">
											<label class="form-check-label">
												<input type="checkbox" class="form-check-input"> Tindak Lanjut </label>
										</div>
										<div class="form-check">
											<label class="form-check-label">
												<input type="checkbox" class="form-check-input"> Siapkan Jawaban </label>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
					<div class="form-group row">
						<label for="exampleInputConfirmPassword2" class="col-sm-3 col-form-label">Catatan Tambahan</label>
						<div class="col-sm-9">
							<textarea name="ringkasan" class="form-control" placeholder="Ringkasan"></textarea>
						</div>
					</div>
					<div class="row">
						<div class="col-sm-9 offset-3">
							<button type="submit" class="btn btn-gradient-primary btn-icon-text">Disposisi</button>
							<button class="btn btn-light btn-icon-text">Batal</button>
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
<?php $this->load->view('includes/header', compact('pageTitle')) ?>
<div class="page-header">
	<h3 class="page-title">
		<span class="page-title-icon bg-gradient-primary text-white mr-2"><i class="mdi mdi-format-list-bulleted"></i></span> Input Surat Masuk
	</h3>
</div>
<div class="row">
	<div class="col-md-8 grid-margin stretch-card">
		<div class="card">
			<div class="card-body">
				<form class="forms-sample" action="<?php echo base_url('surat/disposisi')?>" method="post">
					<div class="form-group row">
						<label for="exampleInputUsername2" class="col-sm-3 col-form-label">Tanggal Disposisi</label>
						<div class="col-sm-9">
							<input type="text" class="form-control datepicker" id="exampleInputUsername2" placeholder="tanggal terima">
						</div>
					</div>
					<div class="form-group row">
						<label for="sifatSurat" class="col-sm-3 col-form-label">Diteruskan kepada</label>
						<div class="col-sm-9">
							<select id="sifatSurat" name="JenisSurat" class="form-control">
								<option>Kepala Bagian 1</option>
								<option>Kepala Bagian 2</option>
								<option>Kepala Bagian 3</option>
								<option>Kepala Bagian 4</option>
								<option>Kasubag TU</option>
							</select>
						</div>
					</div>

					<div class="form-group row">
						<label for="jenisSurat" class="col-sm-3 col-form-label">Catatan Disposisi</label>
						<div class="col-sm-9">
							<div class="row">
								<div class="col-6">
									<div class="form-group">
										<div class="form-check">
											<label class="form-check-label">
												<input type="checkbox" class="form-check-input"> Teliti </label>
										</div>
										<div class="form-check">
											<label class="form-check-label">
												<input type="checkbox" class="form-check-input"> Catat </label>
										</div>
										<div class="form-check">
											<label class="form-check-label">
												<input type="checkbox" class="form-check-input"> Pelajari </label>
										</div>
										<div class="form-check">
											<label class="form-check-label">
												<input type="checkbox" class="form-check-input"> Hadiri </label>
										</div>
										
									</div>
								</div>
								<div class="col-6">
									<div class="form-group">
										<div class="form-check">
											<label class="form-check-label">
												<input type="checkbox" class="form-check-input"> Seperlunya </label>
										</div>
										<div class="form-check">
											<label class="form-check-label">
												<input type="checkbox" class="form-check-input"> Seperlunya </label>
										</div>
										<div class="form-check">
											<label class="form-check-label">
												<input type="checkbox" class="form-check-input"> Arsip </label>
										</div>
										<div class="form-check">
											<label class="form-check-label">
												<input type="checkbox" class="form-check-input"> Tindak Lanjut </label>
										</div>
										<div class="form-check">
											<label class="form-check-label">
												<input type="checkbox" class="form-check-input"> Siapkan Jawaban </label>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
					<div class="form-group row">
						<label for="exampleInputConfirmPassword2" class="col-sm-3 col-form-label">Catatan Tambahan</label>
						<div class="col-sm-9">
							<textarea name="ringkasan" class="form-control" placeholder="Ringkasan"></textarea>
						</div>
					</div>
					<div class="row">
						<div class="col-sm-9 offset-3">
							<button type="submit" class="btn btn-gradient-primary btn-icon-text">Disposisi</button>
							<a href="<?php echo base_url('dashboard')?>" class="btn btn-gradient-primary btn-icon-text">Terima</a>
							<button class="btn btn-light btn-icon-text">Batal</button>
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
