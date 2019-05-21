<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class M_upload extends CI_model {

	function simpan_upload($NIM,$Nama_mhs,$JK,$telp,$Alamat,$semester,$gambar,$statusdaftar){
		$email_login = $this->session->userdata('Email');
		$hasil=$this->db->query("UPDATE mahasiswa SET NIM ='$NIM', semester='$semester', Nama_mhs='$Nama_mhs', foto='$gambar', JK='$JK', telp='$telp', alamat='$Alamat', st_profil='$statusdaftar' WHERE Email='$email_login' ");
		return $hasil;
	}

	function simpan_ta($Email,$status_ta,$JudulTA,$JudulKP,$Dosen1,$Dosen2,$Dosen3,$data,$transkrip,$ceve) {
		$result=$this->db->query("INSERT INTO `tugas_akhir` (`id_ta`, `Email`, `EmailDosen`, `status_ta`, `dosen_pembimbing1`, `dosen_pembimbing3`, `judul_ta`, `judul_kp`, `data_proposal`, `data_transkrip`, `cv`)
																												VALUES (NULL, '$Email', '$Dosen2', '$status_ta', '$Dosen1', '$Dosen3', '$JudulTA', '$JudulKP', '$data', '$transkrip', '$ceve')");
		$result=$this->db->query("UPDATE `mahasiswa` SET `status_ta` = '$status_ta' WHERE `mahasiswa`.`Email` = '$Email'");
		return $result;
	}

	function update_ta($Email,$status_ta,$JudulTA,$JudulKP,$Dosen1,$Dosen2,$Dosen3,$data,$transkrip,$ceve,$st_judul,$st_kp,$st_d1,$st_d2,$st_d3,$st_proposal,$st_transkrip,$st_cv) {
		$result=$this->db->query("UPDATE `tugas_akhir` SET `EmailDosen` = '$Dosen2',`status_ta` = '$status_ta', `dosen_pembimbing1` = '$Dosen1', `dosen_pembimbing3` = '$Dosen3', `judul_ta` = '$JudulTA', `judul_kp` = '$JudulKP', `data_proposal` = '$data', `data_transkrip` = '$transkrip', `cv` = '$ceve', `st_judul` = $st_judul, `st_kp` = '$st_kp', `st_d1` = '$st_d1', `st_d2` = '$st_d2', `st_d3` = '$st_d3', `st_cv` = '$st_cv', `st_transkrip` = '$st_transkrip', `st_proposal` = '$st_proposal' WHERE`tugas_akhir`.`Email` = '$Email'");
		$result=$this->db->query("UPDATE `mahasiswa` SET `status_ta` = '$status_ta' WHERE `mahasiswa`.`Email` = '$Email'");
		return $result;
	}

	function simpan_seminar_ta($Email,$status_ta,$penguji1,$penguji2,$tgl_seminar,$wkt_seminar,$ruangan,$data) {
		$hasil = $this->db->query("INSERT INTO `seminar_ta` (`id_seminar_ta`, `Email`, `waktu_seminar_ta`, `tgl_seminar_ta`, `penguji1_seminar_ta`, `penguji2_seminar_ta`, `Draft_TA`, `ruangan`, `status_ta`) VALUES (NULL, '$Email', '$wkt_seminar', '$tgl_seminar', '$penguji1', '$penguji2', '$data', '$ruangan', '$status_ta')");
		$hasil = $this->db->query("UPDATE `mahasiswa` SET `status_ta` = '$status_ta' WHERE `mahasiswa`.`Email` = '$Email'");
		$hasil = $this->db->query("UPDATE `tugas_akhir` SET `status_ta` = '$status_ta' WHERE `tugas_akhir`.`Email` = '$Email'");
		return $hasil;
	}

	function simpan_update_seminar_ta($Email,$status_ta,$penguji1,$penguji2,$tgl_seminar,$wkt_seminar,$ruangan,$data,$st_waktu,$st_tanggal,$st_penguji1,$st_penguji2,$st_ruangan,$st_draft_ta) {
		$hasil = $this->db->query("UPDATE `seminar_ta` SET `waktu_seminar_ta` = '$wkt_seminar', `tgl_seminar_ta` = '$tgl_seminar', `penguji1_seminar_ta` = '$penguji1', `penguji2_seminar_ta` = '$penguji2', `Draft_TA` = '$data', `ruangan` = '$ruangan', `status_ta` = '$status_ta', `st_waktu` = '$st_waktu', `st_tanggal` = '$st_tanggal', `st_penguji1` = '$st_penguji1', `st_penguji2` = '$st_penguji2', `st_ruangan` = '$st_ruangan', `st_draft_ta` = '$st_draft_ta' WHERE `seminar_ta`.`Email` = '$Email'");
		$hasil = $this->db->query("UPDATE `mahasiswa` SET `status_ta` = '$status_ta' WHERE `mahasiswa`.`Email` = '$Email'");
		$hasil = $this->db->query("UPDATE `tugas_akhir` SET `status_ta` = '$status_ta' WHERE `tugas_akhir`.`Email` = '$Email'");
		return $hasil;
	}

	function simpan_update_seminar_hasil($Email,$status_ta,$penguji1,$penguji2,$tgl_seminar,$wkt_seminar,$ruangan,$data,$st_waktu,$st_tanggal,$st_penguji1,$st_penguji2,$st_ruangan,$st_draft_ta2) {
		$hasil = $this->db->query("UPDATE `seminar_hasil` SET `penguji1_seminar_hasil` = '$penguji1', `penguji2_seminar_hasil` = '$penguji2', `waktu_seminar_hasil` = '$wkt_seminar', `tgl_seminar_hasil` = '$tgl_seminar', `Draft_TA2` = '$data', `ruangan` = '$ruangan', `status_ta` = '$status_ta', `st_waktu` = '$st_waktu', `st_tanggal` = '$st_tanggal', `st_penguji1` = '$st_penguji1', `st_penguji2` = '$st_penguji2', `st_ruangan` = '$st_ruangan', `st_draft_ta2` = '$st_draft_ta2' WHERE `seminar_hasil`.`Email` = '$Email'");
		$hasil = $this->db->query("UPDATE `mahasiswa` SET `status_ta` = '$status_ta' WHERE `mahasiswa`.`Email` = '$Email'");
		$hasil = $this->db->query("UPDATE `tugas_akhir` SET `status_ta` = '$status_ta' WHERE `tugas_akhir`.`Email` = '$Email'");
		$hasil = $this->db->query("UPDATE `seminar_ta` SET `status_ta` = '$status_ta' WHERE `seminar_ta`.`Email` = '$Email'");
		return $hasil;
	}

	function p_ulang($status_ta,$Email) {
		$hasil = $this->db->query("UPDATE `tugas_akhir` SET `status_ta` = '$status_ta' WHERE `tugas_akhir`.`Email` = '$Email'");
		$hasil = $this->db->query("UPDATE `mahasiswa` SET `status_ta` = '$status_ta' WHERE `mahasiswa`.`Email` = '$Email'"); // update data di mahasiswa
		return $hasil;
	}

	function p_ulang_seminar_ta($status_ta,$Email) {
		$hasil = $this->db->query("UPDATE `seminar_ta` SET `status_ta` = '$status_ta' WHERE `seminar_ta`.`Email` = '$Email'");
		$hasil = $this->db->query("UPDATE `mahasiswa` SET `status_ta` = '$status_ta' WHERE `mahasiswa`.`Email` = '$Email'"); // update data di mahasiswa
		$hasil = $this->db->query("UPDATE `tugas_akhir` SET `status_ta` = '$status_ta' WHERE `tugas_akhir`.`Email` = '$Email'");
		return $hasil;
	}

	function simpan_update_profil_dosen($NIP_NRK,$Nama,$bidang_ilmu,$gambar) {
		$email_login = $this->session->userdata('EmailDosen');
		$hasil = $this->db->query("UPDATE `dosen` SET `NIP_NRK` = '$NIP_NRK', `Nama` = '$Nama', `bidang_ilmu` = '$bidang_ilmu', `foto` = '$gambar' WHERE `dosen`.`EmailDosen` = '$email_login'");
		return $hasil;
	}

	function terima_ta($status_ta,$key) {
		$hasil = $this->db->query("UPDATE `tugas_akhir` SET `status_ta` = '$status_ta' WHERE `tugas_akhir`.`Email` = '$key'");
		$hasil = $this->db->query("UPDATE `mahasiswa` SET `status_ta` = '$status_ta' WHERE `mahasiswa`.`Email` = '$key'");
		return $hasil;
	}

	function tolak_ta($status_ta,$key) {
		$hasil = $this->db->query("UPDATE `tugas_akhir` SET `status_ta` = '$status_ta' WHERE `tugas_akhir`.`Email` = '$key'");
		$hasil = $this->db->query("UPDATE `mahasiswa` SET `status_ta` = '$status_ta' WHERE `mahasiswa`.`Email` = '$key'");
		return $hasil;
	}

	function simpan_seminar_hasil($Email,$status_ta,$penguji1,$penguji2,$tgl_seminar,$wkt_seminar,$ruangan,$data) {
		$hasil = $this->db->query("INSERT INTO `seminar_hasil` (`id_seminar_hasil`, `Email`, `penguji1_seminar_hasil`, `penguji2_seminar_hasil`, `waktu_seminar_hasil`, `tgl_seminar_hasil`, `Draft_TA2`, `ruangan`,`status_ta`)
																													VALUES (NULL, '$Email', '$penguji1', '$penguji2', '$wkt_seminar', '$tgl_seminar', '$data','$ruangan','$status_ta')");
		$hasil = $this->db->query("UPDATE `mahasiswa` SET `status_ta` = '$status_ta' WHERE `mahasiswa`.`Email` = '$Email'");
		$hasil = $this->db->query("UPDATE `tugas_akhir` SET `status_ta` = '$status_ta' WHERE `tugas_akhir`.`Email` = '$Email'");
		$hasil = $this->db->query("UPDATE `seminar_ta` SET `status_ta` = '$status_ta' WHERE `seminar_ta`.`Email` = '$Email'");
		return $hasil;
	}

	function p_ulang_seminar_hasil($status_ta,$Email) {
		$hasil = $this->db->query("UPDATE `seminar_ta` SET `status_ta` = '$status_ta' WHERE `seminar_ta`.`Email` = '$Email'");
		$hasil = $this->db->query("UPDATE `mahasiswa` SET `status_ta` = '$status_ta' WHERE `mahasiswa`.`Email` = '$Email'"); // update data di mahasiswa
		$hasil = $this->db->query("UPDATE `tugas_akhir` SET `status_ta` = '$status_ta' WHERE `tugas_akhir`.`Email` = '$Email'");
		$hasil = $this->db->query("UPDATE `seminar_hasil` SET `status_ta` = '$status_ta' WHERE `seminar_hasil`.`Email` = '$Email'");
		return $hasil;
	}

	function simpan_sidang($Email,$status_ta,$penguji1,$penguji2,$tgl_sidang,$wkt_sidang,$ruangan,$data,$transkrip) {
		$hasil = $this->db->query("INSERT INTO `sidang` (`id_sidang`, `Email`, `tgl_sidang`, `waktu_sidang`, `penguji1_sidang`, `penguji2_sidang`, `Draft_TA_Final`, `ruangan`,`transkrip`, `status_ta`)
																													VALUES (NULL, '$Email', '$tgl_sidang', '$wkt_sidang', '$penguji1', '$penguji2', '$data', '$ruangan','$transkrip', '$status_ta')");
		$hasil = $this->db->query("UPDATE `mahasiswa` SET `status_ta` = '$status_ta' WHERE `mahasiswa`.`Email` = '$Email'");
		$hasil = $this->db->query("UPDATE `tugas_akhir` SET `status_ta` = '$status_ta' WHERE `tugas_akhir`.`Email` = '$Email'");
		$hasil = $this->db->query("UPDATE `seminar_ta` SET `status_ta` = '$status_ta' WHERE `seminar_ta`.`Email` = '$Email'");
		$hasil = $this->db->query("UPDATE `seminar_hasil` SET `status_ta` = '$status_ta' WHERE `seminar_hasil`.`Email` = '$Email'");
		return $hasil;
	}

	function p_ulang_sidang($status_ta,$Email) {
		$hasil = $this->db->query("UPDATE `seminar_ta` SET `status_ta` = '$status_ta' WHERE `seminar_ta`.`Email` = '$Email'");
		$hasil = $this->db->query("UPDATE `mahasiswa` SET `status_ta` = '$status_ta' WHERE `mahasiswa`.`Email` = '$Email'"); // update data di mahasiswa
		$hasil = $this->db->query("UPDATE `tugas_akhir` SET `status_ta` = '$status_ta' WHERE `tugas_akhir`.`Email` = '$Email'");
		$hasil = $this->db->query("UPDATE `seminar_hasil` SET `status_ta` = '$status_ta' WHERE `seminar_hasil`.`Email` = '$Email'");
		$hasil = $this->db->query("UPDATE `sidang` SET `status_ta` = '$status_ta' WHERE `sidang`.`Email` = '$Email'");
		return $hasil;
	}

	function simpan_update_sidang($Email,$status_ta,$penguji1,$penguji2,$tgl_sidang,$wkt_sidang,$ruangan,$data,$transkrip,$st_waktu,$st_tanggal,$st_penguji1,$st_penguji2,$st_ruangan,$st_draft_ta_final) {
		$hasil = $this->db->query("UPDATE `sidang` SET `tgl_sidang` = '$tgl_sidang', `waktu_sidang` = '$wkt_sidang', `penguji1_sidang` = '$penguji1', `penguji2_sidang` = '$penguji2', `Draft_TA_Final` = '$data', `ruangan` = '$ruangan', `transkrip` = '$transkrip', `status_ta` = '$status_ta', `st_waktu` = '$st_waktu', `st_tanggal` = '$st_tanggal', `st_penguji1` = '$st_penguji1', `st_penguji2` = '$st_penguji2', `st_ruangan` = '$st_ruangan', `st_transkrip` = '$st_ruangan', `st_draft_ta_final` = '$st_draft_ta_final' WHERE `sidang`.`Email` = '$Email'");
		$hasil = $this->db->query("UPDATE `seminar_ta` SET `status_ta` = '$status_ta' WHERE `seminar_ta`.`Email` = '$Email'");
		$hasil = $this->db->query("UPDATE `mahasiswa` SET `status_ta` = '$status_ta' WHERE `mahasiswa`.`Email` = '$Email'"); // update data di mahasiswa
		$hasil = $this->db->query("UPDATE `tugas_akhir` SET `status_ta` = '$status_ta' WHERE `tugas_akhir`.`Email` = '$Email'");
		$hasil = $this->db->query("UPDATE `seminar_hasil` SET `status_ta` = '$status_ta' WHERE `seminar_hasil`.`Email` = '$Email'");
		$hasil = $this->db->query("UPDATE `sidang` SET `status_ta` = '$status_ta' WHERE `sidang`.`Email` = '$Email'");
		return $hasil;
	}

	function simpan_yudisium($Email,$transkrip,$ijazah,$akta,$pasfoto,$bebas_ukt,$bebas_lab,$toefl,$status_ta) {
		$hasil = $this->db->query("INSERT INTO `yudisium` (`id_yudisium`, `Email`, `trankrip`, `ijazah`, `akta`, `pasfoto`, `skukt`, `sklab`, `toefl`, `status_ta`)
																													VALUES (NULL, '$Email', '$transkrip', '$ijazah', '$akta', '$pasfoto', '$bebas_ukt', '$bebas_lab', '$toefl', '$status_ta')");
		$hasil = $this->db->query("UPDATE `mahasiswa` SET `status_ta` = '$status_ta' WHERE `mahasiswa`.`Email` = '$Email'");
		$hasil = $this->db->query("UPDATE `tugas_akhir` SET `status_ta` = '$status_ta' WHERE `tugas_akhir`.`Email` = '$Email'");
		$hasil = $this->db->query("UPDATE `seminar_ta` SET `status_ta` = '$status_ta' WHERE `seminar_ta`.`Email` = '$Email'");
		$hasil = $this->db->query("UPDATE `seminar_hasil` SET `status_ta` = '$status_ta' WHERE `seminar_hasil`.`Email` = '$Email'");
		$hasil = $this->db->query("UPDATE `sidang` SET `status_ta` = '$status_ta' WHERE `sidang`.`Email` = '$Email'");
		return $hasil;
	}

	function p_ulang_yudisium($status_ta,$Email) {
		$hasil = $this->db->query("UPDATE `yudisium` SET `status_ta` = '$status_ta' WHERE `yudisium`.`Email` = '$Email'");
		$hasil = $this->db->query("UPDATE `seminar_ta` SET `status_ta` = '$status_ta' WHERE `seminar_ta`.`Email` = '$Email'");
		$hasil = $this->db->query("UPDATE `mahasiswa` SET `status_ta` = '$status_ta' WHERE `mahasiswa`.`Email` = '$Email'"); // update data di mahasiswa
		$hasil = $this->db->query("UPDATE `tugas_akhir` SET `status_ta` = '$status_ta' WHERE `tugas_akhir`.`Email` = '$Email'");
		$hasil = $this->db->query("UPDATE `seminar_hasil` SET `status_ta` = '$status_ta' WHERE `seminar_hasil`.`Email` = '$Email'");
		$hasil = $this->db->query("UPDATE `sidang` SET `status_ta` = '$status_ta' WHERE `sidang`.`Email` = '$Email'");
		return $hasil;
	}

	function simpan_update_yudisium($Email,$transkrip,$ijazah,$akta,$pasfoto,$bebas_ukt,$bebas_lab,$toefl,$status_ta,$st_transkrip,$st_ijazah,$st_akta,$st_pasfoto,$st_skukt,$st_sklab,$st_toefl) {
		$hasil = $this->db->query("UPDATE `yudisium` SET `trankrip` = '$transkrip', `ijazah` = '$ijazah', `akta` = '$akta', `pasfoto` = '$pasfoto', `skukt` = '$bebas_ukt', `sklab` = '$bebas_lab', `toefl` = '$toefl', `status_ta` = '$status_ta', `st_transkrip` = '$st_transkrip', `st_ijazah` = '$st_ijazah', `st_akta` = '$st_akta', `st_pasfoto` = '$st_pasfoto', `st_skukt` = '$st_skukt', `st_sklab` = '$st_sklab', `st_toefl` = '$st_toefl' WHERE `yudisium`.`Email` = '$Email'");
		$hasil = $this->db->query("UPDATE `seminar_ta` SET `status_ta` = '$status_ta' WHERE `seminar_ta`.`Email` = '$Email'");
		$hasil = $this->db->query("UPDATE `mahasiswa` SET `status_ta` = '$status_ta' WHERE `mahasiswa`.`Email` = '$Email'"); // update data di mahasiswa
		$hasil = $this->db->query("UPDATE `tugas_akhir` SET `status_ta` = '$status_ta' WHERE `tugas_akhir`.`Email` = '$Email'");
		$hasil = $this->db->query("UPDATE `seminar_hasil` SET `status_ta` = '$status_ta' WHERE `seminar_hasil`.`Email` = '$Email'");
		$hasil = $this->db->query("UPDATE `sidang` SET `status_ta` = '$status_ta' WHERE `sidang`.`Email` = '$Email'");
		return $hasil;
	}

	function permohonan_list(){
		$email_login = $this->session->userdata('EmailDosen');
		$hasil=$this->db->query("SELECT * FROM tugas_akhir INNER JOIN mahasiswa ON mahasiswa.Email = tugas_akhir.Email WHERE tugas_akhir.status_ta = 2 AND tugas_akhir.EmailDosen = '$email_login'");
		return $hasil->result();
	}

	function updatestatuspermohonan($st_judul,$st_kp,$st_d1,$st_d2,$st_d3,$st_cv,$st_transkrip,$st_proposal,$dataupdate,$catatan,$status_ta) {
		$hasil = $this->db->query("UPDATE `tugas_akhir` SET `status_ta` = '$status_ta', `st_judul` = '$st_judul', `st_kp` = '$st_kp', `st_d1` = '$st_d1', `st_d2` = '$st_d2', `st_d3` = '$st_d3', `st_cv` = '$st_cv', `st_transkrip` = '$st_transkrip', `st_proposal` = '$st_proposal', `catatan` = '$catatan' WHERE `tugas_akhir`.`Email` = '$dataupdate'");
		$hasil = $this->db->query("UPDATE `mahasiswa` SET `status_ta` = '$status_ta' WHERE `mahasiswa`.`Email` = '$dataupdate'");
		return $hasil;
	}

	function simpan_update_seminar_koor($st_tanggal,$st_waktu,$st_ruangan,$st_penguji1,$st_penguji2,$st_draft_ta,$Email,$tgl_seminar,$wkt_seminar,$ruangan,$status_ta,$catatan) {
		$hasil = $this->db->query("UPDATE `seminar_ta` SET `waktu_seminar_ta` = '$wkt_seminar', `tgl_seminar_ta` = '$tgl_seminar', `ruangan` = '$ruangan', `status_ta` = '$status_ta', `st_waktu` = '$st_waktu', `st_tanggal` = '$st_tanggal', `st_penguji1` = '$st_penguji1', `st_penguji2` = '$st_penguji2', `st_ruangan` = '$st_ruangan', `st_draft_ta` = '$st_ruangan', `catatan` = '$catatan' WHERE `seminar_ta`.`Email` = '$Email'");
		$hasil = $this->db->query("UPDATE `tugas_akhir` SET `status_ta` = '$status_ta' WHERE `tugas_akhir`.`Email` = '$Email'");
		$hasil = $this->db->query("UPDATE `mahasiswa` SET `status_ta` = '$status_ta' WHERE `mahasiswa`.`Email` = '$Email'");
		return $hasil;
	}

	function simpan_update_seminar_hasil_koor($st_tanggal,$st_waktu,$st_ruangan,$st_penguji1,$st_penguji2,$st_draft_ta2,$Email,$tgl_seminar,$wkt_seminar,$ruangan,$status_ta,$catatan) {
		$hasil = $this->db->query("UPDATE `seminar_hasil` SET `waktu_seminar_hasil` = '$wkt_seminar', `tgl_seminar_hasil` = '$tgl_seminar', `ruangan` = '$ruangan', `status_ta` = '$status_ta', `st_waktu` = '$st_waktu', `st_tanggal` = '$st_tanggal', `st_penguji1` = '$st_penguji1', `st_penguji2` = '$st_penguji2', `st_ruangan` = '$st_penguji2', `st_draft_ta2` = '$st_draft_ta2', `catatan` = '$catatan' WHERE `seminar_hasil`.`Email` = '$Email'");
		$hasil = $this->db->query("UPDATE `tugas_akhir` SET `status_ta` = '$status_ta' WHERE `tugas_akhir`.`Email` = '$Email'");
		$hasil = $this->db->query("UPDATE `mahasiswa` SET `status_ta` = '$status_ta' WHERE `mahasiswa`.`Email` = '$Email'");
		$hasil = $this->db->query("UPDATE `seminar_ta` SET `status_ta` = '$status_ta' WHERE `seminar_ta`.`Email` = '$Email'");
		return $hasil;
	}

	function simpan_update_sidang_koor($st_tanggal,$st_waktu,$st_ruangan,$st_penguji1,$st_penguji2,$st_draft_ta_final,$Email,$tgl_sidang,$wkt_sidang,$ruangan,$status_ta,$catatan,$st_transkrip) {
		$hasil = $this->db->query("UPDATE `sidang` SET `tgl_sidang` = '$tgl_sidang', `waktu_sidang` = '$wkt_sidang', `ruangan` = '$ruangan', `status_ta` = '$status_ta', `st_waktu` = '$st_waktu', `st_tanggal` = '$st_tanggal', `st_penguji1` = '$st_penguji1', `st_penguji2` = '$st_penguji2', `st_ruangan` = '$st_ruangan', `st_transkrip` = '$st_transkrip', `st_draft_ta_final` = '$st_draft_ta_final', `catatan` = '$catatan' WHERE `sidang`.`Email` = '$Email'");
		$hasil = $this->db->query("UPDATE `tugas_akhir` SET `status_ta` = '$status_ta' WHERE `tugas_akhir`.`Email` = '$Email'");
		$hasil = $this->db->query("UPDATE `mahasiswa` SET `status_ta` = '$status_ta' WHERE `mahasiswa`.`Email` = '$Email'");
		$hasil = $this->db->query("UPDATE `seminar_ta` SET `status_ta` = '$status_ta' WHERE `seminar_ta`.`Email` = '$Email'");
		$hasil = $this->db->query("UPDATE `seminar_hasil` SET `status_ta` = '$status_ta' WHERE `seminar_hasil`.`Email` = '$Email'");
		return $hasil;
	}

}
