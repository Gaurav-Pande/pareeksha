<?php
			$tname	=urldecode($_POST['tname']);
			$tpass  =urldecode($_POST['tpass']);
			
		
	mysql_connect("localhost","root","");
	mysql_select_db("paper");
	$sql=mysql_query("SELECT * FROM paperid WHERE name='$tname' ");
	while($row=mysql_fetch_assoc($sql))
	{
	echo $row['tname']."\n";
	}
	






mysql_close();




?>