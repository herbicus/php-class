

<?php
	if ($_SESSION['logged_in']) {
?>

<header class="l-row">
	<div class="full-width">
		<h1>herbbook</h1>
		<nav>
			<ul>
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
		include('comments.php');
		include('all_comments.php');

	} else {
		include('login.php');
	}
	?>

	</section>
</section>
