

	<!-- Start Align Area -->
	<div class="whole-wrap">
		<div class="container box_1170">
			<div class="section-top-border">
				<div class="row">
					<div class="col-lg-9 col-md-9">
						<h1>Form Pendaftaran</h1>
						<h3 class="mb-30">Lengkapi Form Dibawah Ini</h3>
						<hr>
						<form action=" " method="post" role="form">
							<div class="mt-10">
								<label><b>Nama Lengkap</b></label>
								<input type="text" name="nama_lengkap" required class="form-control">
								<small class="form-text text-danger"><?= form_error('nama_lengkap'); ?></small>
							</div>
							<div class="mt-10">
								<label><b>Nama Panggilan</b></label>
								<input type="text" name="nama_panggilan" required class="form-control">
								<small class="form-text text-danger"><?= form_error('nama_panggilan'); ?></small>
							</div>
							<div class="mt-10">
								<label><b>Username</b></label>
								<input type="text" name="username" required class="form-control">
								<small class="form-text text-danger"><?= form_error('username'); ?></small>
							</div>
							<div class="mt-10">
								<label><b>Password</b></label>
								<input type="text" name="password" required class="form-control">
								<small class="form-text text-danger"><?= form_error('password'); ?></small>
							</div>
							<div class="mt-10">
								<label><b>Jenis Kelamin</b></label>
									<div class="form-check">
										<label class="form-check-label">
											<input type="radio" class="form-check-input" name="jk" id="jk" value="L" >
											Laki-laki
										</label>
									</div>
									<div class="form-check">
										<label class="form-check-label">
											<input type="radio" class="form-check-input" name="jk" id="jk" value="P" >
											Perempuan
										</label>
									</div>
									<small class="form-text text-danger"><?= form_error('jk'); ?></small>
							</div>
							<div class="mt-10">
								<label><b>Tempat Lahir</b></label>
								<input type="text" name="tmpt_lahir" required class="form-control">
								<small class="form-text text-danger"><?= form_error('tmpt_lahir'); ?></small>
							</div>
							<div class="mt-10">
								<label><b>Tanggal Lahir</b></label>
								<input type="date" name="tgl_lahir" required class="form-control">
								<small class="form-text text-danger"><?= form_error('tgl_lahir'); ?></small>
							</div>
							<div class="mt-10">
								<label><b>Nomor HP</b></label>
								<input type="number" name="no_hp" required class="form-control">
								<small class="form-text text-danger"><?= form_error('no_hp'); ?></small>
							</div>
							<div class="mt-10">
								<label><b>Sekolah</b></label>
								<input type="text" name="sekolah" required class="form-control">
								<small class="form-text text-danger"><?= form_error('sekolah'); ?></small>
							</div>
							<div class="mt-10">
								<label><b>Kelas / Tingkat</b></label>
								<input type="number" name="kelas" required class="form-control">
								<small class="form-text text-danger"><?= form_error('kelas'); ?></small>
							</div>
							<div class="mt-10">
								<label><b>Divisi yang dipilih</b></label>
								<select class="form-select" name="divisi">
									<option value="Seni Tari">Seni Tari</option>
									<option value="Seni Musik">Seni Musik</option>
									<option value="Seni Rupa">Seni Rupa</option>
									<option value="Seni Terapan">Seni Terapan</option>
								</select>
								<small class="form-text text-danger"><?= form_error('divisi'); ?></small>
							</div>						
							<div class="mt-10">
								<label><b>Alamat</b></label>
								<textarea class="form-control" name="alamat" required></textarea>
								<small class="form-text text-danger"><?= form_error('alamat'); ?></small>
							</div>							
							<div class="form-group mt-3">
                <button type="submit" class="button button-contactForm boxed-btn">Send</button>
              </div>
						</form>
					</div>
					
				</div>
			</div>
		</div>
	</div>
	<!-- End Align Area -->
    
