<?php 
if($_SERVER['HTTP_HOST'] == "localhost"){
	//for local
	define('SITE_URL', 'http://' . $_SERVER['HTTP_HOST'] . '/factory-inventory-app-v2');
	define('SITEPATH', $_SERVER['DOCUMENT_ROOT'] . '/factory-inventory-app-v2');
}
else{ 
	//for web
	define('SITE_URL', "http://" . $_SERVER['HTTP_HOST']);
	define('SITEPATH', $_SERVER['DOCUMENT_ROOT']);
}







