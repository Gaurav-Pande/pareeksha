<?php

       $tname   = urldecode($_POST['tname']);
       $tpass   = urldecode($_POST['tpass']);
	   
	 mysql_connect("localhost","root","");
	 mysql_select_db("paper");
	 $sql=mysql_query("select * from teacher where name='$tname' and password='$tpass'");
	 if($row=mysql_fetch_assoc($sql)){
	 
	 $id=$row['id'];
	 print "a";
	 
	 
	 }

	 mysql_close();
?>