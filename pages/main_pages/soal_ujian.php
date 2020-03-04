<?php 
	include '../../admin/connect.php';
	session_start();
	$nisn = $_SESSION['nisn'];
	$data = mysqli_query($conn, "SELECT * FROM pendaftaran WHERE nisn='$nisn'");

?>
<!DOCTYPE html>
<html>
<head>
	<link rel="stylesheet" type="text/css" href="css/main_style.css">
	<link rel="stylesheet" type="text/css" href="css/modify_style.css">
	<link rel="stylesheet" type="text/css" href="css/position_style.css">
	<title></title>
</head>
<body  class='vertical_center horizontal_center' style="">
	<?php

	?>
	<table border="0px" width="100%" height="100%" style="display: inline-table;">
		<tr>
			<td width="70%" height='400px' style="overflow:scroll; max-height:600px;min-height:600px;">
			</td>
			<td width="30%" class="vertical_top">
				<table width="100%" class="vertical_top">
					<?php 
						while($row = mysqli_fetch_assoc($data)){
					?>
					<tr>
						<td width="30%" class="horizontal_left text_bolder">ID_PESERTA</td>
						<td width="30%" class="horizontal_left button_style" style="border-radius: 50px 50px 50px 50px;">
							<?php echo ''.$row['id_peserta']; ?>
						</td>
					</tr>
					<tr>
						<td width="30%" class=" horizontal_left text_bolder">NISN</td>
						<td width="30%" class="button_style horizontal_left" style="border-radius: 50px 50px 50px 50px;"><?php echo ''.$row['nisn']; ?></td>
					</tr>
					<tr>
						<td width="30%" class="horizontal_left text_bolder	">NAMA</td>
						<td width="30%" class="button_style horizontal_left" style="border-radius: 50px 50px 50px 50px;"><?php echo ''.$row['nama']; ?></td>
					</tr>
						<?php } ?>
				</table>
			</td>
		</tr>
		<tr>
			<td>
				<table width='100%'>
					<tr width='100%'>
						<td width='10%' class="text_upercase button_style" style="font-size: 15px;
						border: #FFFFFF 10px solid; border-radius: 50px 50px 50px 50px;"><p>A</p></td>
						<td width='10%' class="text_upercase button_style" style="font-size: 15px;
						border: #FFFFFF 10px solid; border-radius: 50px 50px 50px 50px;"><p>B</p></td>
						<td width='10%' class="text_upercase button_style" style="font-size: 15px;
						border: #FFFFFF 10px solid; border-radius: 50px 50px 50px 50px;"><p>C</p></td>
						<td width='10%' class="text_upercase button_style" style="font-size: 15px;
						border: #FFFFFF 10px solid; border-radius: 50px 50px 50px 50px;"><p>D</p></td>
						<td width='10%' class="text_upercase button_style" style="font-size: 15px;
						border: #FFFFFF 10px solid; border-radius: 50px 50px 50px 50px;"><p>E</p></td>
					</tr>
				</table>
			</td>
			<td>
				<table width='100%'>
					<tr width='100%'>
						<td width='50%' class="button_style" style="font-size: 10px;
						border: #FFFFFF 10px solid; border-radius: 50px 50px 50px 50px;">
							NEXT
						</td>
					</tr>
					<tr>
						<td width='50%' class="button_style"style="font-size: 10px;
						border: #FFFFFF 10px solid; border-radius: 50px 50px 50px 50px;">
							PREVIOUS
						</td>
					</tr>
				</table>
			</td>
		</tr>
	</table>
</body>
</html>
