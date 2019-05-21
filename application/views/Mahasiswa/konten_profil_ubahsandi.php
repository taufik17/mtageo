<!-- Main content -->
<section class="content">

<div class="row">
		<div class="col-md-3">

				<!-- Profile Image -->
				<div class="box box-primary">
						<div class="box-body box-profile">
							<?php foreach ($data->result() as $nama ) {
							?>
								<img class="profile-user-img img-responsive img-circle" src="<?php echo base_url() ?>assets/foto_profil/<?php echo $nama->foto; ?>" alt="User profile picture">
								<h3 class="profile-username text-center"><?php echo $nama->Nama_mhs; ?></h3>
								<p class="text-muted text-center"><?php echo $nama->NIM; ?></p>
						</div>
						<!-- /.box-body -->
				</div>
				<?php
				$info = $this->session->flashdata('info');
				if(!empty($info))
				{
					echo $info;
				}
				?>
		</div>
		<!-- /.col -->
		<div class="col-md-9">
				<div class="nav-tabs-custom">
						<ul class="nav nav-tabs">
							<li><a href="#settings" data-toggle="tab">Ubah Data</a></li>
								<li><a href="#DataMahasiswa" data-toggle="tab">Data Mahasiswa</a></li>
								<li class="active"><a href="#UbahPassword" data-toggle="tab">Ubah Kata Sandi</a></li>
						</ul>
						<div class="tab-content">
								<div class="tab-pane" id="DataMahasiswa">
									<table width="100%" class="table table-striped table-bordered table-hover dataTable" id="dataTables-example">
										<tbody>
											<tr>
												<td align="left" width="26%"><b>NIM</b></td>
												<td><?php echo $nama->NIM; ?></td>
											</tr>
											<tr>
												<td align="left"><b>Nama Lengkap</b></td>
												<td><?php echo $nama->Nama_mhs; ?></td>
											</tr>
											<tr><td align="left"><b>Jurusan</b></td>
												<td><?php echo $nama->Jurusan; ?></td>
											</tr>
											<tr>
												<td align="left"><b>Jenis Kelamin</b></td>
												<td><?php echo $nama->JK; ?></td>
											</tr>
											<tr>
												<td align="left"><b>Email</b></td>
												<td><?php echo $nama->Email; ?></td>
											</tr>
											<tr>
												<td align="left"><b>Nomor Telepon</b></td>
												<td><?php echo $nama->telp; ?></td>
											</tr>
											<tr>
												<td align="left"><b>Alamat</b></td>
												<td><?php echo $nama->alamat; ?></td>
											</tr>
											<tr>
												<td align="left"><b>Semester</b></td>
												<td><?php echo $nama->semester; ?></td>
											</tr>
										</tbody>
									</table>
								</div>

								<div class="active tab-pane" id="UbahPassword">
									<form class="form-horizontal" action="<?php echo base_url(); ?>ProfilMhs/updatesandi" method="post" enctype="multipart/form-data">
										<div class="form-group">
												<label for="inputPassword" class="col-sm-2 control-label">Sandi Sekarang</label>
												<div class="col-sm-10">
														<input type="password" class="form-control" id="inputOldPassword" name="OldPassword" placeholder="Kata Sandi Saat Ini" required>
												</div>
										</div>
										<div class="form-group">
												<label for="inputPassword" class="col-sm-2 control-label">Sandi baru</label>
												<div class="col-sm-10">
														<input type="password" class="form-control" id="inputNewPassword" name="NewPassword" placeholder="Kata Sandi Baru" minlength="8" required>
												</div>
										</div>
										<div class="form-group">
												<label for="inputPassword" class="col-sm-2 control-label">Ketik ulang sandi baru</label>
												<div class="col-sm-10">
														<input type="password" class="form-control" id="inputAgainNewPassword" name="AgainNewPassword" placeholder="Ulangi kata sandi baru" required>
												</div>
										</div>
											<div class="form-group">
													<div class="col-sm-offset-2 col-sm-10">
															<div class="checkbox">
																	<label>
																			<input type="checkbox"> Data yang saya input Sudah Benar
																	</label>
															</div>
													</div>
											</div>
											<div class="form-group">
													<div class="col-sm-offset-2 col-sm-10">
															<button type="submit" class="btn btn-primary"><i class="fa fa-save"></i>&nbsp&nbspSimpan</button>
													</div>
											</div>
									</form>
								</div>

								<div class="tab-pane" id="settings">
										<form class="form-horizontal" action="<?php echo base_url(); ?>ProfilMhs/updatedata" method="post" enctype="multipart/form-data">
											<div class="form-group">
													<label for="inputEmail" class="col-sm-2 control-label">NIM</label>
													<div class="col-sm-10">
															<input type="text" class="form-control" id="inputNIM" name="NIM" placeholder="NIM" value="<?php echo $nama->NIM; ?>" required>
													</div>
											</div>

												<div class="form-group">
														<label for="inputName" class="col-sm-2 control-label">Nama Lengkap</label>
														<div class="col-sm-10">
																<input type="text" class="form-control" id="inputName" name="Nama_mhs" placeholder="Nama Lengkap" value="<?php echo $nama->Nama_mhs; ?>" required>
														</div>
												</div>

												<div class="form-group">
														<label for="inputJurusan" class="col-sm-2 control-label">Jurusan</label>
														<div class="col-sm-10">
																<input type="email" class="form-control" id="inputJurusan" name="Jurusan" placeholder="<?php echo $nama->Jurusan; ?>" disabled>
														</div>
												</div>

												<div class="form-group">
														<label for="inputEmail" class="col-sm-2 control-label">Jenis Kelamin</label>
														<div class="col-sm-10">
															<select class="form-control select2 select2-hidden-accessible" name="JK" style="width: 100%;" tabindex="-1" aria-hidden="true" required>
																<option selected="selected"><?php echo $nama->JK; ?></option>
																<option value='Laki - Laki'>Laki Laki</option>
																<option value='Perempuan'>Perempuan</option>
															</select>
														</div>
												</div>

												<div class="form-group">
														<label for="inputEmail" class="col-sm-2 control-label">Email</label>

														<div class="col-sm-10">
																<input type="email" class="form-control" id="inputEmail" placeholder="<?php echo $nama->Email; ?>" disabled>
														</div>
												</div>
												<div class="form-group">
														<label for="inputName" class="col-sm-2 control-label">No HP / Telepon</label>

														<div class="col-sm-10">
																<input type="text" class="form-control" id="inputPhone" placeholder="No HP / Telepon" name="telp" value="<?php echo $nama->telp; ?>">
														</div>
												</div>
												<div class="form-group">
														<label for="inputAddress" class="col-sm-2 control-label">Alamat</label>

														<div class="col-sm-10">
																<textarea class="form-control" name="Alamat" id="inputAddress" placeholder="Alamat Lengkap"><?php echo $nama->alamat; ?></textarea>
														</div>
												</div>

												<div class="form-group">
														<label for="inputMasuk" class="col-sm-2 control-label">Semester</label>

														<div class="col-sm-10">
															<input type="number" class="form-control" id="inputMasuk" name="semester" placeholder="Semester" value="<?php echo $nama->semester ?>" required>
														</div>
												</div>

												<div class="form-group">
														<label for="exampleInputFile" class="col-sm-2 control-label">Foto Profil</label>
														<div class="col-sm-10">
															<input type="file" name="filefoto" class="dropify" data-height="250">
															<input type="text" name="oldfile" value="<?php echo $nama->foto; ?>" hidden>
															<p class="help-block">File Max 2 Mb</p>
														</div>
												</div>

												<div class="form-group">
														<div class="col-sm-offset-2 col-sm-10">
																<div class="checkbox">
																		<label>
																				<input type="checkbox"> Data yang saya input Sudah Benar
																		</label>
																</div>
														</div>
												</div>
												<div class="form-group">
														<div class="col-sm-offset-2 col-sm-10">
																<button type="submit" class="btn btn-primary"><i class="fa fa-save"></i>&nbsp&nbspSimpan</button>
														</div>
												</div>
										</form>
								</div>
								<!-- /.tab-pane -->
						</div>
						<!-- /.tab-content -->
				</div>
				<!-- /.nav-tabs-custom -->
		</div>
		<!-- /.col -->
</div>
<!-- /.row -->
<?php }?>
</section>
