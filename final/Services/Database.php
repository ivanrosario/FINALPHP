<?php
	try{
	$db = new PDO("mysql:host=localhost;dbname=Finalphp;", "root", "root");
	} catch(Exception $e){
			echo "unable to connect oh ";
			exit;
	}

	// try{
	// 	$db = new PDO("mysql:host=localhost;dbname=iRosario_Final;", "r2hstudent", "SbFaGzNgGIE8kfP");
	// } catch(Exception $e){
	// 	echo "unable to connect oh ";
	// 	exit;
	// }

?>