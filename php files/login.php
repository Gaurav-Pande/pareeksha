<?php

       $uname   = urldecode($_POST['uName']);
       $pass   = urldecode($_POST['Pass']);
	   
	 mysql_connect("localhost","root","");
	 mysql_select_db("paper");
	 $sql=mysql_query("select * from student where name='$uname' and password='$pass'");
	 if($row=mysql_fetch_assoc($sql)){
	 print "a"; 
	 
	 }

	 mysql_close();
?>