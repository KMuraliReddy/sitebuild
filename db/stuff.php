<?php
require_once('conn.php');
function get_stufs(){
	global $mysqli;
	$query_string='SELECT * FROM stuff';
	$res=$mysqli-> query($query_string);
	$result=array();
	
	if($res && ($res-> num_rows > 0)) 
	{
		
		while($row = $res->fetch_assoc())
		{
			$result[]=$row;
		}
	}	
return $result;	
}
/* $trial=get_stufs();
print_r($trial); */