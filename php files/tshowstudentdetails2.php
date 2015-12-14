<?php
			$tname	=urldecode($_POST['tname']);
			$tpass  =urldecode($_POST['tpass']);
			$selectedPaper  =urldecode($_POST['selectedPaper']);
	mysql_connect("localhost","root","");
	mysql_select_db("paper");
	
	$sql=mysql_query("SELECT * FROM paperid where tname = '$selectedPaper' ");
	$row=mysql_fetch_assoc($sql);
	$code=$row['code'];
	$sql=mysql_query("SELECT * FROM paperid join givtest using(code) where code = $code ");
	while($row=mysql_fetch_assoc($sql))
	{$id=$row['sid'];
	$sql2=mysql_query("SELECT * FROM student where id ='$id' ");
	$row2=mysql_fetch_assoc($sql2);
	echo $row['sid']."					".$row2['name']."				".$row['marks']."\n";
	}	
		


mysql_close();








?>