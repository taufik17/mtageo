<section class="content">
						<div class="box">
								<div class="box-header">
										<h3 class="box-title">Data Lengkap Mahasiswa TA</h3>
								</div>
								<!-- /.box-header -->
								<div class="box-body">
										<table id="example1" class="table table-bordered table-striped">
												<thead>
												<tr>
														<th>Nomor</th>
														<th>NIM</th>
														<th>Nama</th>
														<th>Judul TA</th>
														<th>Jurusan</th>
														<th>Status</th>
														<th>Aksi</th>
												</tr>
												</thead>
												<tbody>
												<tr>
													<?php
			        		$no = 1;
			        		foreach ($daftar_permohonan_ta->result() as $row ) {
			        		?>
														<td><?php echo $no++; ?>.</td>
														<td><?php echo $row->NIM ;?></td>
														<td><?php echo $row->Nama_mhs ;?></td>
														<td><?php echo $row->judul_ta ;?></td>
														<td><?php echo $row->Jurusan ;?></td>
														<td>
															<?php
															if ($row->status_ta >= 3) {
																?>
																<span class="label label-success">Diterima</span>
															<?php }
															elseif ($row->status_ta == 2 ) {
																?>
																<span class="label label-warning">Pending</span>
															<?php }
															elseif ($row->status_ta == -1) {
																?>
																<span class="label label-danger">Ditolak</span>
															<?php } ?>
														</td>
														<td>
															<?php
															if ($row->status_ta == 2) {
																?>
																<a href="<?php base_url() ?>Permohonan_bimbingan/lihat/<?php echo $row->Email ?>" class="btn btn-primary btn-xs">
																	<i class="fa fa-eye">&nbsp</i>
																	Lihat</a>
															<?php } ?>
														</td>
													</tr>
												<?php }?>
												</tbody>
										</table>
								</div>
								<!-- /.box-body -->
						</div>
						</section>
