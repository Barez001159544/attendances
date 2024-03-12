<?php
$error="";
$con = mysqli_connect('localhost', 'root', '','attendance system');
if(isset($_POST['name']) && isset($_POST['email']) && isset($_POST['password']) && isset($_POST['subject_name'])){
$name = $_POST['name'];
$email = $_POST['email'];
$password = $_POST['password'];
$subject_name = $_POST['subject_name'];
if($name=="AA"){
	$error="IS EQUAL TO AA";
	echo "IS EQUAL TO AA";
}else{
	$error="!NOT EQUAL TO AA!";
	echo "!NOT EQUAL TO AA!";
}
// $sql = "INSERT INTO `lecturers accounts` (`name`, email, `password`, subject_name) VALUES ('$name', '$email', '$password', '$subject_name')";

// $rs = mysqli_query($con, $sql);

// if($rs)
// {
// 	echo "Contact Records Inserted";
// }
}else{
	echo "feeling good!";
}
// }else{
	// $error="Does not contain A";
// }
?>