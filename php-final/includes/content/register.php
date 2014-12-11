
<header class="l-row">
	<div class="full-width">
		<h1>herbbook</h1>
		<nav>
			<ul>
				<li><a href="index.php">Home</a></li>
				<li><a href="index.php?page=logout">Log Out</a></li>
			</ul>
		</nav>
	</div>
</header>
<div class="divider"></div>


<div class="form-container">
	<form action="index.php?page=processRegister" method="POST">
		
		<input type="text" name="name" placeholder="First Name"><br/>
		<input type="text" name="last-name" placeholder="Last Name"><br/>
		<input type="text" name="email" placeholder="E-mail"><br/>
		<input type="password" name="password" placeholder="Password"><br/>
		<p class="pull-left">Choose An Avatar</p>
		<select name="image" placeholder="Choose An Avatar" class="pull-right"><br>
		  <option value="http://placekitten.com/g/200/200">Cat 1</option>
		  <option value="http://placekitten.com/g/300/300">Cat 2</option>
		  <option value="http://placekitten.com/g/600/600">Cat 3</option>
		  <option value="http://placekitten.com/g/500/500">Cat 4</option>
		</select>
		<input type="submit" value="Submit">

		<?php

		if(!$_SESSION['logged_in']) {
			echo '<div>';
			echo '<a href="index.php">Login</a>';
			echo '<div>';
		} 

		?>

	</form>
</div>

