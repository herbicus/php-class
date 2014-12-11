<form action="index.php?page=post_comment" method="POST">
	<textarea name="comment" cols="30" rows="5" placeholder="Enter What You Think We Care About..."></textarea><br/>
	
	<div class="post-container">
		<input type="submit" value="Post">
	</div>

	<div class="post-container">
		<div class="user-post">
			<div class="user-text">
				<p>Avatar</p>
			</div>
			<div class="profile-pic">
				<img src="<?php  echo $_SESSION['profile_pic'] ?>" alt="avatar">
			</div>
			<div class="user-text">
				<p><?php  echo $_SESSION['first_name'] ?></p>
			</div>
		</div>
	</div>

</form>
