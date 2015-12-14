<?php

       $ques   = urldecode($_POST['ques']);
	   $selectedPaper  =urldecode($_POST['selectedPaper']);
	   $selectedQues  =urldecode($_POST['selectedQues']);
       $a   = urldecode($_POST['a']);	
       $b   = urldecode($_POST['b']);
       $c   = urldecode($_POST['c']);	    
	   $d   = urldecode($_POST['d']);
       $ans   = urldecode($_POST['ans']);		   	   
	
	mysql_connect("localhost","root","");
	mysql_select_db("paper");
	
	mysql_query("delete from $selectedPaper where no='$selectedQues'");
	mysql_query("insert into $selectedPaper values('$selectedQues','$ques','$a','$b','$c','$d','$ans')  ");
	
	echo $selectedPaper;
	echo $selectedQues;
	

	
mysql_close();
?>