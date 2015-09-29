<?php
include('connection.php');
if(isset($_POST['loginClient']) or isset($_POST['loginAdmin'])){
	$user = mysql_real_escape_string(htmlentities($_POST['username']));
	$pass = mysql_real_escape_string(htmlentities(md5($_POST['password'])));

	$sql = mysql_query("SELECT * FROM user WHERE username='$user' AND password='$pass'") or die(mysql_error());
	if(mysql_num_rows($sql) == 0){
		echo 'User tidak ditemukan';
	}else{
		$row = mysql_fetch_assoc($sql);
		if($row['id'] == 1){
			$_SESSION['admin']=$user;
			echo '<script language="javascript">alert("Welcome, Lazez!"); document.location="adminPage.php";</script>';
		}else{
			$_SESSION['guest']=$user;
			echo '<script language="javascript">alert("Login Success!"); document.location="clientPage.php";</script>';
		}
	}
}
?>