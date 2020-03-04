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
	<ul type='none'>
	<div name='login_box_header' class='' style="border: transparent 5px solid;">
		<label for='login_user' class='login_box_header clear_transparent text_upercase font_style_menu'
		style="
		border-left: transparent 200px solid;
		border-right: transparent 200px solid;
		border-bottom : transparent 5px solid;
		border-top: transparent 5px solid;">LOGIN</label>
	</div>
	<li class='margin_bottom_10 padding_top_20' width='50%' style='border: #FFFFFF 30px solid;'>
		<form class='check_nisn' action="pages/main_pages/checkLoginPeserta.php" method='post'>
			<table width='30%' class="horizontal_center">
				<tr>
					<td width="10%">
						<label for='<?php echo $input_nisn; ?>' class='text_upercase font_style_menu horizontal_left'>
							<?php echo "NISN"; ?>
						</label>
					</td>
					<td width="*">
						<input type="text" name="nisn" class=''></input>
					</td>
				</tr>
				<tr>
					<td>
						<label for='<?php echo $input_password; ?>' class='text_upercase font_style_menu horizontal_left'>
							<?php echo "PASSWORD"; ?>
						</label>
					</td>
					<td>
						<input type="password" name="pass" class=''></input>
					</td>
				</tr>
				<tr>
					<td></td>
					<td style='border-top: transparent 40px solid;'>
						<input type="submit" name="loginPeserta" value="login" class='text_upercase button_style horizontal_center'></input>
					</td>
				</tr>
			</table>			
		</form>
	</li>
</body>
</html>