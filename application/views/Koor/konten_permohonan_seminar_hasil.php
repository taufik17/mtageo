<section class="content">
						<div class="box">
								<div class="box-header">
										<h3 class="box-title">Data Permohonan Seminar Hasil</h3>
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
														<th>Aksi</th>
												</tr>
												</thead>
												<tbody>
												<tr>
													<?php
			        		$no = 1;
			        		foreach ($daftar_mhs_seminar_hasil->result() as $row ) {
			        		?>
														<td><?php echo $no++; ?>.</td>
														<td><?php echo $row->NIM ;?></td>
														<td><?php echo $row->Nama_mhs ;?></td>
														<td><?php echo $row->judul_ta ;?></td>
														<td>
																<a href="<?php base_url() ?>K_seminar_hasil/lihat/<?php echo $row->Email ?>" class="btn btn-primary btn-xs">
																	<i class="fa fa-eye">&nbsp</i>
																	Lihat</a>
														</td>
													</tr>
												<?php }?>
												</tbody>
										</table>
								</div>
								<!-- /.box-body -->
						</div>
						</section>
