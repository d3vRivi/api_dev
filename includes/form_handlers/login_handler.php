<?php  

if(isset($_POST['login_button'])) {

	$email = filter_var($_POST['log_email'], FILTER_SANITIZE_EMAIL); //sanitize email

	$_SESSION['log_email'] = $email; //Store email into session variable 
	$password = md5($_POST['log_password']); //Get password

	$check_database_query = mysqli_query($con, "SELECT * FROM members WHERE email='$email' AND password='$password'");
	$check_admin_query = mysqli_query($con, "SELECT * FROM librarians WHERE email='$email' AND password='$password'");
	$check_login_query1 = mysqli_num_rows($check_database_query);
	$check_login_query2 = mysqli_num_rows($check_admin_query);



	if($check_login_query1 == 1) {
		$row = mysqli_fetch_array($check_database_query);
		$username = $row['email'];

		$_SESSION['email'] = $email;
		header("Location: index.php");
		exit();
	}
	else if($check_login_query2 == 1) {
		$row = mysqli_fetch_array($check_admin_query);
		$username = $row['email'];

		$_SESSION['email'] = $email;
		header("Location: dashboard.php");
		exit();
	}
	else {
		array_push($error_array, "Email or password was incorrect<br>");
	}


}

?>