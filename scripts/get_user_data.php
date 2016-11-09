
<?php  
require_once('connect.php');
	
	$totalRecords = mysql_query( "select count(userId) as num_rows from users" );
	$rows = mysql_fetch_object( $totalRecords );
	$total = $rows->num_rows;
	 	 
	$get_data_sql = "SELECT * FROM users;";
	$result = mysql_query($get_data_sql);
	 
	 if ($result){
	 	
	 	$json = '{';
	 	
	 	$rowCounter = 0;
	 	
	 	while($row = mysql_fetch_assoc($result)){
	 		$rowCounter++;
	 		$json.= '"user'.$row['userId'].'":{';
	 		$json.= '"userId":' . '"'. $row['userId'] . '",';
	 		$json.= '"email":'  . '"'. $row['email'] . '",';
	 		$json.= '"postDate":' . '"'. $row['postDate'] . '",';
	 		$json.= '"urlMain":'  . '"'. $row['urlMain'] . '",';
	 		$json.= '"urlThumb":' . '"'. $row['urlThumb'] . '",';
	 		$json.= '"wallSpot":' . '"'. $row['wallSpot'] . '"';
	 		$json.= ($rowCounter < $total) ? '},' : '}';
		}     
     		$json.= '}';
     		//echo $totalRecords;    
     
     echo ($json);
	 } else die("Can't get user data..");
?> 
