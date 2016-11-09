
<?php  
require_once('connect.php');

$dup = mysql_query("SELECT email FROM users WHERE email='".$_REQUEST['email']."'");
       /* 
		if (mysql_num_rows($dup) > 0){
            echo '<b>email Already Used.</b>';
        }else{*/
			 
			 $insert_sql = "INSERT INTO users (email,postDate,urlMain,urlThumb,wallSpot,slideNumber) " .
							
                   "VALUES ('{$_REQUEST['email']}', '{$_REQUEST['postDate']}', " .
							"'{$_REQUEST['urlMain']}', '{$_REQUEST['urlThumb']}', " .
							"'{$_REQUEST['wallSpot']}','{$_REQUEST['slideNumber']}'".
				    		");";
			
			
			$result = mysql_query($insert_sql);
			$id = mysql_insert_id();
			echo $id;    
           
		//}

?> 
