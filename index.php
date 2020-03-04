<!DOCTYPE html>
	<!--author: @Dwi Utomo Wicaksono
			original created for job-sheet lecture @universitas langlangbuana, Bandung, Indonesia
			@copyright @tanyawikoaja Januari, 2018
			lecturer: Jaya kuncara Rosa Susila, S.T., M.T.
			more information visit: https://www.w3schools.com-->
<html>
<head>
	<?php

		/* initObject */
		include ('./init/connection.php');

		/* initObject */
		include ('./init/initObject.php');

		/* tempObject */
		include ('./init/tempObject.php');

		/* sessionObject */
		include ('./init/sessionObject.php');

		/* functionObject */
		include ('./init/functionObject.php');

		/* actionObject */
		include ('./init/actionObject.php');

		/* procedureInit */
		include ('./init/procedureInit.php');
		// 
	?>
	<link rel="stylesheet" type="text/css" href="css/main_style.css">
	<link rel="stylesheet" type="text/css" href="css/modify_style.css">
	<link rel="stylesheet" type="text/css" href="css/position_style.css">
	<title>Index</title>
</head>
<body name='main_body' class='main_body' 
	style="
	background-image: url('img/background.jpg');
	background-position: initial;
	background-repeat: no-repeat;
	background-attachment: fixed;
	background-position: center;
	background-size: cover;
	position: absolute;
	top:0px;
	left:0px;
	width: 100%;
	height: 100%;
	">
	<div name='main_pages'
	class='
	main_pages
	horizontal_center
	margin_left_50
	margin_right_50
	margin_top_0
	margin_bottom_0
	padding_top_20
	padding_bottom_20
	transparent_09'>
		<div name='main_header'
		class='
		main_header
		horizontal_center
		margin_left_10
		margin_right_10
		margin_top_10
		margin_bottom_100
		transparent_08'>
			<table style="
				border-left: #FFFFFF 25px solid;
				border-right: #FFFFFF 25px solid;
				border-top: #FFFFFF 25px solid;
				border-radius: 20px 20px 0px 0px;">
			<tr>
				<td name='logo_header' 
				class='
				logo_header
				margin_left_10
				margin_right_10
				margin_top_10
				margin_bottom_10
				transparent_09
				'
				width='10%' height="*">
					<img class='logo_pasundan' src='img/logo.png'
					style="
					max-width: 100%;
					min-width: 100%;
					max-height: unset;
					min-height: unset;">
			 	</td>
			 	<td name='text_header'
			 	class='
			 	text_header
			 	margin_left_10
				margin_right_10
				margin_top_10
				margin_bottom_10
				vertical_top'
				width='80%'>
				<img class='text_header' src='img/text_header.png'
				style="
				max-width: 100%;
				min-width: 100%;
				max-height: unset;
				min-height: unset;">
				<h3 
				style='
				font-family: arial;'>Jl. Kenanga No.13, Rancaekek Wetan, Kec.Rancaekek, Bandung, Jawa Barat 40394</h3>

				</td>
			</tr>
			</table>	
			<div name='main_user'
			class='
			padding_top_60
			padding_bottom_60
			main_user
			vertical_top
			horizontal_left'>
				<div class=''>
					
				</div>
				<div class=''>
					
				</div>
			</div>
			<div name='main_menu'
			class='
			main_menu
			horizontal_center
			vertical_center
			transparent_09
			padding_bottom_60'
			style="border-bottom: #FFFFFF 25px solid;border-right: #FFFFFF 25px solid; padding-bottom: 100px;">
				<form name='section_page' class='section_page' action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']); ?>" method='post' style='border-bottom: #FFFFFF 100px solid;'>
					<ul type="none" class="font_style margin_top_20">
						<li class="<?php echo $menu1; ?> horizontal_left margin_right_40 padding_top_10 padding_bottom_10" width='20%'>
							<a href='index.php' class="font_style_menu">
								<button type="submit" name="<?php echo $menu1; ?>" class='button_clear'><?php echo $tampil_menu1; ?></button>
							</a>
						</li>
						<li class="<?php echo $menu2; ?> horizontal_left check_user margin_left_40 margin_right_40 padding_top_10 padding_bottom_10" width='20%'>
							<a href='index.php' class="font_style_menu">
								<button type="submit" name="<?php echo $menu2; ?>" class='button_clear'><?php echo $tampil_menu2; ?></button>
							</a>
						</li>
						<li class="<?php echo $menu3; ?> horizontal_left margin_left_40 margin_right_40 padding_top_10 padding_bottom_10" width='20%'
						style='display: none;'>
							<a href='index.php' class="font_style_menu">
								<button type="submit" name="<?php echo $menu3; ?>" class='button_clear'><?php echo $tampil_menu3; ?></button>
							</a>
						</li>
						<li class="<?php echo $menu3; ?> horizontal_left margin_left_40 margin_right_40 padding_top_10 padding_bottom_10" width='20%'>
							<a href='index.php' class="font_style_menu">
								<button type="submit" name="<?php echo $menu5; ?>" class='button_clear'><?php echo $tampil_menu5; ?></button>
							</a>
						</li>

						<li class="<?php echo $menu6 ?> horizontal_left margin_left_40 margin_right_40 padding_top_10 padding_bottom_10" width='20%'>
							<a href='index.php' class="<?php echo $menu6 ?> font_style_menu">
								<button type="submit" name="<?php echo $menu6; ?>" class='button_clear'><?php echo $tampil_menu6; ?></button>
							</a>
						</li>

						<li class="<?php echo $menu7 ?> check_user horizontal_left margin_left_40 margin_right_40 padding_top_10 padding_bottom_10" width='20%'>
							<a href='index.php' class="<?php echo $menu7 ?> font_style_menu">
								<button type="submit" name="<?php echo $menu7; ?>" class='button_clear'><?php echo $tampil_menu7; ?></button>
							</a>
						</li>

						<li class="horizontal_left item_hidden" width='*'>
							
						</li>
						<li class="horizontal_right padding_right_0 padding_left_0 padding_top_10 padding_bottom_10" width='20%'>
							<a href='admin/index.php' class="font_style_menu"> LOGIN </a>
							<ul class="check_user clear_padding">
								<li class="<?php echo $sub_menu4_1; ?> vertical_top check_user no_border clear_padding clear_margin">
									<a href="index.php">
										<button type="submit" name="<?php echo $sub_menu4_1; ?>" class='button_clear'>
											<?php echo $tampil_sub_menu4_1; ?>
										</button>
									</a>
								</li>
								<li class="vertical_top check_user no_border clear_padding clear_margin">
									<a href="<?php echo 'pages/main_pages/'.$sub_menu4_2.'.php'; ?>">
										<label type="submit" name="<?php echo $sub_menu4_2; ?>" class='button_clear'>
											<?php echo $tampil_sub_menu4_2; ?>
										</label>
									</a>
								</li>
							</ul>
						</li>
					</ul>
				</form>
			</div>
		</div>
		<div name='slider' class='slider clear_box margin_bottom_40 clear_transparent'>
			<?php
				if($check_user==htmlspecialchars('true')){

				}else{

					include ('slider.php');

				}
			?>
		</div>
		<div name='main_content'
		class='
		main_content
		horizontal_center
		margin_left_10
		margin_right_10
		margin_top_40
		margin_bottom_10
		transparent_09'
		style='background-color: #FFFFFF;'>
			<?php
			/* actionHandler */
			include ('./init/actionHandler.php');
			?>
			<p class='margin_top_10 margin_bottom_40' style='border-top: 10px #FFF solid;'></p>
			<?php
				$output_text=htmlspecialchars('');
				$location=htmlspecialchars('./temp/section_page.txt');
				list($output_text)=readFiles($location, $output_text);
				$_SESSION['section_page']=$output_text;
				$section_page= $_SESSION['section_page'];
				include("$section_page");
			?>
		</div>
		<div name='main_footer' 
		class='
		main_footer 
		horizontal_center 
		margin_left_10 
		margin_right_10 
		margin_top_10 
		margin_bottom_10
		transparent_08'
		>
		<table width='100%' height='*'>
			<tr width='100%' height='*'>
				<td width='50%' height='*'>
					<div id="comments" class="comments-area">
						<div id="respond" class="comment-respond">
							<h3 id="reply-title" class="text_upercase">Leave a Reply <small><a rel="nofollow" id="cancel-comment-reply-link" href="/2019/09/12/seni-islami-hadrah-punya-kita/#respond" style="display:none;">Cancel reply</a></small></h3><form action="https://smkpasundanrancaekek.sch.id/wp-comments-post.php" method="post" id="commentform" class="comment-form" novalidate=""><p class="comment-notes"><span id="email-notes">Your email address will not be published.</span> Required fields are marked <span class="required">*</span></p><p class="comment-form-comment"><label for="comment">Comment</label> <textarea id="comment" name="comment" cols="45" rows="8" maxlength="65525" required="required"></textarea></p><p class="comment-form-author"><label for="author">Name <span class="required">*</span></label> <input id="author" name="author" type="text" value="" size="30" maxlength="245" required="required"></p>
							<p class="comment-form-email"><label for="email">Email <span class="required">*</span></label> <input id="email" name="email" type="email" value="" size="30" maxlength="100" aria-describedby="email-notes" required="required"></p>
							<p class="comment-form-url"><label for="url">Website</label> <input id="url" name="url" type="url" value="" size="30" maxlength="200"></p>
							<p class="comment-form-cookies-consent"><input id="wp-comment-cookies-consent" name="wp-comment-cookies-consent" type="checkbox" value="yes"> <label for="wp-comment-cookies-consent">Save my name, email, and website in this browser for the next time I comment.</label></p>
							<p class="form-submit"><input name="submit" type="submit" id="submit" class="submit" value="Post Comment"> <input type="hidden" name="comment_post_ID" value="213" id="comment_post_ID">
							<input type="hidden" name="comment_parent" id="comment_parent" value="0">
							</p></form>	
						</div><!-- #respond -->
						
					</div>
				</td>
				<td class='clear_transparent' width='50%' height='*' style="border: #FFFFFF 50px solid;">
					<div class="horizontal_left">
								  <div class="" style="">
									  <div class="" style="">
									  	<li style="list-style-type: none;"><b>IKUTI KAMI DI</b></li>
									  	<li style="list-style-type: none;border-left: #FFFFFF 50px solid;"><a href="#">Youtube</a></li>
									  	<li style="list-style-type: none;border-left: #FFFFFF 50px solid;"><a href="#">Facebook</a></li>
									  	<li style="list-style-type: none;border-left: #FFFFFF 50px solid;"><a href="#">Twitter</a></li>
									  	<li style="list-style-type: none;border-left: #FFFFFF 50px solid;">Contact Info</li>
									  </div>
								  </div>
								   <div class="" style="">
									  <div class="" style="">
									  	<li style="list-style-type: none"><b>INFORMASI</b></li>
									  	<li style="list-style-type: none;border-left: #FFFFFF 50px solid;">Phone: 000 000 0000 </li>
									  	<li style="list-style-type: none;border-left: #FFFFFF 50px solid;">Fax: 000 000 0000</li>
									  	<li style="list-style-type: none;border-left: #FFFFFF 50px solid;"><a href="mailto:kita@seleksi-penerimaan.com">Email: kita@seleksi-penerimaan.com</a></li>
									  	<li style="list-style-type: none;border-left: #FFFFFF 50px solid;"><a href="#">kita@seleksi-penerimaan.com</a></li>
									  </div>
								  </div>
							</div>
				</td>
				
			</tr>
		</table>
		</div>
	</div>
</body>
</html>
