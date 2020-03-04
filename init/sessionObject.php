<?php
// sessionObject
	session_start();

	function resetSession_var($menu1){
		/*section_page*/
		$_SESSION['beranda']=htmlspecialchars('');
		$_SESSION['galeri']=htmlspecialchars('');
		$_SESSION['kontak_kami']=htmlspecialchars('');
		$_SESSION['check_nisn']=htmlspecialchars('');

		$_SESSION['login']=htmlspecialchars('');

		/*section_page*/
		$_SESSION['section_page']=htmlspecialchars('pages/main_pages/'.$menu1.'.php');

		/*location*/
		$_SESSION['location']=htmlspecialchars('');

		/*main*/
		$_SESSION['main']=htmlspecialchars('');

		/*first_run*/
		$_SESSION['first_run']=htmlspecialchars('');

		/*check_user*/
		$_SESSION['check_user']=htmlspecialchars('');
		$_SESSION['siswa']=htmlspecialchars('');

		/*input_nisn*/
		$_SESSION['input_nisn']=htmlspecialchars('');

		/*button_check_nisn*/
		$_SESSION['button_check_nisn']=htmlspecialchars('');

		/*check_kelulusan*/
		$_SESSION['ubah_kelulusan_T']=htmlspecialchars('');
		$_SESSION['ubah_kelulusan_F']=htmlspecialchars('');
		$_SESSION['no_kelulusan']=htmlspecialchars('');
		$_SESSION['check_kelulusan']=htmlspecialchars('');

		/*user_active*/
		$_SESSION['email']=htmlspecialchars('');
		$_SESSION['username']=htmlspecialchars('');
		$_SESSION['tanggal_lahir']=htmlspecialchars('');
		$_SESSION['nama_depan']=htmlspecialchars('');
		$_SESSION['nama_tengah']=htmlspecialchars('');
		$_SESSION['nama_belakang']=htmlspecialchars('');
		$_SESSION['no_telp']=htmlspecialchars('');

		/*siswa_active*/
		$_SESSION['input_password']=htmlspecialchars('');
		$_SESSION['nisn']=htmlspecialchars('');
		$_SESSION['nama']=htmlspecialchars('');

		/*active_student:: Data Pribadi*/
		$_SESSION['check_data_pribadi']=htmlspecialchars('');
		$_SESSION['id_peserta']=htmlspecialchars('');
		$_SESSION['password']=htmlspecialchars('');
		$_SESSION['nisn']=htmlspecialchars('');
		$_SESSION['nama']=htmlspecialchars('');
		$_SESSION['tempat_lahir']=htmlspecialchars('');
		$_SESSION['tanggal_lahir']=htmlspecialchars('');
		$_SESSION['alamat']=htmlspecialchars('');
		$_SESSION['nama_ortu']=htmlspecialchars('');
		$_SESSION['pendidikan_ortu']=htmlspecialchars('');
		$_SESSION['pekerjaan_ortu']=htmlspecialchars('');
		$_SESSION['penghasilan_ortu']=htmlspecialchars('');
		$_SESSION['no_telp']=htmlspecialchars('');
		$_SESSION['nilai_ipa']=htmlspecialchars('');
		$_SESSION['nilai_matematika']=htmlspecialchars('');
		$_SESSION['nilai_bhs_indo']=htmlspecialchars('');
		$_SESSION['nilai_bhs_inggris']=htmlspecialchars('');
		$_SESSION['bukti_pembayaran']=htmlspecialchars('');
		$_SESSION['verifikasi']=htmlspecialchars('');
		$_SESSION['id_admin']=htmlspecialchars('');

		/*seleksi_ujian*/
		$_SESSION['button_seleksi']=htmlspecialchars('');

	}
?>