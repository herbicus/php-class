<?php  $_SESSION['profile_pic'] ?>

<?php 


if ($_SESSION['logged_in']) {

?>


<header class="l-row">
	<div class="full-width">
		<h1>herbbook</h1>
		<nav>
			<ul>
				<?php  
				//echo '<li>' . '<img class="nav-pic" src="' . $_SESSION['profile_pic'] . '" alt="avatar"/>' . '</li>';?>
				<li><img src=" <?php  echo $_SESSION['profile_pic'] ?>" alt="" class="nav-pic"></li>
				<li><a href="index.php">Home</a></li>
				<li><a href="index.php?page=users">Users</a></li>
				<li><a href="index.php?page=logout">Log Out</a></li>
			</ul>
		</nav>
	</div>
</header>
<div class="divider"></div>


<section class="l-row clearfix">
	<aside class="sidebar">
		<div class="user-text">
			<?php echo $_SESSION['first_name'] . " " . $_SESSION['last_name'] ?> 
		</div>
		<div class="profile-pic">
			<img src=" <?php  echo $_SESSION['profile_pic'] ?>" alt="">
		</div>
		<br>
		<p> Views: <?php echo  $_SESSION['views']; ?></p>
	</aside>

	<section class="main-container clearfix">

	<?php
	$sql = "SELECT * FROM  users";

	// $results = mysqli_query($link, $sqlQuery);
	$results = $link -> query($sql);
	$rows = $results -> num_rows;

	while ($row = $results -> fetch_assoc()) {
		echo '<div class="user">';
			echo '<div class="profile-pic">' . '<img src="' . $row['image'] . '" alt="avatar"/>' . '</div>';
			echo '<div class="user-text">' . $row['name'] . " " . $row['last_name'] . '</div>';
		echo '</div>';
	}

	} else {
		include('login.php');
	}
		?>

	</section>
</section>
