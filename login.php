<?php
	include_once 'header.php';
	include 'includes/functions.inc.php';
?>

		<section class="login-form1">
			<h2 class="h2Login">Log in</h2>

		<div class="login-form">

			<form action="includes/login.inc.php" method="post">
				<input type="text" name="uid" placeholder="Username/Email..."><br>
				<input type="password" name="pwd" placeholder="Password..."><br>
				<button type="submit" name="submit" class="btn">Log in</button>
			</form>
			<center>
				<h1>For a better experience , to rate my portfolio and rate it you must sign in </h1>
			</center>
			
		</div>
			<?php


			// blockReLogin();

				if (isset($_GET["error"])) {
					if ($_GET["error"] == "emptyinput") {
						echo "<p>Fill in all fields!</p>";
					}
					else if ($_GET["error"] == "wronglogin") {
						echo "<p>Incorrect login information!</p>";
					}
				}
			?>
		</section>

		
