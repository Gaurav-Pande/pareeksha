<?php
			$tname	=urldecode($_POST['tname']);
			$tpass  =urldecode($_POST['tpass']);
			$selectedPaper  =urldecode($_POST['selectedPaper']);
	mysql_connect("localhost","root","");
	mysql_select_db("paper");
	
	$sql=mysql_query("SELECT * FROM $selectedPaper ");
	while($row=mysql_fetch_assoc($sql))
	{
	echo $row['no'].". ".$row['ques']."\n";
	}	
		


mysql_close();








?>