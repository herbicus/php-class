<header class="l-row">
	<div class="full-width">
		<h1>herbbook</h1>
		<nav>
			<ul>
				<li><a href="index.php">Home</a></li>
				<li><a href="index.php?page=users">Users</a></li>
				<li><a href="index.php?page=logout">Log Out</a></li>
			</ul>
		</nav>
	</div>
</header>
<div class="divider"></div>

<div class="form-container">
	<form action="index.php?page=processLogin" method="POST">
		<input type="text" name="email" placeholder="Email">
		<input type="password" name="password" placeholder="Password">
		<input type="submit" value="Log In">
		<?php

		if(!$_SESSION['logged_in']) {
			// If the user is logged in, do not show register
			echo '<div>';
			echo '<a href="index.php?page=register">Register</a>';
			echo '</div>';
			
		} 
		
		?>
	</form>
</div>


	