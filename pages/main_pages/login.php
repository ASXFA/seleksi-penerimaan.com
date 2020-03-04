<?php 
	if($_SESSION['check_user']==true){
		$input_text=htmlspecialchars('pages/main_pages/'.$menu1.'.php');
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
<body class='login_body'>
	<div name='login_box' class='login_box vertical_center horizontal_center' style="border: #FFFFFF 30px solid;">
		<div name='login_box_header' class='login_box_header clear_transparent' style="border: transparent 5px solid;">
			<label for='login_user' class='text_upercase font_style_menu'><?php echo $header_login ?></label>
		</div>
		<div name='login_box_content' class='login_box_content'>
			<form name='login_user' class='login_user' action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']); ?>" method='post'>
					<ul type='none' class="font_style margin_top_20">
						<li class='margin_bottom_10 padding_top_20' width='20%'>
							<label for='<?php echo $content_login1; ?>' class='text_upercase font_style_menu'>
								<?php echo $content_login1.": &nbsp;&nbsp;"; ?></label>
							<input type="text" name="<?php echo $content_login1; ?>" class=''></input>
						</li>
						<li class='margin_bottom_20 padding_bottom_20' width='20%'>
							<label for='<?php echo $content_login2; ?>' class='text_upercase font_style_menu'>
								<?php echo $content_login2.": &nbsp;&nbsp;"; ?></label>
							<input type="password" name="<?php echo $content_login2; ?>" class='text_upercase'></input>
						</li>
						<li class='horizontal_right margin_right_20' width='20%'>
							<input type="submit" name="<?php echo $content_login3; ?>" class='text_upercase button_style'></input>
						</li>
					</ul>
				</form>
				</p>
		</div>
		
	</div>
</body>
</html>