<?php include('sessions.php'); ?>

<?php include('includes/header.php'); ?>

			
<!-- 	<header>
		<?php include("includes/nav.php"); ?>
	</header> -->

	<section>
		<?php 
		$filename = 'includes/content/';
		$error_page = $filename . '404.php';
		$home_page = $filename . 'home.php';

		if (isset($_GET['page'])) {
			$filename = $filename . $_GET['page'] . '.php';

			if (file_exists($filename)) {
				$page = $filename;
			} else {
				$page = $error_page;
			}

			// $page = $_GET['page'];
		} else {
			$page = $home_page;
		}

		include($page); ?>
<!-- 		<div class="l-error-callout">
			<p>There Was An Error</p><br>
			<p>Perhaps You Miss Something</p>
			<button class="pull-right">Back</button>
		</div> -->
	</section>


<?php include('includes/footer.php'); ?>		
