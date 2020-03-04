<?php
	/* if_OnClick: tempObject. $section_page: $menu1 */
	if($actionOnClick_menu1){
		$input_text=htmlspecialchars('pages/main_pages/'.$menu1.'.php');
		$_SESSION['section_page'] =htmlspecialchars('$input_text');
		$location=htmlspecialchars('./temp/section_page.txt');
		overwriteFiles($location, $input_text);
		list($output_text)=readFiles($location, $output_text);
		// header('location: ./index.php');
	}

	/* if_OnClick: tempObject. $section_page: $menu2 */
	if($actionOnClick_menu2){
		$input_text=htmlspecialchars('pages/main_pages/'.$menu2.'.php');
		$_SESSION['section_page'] =htmlspecialchars('$input_text');
		$location=htmlspecialchars('./temp/section_page.txt');
		overwriteFiles($location, $input_text);
		list($output_text)=readFiles($location, $output_text);
		// header('location: ./index.php');
	}

	/* if_OnClick: tempObject. $section_page: $menu3 */
	if($actionOnClick_menu3){
		$input_text=htmlspecialchars('pages/main_pages/'.$menu3.'.php');
		$_SESSION['section_page'] =htmlspecialchars('$input_text');
		$location=htmlspecialchars('./temp/section_page.txt');
		overwriteFiles($location, $input_text);
		list($output_text)=readFiles($location, $output_text);
		// header('location: ./index.php');
	}

	/* if_OnClick: tempObject. $section_page: $menu4 */
	if($actionOnClick_menu4){
		$input_text=htmlspecialchars('pages/main_pages/'.$menu4.'.php');
		$_SESSION['section_page'] =htmlspecialchars('$input_text');
		$location=htmlspecialchars('./temp/section_page.txt');
		overwriteFiles($location, $input_text);
		list($output_text)=readFiles($location, $output_text);
		// header('location: ./index.php');
	}

	/* if_OnClick: tempObject. $section_page: $menu5 */
	if($actionOnClick_menu5){
		$input_text=htmlspecialchars('pages/main_pages/'.$menu5.'.php');
		$_SESSION['section_page'] =htmlspecialchars('$input_text');
		$location=htmlspecialchars('./temp/section_page.txt');
		overwriteFiles($location, $input_text);
		list($output_text)=readFiles($location, $output_text);
		// header('location: ./index.php');
	}

	if($actionOnClick_menu6){
		$input_text=htmlspecialchars('pages/main_pages/'.$menu6.'.php');
		$_SESSION['section_page'] =htmlspecialchars('$input_text');
		$location=htmlspecialchars('./temp/section_page.txt');
		overwriteFiles($location, $input_text);
		list($output_text)=readFiles($location, $output_text);
		// header('location: ./index.php');
	}

	if($actionOnClick_menu7){
		$input_text=htmlspecialchars('pages/main_pages/'.$menu7.'.php');
		$_SESSION['section_page'] =htmlspecialchars('$input_text');
		$location=htmlspecialchars('./temp/section_page.txt');
		overwriteFiles($location, $input_text);
		list($output_text)=readFiles($location, $output_text);
		// header('location: ./index.php');
	}

	/* if_OnClick: tempObject. $section_page: $sub_menu4_1 */
	if($actionOnClick_sub_menu4_1){
		$input_text=htmlspecialchars('pages/sub_pages/'.$sub_menu4_1.'.php');
		$_SESSION['section_page'] =htmlspecialchars('$input_text');
		$location=htmlspecialchars('./temp/section_page.txt');
		overwriteFiles($location, $input_text);
		list($output_text)=readFiles($location, $output_text);
		// header('location: ./index.php');
	}

	/* if_OnClick: tempObject. $section_page: $sub_menu4_1 */
	if($actionOnClick_input_nisn){
		
	}

	if($actionOnClick_button_seleksi){
		    $nisn = trim($_POST[$input_nisn]);
		    $nisn = htmlspecialchars(strip_tags($nisn));

		    $password = trim($_POST[$input_password]);
		    $password = htmlspecialchars(strip_tags($password));

		    if(empty($nisn)){
		    	echo ("<br>"."[ERROR: nisn cannot empty]");
		    	$error=true;
		    }

		    elseif(empty($password)){
		    	echo ("<br>"."[ERROR: password cannot empty]");
		    	$error=true;
		    }else{
		    	// function checkLogin($sqlDatabase, $sqlTable, $nisn, $password);
		    	

		    	$sqlTable=htmlspecialchars('pendaftaran');
		    	// $selectColumn=htmlspecialchars('nama');
		    	$filterColumn=htmlspecialchars('nisn');
		    	$filterData=htmlspecialchars($_POST[$input_nisn]);
		    	$output_text=htmlspecialchars('');

		    	list($output_array1)=filterSelect_1(
		    		$conn,
		    		htmlspecialchars('pendaftaran'),
		    		htmlspecialchars('id_peserta'),
		    		htmlspecialchars('nisn'),
		    		htmlspecialchars($_POST[$input_nisn]),
		    		$output_array1);

		    	list($output_array2)=filterSelect_1(
		    		$conn,
		    		htmlspecialchars('pendaftaran'),
		    		htmlspecialchars('nisn'),
		    		htmlspecialchars('nisn'),
		    		htmlspecialchars($_POST[$input_nisn]),
		    		$output_array2);
		    	
		    	list($output_array3)=filterSelect_1(
		    		$conn,
		    		htmlspecialchars('pendaftaran'),
		    		htmlspecialchars('nama'),
		    		htmlspecialchars('nisn'),
		    		htmlspecialchars($_POST[$input_nisn]),
		    		$output_array3);
		    	
		    	list($output_array4)=filterSelect_1(
		    		$conn,
		    		htmlspecialchars('pendaftaran'),
		    		htmlspecialchars('tempat_lahir'),
		    		htmlspecialchars('nisn'),
		    		htmlspecialchars($_POST[$input_nisn]),
		    		$output_array4);

		    	list($output_array5)=filterSelect_1(
		    		$conn,
		    		htmlspecialchars('pendaftaran'),
		    		htmlspecialchars('tanggal_lahir'),
		    		htmlspecialchars('nisn'),
		    		htmlspecialchars($_POST[$input_nisn]),
		    		$output_array5);

		    	list($output_array6)=filterSelect_1(
		    		$conn,
		    		htmlspecialchars('pendaftaran'),
		    		htmlspecialchars('alamat'),
		    		htmlspecialchars('nisn'),
		    		htmlspecialchars($_POST[$input_nisn]),
		    		$output_array6);

		    	list($output_array7)=filterSelect_1(
		    		$conn,
		    		htmlspecialchars('pendaftaran'),
		    		htmlspecialchars('nama_ortu'),
		    		htmlspecialchars('nisn'),
		    		htmlspecialchars($_POST[$input_nisn]),
		    		$output_array7);

		    	list($output_array8)=filterSelect_1(
		    		$conn,
		    		htmlspecialchars('pendaftaran'),
		    		htmlspecialchars('pendidikan_ortu'),
		    		htmlspecialchars('nisn'),
		    		htmlspecialchars($_POST[$input_nisn]),
		    		$output_array8);

		    	list($output_array9)=filterSelect_1(
		    		$conn,
		    		htmlspecialchars('pendaftaran'),
		    		htmlspecialchars('pekerjaan_ortu'),
		    		htmlspecialchars('nisn'),
		    		htmlspecialchars($_POST[$input_nisn]),
		    		$output_array9);

		    	list($output_array10)=filterSelect_1(
		    		$conn,
		    		htmlspecialchars('pendaftaran'),
		    		htmlspecialchars('penghasilan_ortu'),
		    		htmlspecialchars('nisn'),
		    		htmlspecialchars($_POST[$input_nisn]),
		    		$output_array10);

		    	list($output_array11)=filterSelect_1(
		    		$conn,
		    		htmlspecialchars('pendaftaran'),
		    		htmlspecialchars('no_telp'),
		    		htmlspecialchars('nisn'),
		    		htmlspecialchars($_POST[$input_nisn]),
		    		$output_array11);

		    	list($output_array12)=filterSelect_1(
		    		$conn,
		    		htmlspecialchars('pendaftaran'),
		    		htmlspecialchars('nilai_ipa'),
		    		htmlspecialchars('nisn'),
		    		htmlspecialchars($_POST[$input_nisn]),
		    		$output_array12);

		    	list($output_array13)=filterSelect_1(
		    		$conn,
		    		htmlspecialchars('pendaftaran'),
		    		htmlspecialchars('nilai_matematika'),
		    		htmlspecialchars('nisn'),
		    		htmlspecialchars($_POST[$input_nisn]),
		    		$output_array13);

		    	list($output_array14)=filterSelect_1(
		    		$conn,
		    		htmlspecialchars('pendaftaran'),
		    		htmlspecialchars('nilai_bhs_indo'),
		    		htmlspecialchars('nisn'),
		    		htmlspecialchars($_POST[$input_nisn]),
		    		$output_array14);

		    	list($output_array15)=filterSelect_1(
		    		$conn,
		    		htmlspecialchars('pendaftaran'),
		    		htmlspecialchars('nilai_bhs_inggris'),
		    		htmlspecialchars('nisn'),
		    		htmlspecialchars($_POST[$input_nisn]),
		    		$output_array15);

		    	list($output_array16)=filterSelect_1(
		    		$conn,
		    		htmlspecialchars('pendaftaran'),
		    		htmlspecialchars('password'),
		    		htmlspecialchars('nisn'),
		    		htmlspecialchars($_POST[$input_nisn]),
		    		$output_array16);

		    	list($output_array17)=filterSelect_1(
		    		$conn,
		    		htmlspecialchars('pendaftaran'),
		    		htmlspecialchars('verifikasi'),
		    		htmlspecialchars('nisn'),
		    		htmlspecialchars($_POST[$input_nisn]),
		    		$output_array17);


		    		$count_arrays=count($output_array1);

		    		$i=0;

		    		while ($i<$count_arrays) {
		    			$output_text1.=htmlspecialchars($output_array1[$i]);
		    			$output_text2.=htmlspecialchars($output_array2[$i]);
		    			$output_text3.=htmlspecialchars($output_array3[$i]);
		    			$output_text4.=htmlspecialchars($output_array4[$i]);
		    			$output_text5.=htmlspecialchars($output_array5[$i]);
		    			$output_text6.=htmlspecialchars($output_array6[$i]);
		    			$output_text7.=htmlspecialchars($output_array7[$i]);
		    			$output_text8.=htmlspecialchars($output_array8[$i]);
		    			$output_text9.=htmlspecialchars($output_array9[$i]);
		    			$output_text10.=htmlspecialchars($output_array10[$i]);
		    			$output_text11.=htmlspecialchars($output_array11[$i]);
		    			$output_text12.=htmlspecialchars($output_array12[$i]);
		    			$output_text13.=htmlspecialchars($output_array13[$i]);
		    			$output_text14.=htmlspecialchars($output_array14[$i]);
		    			$output_text15.=htmlspecialchars($output_array15[$i]);
		    			$output_text16.=htmlspecialchars($output_array16[$i]);
		    			$output_text17.=htmlspecialchars($output_array17[$i]);
		    			$i++;
		    		}

		    		$_SESSION['id_peserta']=htmlspecialchars($output_text1);
		    		$_SESSION['nisn']=htmlspecialchars($output_text2);
		    		$_SESSION['nama']=htmlspecialchars($output_text3);
		    		$_SESSION['tempat_lahir']=htmlspecialchars($output_text4);
		    		$_SESSION['tanggal_lahir']=htmlspecialchars($output_text5);
		    		$_SESSION['alamat']=htmlspecialchars($output_text6);
		    		$_SESSION['nama_ortu']=htmlspecialchars($output_text7);
		    		$_SESSION['pendidikan_ortu']=htmlspecialchars($output_text8);
		    		$_SESSION['pekerjaan_ortu']=htmlspecialchars($output_text9);
		    		$_SESSION['penghasilan_ortu']=htmlspecialchars($output_text10);
		    		$_SESSION['no_telp']=htmlspecialchars($output_text11);
		    		$_SESSION['nilai_ipa']=htmlspecialchars($output_text12);
		    		$_SESSION['nilai_matematika']=htmlspecialchars($output_text13);
		    		$_SESSION['nilai_bhs_indo']=htmlspecialchars($output_text14);
		    		$_SESSION['nilai_bhs_inggris']=htmlspecialchars($output_text15);
		    		$_SESSION['verifikasi']=htmlspecialchars($output_text17);

		    		$id_peserta=htmlspecialchars($output_text1);
		    		$nisn=htmlspecialchars($output_text2);
		    		$nama=htmlspecialchars($output_text3);
		    		$tempat_lahir=htmlspecialchars($output_text4);
		    		$tanggal_lahir=htmlspecialchars($output_text5);
		    		$alamat=htmlspecialchars($output_text6);
		    		$nama_ortu=htmlspecialchars($output_text7);
		    		$pendidikan_ortu=htmlspecialchars($output_text8);
		    		$pekerjaan_ortu=htmlspecialchars($output_text9);
		    		$penghasilan_ortu=htmlspecialchars($output_text10);
		    		$no_telp=htmlspecialchars($output_text11);
		    		$nilai_ipa=htmlspecialchars($output_text12);
		    		$nilai_matematika=htmlspecialchars($output_text13);
		    		$nilai_bhs_indo=htmlspecialchars($output_text14);
		    		$nilai_bhs_inggris=htmlspecialchars($output_text15);
		    		$verifikasi=htmlspecialchars($output_text17);


		    	if($_POST[$input_password]==$output_text16){
		    		
		    		$_SESSION['check_user']=htmlspecialchars('true');
		    		$_SESSION['siswa']=htmlspecialchars('true');

    		    	$location=htmlspecialchars('./temp/check_user.txt');
    				overwriteFiles($location, htmlspecialchars('true'));
    				$input_text=htmlspecialchars('pages/main_pages/'.'soal_ujian'.'.php');
    				$_SESSION['section_page'] =htmlspecialchars('$input_text');
    				$location=htmlspecialchars('./temp/section_page.txt');
    				overwriteFiles($location, $input_text);
    				list($output_text)=readFiles($location, $output_text);
    				echo '<script>window.location="./index.php"</script>';
    				//header('location: ./index.php');
		    	}else{
		    		echo ("<br>"."[ERROR: invalid password] ::".$_POST[$input_nisn]);
		    		$error=true;
		    	}
		    	
			}
	}

	if($actionOnClick_pendaftaran_siswa){


		$table_name='pendaftaran';
		$table_values=0;
		list($table_values)=$get_table_values=get_table_values(
			$table_name,
			$table_values);
		$table_values=$table_values+1;

		$col1=$table_values; 
		$col2=$_POST['nisn']; 
		$col3=$_POST['password']; 
		$col4=$_POST['nama']; 
		$col5=$_POST['tempat_lahir'];
		$col6=$_POST['tanggal_lahir']; 
		$col7=$_POST['alamat']; 
		$col8=$_POST['nama_ortu']; 
		$col9=$_POST['pendidikan_ortu']; 
		$col10=$_POST['pekerjaan_ortu'];
		$col11=$_POST['penghasilan_ortu']; 
		$col12=$_POST['no_telp']; 
		$col13=$_POST['nilai_ipa']; 
		$col14=$_POST['nilai_matematika']; 
		$col15=$_POST['nilai_bhs_indo'];
		$col16=$_POST['nilai_bhs_inggris'];
		insert_values_pendaftaran(
		$col1, 
		$col2, 
		$col3, 
		$col4, 
		$col5,
		$col6, 
		$col7, 
		$col8, 
		$col9, 
		$col10,
		$col11, 
		$col12, 
		$col13, 
		$col14, 
		$col15,
		$col16);
	}

	if($actionOnClick_button_check_nisn){

		list($output_text)=printArray_table($input_array, $output_text);
		echo $output_text;

		$sqlTable=htmlspecialchars('pendaftaran');
		// $selectColumn=htmlspecialchars('nama');
		$filterColumn=htmlspecialchars('nisn');
		$filterData=htmlspecialchars($_POST[$input_nisn]);
		$output_text=htmlspecialchars('');

		list($output_array1)=filterSelect_1(
			$conn,
			htmlspecialchars('pendaftaran'),
			htmlspecialchars('id_peserta'),
			htmlspecialchars('nisn'),
			htmlspecialchars($_POST[$input_nisn]),
			$output_array1);

		list($output_array2)=filterSelect_1(
			$conn,
			htmlspecialchars('pendaftaran'),
			htmlspecialchars('nisn'),
			htmlspecialchars('nisn'),
			htmlspecialchars($_POST[$input_nisn]),
			$output_array2);
		
		list($output_array3)=filterSelect_1(
			$conn,
			htmlspecialchars('pendaftaran'),
			htmlspecialchars('nama'),
			htmlspecialchars('nisn'),
			htmlspecialchars($_POST[$input_nisn]),
			$output_array3);
		
		list($output_array4)=filterSelect_1(
			$conn,
			htmlspecialchars('pendaftaran'),
			htmlspecialchars('tempat_lahir'),
			htmlspecialchars('nisn'),
			htmlspecialchars($_POST[$input_nisn]),
			$output_array4);

		list($output_array5)=filterSelect_1(
			$conn,
			htmlspecialchars('pendaftaran'),
			htmlspecialchars('tanggal_lahir'),
			htmlspecialchars('nisn'),
			htmlspecialchars($_POST[$input_nisn]),
			$output_array5);

		list($output_array6)=filterSelect_1(
			$conn,
			htmlspecialchars('pendaftaran'),
			htmlspecialchars('alamat'),
			htmlspecialchars('nisn'),
			htmlspecialchars($_POST[$input_nisn]),
			$output_array6);

		list($output_array7)=filterSelect_1(
			$conn,
			htmlspecialchars('pendaftaran'),
			htmlspecialchars('nama_ortu'),
			htmlspecialchars('nisn'),
			htmlspecialchars($_POST[$input_nisn]),
			$output_array7);

		list($output_array8)=filterSelect_1(
			$conn,
			htmlspecialchars('pendaftaran'),
			htmlspecialchars('pendidikan_ortu'),
			htmlspecialchars('nisn'),
			htmlspecialchars($_POST[$input_nisn]),
			$output_array8);

		list($output_array9)=filterSelect_1(
			$conn,
			htmlspecialchars('pendaftaran'),
			htmlspecialchars('pekerjaan_ortu'),
			htmlspecialchars('nisn'),
			htmlspecialchars($_POST[$input_nisn]),
			$output_array9);

		list($output_array10)=filterSelect_1(
			$conn,
			htmlspecialchars('pendaftaran'),
			htmlspecialchars('penghasilan_ortu'),
			htmlspecialchars('nisn'),
			htmlspecialchars($_POST[$input_nisn]),
			$output_array10);

		list($output_array11)=filterSelect_1(
			$conn,
			htmlspecialchars('pendaftaran'),
			htmlspecialchars('no_telp'),
			htmlspecialchars('nisn'),
			htmlspecialchars($_POST[$input_nisn]),
			$output_array11);

		list($output_array12)=filterSelect_1(
			$conn,
			htmlspecialchars('pendaftaran'),
			htmlspecialchars('nilai_ipa'),
			htmlspecialchars('nisn'),
			htmlspecialchars($_POST[$input_nisn]),
			$output_array12);

		list($output_array13)=filterSelect_1(
			$conn,
			htmlspecialchars('pendaftaran'),
			htmlspecialchars('nilai_matematika'),
			htmlspecialchars('nisn'),
			htmlspecialchars($_POST[$input_nisn]),
			$output_array13);

		list($output_array14)=filterSelect_1(
			$conn,
			htmlspecialchars('pendaftaran'),
			htmlspecialchars('nilai_bhs_indo'),
			htmlspecialchars('nisn'),
			htmlspecialchars($_POST[$input_nisn]),
			$output_array14);

		list($output_array15)=filterSelect_1(
			$conn,
			htmlspecialchars('pendaftaran'),
			htmlspecialchars('nilai_bhs_inggris'),
			htmlspecialchars('nisn'),
			htmlspecialchars($_POST[$input_nisn]),
			$output_array15);

		list($output_array16)=filterSelect_1(
			$conn,
			htmlspecialchars('pendaftaran'),
			htmlspecialchars('bukti_pembayaran'),
			htmlspecialchars('nisn'),
			htmlspecialchars($_POST[$input_nisn]),
			$output_array16);

		list($output_array17)=filterSelect_1(
			$conn,
			htmlspecialchars('pendaftaran'),
			htmlspecialchars('verifikasi'),
			htmlspecialchars('nisn'),
			htmlspecialchars($_POST[$input_nisn]),
			$output_array17);

			$count_arrays=count($output_array1);
		
			list($output_array18)=filterSelect_1(
			$conn,
			htmlspecialchars('pendaftaran'),
			htmlspecialchars('status_seleksi'),
			htmlspecialchars('nisn'),
			htmlspecialchars($_POST[$input_nisn]),
			$output_array18);

			$count_arrays=count($output_array1);

			$i=0;
			while ($i<$count_arrays) {
				$output_text1.=htmlspecialchars($output_array1[$i]);
				$output_text2.=htmlspecialchars($output_array2[$i]);
				$output_text3.=htmlspecialchars($output_array3[$i]);
				$output_text4.=htmlspecialchars($output_array4[$i]);
				$output_text5.=htmlspecialchars($output_array5[$i]);
				$output_text6.=htmlspecialchars($output_array6[$i]);
				$output_text7.=htmlspecialchars($output_array7[$i]);
				$output_text8.=htmlspecialchars($output_array8[$i]);
				$output_text9.=htmlspecialchars($output_array9[$i]);
				$output_text10.=htmlspecialchars($output_array10[$i]);
				$output_text11.=htmlspecialchars($output_array11[$i]);
				$output_text12.=htmlspecialchars($output_array12[$i]);
				$output_text13.=htmlspecialchars($output_array13[$i]);
				$output_text14.=htmlspecialchars($output_array14[$i]);
				$output_text15.=htmlspecialchars($output_array15[$i]);
				$output_text16.=htmlspecialchars($output_array16[$i]);
				$output_text17.=htmlspecialchars($output_array17[$i]);
				$output_text18.=htmlspecialchars($output_array18[$i]);
				$i++;
			}
			$_SESSION['id_peserta']=htmlspecialchars($output_text1);
			$_SESSION['nisn']=htmlspecialchars($output_text2);
			$_SESSION['nama']=htmlspecialchars($output_text3);
			$_SESSION['tempat_lahir']=htmlspecialchars($output_text4);
			$_SESSION['tanggal_lahir']=htmlspecialchars($output_text5);
			$_SESSION['alamat']=htmlspecialchars($output_text6);
			$_SESSION['nama_ortu']=htmlspecialchars($output_text7);
			$_SESSION['pendidikan_ortu']=htmlspecialchars($output_text8);
			$_SESSION['pekerjaan_ortu']=htmlspecialchars($output_text9);
			$_SESSION['penghasilan_ortu']=htmlspecialchars($output_text10);
			$_SESSION['no_telp']=htmlspecialchars($output_text11);
			$_SESSION['nilai_ipa']=htmlspecialchars($output_text12);
			$_SESSION['nilai_matematika']=htmlspecialchars($output_text13);
			$_SESSION['nilai_bhs_indo']=htmlspecialchars($output_text14);
			$_SESSION['nilai_bhs_inggris']=htmlspecialchars($output_text15);
			$_SESSION['bukti_pembayaran']=htmlspecialchars($output_text16);
			$_SESSION['verifikasi']=htmlspecialchars($output_text17);
			$_SESSION['status_seleksi']=htmlspecialchars($output_text18);

			$id_peserta=htmlspecialchars($output_text1);
			$nisn=htmlspecialchars($output_text2);
			$nama=htmlspecialchars($output_text3);
			$tempat_lahir=htmlspecialchars($output_text4);
			$tanggal_lahir=htmlspecialchars($output_text5);
			$alamat=htmlspecialchars($output_text6);
			$nama_ortu=htmlspecialchars($output_text7);
			$pendidikan_ortu=htmlspecialchars($output_text8);
			$pekerjaan_ortu=htmlspecialchars($output_text9);
			$penghasilan_ortu=htmlspecialchars($output_text10);
			$no_telp=htmlspecialchars($output_text11);
			$nilai_ipa=htmlspecialchars($output_text12);
			$nilai_matematika=htmlspecialchars($output_text13);
			$nilai_bhs_indo=htmlspecialchars($output_text14);
			$nilai_bhs_inggris=htmlspecialchars($output_text15);
			$bukti_pembayaran=htmlspecialchars($output_text16);
			$verifikasi=htmlspecialchars($output_text17);
			$status_seleksi=htmlspecialchars($output_text18);

			$_SESSION['check_data_pribadi']=htmlspecialchars('true');

			$location=htmlspecialchars('./temp/check_user.txt');
			overwriteFiles($location, htmlspecialchars('true'));
			$input_text=htmlspecialchars('pages/main_pages/'.$menu3.'.php');
			$_SESSION['section_page'] =htmlspecialchars('$input_text');
			$location=htmlspecialchars('./temp/section_page.txt');
			overwriteFiles($location, $input_text);
			list($output_text)=readFiles($location, $output_text);
	}
	
	/* */
	if ($actionOnClick_login_submit){
	    $username = trim($_POST[$content_login1]);
	    $username = htmlspecialchars(strip_tags($username));

	    $password = trim($_POST[$content_login2]);
	    $password = htmlspecialchars(strip_tags($password));

	    if(empty($username)){
	    	echo ("<br>"."[ERROR: username cannot empty]");
	    	$error=true;
	    }

	    elseif(empty($password)){
	    	echo ("<br>"."[ERROR: password cannot empty]");
	    	$error=true;
	    }else{
	    	// function checkLogin($sqlDatabase, $sqlTable, $username, $password);
	    	checkLogin(htmlspecialchars('db_seleksi'), htmlspecialchars('admin'), $username, $password);
	    	$location=htmlspecialchars('./temp/check_user.txt');
			overwriteFiles($location, htmlspecialchars('true'));
			$input_text=htmlspecialchars('pages/main_pages/'.$menu1.'.php');
			$_SESSION['section_page'] =htmlspecialchars('$input_text');
			$location=htmlspecialchars('./temp/section_page.txt');
			overwriteFiles($location, $input_text);
			list($output_text)=readFiles($location, $output_text);
			echo '<script>window.location="./index.php"</script>';
			//header('location: ./index.php');
		}
	}

	if($actionOnClick_button_check_kelulusan_T){
		$sqlTable=htmlspecialchars('pendaftaran');
		// $selectColumn=htmlspecialchars('nama');
		$filterColumn=htmlspecialchars('nisn');
		$filterData=htmlspecialchars($_POST[$input_nisn]);
		$output_text=htmlspecialchars('');

		$output_array1==array();
		$output_array2==array();

		list($output_array1)=filterSelect_1(
			$conn,
			htmlspecialchars('pendaftaran'),
			htmlspecialchars('nama'),
			htmlspecialchars('verifikasi'),
			htmlspecialchars('T'),
			$output_array1);

		list($output_array2)=filterSelect_1(
			$conn,
			htmlspecialchars('pendaftaran'),
			htmlspecialchars('nisn'),
			htmlspecialchars('verifikasi'),
			htmlspecialchars('T'),
			$output_array2);

		$count_arrays=count($output_array1);
		//echo '<br>'.$count_arrays;
		while ($i<$count_arrays) {
			if($i==0){
				$output_text1="
				<form name='check_kelulusan".'0'."' class='check_kelulusan' action='".$_SERVER['PHP_SELF']."' method='post'>
					<tr>
						<td width='' class='horizontal_left text_bolder'>
							<input type='text' name='no_kelulusan' value=".$output_array2[0]." class='text_upercase button_style'
							size='6'>
						</td>
							<td class='' style='
						 	background-color: #FFFFFF;
						 	border: #95b8ff 2px solid;
						 	border-radius: 5px 5px 5px 5px;
						 	padding-bottom: 5px;
						 	padding-top: 5px;
						 	padding-right: 20px;
						 	padding-left: 20px;
						 	opacity: 0.7;
					 	'>".$output_array1[0]."</td>
					 			<td class='' style='
					 		 	background-color: #FFFFFF;
					 		 	border: #95b8ff 2px solid;
					 		 	border-radius: 5px 5px 5px 5px;
					 		 	padding-bottom: 5px;
					 		 	padding-top: 5px;
					 		 	padding-right: 20px;
					 		 	padding-left: 20px;
					 		 	opacity: 0.7;
					 	 	'>"."T"."</td>
					 	<td width=''>
					 		<input type='submit' name='ubah_kelulusan_F' class='text_upercase button_style'
					 		value='F'></input>
					 	</td>
					 </tr>
				</form>";				
			}else{
				$output_text1.="
								<form name='check_kelulusan".$i."' class='check_kelulusan' action='".$_SERVER['PHP_SELF']."' method='post'>
									<tr>
										<td width='' class='horizontal_left text_bolder'>
											<input type='text' name='no_kelulusan' value=".$output_array2[$i]." class='text_upercase button_style'
											size='6'>
										</td>
											<td class='' style='
										 	background-color: #FFFFFF;
										 	border: #95b8ff 2px solid;
										 	border-radius: 5px 5px 5px 5px;
										 	padding-bottom: 5px;
										 	padding-top: 5px;
										 	padding-right: 20px;
										 	padding-left: 20px;
										 	opacity: 0.7;
									 	'>".$output_array1[$i]."</td>
									 			<td class='' style='
									 		 	background-color: #FFFFFF;
									 		 	border: #95b8ff 2px solid;
									 		 	border-radius: 5px 5px 5px 5px;
									 		 	padding-bottom: 5px;
									 		 	padding-top: 5px;
									 		 	padding-right: 20px;
									 		 	padding-left: 20px;
									 		 	opacity: 0.7;
									 	 	'>"."T"."</td>
									 	<td width=''>
									 		<input type='submit' name='ubah_kelulusan_F' class='text_upercase button_style'
									 		value='F'></input>
									 	</td>
									 </tr>
								</form>";
			}
			
			//$output_text1.=htmlspecialchars($output_array1[$i]);
			$i++;
		}
	}else{

	}

	if($actionOnClick_button_check_kelulusan_F){
		$sqlTable=htmlspecialchars('pendaftaran');
		// $selectColumn=htmlspecialchars('nama');
		$filterColumn=htmlspecialchars('nisn');
		$filterData=htmlspecialchars($_POST[$input_nisn]);
		$output_text=htmlspecialchars('');

		$output_array1==array();
		list($output_array1)=filterSelect_1(
			$conn,
			htmlspecialchars('pendaftaran'),
			htmlspecialchars('nama'),
			htmlspecialchars('verifikasi'),
			htmlspecialchars('F'),
			$output_array1);

		list($output_array2)=filterSelect_1(
			$conn,
			htmlspecialchars('pendaftaran'),
			htmlspecialchars('nisn'),
			htmlspecialchars('verifikasi'),
			htmlspecialchars('F'),
			$output_array2);

		$count_arrays=count($output_array1);
		//echo '<br>'.$count_arrays;	
		while ($i<$count_arrays) {
					if($i==0){
						$output_text1="
						<form name='check_kelulusan".'0'."' class='check_kelulusan' action='".$_SERVER['PHP_SELF']."' method='post'>
							<tr>
								<td width='' class='horizontal_left text_bolder'>
									<input type='text' name='no_kelulusan' value=".$output_array2[0]." class='text_upercase button_style'
									size='6'>
								</td>
									<td class='' style='
								 	background-color: #FFFFFF;
								 	border: #95b8ff 2px solid;
								 	border-radius: 5px 5px 5px 5px;
								 	padding-bottom: 5px;
								 	padding-top: 5px;
								 	padding-right: 20px;
								 	padding-left: 20px;
								 	opacity: 0.7;
							 	'>".$output_array1[0]."</td>
							 			<td class='' style='
							 		 	background-color: #FFFFFF;
							 		 	border: #95b8ff 2px solid;
							 		 	border-radius: 5px 5px 5px 5px;
							 		 	padding-bottom: 5px;
							 		 	padding-top: 5px;
							 		 	padding-right: 20px;
							 		 	padding-left: 20px;
							 		 	opacity: 0.7;
							 	 	'>"."F"."</td>
							 	<td width=''>
							 		<input type='submit' name='ubah_kelulusan_T' class='text_upercase button_style'
							 		value='T'></input>
							 	</td>
							 </tr>
							</form>";				
					}else{
						$output_text1.="
										<form name='check_kelulusan".$i."' class='check_kelulusan' action='".$_SERVER['PHP_SELF']."' method='post'>
											<tr>
												<td width='' class='horizontal_left text_bolder'>
													<input type='text' name='no_kelulusan' value=".$output_array2[$i]." class='text_upercase button_style'
													size='6'>
												</td>
													<td class='' style='
												 	background-color: #FFFFFF;
												 	border: #95b8ff 2px solid;
												 	border-radius: 5px 5px 5px 5px;
												 	padding-bottom: 5px;
												 	padding-top: 5px;
												 	padding-right: 20px;
												 	padding-left: 20px;
												 	opacity: 0.7;
											 	'>".$output_array1[$i]."</td>
											 			<td class='' style='
											 		 	background-color: #FFFFFF;
											 		 	border: #95b8ff 2px solid;
											 		 	border-radius: 5px 5px 5px 5px;
											 		 	padding-bottom: 5px;
											 		 	padding-top: 5px;
											 		 	padding-right: 20px;
											 		 	padding-left: 20px;
											 		 	opacity: 0.7;
											 	 	'>"."F"."</td>
											 	<td width=''>
											 		<input type='submit' name='ubah_kelulusan_T' class='text_upercase button_style'
											 		value='T'></input>
											 	</td>
											 </tr>
										</form>";
					}
					
					//$output_text1.=htmlspecialchars($output_array1[$i]);
					$i++;
				}
		
	}else{

	}

	if($actionOnClick_ubah_kelulusan_T){
		echo $_POST[$no_kelulusan];
		update_data(
			htmlspecialchars('pendaftaran'),
			htmlspecialchars('verifikasi'),
			htmlspecialchars('T'),
			htmlspecialchars('nisn'),
			htmlspecialchars($_POST[$no_kelulusan]));

	}

	if($actionOnClick_ubah_kelulusan_F){
		echo $_POST[$no_kelulusan];
		update_data(
			htmlspecialchars('pendaftaran'),
			htmlspecialchars('verifikasi'),
			htmlspecialchars('F'),
			htmlspecialchars('nisn'),
			htmlspecialchars($_POST[$no_kelulusan]));

	}

	if($actionOnClick_choice_A){
		$choice0=htmlspecialchars('A');
	}

	if($actionOnClick_choice_B){
		$choice0=htmlspecialchars('B');

	}

	if($actionOnClick_choice_C){
		$choice0=htmlspecialchars('C');

	}

	if($actionOnClick_choice_D){
		$choice0=htmlspecialchars('D');

	}

	if($actionOnClick_choice_E){
		$choice0=htmlspecialchars('E');

	}

	if($actionOnClick_choice_button_save){

	}
?>