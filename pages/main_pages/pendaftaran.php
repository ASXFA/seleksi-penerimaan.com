<!DOCTYPE html>
<html>
<head>
	<link rel="stylesheet" type="text/css" href="css/main_style.css">
	<link rel="stylesheet" type="text/css" href="css/modify_style.css">
	<link rel="stylesheet" type="text/css" href="css/position_style.css">
	<title></title>
</head>
<body class='vertical_center horizontal_left'>
	<table border="0px" width="100%" height="*" class="horizontal_center font_style_menu vertical_center clear_transparent"
	 style="border: #FFFFFF 20px solid; border-radius: 20px 20px 20px 20px;">
		<tr>
			<td width="100%" height="*" colspan="3">
				<tr>
					<td width="30%"></td>
					<td width="40%">
						<h2 class="text_upercase text_bolder text_style login_box_header"
						style="border: transparent 5px solid;">Formulir Pendaftaran</h2>
					</td>
					<td width="30%"></td>
				</tr>
				
			</td>
		</tr>
		<tr>
			<td width='30%' height="*"></td>
			<td style="" width="40%" height="*" class="vertical_center login_box_content clear_transparent">
			<form name='pendaftaran_siswa' class='daftar_siswa horizontal_left' action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']); ?>" method='post'>
				<ul type="none" class="padding_top_20">
					<li class="vertical_center" width="100%" height="*">
						<label for='nisn'><h3>NISN: <br></label>
						<input type="text" name="nisn" class="nisn" label="nisn" class="padding_left_20">
					</li>
					<li class="padding_top_20">
						<label for='password'><h3>Password: <br></label>
						<input type="password" name="password" class="password" label="password" class="vertical_center">
					</li>
					<li class="padding_top_20">
						<label for='nama'><h3>Nama Lengkap: <br></label>
						<input type="text" name="nama" class="nama" label="nama" class="vertical_center">
					</li>
					<li class="padding_top_20">
						<label for='tempat_lahir'><h3>Tempat Lahir: <br></label>
						<input type="text" name="tempat_lahir" class="tempat_lahir" label="tempat_lahir" class="vertical_center">
					</li>
					<li class="padding_top_20">
						<label for='tanggal_lahir'><h3>Tanggal Lahir: <br></label>
						<input name="tanggal_lahir" type="date"
						value="<?php echo date('Y-m-d',strtotime($data["congestart"])) ?>">
					</li>
					<li class="padding_top_20">
						<label for='alamat'><h3>Alamat: <br></label>
						<input type="text" name="alamat" class="alamat" style="300px">
					</li>
					<li class="padding_top_20">
						<label for='nama_ortu'><h3>Nama Orang Tua:  <br></label>
						<input type="text" name="nama_ortu" class="nama_ortu" label="nama_ortu" class="vertical_center">
					</li>
					<li class="padding_top_20">
						<label for='pendidikan_ortu'><h3>Pendidikan Orang Tua:  <br></label>
						<select name="pendidikan_ortu" width="100%" height="*">
							<option value="Tidak Sekolah"><h3>Tidak Sekolah <br></h3></option>
							<option value="TK"><h3>TK <br></h3></option>
							<option value="SD"><h3>SD <br></h3></option>
							<option value="SMP / MTS"><h3>SMP / MTS <br></h3></option>
							<option value="SMA / SMK / MA"><h3>SMA / SMK / MA <br></h3></option>
							<option value="Diploma"><h3>Diploma <br></h3></option>
							<option value="S1"><h3>S1 <br></h3></option>
							<option value="S2"><h3>S2 <br></h3></option>
							<option value="S3"><h3>S3 <br></h3></option>
							<option value="Lain Lain"><h3>Lain Lain <br></h3></option>
						</select>	
					</li>

					<li class="padding_top_20">
						<label for='pekerjaan_ortu'><h3>Pekerjaan Orang Tua: <br></label>
						<select name="pekerjaan_ortu" width="100%" height="*">
							<option value="Buruh"><h3>Buruh <br></h3></option>
							<option value="Tani"><h3>Tani <br></h3></option>
							<option value="Wiraswasta"><h3>Wiraswasta <br></h3></option>
							<option value="PNS"><h3>PNS <br></h3></option>
							<option value="Polri/TNI"><h3>Polri/TNI <br></h3></option>
							<option value="Perangkat Desa"><h3>Perangkat Desa <br></h3></option>
							<option value="Nelayan"><h3>Nelayan <br></h3></option>
							<option value="Lainnya"><h3>Lainnya <br></h3></option>
						</select>
					</li>

					<li class="padding_top_20">
						<label for='penghasilan_ortu'><h3>Penghasilan Orang Tua: <br></label>
						<select name="penghasilan_ortu" width="100%" height="*">
							<option value="Dibawah Rp.500.000"><h3>Dibawah Rp.500.000 <br></h3></option>
							<option value="Rp.500.000 ~ Rp.1.000.000"><h3>Rp.500.000 ~ Rp.1.000.000 <br></h3></option>
							<option value="Rp.1.000.000 ~ Rp.3.000.000"><h3>Rp.1.000.000 ~ Rp.3.000.000 <br></h3></option>
							<option value="Rp.3.000.000 ~ Rp.5.000.000"><h3>Rp.3.000.000 ~ Rp.5.000.000 <br></h3></option>
							<option value="Rp.5.000.000 ~ Rp.10.000.000"><h3>Rp.5.000.000 ~ Rp.10.000.000 <br></h3></option>
							<option value="Rp.10.000.000 Ke atas"><h3>Rp.10.000.000 Ke atas <br></h3></option>
						</select>
					</li>

					<li class="padding_top_20">
						<label for='no_telp'><h3>no telpon: <br></label>
						<input type="tel" name="no_telp" class="no_telp" label="no_telp" class="vertical_center">
					</li>
					
				<li class="padding_top_20">
					<table class="horizontal_left" border="0px" width="80%" height="20%" frameborder="0" style="
					border: 2px #FFFFFF block;">
						<tr>
							<td><h2>NILAI</h2></td>
							<tr>
								<td>
									<li class="padding_top_5" style="border-left: transparent 20px solid;">
										<label for='nilai_ipa'><h3>Nilai IPA: </label>
										<br><input name="nilai_ipa" class="horizontal_center" type="number" placeholder="1.0" step="0.01" min="0" max="100">
									</li>
								</td>
							</tr>
							<tr>
								<td>
									<li class="padding_top_5" style="border-left: transparent 20px solid;">
										<label for='nilai_matematika'><h3>Nilai Matematika: </label>
										<input name="nilai_matematika" class="horizontal_center" type="number" placeholder="1.0" step="0.01" min="0" max="100">
									</li>
								</td>
							</tr>
							<tr>
								<td>
									<li class="padding_top_5" style="border-left: transparent 20px solid;">
										<label for='nilai_bhs_indo'><h3>Nilai Bahasa Indonesia: </label>
										<input  name="nilai_bhs_indo" class="horizontal_center" type="number" placeholder="1.0" step="0.01" min="0" max="100">
									</li>
								</td>
							</tr>
							<tr>
								<td>
									<li class="padding_top_5 hor" style="border-left: transparent 20px solid;">
										<label for='nilai_bhs_inggris'><h3>Nilai Bahasa Indonesia: </label>
										<input  name="nilai_bhs_inggris" class="horizontal_center" type="number" placeholder="1.0" step="0.01" min="0" max="100">
									</li>
								</td>
							</tr>
						</tr>
					</table>
				</li>
					<li class="padding_top_20 button_clear horizontal_right" 
					style="
					font-size: 20px;
					border: 2px #FFFFFF block;">
						<input class="text_upercase button_style" type="submit" name="pendaftaran_siswa" value="DAFTAR">
					</li>
				</ul>
			</form>
			</td>
			<td width='30%' height="*"></td>
		</tr>
	</table>
	<!--
		$id_peserta=htmlspecialchars('');
		$nisn=htmlspecialchars('');
		$password=htmlspecialchars('');
		$nama=htmlspecialchars('');
		$tempat_lahir=htmlspecialchars('');
		$tanggal_lahir=htmlspecialchars('');
		$alamat=htmlspecialchars('');
		$nama_ortu=htmlspecialchars('');
		$pendidikan_ortu=htmlspecialchars('');
		$pekerjaan_ortu=htmlspecialchars('');
		$penghasilan_ortu=htmlspecialchars('');
		$no_telp=htmlspecialchars('');
		$nilai_ipa=htmlspecialchars('');
		$nilai_matematika=htmlspecialchars('');
		$nilai_bhs_indo=htmlspecialchars('');
		$nilai_bhs_inggris=htmlspecialchars('');
		$bukti_pembayaran=htmlspecialchars('');
		$verifikasi=htmlspecialchars('');
		$id_admin=htmlspecialchars('');
	 -->
</body>
</html>