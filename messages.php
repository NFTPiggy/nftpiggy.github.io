<?php
// database connection code
// $con = mysqli_connect('localhost', 'database_user', 'database_password','database');

$con = mysqli_connect('localhost', 'root', '','db_contact');

// get the post records
$name = $_POST['name'];
$email = $_POST['email'];
$message = $_POST['message'];

// database insert SQL code
$sql = "INSERT INTO `tbl_contact` (`id`, `fd_name`, `fd_email`, `fd_message`) VALUES ('0', '$name', '$email', '$message')";

// insert in database 
$rs = mysqli_query($con, $sql);

if($rs)
{
	echo "Contact Records Inserted";
}

?>
