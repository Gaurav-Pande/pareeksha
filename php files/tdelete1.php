<?php
			$tname	=urldecode($_POST['tname']);
			$tpass  =urldecode($_POST['tpass']);
			$selectedPaper  =urldecode($_POST['selectedPaper']);
		
	mysql_connect("localhost","root","");
	mysql_select_db("paper");
	mysql_query("delete from paperid where tname='$selectedPaper' ");
	mysql_query("drop table  $selectedPaper ");
	echo $selectedPaper;
mysql_close();




?>