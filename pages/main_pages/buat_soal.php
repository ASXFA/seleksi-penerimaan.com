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
<body  class='vertical_center horizontal_center' style="">
	<form name='check_nisn' class='check_nisn' action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']); ?>" method='post'>
	<table border="0px" width="100%" height="100%" style="display: inline-table;">
		<tr>
			<td width="70%" height='400px' style="overflow:scroll; max-height:600px;min-height:600px;">

				<textarea nama='input_soal' class='vertical_top' width="100%" style="
					width: 800px;
					min-width: 800px;
					max-width: 800px;
					height: 300px;
					max-height: 300px;
					max-height: 300px;"
				></textarea>
			</td>
			<td width="30%" class="vertical_top">
				<table width="100%" class="vertical_top">
					<tr>
						<td width="30%" class=" horizontal_left text_bolder">USERNAME</td>
						<td width="30%" class="button_style horizontal_left" style="border-radius: 50px 50px 50px 50px;"><?php echo ''.$_SESSION['username']; ?></td>
					</tr>
				</table>
			</td>
		</tr>
		<tr>
			<td>
				<table width='100%'>
					<tr width='100%'>
						<td width='10%' class="text_upercase button_style" style="font-size: 15px;
						border: #FFFFFF 10px solid; border-radius: 50px 50px 50px 50px;"><p>
							<button class="button_style" type="submit" name=choice_A>A</button></p></td>
						<td width='10%' class="text_upercase button_style" style="font-size: 15px;
						border: #FFFFFF 10px solid; border-radius: 50px 50px 50px 50px;"><p>
							<button class="button_style" type="submit" name=choice_B>B</button></p></td>
						<td width='10%' class="text_upercase button_style" style="font-size: 15px;
						border: #FFFFFF 10px solid; border-radius: 50px 50px 50px 50px;"><p>
							<button class="button_style" type="submit" name=choice_C>C</button></p></td>
						<td width='10%' class="text_upercase button_style" style="font-size: 15px;
						border: #FFFFFF 10px solid; border-radius: 50px 50px 50px 50px;"><p>
							<button class="button_style" type="submit" name=choice_D>D</button></p></td>
						<td width='10%' class="text_upercase button_style" style="font-size: 15px;
						border: #FFFFFF 10px solid; border-radius: 50px 50px 50px 50px;"><p>
							<button class="button_style" type="submit" name=choice_E>E</button></p></td>
					</tr>
				</table>
			</td>
			<td>
				<table width='100%'>
					<tr width='100%'>

						<td width='50%' class="button_style" style="font-size: 10px;
						border: #FFFFFF 10px solid; border-radius: 50px 50px 50px 50px;">
							<button class="button_style" type="submit" name='button_save'>SAVE</button>
						</td>
					</tr>
				</table>
			</td>
		</tr>
	</table>
	</form>
</body>
</html>