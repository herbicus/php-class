<article class="row">
	<div class="large-12 center-text">
		<?php

		if (isset($_POST['first_name'])) {
			$first_name = $_POST['first_name'];
		} else {
			$first_name = "";
		}

		if (isset($_POST['last_name'])) {
			$last_name = $_POST['last_name'];
		} else {
			$last_name = "";
		}

		if (isset($_POST['email'])) {
			$email = $_POST['email'];
		} else {
			$email = "";
		}

		echo "You there, " . $_POST['first_name'] . " " . $_POST['last_name'] . ", I now have your email, it is " . $_POST['email'] . ".";

		?>
	</div>
</article>