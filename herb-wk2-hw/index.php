<!DOCTYPE html>
	<html lang="en">
	<head>
		<meta charset="UTF-8">
		<title>Herb-week2-hw</title>
		<link rel="stylesheet" href="styles.css">
		
	</head>
	<body>
			
			<header class="row clearfix">
				<div class="large-12 pull-right">
					<?php include("includes/nav.php"); ?>
				</div>
			</header>
			<br>

			<section class="row clearfix">
				<div class="large-12">
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

					} else {
						$page = $home_page;
					}

					include($page); ?>
				</div>
			</section>


			<footer class="row clearfix">
				<div class="large-12">
					<?php include("includes/nav.php"); ?>		
				</div>
			</footer>
		</div>
		
	</body>
	</html>	