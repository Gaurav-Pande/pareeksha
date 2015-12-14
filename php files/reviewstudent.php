<?php

		$sname	=urldecode($_POST['sname']);
		$spass	=urldecode($_POST['spass']);
		$id1	=urldecode($_POST['id1']);
	mysql_connect("localhost","root","");
	mysql_select_db("paper");
	
	$sql=mysql_query("select * from student where name='$sname' and password='$spass'");
	$row=mysql_fetch_assoc($sql);
	$sid		=$row['id'];

	
	$sql=mysql_query("select * from paperid where id='$id1'");
	$row=mysql_fetch_assoc($sql);
	$code		=$row['code'];
	
	$sql=mysql_query("select * from givtest where sid='$sid' and code='$code'");
	$row=mysql_fetch_assoc($sql);
	$marks		=$row['marks'];
	
	print "   ID = $sid
	NAME = $sname
	MARKS= $marks";
	
?>