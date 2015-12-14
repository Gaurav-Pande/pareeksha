<?php
			$tname	=urldecode($_POST['tname']);
			$tpass  =urldecode($_POST['tpass']);
			
	mysql_connect("localhost","root","");
	mysql_select_db("paper");
	$sql=mysql_query("select max(id) as id from paperid");
	$row=mysql_fetch_assoc($sql);
	$id = $row['id'];

	$sql=mysql_query("select * from paperid where id='$id'");
	$row=mysql_fetch_assoc($sql);
		$code = $row['code'];
		$code++;
		$id++;
	
	$table = $tname.($code);
	if(mysql_query("insert into paperid values('$id','$code','$tname','$table')") ){}
	else {}
		
		
		
		mysql_query("create table $table (no integer,
		primary key(no),
		ques varchar(40),
		a varchar(40),
		b varchar(40),
		c varchar(40),
		d varchar(40),
		ans varchar(40)
		)");
	$sql=mysql_query("select max(id) as id from paperid");
	$row=mysql_fetch_assoc($sql);
	$id = $row['id'];
	$sql=mysql_query("select * from paperid where id = '$id'");
	$row=mysql_fetch_assoc($sql);
	$code = $row['code'];
	
	$code = $row['code'];
	print "TABLE NAME $table
	NO = $id
	CODE = $code";
	 mysql_close();
?>