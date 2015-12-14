<?php

    $sname	=urldecode($_POST['sname']);
	$spass  =urldecode($_POST['spass']);
	   
	 mysql_connect("localhost","root","");
	 mysql_select_db("paper");
	 $sql=mysql_query("select * from student where name = '$sname'");
	 $row=mysql_fetch_assoc($sql);
	 if($row['name']!=null)
	 echo "a";
	 

	 else {
	 $sql=mysql_query("select max(id) as id from student");
	 $row=mysql_fetch_assoc($sql);
	 $id=++$row['id'];
	 if(mysql_query("insert into student values('$id','$sname','$spass','0','0')"))
	 echo "b";
	 
	 }
	 

	 mysql_close();
?>