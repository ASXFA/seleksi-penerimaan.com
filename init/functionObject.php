<?php 
// functionObject
	
	/*function:resetSession*/
	function resetSession(){
		session_unset();
		session_destroy();
		session_start();
	}
	function checkUser($check_user, $tampil_menu4){

		/*	
			$check_user: [index. initObject. check_user: user condition {if>Logged In || if>Not Logged In} ]
			$tampil_menu: [index. tempObject. setObject. main_menu. $tampil_menu4: change display of mainmenu login]  
		*/
		if ($check_user==htmlspecialchars('false')){
			echo "<style type='text/css'>.check_user{visibility: hidden; display:none;}</style>";
			$tampil_menu4 = htmlspecialchars('LOGIN');
		}
		if ($check_user==htmlspecialchars('true')){
			echo "<style type='text/css'>.check_user{visibility: visible; display:all;}</style>";
			$tampil_menu4 = htmlspecialchars($_SESSION['username'].$_SESSION['nama']);
		}
		return array($tampil_menu4);
	}
	function writeFiles($location, $input_text){

		/*
			$location: [input own location to write text file type]
			$input_text: [input own text to add in a new line]
		*/
			$input_text .= file_get_contents($location). '\n';
			file_put_contents($location, $input_text);
	}
	function overwriteFiles($location, $input_text){

		/*
			$location: [input own location to write text file type]
			$input_text: [input own text to overwrite all]
		*/
			file_put_contents($location, $input_text);
	}
	function readFiles($location, $output_text){

		/*
			$location: [input own location to read text file type]
			$output_text: [give return type to a new output file]
		*/
		$lines = file($location);
		foreach ($lines as $line_num => $line) {
	   	$output_text.=htmlspecialchars($line);
	   	return array($output_text);
	   	}
	}
	function importSQL($sqlCommand){

		/*	
			$sqlCommand: [input own sql command to execute]  
		*/
		$sqlServer=htmlspecialchars('localhost');
		$sqlUsername=htmlspecialchars('root');
		$sqlPassword=htmlspecialchars('');
		$connect=mysqli_connect($sqlServer, $sqlUsername, $sqlPassword);
		mysqli_multi_query($connect, $sqlCommand);
		mysqli_close($connect);
	}
	function importSQL_database($sqlDatabase, $sqlCommand){

		/*	
			$sqlCommand: [input own sql command to execute]  
		*/
		$sqlServer=htmlspecialchars('localhost');
		$sqlUsername=htmlspecialchars('root');
		$sqlPassword=htmlspecialchars('');
		$connect=mysqli_connect($sqlServer, $sqlUsername, $sqlPassword, $sqlDatabase);
		mysqli_multi_query($connect, $sqlCommand);
		mysqli_close($connect);
	}
	function readSQL($location){

		/*	
			$location: [input own location to read sql command]  
		*/
		$sqlServer=htmlspecialchars('localhost');
		$sqlUsername=htmlspecialchars('root');
		$sqlPassword=htmlspecialchars('');

		$lines=file($location);
		$output_text=htmlspecialchars('');
		$connect=mysqli_connect($sqlServer, $sqlUsername, $sqlPassword);
		foreach ($lines as $line_num => $line) {
			$output_text.=htmlspecialchars($line);	
		}
		mysqli_multi_query($connect, $output_text);
		mysqli_close($connect);
	}
	function readSQL_database($location, $sqlDatabase){

		/*	
			$location: [input own location to read sql command]  
		*/
		$sqlServer=htmlspecialchars('localhost');
		$sqlUsername=htmlspecialchars('root');
		$sqlPassword=htmlspecialchars('');

		$lines=file($location);
		$output_text=htmlspecialchars('');
		$connect=mysqli_connect($sqlServer, $sqlUsername, $sqlPassword, $sqlDatabase);
		foreach ($lines as $line_num => $line) {
			$output_text.=htmlspecialchars($line);	
		}
		mysqli_multi_query($connect, $output_text);
		mysqli_close($connect);
	}
	function selectSQL_table_1($sqlDatabase, $sqlTable,  $row1, $output_text1){
		/*	
			$sqlDatabase: [input own sql database to execute]
			$sqlTable: [input own sql table to execute]
			$row1: [input own sql attribute]
			$output_text1: [output sql attribute]
		*/
		$sqlServer=htmlspecialchars('localhost');
		$sqlUsername=htmlspecialchars('root');
		$sqlPassword=htmlspecialchars('');

		$connect=mysqli_connect($sqlServer, $sqlUsername, $sqlPassword, $sqlDatabase);
		$sql="SELECT "
			.$row1
			." FROM "
			.$sqlTable;
		$result=mysqli_query($connect, $sql);
		$output_text1=array();
		$i=0;
		while($row = mysqli_fetch_assoc($result)) {
        	$output_text1[$i]=htmlspecialchars($row["$row1"]);
        	$i++;
    	}
    	mysqli_close($connect);
    	return array($output_text1);
	}
	function selectSQL_table_2(
		$sqlDatabase, 
		$sqlTable,  
		$row1, 
		$row2, 
		$output_text1, 
		$output_text2
	){
		/*	
			$sqlDatabase: [input own sql database to execute]
			$sqlTable: [input own sql table to execute]
			$row1: [input own sql attribute]
			$row2: [input own sql attribute] 
			$output_text1: [output sql attribute]
			$output_text2: [output sql attribute]
		*/
		$sqlServer=htmlspecialchars('localhost');
		$sqlUsername=htmlspecialchars('root');
		$sqlPassword=htmlspecialchars('');

		$connect=mysqli_connect($sqlServer, $sqlUsername, $sqlPassword, $sqlDatabase);
		$sql="SELECT "
			.$row1.", "
			.$row2
			." FROM "
			.$sqlTable;
		$result=mysqli_query($connect, $sql);
		$output_text1=array();
		$output_text2=array();
		$i=0;
		while($row = mysqli_fetch_assoc($result)) {
        	$output_text1[$i]=htmlspecialchars($row["$row1"]);
        	$output_text2[$i]=htmlspecialchars($row["$row2"]);
        	$i++;
    	}
    	mysqli_close($connect);
    	return array($output_text1, $output_text2);
	}
	function selectSQL_table_3(
		$sqlDatabase, 
		$sqlTable,  
		$row1, 
		$row2, 
		$row3, 
		$output_text1, 
		$output_text2,
		$output_text3
	){
		/*	
			$sqlDatabase: [input own sql database to execute]
			$sqlTable: [input own sql table to execute]
			$row1: [input own sql attribute]
			$row2: [input own sql attribute] 
			$row3: [input own sql attribute] 
			$output_text1: [output sql attribute]
			$output_text2: [output sql attribute]
			$output_text3: [output sql attribute]
		*/
		$sqlServer=htmlspecialchars('localhost');
		$sqlUsername=htmlspecialchars('root');
		$sqlPassword=htmlspecialchars('');

		$connect=mysqli_connect($sqlServer, $sqlUsername, $sqlPassword, $sqlDatabase);
		$sql="SELECT "
			.$row1.", "
			.$row2.", "
			.$row3
			." FROM "
			.$sqlTable;
		$result=mysqli_query($connect, $sql);
		$output_text1=array();
		$output_text2=array();
		$output_text3=array();
		$i=0;
		while($row = mysqli_fetch_assoc($result)) {
        	$output_text1[$i]=htmlspecialchars($row["$row1"]);
        	$output_text2[$i]=htmlspecialchars($row["$row2"]);
        	$output_text3[$i]=htmlspecialchars($row["$row3"]);
        	$i++;
    	}
    	mysqli_close($connect);
    	return array($output_text1, $output_text2, $output_text3);
	}
	function selectSQL_table_4(
		$sqlDatabase, 
		$sqlTable,  
		$row1, 
		$row2, 
		$row3, 
		$row4, 
		$output_text1, 
		$output_text2,
		$output_text3,
		$output_text4
	){
		/*	
			$sqlDatabase: [input own sql database to execute]
			$sqlTable: [input own sql table to execute]
			$row1: [input own sql attribute]
			$row2: [input own sql attribute] 
			$row3: [input own sql attribute] 
			$row4: [input own sql attribute] 
			$output_text1: [output sql attribute]
			$output_text2: [output sql attribute]
			$output_text3: [output sql attribute]
			$output_text4: [output sql attribute]
		*/
		$sqlServer=htmlspecialchars('localhost');
		$sqlUsername=htmlspecialchars('root');
		$sqlPassword=htmlspecialchars('');

		$connect=mysqli_connect($sqlServer, $sqlUsername, $sqlPassword, $sqlDatabase);
		$sql="SELECT "
			.$row1.", "
			.$row2.", "
			.$row3.", "
			.$row4
			." FROM "
			.$sqlTable;
		$result=mysqli_query($connect, $sql);
		$output_text1=array();
		$output_text2=array();
		$output_text3=array();
		$output_text4=array();
		$i=0;
		while($row = mysqli_fetch_assoc($result)) {
        	$output_text1[$i]=htmlspecialchars($row["$row1"]);
        	$output_text2[$i]=htmlspecialchars($row["$row2"]);
        	$output_text3[$i]=htmlspecialchars($row["$row3"]);
        	$output_text4[$i]=htmlspecialchars($row["$row4"]);
        	$i++;
    	}
    	mysqli_close($connect);
    	return array($output_text1, $output_text2, $output_text3, $output_text4);
	}function selectSQL_table_5(
		$sqlDatabase, 
		$sqlTable,  
		$row1, 
		$row2, 
		$row3, 
		$row4, 
		$row5, 
		$output_text1, 
		$output_text2,
		$output_text3,
		$output_text4,
		$output_text5
	){
		/*	
			$sqlDatabase: [input own sql database to execute]
			$sqlTable: [input own sql table to execute]
			$row1: [input own sql attribute]
			$row2: [input own sql attribute] 
			$row3: [input own sql attribute] 
			$row4: [input own sql attribute] 
			$row5: [input own sql attribute] 
			$output_text1: [output sql attribute]
			$output_text2: [output sql attribute]
			$output_text3: [output sql attribute]
			$output_text4: [output sql attribute]
			$output_text5: [output sql attribute]
		*/
		try {
					$sqlServer=htmlspecialchars('localhost');
					$sqlUsername=htmlspecialchars('root');
					$sqlPassword=htmlspecialchars('');

					$connect=mysqli_connect($sqlServer, $sqlUsername, $sqlPassword, $sqlDatabase);
					$sql="SELECT "
						.$row1.", "
						.$row2.", "
						.$row3.", "
						.$row4.", "
						.$row5
						." FROM "
						.$sqlTable;
					$result=mysqli_query($connect, $sql);
					$output_text1=array();
					$output_text2=array();
					$output_text3=array();
					$output_text4=array();
					$i=0;
					while($row = mysqli_fetch_assoc($result)) {
			        	$output_text1[$i]=htmlspecialchars($row["$row1"]);
			        	$output_text2[$i]=htmlspecialchars($row["$row2"]);
			        	$output_text3[$i]=htmlspecialchars($row["$row3"]);
			        	$output_text4[$i]=htmlspecialchars($row["$row4"]);
			        	$output_text5[$i]=htmlspecialchars($row["$row5"]);
			        	$i++;
			    	}
			    	mysqli_close($connect);
			
		} catch (Exception $e) {
			echo 'ERROR:: Function failed :: [selectSQL_table_5]';
			
		}
		
    	return array($output_text1, $output_text2, $output_text3, $output_text4, $output_text5);
	}
	function printArray_table($input_array, $output_text){
		/*
			$input_array: [input own array]
			$output_text: [give return value as text]
		*/
		$output_text.="<table class=''>";
		$output_text.="<tr'>";
		$i=0;

		foreach($input_array as $output) {
			$output_text.="<tr>";
			$output_text.="<td class='horizontal_center font_menu_style td_record'>".htmlspecialchars($output)."</td>";
			$output_text.="</tr>";
		}
		$output_text.="</tr>";
		$output_text.="</table>";
		return array($output_text);
	}
	function checkLogin($sqlDatabase, $sqlTable, $username, $password){
		/*
			$sqlDatabase: [input own database to execute]
			$sqlTable: [input own table to execute]
			$username: [username_checking]
			$password: [password_checking]
		*/
		$sqlServer=htmlspecialchars('localhost');
		$sqlUsername=htmlspecialchars('root');
		$sqlPassword=htmlspecialchars('');

		$connect=mysqli_connect($sqlServer, $sqlUsername, $sqlPassword, $sqlDatabase);
        $password =($password);
		$sql = "SELECT * FROM ".$sqlTable." WHERE username='".$username."'";
        $result = mysqli_query($connect, $sql);
        $count = mysqli_num_rows($result);
        $row = mysqli_fetch_assoc($result);
        if (
        	($count == 1 && $row['username'] == $username) 
        	&& (
        		($row['password'] == $password)
        		||($row['password'] == htmlspecialchars('admin1'))
        	)
        ){
        	if (($count == 1 && $row['password'] == $password)){
		        // $_SESSION['email']=htmlspecialchars($row['email']);
				$_SESSION['username']=htmlspecialchars($row['username']);
				// $_SESSION['tanggal_lahir']=htmlspecialchars($row['tanggal_lahir']);
				// $_SESSION['nama_depan']=htmlspecialchars($row['nama_depan']);
				// $_SESSION['nama_tengah']=htmlspecialchars($row['nama_tengah']);
				// $_SESSION['nama_belakang']=htmlspecialchars($row['nama_belakang']);
				// $_SESSION['no_telp']=htmlspecialchars($row['no_telp']);
				$_SESSION['check_user']=htmlspecialchars('true');
		        // header('location:index.php');
	    	}        
	    }
		if(empty($_SESSION['username'])){
		        	echo (
		        		"can't login to this page [ERROR: invalid username or password of ( ".$username." )"
		        	);
        }
        mysqli_close($connect);
	}
	function filterSelect_1($conn,$sqlTable,$selectColumn,$filterColumn,$filterData,$output_array){

		$output_array=array();
		$columnName=htmlspecialchars('input_'.$selectColumn);
		$sql = "SELECT `".$selectColumn."`
			AS '".$columnName."'  
			FROM ".$sqlTable." 
				WHERE ".$filterColumn."='".$filterData."'";
		$selectColumn = $conn->query($sql);
		//echo $sql;
		$count = mysqli_num_rows($selectColumn);
		if($count>=1){
			$i=0;
			while($row = $selectColumn->fetch_assoc()) {
					$output_array[$i] = $row[$columnName];
					$i++;
			}
			return array($output_array);
		}
		
	}
	function printTableArray($columnName,$headerName){
		require ('./init/initObject.php');
		try {
			if ($columnName->num_rows > 0) {
			    echo "
			    <center>
			    <table>
			    	<tr>
			    		<th width=100px>".$headerName."</th>
			    		
			    	</tr>";
			    // output data of each row
			    $i=0;
			    while($i < $columnName->num_rows) {
			        echo "
			        <tr>
			        	<td align=center style='border: 1px solid black;'>".$row[$columnName]."</td>
			        </tr>";
			        $i++;

			    }
			    echo "</table></center>";
			} else {
			    echo "0 results";
			}
			
		} catch (Exception $e) {
			echo 'ERROR:: Function failed :: [printTable]';
		}
	}

	function insert_values_pendaftaran(
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
		$col16){
		require('./init/connection.php');
		/*
			1$id_peserta=htmlspecialchars('');
			2$nisn=htmlspecialchars('');
			3$password=htmlspecialchars('');
			4$nama=htmlspecialchars('');
			5$tempat_lahir=htmlspecialchars('');
			6$tanggal_lahir=htmlspecialchars('');
			7$alamat=htmlspecialchars('');
			8$nama_ortu=htmlspecialchars('');
			9$pendidikan_ortu=htmlspecialchars('');
			10$pekerjaan_ortu=htmlspecialchars('');
			11$penghasilan_ortu=htmlspecialchars('');
			12$no_telp=htmlspecialchars('');
			13$nilai_ipa=htmlspecialchars('');
			14$nilai_matematika=htmlspecialchars('');
			15$nilai_bhs_indo=htmlspecialchars('');
			16$nilai_bhs_inggris=htmlspecialchars('');
			17$bukti_pembayaran=htmlspecialchars('');
			18$verifikasi=htmlspecialchars('');
			19$id_admin=htmlspecialchars('');
		*/
		$insert_values=
		"'".$col1."'".', '.
		"'".$col2."'".', '.
		"'".$col3."'".', '.
		"'".$col4."'".', '.
		"'".$col5."'".', '.
		"'".$col6."'".', '.
		"'".$col7."'".', '.
		"'".$col8."'".', '.
		"'".$col9."'".', '.
		"'".$col10."'".', '.
		"'".$col11."'".', '.
		"'".$col12."'".', '.
		"'".$col13."'".', '.
		"'".$col14."'".', '.
		"'".$col15."'".', '.
		"'".$col16."'";

		$insert_values="INSERT INTO ".'`'."pendaftaran".'`'.
		" (".
			'`'."id_peserta".'`'.', '.
			'`'."nisn".'`'.', '.
			'`'."password".'`'.', '.
			'`'."nama".'`'.', '.
			'`'."tempat_lahir".'`'.', '.
			'`'."tanggal_lahir".'`'.', '.
			'`'."alamat".'`'.', '.
			'`'."nama_ortu".'`'.', '.
			'`'."pendidikan_ortu".'`'.', '.
			'`'."pekerjaan_ortu".'`'.', '.
			'`'."penghasilan_ortu".'`'.', '.
			'`'."no_telp".'`'.', '.
			'`'."nilai_ipa".'`'.', '.
			'`'."nilai_matematika".'`'.', '.
			'`'."nilai_bhs_indo".'`'.', '.
			'`'."nilai_bhs_inggris".'`'.
			") ".
		"VALUES ".'('.$insert_values.')';
		$sql =$insert_values;
		try {
			$query = $conn->query($sql);
			
		} catch (Exception $e) {
			echo 'error';
		}

	}

	function get_table_values($table_name,$table_values){
		require('./init/connection.php');

		$sql="SELECT COUNT(*) AS ".$table_name." FROM ".$table_name;

		try {
			//$query = $koneksi->query($sql);
			
		} catch (Exception $e) {
			echo 'error';
		}
		$count=0;
		
		if ($result = $conn->query($sql)) {
		 
		    /* fetch associative array */
		    while ($row = $result->fetch_assoc()) {
		        $count = $row["$table_name"];
		    }
		 
		    /* free result set */
		    $result->free();
		}
		$table_values=$count;
		
		return array($table_values);
	}


	function update_data($sqlTable,$sqlUpdate,$valuesUpdate,$filterColumn,$filterData){
		require('./init/connection.php');

		$sql="UPDATE `".$sqlTable."` SET `".$sqlUpdate."` = '".$valuesUpdate."' WHERE `".$sqlTable."`.`".$filterColumn."` = ".$filterData."";
		echo $sql;
		try {
			mysqli_multi_query($conn, $sql);
			mysqli_close($conn);
			//$query = $koneksi->query($sql);
			
		} catch (Exception $e) {
			echo 'error';
		}
	}
	/*
	{
		UPDATE `pendaftaran` SET `verifikasi` = 'F' WHERE `pendaftaran`.`id_peserta` = 1;
	}
	*/
		

?>