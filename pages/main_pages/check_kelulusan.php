<?php
	
?>
<!DOCTYPE html>
<html>
<head>
	<link rel="stylesheet" type="text/css" href="css/main_style.css">
	<link rel="stylesheet" type="text/css" href="css/modify_style.css">
	<link rel="stylesheet" type="text/css" href="css/position_style.css">
	<title></title>
</head>
<body class='vertical_center horizontal_center'>
	<div class="padding_top_20">
		<table class="horizontal_center" width="40%" height="60%">
			<tr>
				<td>
					<form name='check_kelulusan' class='check_kelulusan' action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']); ?>" method='post'>
						<label for='<?php echo $check_kelulusan; ?>' class='text_upercase font_style_menu'>
							<?php echo "CHECK KELULUSAN SISWA"; ?>
						</label><br>
						<input type="submit" name="<?php echo $button_check_kelulusan_T; ?>" class='text_upercase button_style'
						value='Lulus'></input>
						<input type="submit" name="<?php echo $button_check_kelulusan_F; ?>" class='text_upercase button_style'
						value='Tidak Lulus'></input>
					</form>
				</td>
			</tr>
		</table>
	</div>
	<div name='test'>
	<table width="100%" border='0px' style='border: #ffffff 200px solid;'>
		<tr>
			<td width="5%"><p class='text_upercase'>no</p></td>
			<td width=*><p class='text_upercase'>nama</p></td>
			<td width="5%"><p class='text_upercase'>verifikasi</p></td>
			<td width="10%"><p class='text_upercase'>ubah</p></td>
		<tr>
		<?php
			echo $output_text1;
		?>
		</td>
	</table>	
	</div>
</body>
</html>