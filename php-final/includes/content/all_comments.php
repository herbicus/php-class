

<?php

	$sql = "SELECT * FROM comments INNER JOIN users ON comments.user_id=users.id";

	// $results = mysqli_query($link, $sqlQuery);
	$results = $link -> query($sql);
	$rows = $results -> num_rows;

	while ($row = $results -> fetch_assoc()) {
		echo '<div class="comment-container">';
			echo '<div class="user-comment">';
				echo '<div class="profile-pic">' . '<img src="' . $row['image'] . '" alt="avatar"/>' . '</div>';
				echo '<div class="user-text">' . $row['name'] . " " . $row['last_name'] . '</div>';
			echo '</div>';

			echo '<div class="comment">' . $row['comment'] . '</div>';
		echo '</div>';
		echo '<hr>';
	}


?>

