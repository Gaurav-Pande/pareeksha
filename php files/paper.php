<?php

		$sname	=urldecode($_POST['sname']);
		$spass	=urldecode($_POST['spass']);
		$id1	=urldecode($_POST['id1']);
	mysql_connect("localhost","root","");
	mysql_select_db("paper");
	$sql=mysql_query("select * from student where name='$sname' and password='$spass'");if(!$sql){die("e1");}
	$row=mysql_fetch_assoc($sql);
	$aseq=$row['sequence'];
	$aseq++;
	$id=$row['id'];
	$marks=$row['marks'];
	
	$sql=mysql_query("select * from paperid where id='$id1'");
	$row=mysql_fetch_assoc($sql);
	$tname=$row['tname'];
	$sql1=mysql_query("select max(no) as no from $tname ");
		$row1=mysql_fetch_assoc($sql1);
		$no1=$row1['no']+1;
	if($no1==$aseq){echo "z"; }
	else {
	$sql=mysql_query("select * from $tname where no='$aseq'");if(!$sql){die("e2");}
	$row=mysql_fetch_assoc($sql);
	$no=$row['no'];
	$ques=$row['ques'];
	$a=$row['a'];
	$b=$row['b'];
	$c=$row['c'];
	$d=$row['d'];
	print "$no .$ques ?
	A.$a
	B.$b
	C.$c
	D.$d";
	$sql=mysql_query("delete from student where id='$id'");
	$sql=mysql_query(" insert into student values('$id','$sname','$spass','$marks','$aseq') ");
	}
mysql_close();

?>