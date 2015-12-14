<?php

       $ques   = urldecode($_POST['ques']);
       $a   = urldecode($_POST['a']);	
       $b   = urldecode($_POST['b']);
       $c   = urldecode($_POST['c']);	    
	   $d   = urldecode($_POST['d']);
       $ans   = urldecode($_POST['ans']);		   
       $tname   = urldecode($_POST['tname']);		   
	
	mysql_connect("localhost","root","");
	mysql_select_db("paper");
	$sql=mysql_query("select max(code) as code from paperid where name = '$tname'");
	$row=mysql_fetch_assoc($sql);
	$code = $row['code'];
		$sql=mysql_query("select * from paperid where code='$code'");
		$row=mysql_fetch_assoc($sql);
		$tablename = $row['tname'];

	$sql=mysql_query("select max(no) as no from $tablename ");
	$row=mysql_fetch_assoc($sql);
	$no = $row['no'];echo "bef".$no."hello";
	if($no == null){ $no =1;}
	else{
	$no++;}
	mysql_query("insert into $tablename values('$no','$ques','$a','$b','$c','$d','$ans')");
	

	 mysql_close();
?>