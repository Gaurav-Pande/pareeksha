<?php

    $tname	=urldecode($_POST['tname']);
	$tpass  =urldecode($_POST['tpass']);
	   
	 mysql_connect("localhost","root","");
	 mysql_select_db("paper");
	 $sql=mysql_query("select * from teacher where name = '$tname'");
	 $row=mysql_fetch_assoc($sql);
	 if($row['name']!=null)
	 echo "a";
	 

	 else {
	 $sql=mysql_query("select max(id) as id from teacher");
	 $row=mysql_fetch_assoc($sql);
	 $id=++$row['id'];
	 if(mysql_query("insert into teacher values('$id','$tname','$tpass')"))
	 echo "b";
	 
	 }
	 

	 mysql_close();
?>