<form action="index.php?page=post_comment" method="POST">
	<textarea name="comment" id="" cols="30" rows="5" placeholder="Enter What You Think We Care About..."></textarea><br/>
	
	<div class="post-container">
		<input type="submit" value="Post">
	</div>
	<div class="post-container">
		<?php 
			echo '<div class="user-post">';
				echo '<div class="user-text">' . '<small>Avatar:</small>' . '</div>';
				echo '<div class="profile-pic">' . '<img src="' . $_SESSION['profile_pic'] . '" alt="avatar"/>' . '</div>';
				echo '<div class="user-text"><small>' . $_SESSION['first_name'] . '</small></div>';
				//echo '<div class="user-text"><small>' . $_SESSION['last_name'] . '</small></div>';
			echo '</div>';
		?>
	</div>

</form>


