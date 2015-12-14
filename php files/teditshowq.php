<?php
			$tname	=urldecode($_POST['tname']);
			$tpass  =urldecode($_POST['tpass']);
			$selectedPaper  =urldecode($_POST['selectedPaper']);
			$selectedQues  =urldecode($_POST['selectedQues']);

	mysql_connect("localhost","root","");
	mysql_select_db("paper");
	$sql=mysql_query("SELECT * FROM $selectedPaper WHERE no='$selectedQues' ");
	$row=mysql_fetch_assoc($sql);
	$ques=$row['ques'];
	$a=$row['a'];
	$b=$row['b'];
	$c=$row['c'];
	$d=$row['d'];
	$ans=$row['ans'];
	echo $ques."\n";
	echo $a."\n";
	echo $b."\n";
	echo $c."\n";
	echo $d."\n";
	echo $ans;
mysql_close();

?>