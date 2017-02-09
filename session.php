<?php
// establish connection with server
require ('mysqli_connect.php');

session_start();
// storing session
$user_check=$_SESSION['login_user'];
//SQL query to fetch complete information of user
$ses_sql=mysqli_query("select email_address from user where email_address ='$user_check'");
$row = mysqli_fetch_assoc($ses_sql);
$login_session = $row['email_address'];
if(!isset($login_session)){
	mysqli_close();
	header('Location: product.php');
}
?>