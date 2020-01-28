<?php 
	session_start();

	// variable declaration
	$EmpId = "";
	$UserId="";
	$email    = "";
	$errors = array(); 
	$_SESSION['success'] = "";

	// connect to database
	$db = mysqli_connect('localhost', 'root', '', 'mail');

	// REGISTER USER
	if (isset($_POST['reg_user'])) {
		// receive all input values from the form
		$EmpId = mysqli_real_escape_string($db, $_POST['EmpId']);
		$UserId = mysqli_real_escape_string($db, $_POST['UserId']);
		$Email = mysqli_real_escape_string($db, $_POST['Email']);
		$password = mysqli_real_escape_string($db, $_POST['password']);
		$password_1 = mysqli_real_escape_string($db, $_POST['password_1']);

		// form validation: ensure that the form is correctly filled
		if (empty($EmpId)) { array_push($errors, "EmpId is required"); }
			if (empty($UserId)) { array_push($errors, "UserId is required"); }
		if (empty($Email)) { array_push($errors, "Email is required"); }
		if (empty($password)) { array_push($errors, "Password is required"); }

		if ($password != $password_1) {
			array_push($errors, "The two passwords do not match");
		}

		// register user if there are no errors in the form
		if (count($errors) == 0) {
			$password = md5($password_1);//encrypt the password before saving in the database
			$password_1=md5($password);
			$query = "INSERT INTO login (EmpId,UserId, Email, password,password_1) 
					  VALUES('$EmpId','$UserId','$Email', '$password','$password_1')";
			mysqli_query($db, $query);

			$_SESSION['EmpId'] = $EmpId;
			$_SESSION['success'] = "You are now logged in";
			header('location: table.php');
		}

	}

	// ... 

	// LOGIN USER
	if (isset($_POST['login_user'])) {
		$EmpId = mysqli_real_escape_string($db, $_POST['EmpId']);
		$password = mysqli_real_escape_string($db, $_POST['password']);

		if (empty($EmpId)) {
			array_push($errors, "Username is required");
		}
		if (empty($password)) {
			array_push($errors, "Password is required");
		}

		if (count($errors) == 0) {
			$password = md5($password);

			$query = "SELECT * FROM login WHERE EmpId='$EmpId' OR '$UserId' AND password='$password'";
			$results = mysqli_query($db, $query);

			if (mysqli_num_rows($results) == 1) {
				$_SESSION['EmpId'] = $EmpId;
				$_SESSION['success'] = "You are now logged in ";
				header('location: doc.php');
			}else {
				array_push($errors, "Wrong username/password combination");
			}
		}
	}

?>