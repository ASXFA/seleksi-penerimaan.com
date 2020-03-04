<?php
// ProcedureInit
	
	/*Hide Warning*/
	error_reporting(E_ERROR | E_PARSE);

	/* pRresetSession */
	$location=htmlspecialchars('./temp/check_user.txt');
	list($check_user)=readFiles($location, $output_text);
	if($check_user==htmlspecialchars('false')){
		resetSession();
		resetSession_var($menu1);
	}
	if($check_user==htmlspecialchars('true')){
		if(empty($_SESSION['username']||$_SESSION['nisn'])){
			header('location: ./pages/main_pages/logout.php');
		}
		else{
			/*
			echo (
				("<br>").("email: ").$_SESSION['email']
				.("<br>").("username: ").$_SESSION['username']
				.("<br>").("tanggal_lahir: ").$_SESSION['tanggal_lahir']
				.("<br>").("nama_depan: ").$_SESSION['nama_depan']
				.("<br>").("nama_tengah: ").$_SESSION['nama_tengah']
				.("<br>").("nama_belakang: ").$_SESSION['nama_belakang']
				.("<br>").("no_telp: ").$_SESSION['no_telp']
			)
			*/
		}
	}
	// resetSession();

	/* pRdropDatabase: db_seleksi */
		$location=htmlspecialchars('./temp/drop_db.txt');
		list($drop_db)=readFiles($location, $output_text);
		if ($drop_db==htmlspecialchars('true')){
			importSQL(htmlspecialchars('drop database `db_seleksi`;'));
		}

	/* pRinitObject: initObject. $first_run [option: false='rebuild' ]*/
		$location=htmlspecialchars('./temp/first_run.txt');
		list($first_run)=readFiles($location, $output_text);
		if ($first_run==htmlspecialchars('false')){
			$location=htmlspecialchars('./sql/db_seleksi.sql');
			readSQL($location);

			$location=htmlspecialchars('./sql/db_seleksi_table.sql');
			readSQL_database($location, htmlspecialchars('db_seleksi'));

			$input_text=htmlspecialchars('true');
			$_SESSION['first_run']=htmlspecialchars('$input_text');
			$location=htmlspecialchars('./temp/first_run.txt');
			overwriteFiles($location, $input_text);
		}

	/* pRcheckUser: initObject. $check_user  */
		list($tampil_menu4)=checkUser($check_user, $tampil_menu4);
		if($check_user==htmlspecialchars('true')){
			$tampil_menu4==$_SESSION['nama'];
		}
		if($_SESSION['nisn']==htmlspecialchars('')){
			
		}else{
			//echo "<style type='text/css'>.check_user{visibility: hidden; display:none;}</style>";
			echo "<style type='text/css'>.".$menu1."{visibility: hidden; display:none;}</style>";
			echo "<style type='text/css'>.".$menu2."{visibility: hidden; display:none;}</style>";
			echo "<style type='text/css'>.".$menu3."{visibility: hidden; display:none;}</style>";
			echo "<style type='text/css'>.".$sub_menu4_1."{visibility: hidden; display:none;}</style>";
			//echo "<style type='text/css'>.".$menu5."{visibility: hidden; display:none;}</style>";
			echo "<style type='text/css'>.".$menu6."{visibility: hidden; display:none;}</style>";
			echo "<style type='text/css'>.".$menu7."{visibility: hidden; display:none;}</style>";
		}

		
		if($_SESSION['username']==htmlspecialchars('')){

		}else{
			echo "<style type='text/css'>.".$menu6."{visibility: hidden; display:none;}</style>";
		}
	/**/
		list(
			$output_array1,
			$output_array2
		)
		=selectSQL_table_2(
			htmlspecialchars('db_seleksi'),
			htmlspecialchars('admin'),
			htmlspecialchars('username'),
			htmlspecialchars('password'),
			$output_array1,
			$output_array2
		);
		/*
		if ($wowslider=htmlspecialchars('')) {
			# code...
			echo "<style type='text/css'>.wowslider{visibility: hidden; display:none;}</style>";
		}
		*/

		//$input_array=$output_array1;
		// list($output_text)=printArray_table($input_array, $output_text);
?>