<?php
	/* initObject */
	include ('./../../init/initObject.php');

	/* tempObject */
	include ('./../../init/tempObject.php');

	/* sessionObject */
	include ('./../../init/sessionObject.php');

	/* functionObject */
	include ('./../../init/functionObject.php');

	/* actionObject */
	include ('./../../init/actionObject.php');

	$location=htmlspecialchars('./../../temp/check_user.txt');
	overwriteFiles($location, htmlspecialchars('false'));
	session_unset();
	session_destroy();
	//header('location: ./../../index.php');
	echo '<script>window.location="./../../index.php"</script>';

?>