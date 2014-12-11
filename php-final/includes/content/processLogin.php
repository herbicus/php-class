<?php

$email = (isset($_POST['email'])) ? $_POST['email'] : "";
$password = (isset($_POST['password'])) ? md5($_POST['password']) : "";

// SQL LOGIC TO CHECK EMAILS

$emailSQL = "SELECT * FROM users WHERE email = '$email'";

$results = $link -> query($emailSQL);
$rows = $results -> num_rows;


if ($rows >= 1 ) {
	while ($row = $results -> fetch_assoc()) {
		if($row['password'] === $password) {
			$_SESSION['id'] = $row['id'];
			$_SESSION['profile_pic'] = $row['image'];
			$_SESSION['first_name'] = $row['name'];
			$_SESSION['last_name'] = $row['last_name'];
			$_SESSION['logged_in'] = TRUE;
			echo "<script>window.location = 'index.php';</script>";
		} else {
			echo '<div class="l-row">';
				echo '<div class="full-width center-text"><h1>You have entered the wrong password.</h1><br/>';
				echo '<h2><a href="index.php">Try Again</a>' . ' | ' . '<a href="index.php?page=register">Register</a></h2></div>';
			echo '</div>';
		}
	}
} else {
	// EMAIL NOT FOUND IN DATABASE, DISPLAY ERROR
	echo '<div class="l-row">';
		echo '<div class="full-width center-text"><h1>Sorry, that email is not registered</h1><br/>';
		echo '<h2><a href="index.php">Try Again</a>' . ' | ' . '<a href="index.php?page=register">Register</a></h2></div>';
	echo '</div>';

}

?>



