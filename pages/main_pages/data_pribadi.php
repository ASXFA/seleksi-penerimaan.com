<?php
	if($_SESSION['check_data_pribadi']==htmlspecialchars('true')){

	}else{
		$input_text=htmlspecialchars('pages/main_pages/'.$menu5.'.php');
		$_SESSION['section_page'] =htmlspecialchars('$input_text');
		$location=htmlspecialchars('./temp/section_page.txt');
		overwriteFiles($location, $input_text);
		list($output_text)=readFiles($location, $output_text);
		echo '<script>window.location="./index.php"</script>';
	}
?>
<!DOCTYPE html>
<html>
<head>	
	<link rel="stylesheet" type="text/css" href="css/main_style.css">
	<link rel="stylesheet" type="text/css" href="css/modify_style.css">
	<link rel="stylesheet" type="text/css" href="css/position_style.css">
	<title></title>
</head>
<body  class='vertical_center horizontal_center'>
	 <div name='data_box' class='data_box vertical_center horizontal_center' 
	 	style='
	 	background-color: #FFFFFF;
	 	border: #FFFFFF 30px solid;
	 	border-radius: 5px 20px 5px 20px;
	 	'>
		<table width="100%">
			<td width="30%">
			<tr>
				<td colspan="2" class="clear_box" style='background-color: #F02;'>
					<tr><td style=""><h3 class="text_upercase text_bolder" style=" font-family: centaur;"><?php echo(($_SESSION['nama'])) ?></h3></td></tr>
				</td>
			</tr>
			<tr>
			<td width="30%"><tr><td style='
				 	background-color: #FFFFFF;
				 	border: #ffffff 10px solid;
				 	border-radius: 5px 5px 5px 5px;
				 	padding-bottom: 5px;
				 	padding-top: 5px;
				 	'><img src='./../seleksi-penerimaan.com/img/kontak.png'style='min-width:20px; max-width: 40px;min-height: 20px; max-height: 40px;'></td>
				 	<td width='70%'><a href='./../seleksi-penerimaan.com/img/kontak.png' download>
						<button width='*' height='20px' name='download'>DOWNLOAD
						</button></a>
					</td></tr></td>
			</tr>
			<td class="clear_box" style='background-color: #F02;'colspan='1'>
				<tr><td class="horizontal_left text_bolder"><?php echo(("ID Peserta: ")) ?></td>
					<td class="" style='
				 	background-color: #FFFFFF;
				 	border: #95b8ff 2px solid;
				 	border-radius: 5px 5px 5px 5px;
				 	padding-bottom: 5px;
				 	padding-top: 5px;
				 	padding-right: 20px;
				 	padding-left: 20px;
				 	opacity: 0.7;
				 	'><?php echo(($_SESSION['id_peserta'])) ?></td></tr>
				<tr><td class="horizontal_left text_bolder"><?php echo(("NISN: ")) ?></td>
					<td style='
				 	background-color: #FFFFFF;
				 	border: #95b8ff 2px solid;
				 	border-radius: 5px 5px 5px 5px;
				 	padding-bottom: 5px;
				 	padding-top: 5px;
				 	'><?php echo(($_SESSION['nisn'])) ?></td></tr>
				<tr><td class="horizontal_left text_bolder"><?php echo(("nama: ")) ?></td>
					<td style='
				 	background-color: #FFFFFF;
				 	border: #95b8ff 2px solid;
				 	border-radius: 5px 5px 5px 5px;
				 	padding-bottom: 5px;
				 	padding-top: 5px;
				 	'><?php echo(($_SESSION['nama'])) ?></td></tr>
				<tr><td class="horizontal_left text_bolder"><?php echo(("Tempat Lahir: ")) ?></td>
					<td style='
				 	background-color: #FFFFFF;
				 	border: #95b8ff 2px solid;
				 	border-radius: 5px 5px 5px 5px;
				 	padding-bottom: 5px;
				 	padding-top: 5px;
				 	'><?php echo(($_SESSION['tempat_lahir'])) ?></td></tr>
				<tr><td class="horizontal_left text_bolder"><?php echo(("Tanggal Lahir: ")) ?></td>
					<td style='
				 	background-color: #FFFFFF;
				 	border: #95b8ff 2px solid;
				 	border-radius: 5px 5px 5px 5px;
				 	padding-bottom: 5px;
				 	padding-top: 5px;
				 	'><?php echo(($_SESSION['tanggal_lahir'])) ?></td></tr>
				<tr><td class="horizontal_left text_bolder"><?php echo(("Alamat: "))?></td>
					<td style='
				 	background-color: #FFFFFF;
				 	border: #95b8ff 2px solid;
				 	border-radius: 5px 5px 5px 5px;
				 	padding-bottom: 5px;
				 	padding-top: 5px;
				 	padding-right: 20px;
				 	padding-left: 20px;
				 	'><?php echo(($_SESSION['alamat'])) ?></td></tr>
				<tr><td class="horizontal_left text_bolder"><?php echo(("Nama_Ortu: ")) ?></td>
					<td style='
				 	background-color: #FFFFFF;
				 	border: #95b8ff 2px solid;
				 	border-radius: 5px 5px 5px 5px;
				 	padding-bottom: 5px;
				 	padding-top: 5px;
				 	'><?php echo(($_SESSION['nama_ortu'])) ?></td></tr>
				<tr><td class="horizontal_left text_bolder"><?php echo(("Pendidikan_Ortu: ")) ?></td>
					<td style='
				 	background-color: #FFFFFF;
				 	border: #95b8ff 2px solid;
				 	border-radius: 5px 5px 5px 5px;
				 	padding-bottom: 5px;
				 	padding-top: 5px;
				 	'><?php echo(($_SESSION['pendidikan_ortu'])) ?></td></tr>
				<tr><td class="horizontal_left text_bolder"><?php echo(("Penghasilan_Ortu: ")) ?></td>
					<td style='
				 	background-color: #FFFFFF;
				 	border: #95b8ff 2px solid;
				 	border-radius: 5px 5px 5px 5px;
				 	padding-bottom: 5px;
				 	padding-top: 5px;
				 	'><?php echo(($_SESSION['penghasilan_ortu'])) ?></td></tr>
				<tr><td class="horizontal_left text_bolder"><?php echo(("No Telp: ")) ?></td>
					<td style='
				 	background-color: #FFFFFF;
				 	border: #95b8ff 2px solid;
				 	border-radius: 5px 5px 5px 5px;
				 	padding-bottom: 5px;
				 	padding-top: 5px;
				 	'><?php echo(($_SESSION['no_telp'])) ?></td></tr>
				<tr><td class="horizontal_left text_bolder"><?php echo(("Nilai IPA: ")) ?></td>
					<td style='
				 	background-color: #FFFFFF;
				 	border: #95b8ff 2px solid;
				 	border-radius: 5px 5px 5px 5px;
				 	padding-bottom: 5px;
				 	padding-top: 5px;
				 	'><?php echo(($_SESSION['nilai_ipa'])) ?></td></tr>
				<tr><td class="horizontal_left text_bolder"><?php echo(("Nilai Matematika: ")) ?></td>
					<td style='
				 	background-color: #FFFFFF;
				 	border: #95b8ff 2px solid;
				 	border-radius: 5px 5px 5px 5px;
				 	padding-bottom: 5px;
				 	padding-top: 5px;
				 	'><?php echo(($_SESSION['nilai_matematika'])) ?></td></tr>
				<tr><td class="horizontal_left text_bolder"><?php echo(("Nilai Bahasa Indonesia: ")) ?></td>
					<td style='
				 	background-color: #FFFFFF;
				 	border: #95b8ff 2px solid;
				 	border-radius: 5px 5px 5px 5px;
				 	padding-bottom: 5px;
				 	padding-top: 5px;
				 	'><?php echo(($_SESSION['nilai_bhs_indo'])) ?></td></tr>
				<tr><td class="horizontal_left text_bolder"><?php echo(("Nilai Bahasa Inggris: ")) ?></td>
					<td style='
				 	background-color: #FFFFFF;
				 	border: #95b8ff 2px solid;
				 	border-radius: 5px 5px 5px 5px;
				 	padding-bottom: 5px;
				 	padding-top: 5px;
				 	'><?php echo(($_SESSION['nilai_bhs_inggris'])) ?></td></tr>
				<tr><td class="horizontal_left text_bolder"><?php echo(("Verifikasi: ")) ?></td>
					<td style='
				 	background-color: #FFFFFF;
				 	border: #95b8ff 2px solid;
				 	border-radius: 5px 5px 5px 5px;
				 	padding-bottom: 5px;
				 	padding-top: 5px;
					 '><?php echo(($_SESSION['verifikasi'])) ?></td></tr>
				<tr><td class="horizontal_left text_bolder"><?php echo(("Status Seleksi: ")) ?></td>
					<td style='
				 	background-color: #FFFFFF;
				 	border: #95b8ff 2px solid;
				 	border-radius: 5px 5px 5px 5px;
				 	padding-bottom: 5px;
				 	padding-top: 5px;
					 '><?php echo(($_SESSION['status_seleksi'])) ?></td></tr>
				<tr><td class="horizontal_left text_bolder"><?php echo(("Bukti Pembayaran: ")) ?></td>
				<td style='
				 	background-color: #FFFFFF;
				 	border: #95b8ff 2px solid;
				 	border-radius: 5px 5px 5px 5px;
				 	padding-bottom: 5px;
				 	padding-top: 5px;
					 '>
				<?php  
					if ($_SESSION['bukti_pembayaran']==NULL) {
				?>
				<form action="pages/main_pages/aksiupload.php" method="post" enctype="multipart/form-data">
					 <input type="text" name="id_peserta" value="<?php echo $_SESSION['id_peserta']; ?>" hidden>
					 <input type="file" name="file"><input type="submit" name="upload" value="Upload"></td></tr>
				</form>
				<?php 
					}else{
						echo $_SESSION['bukti_pembayaran'];	
				} ?>
			</td>
			</tr>
			</td>
		</table>
	</div>
</body>
</html>