<?php

$comment = $_POST['comment'];

$username = $_SESSION['id'];

$sql = "INSERT INTO comments (comment, user_id) VALUES('" . $comment . "', '" . $username . "')";

	if ($link -> query($sql) === false) {
		echo "You had a mySQL error";
	} else {
		echo "<script>window.location = 'index.php';</script>";
	}

?>
