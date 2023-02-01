<?php 
if(isset($_REQUEST["save"]))
{
	$name=$_REQUEST['name'];
	$email=$_REQUEST['email'];
	$subject=$_REQUEST['subject'];
	$con=mysqli_connect("localhost","root","","school");
	$qry=mysqli_query($con,"insert into student (name,email) values('$name','$email')");
	$student_id=mysqli_insert_id($con);

	$qry2=mysqli_query($con,"insert into course(student_id,subject) values('$student_id','$subject')");

	
	echo "Data Saved";
}

?>