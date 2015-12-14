<?php 
	
    $id		=urldecode($_POST['id1']);
    $code	=urldecode($_POST['code1']);
    $sname	=urldecode($_POST['sname']);
    $spass	=urldecode($_POST['spass']);

//	echo $id.$code.$sname.$spass;
	mysql_connect("localhost","root","");
	mysql_select_db("paper");
	$sql=mysql_query("select * from paperid WHERE id='$id' ");if(!$sql){die("e2");}
	$row=mysql_fetch_assoc($sql);
	$codematch=$row['code'];
	$teachername = $row['name'];
	 if($codematch==$code){
 //      echo $code.$row['code'];
	   
	   $sql=mysql_query("select * from teacher where name = '$teachername' ");if(!$sql){die("e3");}
	   $teacherid=$row['id'];
	   
	   $sql=mysql_query("select * from student where name = '$sname' and password='$spass'");if(!$sql){die("e4");}
	   $row=mysql_fetch_assoc($sql);
	   $studentid=$row['id'];
	   echo "equalto"; 
	   $query=mysql_query("insert into givtest values('$teacherid','$studentid','$code','0')");if(!$query){die("");}
	   
	   }else{
	   echo "notequal";
	   }
	   
	  
 mysql_close();
?>