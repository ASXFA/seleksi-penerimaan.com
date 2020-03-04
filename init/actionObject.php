<?php
// actionObject

	/*action:$section_page*/
		$actionOnClick_menu1=isset($_POST[htmlspecialchars($menu1)]);
		$actionOnClick_menu2=isset($_POST[htmlspecialchars($menu2)]);
		$actionOnClick_menu3=isset($_POST[htmlspecialchars($menu3)]);
		$actionOnClick_menu4=isset($_POST[htmlspecialchars($menu4)]);
		$actionOnClick_menu5=isset($_POST[htmlspecialchars($menu5)]);
		$actionOnClick_menu6=isset($_POST[htmlspecialchars($menu6)]);
		$actionOnClick_menu7=isset($_POST[htmlspecialchars($menu7)]);
		$actionOnClick_sub_menu4_1=isset($_POST[htmlspecialchars($sub_menu4_1)]);
		$actionOnClick_sub_menu4_2=isset($_POST[htmlspecialchars($sub_menu4_2)]);
		$actionOnClick_login_submit=(isset($_POST[$content_login3]));
		$actionOnClick_input_nisn=(isset($_POST[$input_nisn]));
		$actionOnClick_button_check_nisn=(isset($_POST[$button_check_nisn]));
		$actionOnClick_pendaftaran_siswa=(isset($_POST[$pendaftaran_siswa]));
		$actionOnClick_button_check_kelulusan_T=(isset($_POST[$button_check_kelulusan_T]));
		$actionOnClick_button_check_kelulusan_F=(isset($_POST[$button_check_kelulusan_F]));
		$actionOnClick_ubah_kelulusan_T=(isset($_POST[$ubah_kelulusan_T]));
		$actionOnClick_ubah_kelulusan_F=(isset($_POST[$ubah_kelulusan_F]));
		$actionOnClick_button_seleksi=(isset($_POST[$button_seleksi]));
		$actionOnClick_choice_A=(isset($_POST[$choice_A]));
		$actionOnClick_choice_B=(isset($_POST[$choice_B]));
		$actionOnClick_choice_C=(isset($_POST[$choice_C]));
		$actionOnClick_choice_D=(isset($_POST[$choice_D]));
		$actionOnClick_choice_E=(isset($_POST[$choice_E]));
		$actionOnClick_choice_button_save=(isset($_POST[$button_save]));


		$choice_A=htmlspecialchars('choice_A');
		$choice_B=htmlspecialchars('choice_B');
		$choice_C=htmlspecialchars('choice_C');
		$choice_D=htmlspecialchars('choice_D');
		$choice_E=htmlspecialchars('choice_E');
		$button_save=htmlspecialchars('button_save');
?>