 <?php

$domain = $_SERVER['SERVER_NAME'];

global $_VHOST;

$host = "";
$username = "";
$password = "";
$dbname = "";

switch($domain){

	case "localhost":
		$host = "localhost"; 
		$username = "root"; 
		$password = "yakareem69"; 
		$dbname = "BLKBX_Wall";
		break;

	case "sitefilehosting.com":
		$host = "localhost"; 
		$username = "sitefil1_ratf"; 
		$password = "Caspian123!"; 
		$dbname = "sitefil1_ratf";
		break;

	case "www.sitefilehosting.com":
		$host = "localhost"; 
		$username = "sitefil1_ratf"; 
		$password = "Caspian123!"; 
		$dbname = "sitefil1_ratf";
		break;

	default:
		$host = $_VHOST['DB_HOST']; 
		$username = $_VHOST['DB_USER']; 
		$password = $_VHOST['DB_PASS']; 
		$dbname = $_VHOST['DB_NAME'];
		break;

}


define("DATABASE_HOST", $host); 
define("DATABASE_USERNAME", $username); 
define("DATABASE_PASSWORD", $password); 
define("DATABASE_NAME", $dbname);

?>