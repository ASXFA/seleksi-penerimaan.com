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
		<table>
			<td>
			<tr>
				<td class="clear_box" style='background-color: #F02; '>
					<tr><td><h3><?php echo(($_SESSION['username'])) ?></h3></td></tr>
				</td>
			</tr>
			<tr>
			<td><tr><td><img src='./../seleksi-penerimaan.com/img/users.jpg'style='min-width:20px; max-width: 40px;min-height: 20px; max-height: 40px;'></td><td><a href='./../seleksi-penerimaan.com/img/users.jpg' download>
					<button width='50px' height='20px' name='download'>DOWNLOAD</button></a></td></tr></td>
			</tr>
			<tr height='50px'>
			<tr>
			<td class="clear_box" style='background-color: #F02'>
				<tr><td><?php echo(("email: ")) ?></td><td><?php echo(($_SESSION['email'])) ?></td></tr>
				<tr><td><?php echo(("username: ")) ?></td><td><?php echo(($_SESSION['username'])) ?></td></tr>
				<tr><td><?php echo(("tanggal lahir: ")) ?></td><td><?php echo(($_SESSION['tanggal_lahir'])) ?></td></tr>
				<tr><td><?php echo(("nama depan: ")) ?></td><td><?php echo(($_SESSION['nama_depan'])) ?></td></tr>
				<tr><td><?php echo(("nama tengah: ")) ?></td><td><?php echo(($_SESSION['nama_tengah'])) ?></td></tr>
				<tr><td><?php echo(("nama belakang: "))?></td><td><?php echo(($_SESSION['nama_belakang'])) ?></td></tr>
				<tr><td><?php echo(("no telp: ")) ?></td><td><?php echo(($_SESSION['no_telp'])) ?></td></tr>
				
			</td>
			</tr>
			</td>
		</table>
	</div>
</body>
</html>