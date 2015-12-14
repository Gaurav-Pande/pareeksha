<?php


	$ans		=	urldecode($_POST['selectedbutton']);
	$sname		=	urldecode($_POST['sname']);
	$spass		=	urldecode($_POST['spass']);
	$id1	=urldecode($_POST['id1']);
	
	
	mysql_connect("localhost","root","");
	mysql_select_db("paper");
	$sql=mysql_query("select * from student where name='$sname' and password='$spass'");
	$row=mysql_fetch_assoc($sql);
	$id=$row['id'];
	$a=$row['sequence'];
	$marks=$row['marks'];
	
	$sql=mysql_query("select * from paperid where id = '$id1'");
	$row=mysql_fetch_assoc($sql);
	$tname=$row['tname'];
	
	$sql=mysql_query("select * from $tname where no = '$a'");
	$row=mysql_fetch_assoc($sql);
	$realans=$row['ans'];
echo "$ans";

if($realans == $ans)	{
$marks++;
}

	mysql_query("delete from student where id='$id'");
	mysql_query("insert into student values('$id','$sname','$spass','$marks','$a')");
mysql_close();

?>