
<?php  
require_once('connect.php');

switch ($_REQUEST["queryName"]){
	
	case "highestSlide": getHighestSlide();
	break;

	case "getPassword": getPassword();
	break;

	case "straightQuery":
	echo mysql_query($_REQUEST['query']);
	break;

	case "removeItem": removeItem($_REQUEST["removeId"]);
	break;
}

//-------------------------------------------------------------------------------------------------------------
//                                     			HIGHEST SLIDE
//-------------------------------------------------------------------------------------------------------------

function getHighestSlide(){
	$query = mysql_query("SELECT MAX(slideNumber) AS highestSlide FROM users");
	$result = mysql_fetch_array($query);
	if (empty($result)) echo 1 . "Empty - so 1";
	else echo $result["highestSlide"];
}

//-------------------------------------------------------------------------------------------------------------
//                                     			REMOVE ITEM
//-------------------------------------------------------------------------------------------------------------

function removeItem($id){
	$query = mysql_query("DELETE FROM users WHERE userId = '".$id."';");
	$result = mysql_fetch_array($query);
	echo $id ;
}

//-------------------------------------------------------------------------------------------------------------
//                                     			GET PASS
//-------------------------------------------------------------------------------------------------------------

function getPassword(){

	$pass = '{"pass":"x8Ld7#nk"}';
	echo $pass;
}

?> 
