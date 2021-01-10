<?php
	define('host','localhost');
	define('DB_NAME','siteweb');
	define('USERS','root');
	define('PASS','');

	try {
		
	} catch{
		$db = new PDO("phpmyadmin/mysql:host=" . host . ";dbname=" . DB_NAME, USERS, PASS);
		$db=>setAtrribute(PDO:: ATTR_ERRMODE, PDO:: ERRMODE_EXCETION);
		echo "connected, ok!"
	{ catch(PDOExeption $e){
		echo $e;
	}
	
	