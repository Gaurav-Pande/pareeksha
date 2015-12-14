<?php
			$sname	=urldecode($_POST['sname']);
			$spass  =urldecode($_POST['spass']);
			$id1  =urldecode($_POST['id1']);
	mysql_connect("localhost","root","");
	mysql_select_db("paper");
	
	$sql=mysql_query("select * from student where name = '$sname' and password = '$spass'");
	$row=mysql_fetch_assoc($sql);
	$sid=$row['id'];
	$marks=$row['marks'];

	mysql_query("delete from student where id='$sid'");
	mysql_query("insert into student values('$sid','$sname','$spass','0','0')");
	
	$sql=mysql_query("select * from paperid where id='$id1'");
	$row=mysql_fetch_assoc($sql);
	$code=$row['code'];

	
	$sql=mysql_query("select * from givtest where code='$code' and sid='$sid'");
	$row=mysql_fetch_assoc($sql);
	$tid=$row['tid'];
	
	mysql_query("delete from givtest where code='$code' and sid='$sid'");
	mysql_query("insert into givtest values('$tid','$sid','$code','$marks')");
	
 mysql_close();	
	
?>