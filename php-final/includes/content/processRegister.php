<?php

$name = (isset($_POST['name'])) ? $_POST['name'] : "";
$last_name = (isset($_POST['last-name'])) ? $_POST['last-name'] : "";
$image = (isset($_POST['image'])) ? $_POST['image'] : "";
$email = (isset($_POST['email'])) ? $_POST['email'] : "";
$password = (isset($_POST['password'])) ? md5($_POST['password']) : "";


// ERROR HANDLING
if ($name === "") {
	die("You must enter your first name!");
	// echo '<script>
	// 		TweenMax.to(".l-error-callout" , 0.25, {
	// 			autoAlpha: 1,
	// 			display: "block",
	// 			ease: Back.easeInOut
	// 		});
	// 	</script>';
}

if ($last_name === "") {
	die("You must enter your last name!");
}

if ($image === "") {
	die("You must enter a profile picture!");
}

if ($email === "") {
	die("You must enter your email!");
}

if ($password === "") {
	die("You must enter your password!");
}

// SQL LOGIC TO CHECK EMAILS
$emailSQL = "SELECT * FROM users WHERE email = '$email'";

if ($result = $link -> query($emailSQL)) {
	if ($result -> num_rows >= 1) {
		echo "That email already exists.";
	} else {
		// SQL LOGIC (if errors out, page will die)
		$sql = " INSERT INTO users (name, last_name, image, email, password) VALUES ('$name', '$last_name', '$image', '$email', '$password') ";

		if ($link -> query($sql) === false) {
			die ("You had a mysql error");
		} else {
			$last_inserted_id = $link -> insert_id;
			$affected_rows = $link -> affected_rows;
		}
		//echo "The user inserted was user ID: " . $last_inserted_id;
		echo "<div class='l-row'><div class='full-width'><h1>Welcome To herbbook</h1></div></div>";
		echo "<script>setTimeout(function(){window.location.href='index.php?page=home'}, 1500);</script>";
		echo '<button class="text-center">Lets Begin</button>';
	}
} else {
	// ERROR
	printf("Error Message: %s\n", $mysqli->error);
}

?>