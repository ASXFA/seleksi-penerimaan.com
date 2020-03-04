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
		border-top: transparent 5px solid;">CHECK NISN</label>
	</div>
	<li class='margin_bottom_10 padding_top_20' width='50%' style='border: #FFFFFF 30px solid;'>
		<form name='check_nisn' class='check_nisn' action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']); ?>" method='post'>
			<label for='<?php echo $input_nisn; ?>' class='text_upercase font_style_menu'>
				<?php echo "NISN"; ?>
			</label>
			<input type="text" name="<?php echo $input_nisn; ?>" class=''></input>
			<input type="submit" name="<?php echo $button_check_nisn; ?>" class='text_upercase button_style'></input>
		</form>
	</li>
</body>
</html>