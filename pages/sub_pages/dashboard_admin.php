<!DOCTYPE html>
<html>
<head>
	<link rel="stylesheet" type="text/css" href="css/main_style.css">
	<link rel="stylesheet" type="text/css" href="css/modify_style.css">
	<link rel="stylesheet" type="text/css" href="css/position_style.css">
	<title></title>
</head>
<body class="profile_body">
	<div name='data_box' class='vertical_center horizontal_center'>
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
				<tr><td class="horizontal_left text_bolder"><?php echo(("Admin Username: ")) ?></td>
					<td class="" style='
				 	background-color: #FFFFFF;
				 	border: #95b8ff 2px solid;
				 	border-radius: 5px 5px 5px 5px;
				 	padding-bottom: 5px;
				 	padding-top: 5px;
				 	padding-right: 20px;
				 	padding-left: 20px;
				 	opacity: 0.7;
				 	'><?php echo(($_SESSION['username'])) ?></td></tr>
				<tr>
				<tr><td class="horizontal_left text_bolder"><?php echo(("Admin ID: ")) ?></td>
					<td class="" style='
				 	background-color: #FFFFFF;
				 	border: #95b8ff 2px solid;
				 	border-radius: 5px 5px 5px 5px;
				 	padding-bottom: 5px;
				 	padding-top: 5px;
				 	padding-right: 20px;
				 	padding-left: 20px;
				 	opacity: 0.7;
				 	'><?php echo(($_SESSION['id_admin'])) ?></td></tr>
				<tr>
			</td>
			</tr>
			</td>
		</table>
	</div>
</body>
</html>