<!DOCTYPE html>
<?php include 'includes/ieIf.php';?>
<?php include 'includes/head.php';?>
<body>
<?php
	$blog = 'activePage';
	include 'includes/navSideSection.php';
?>	<section class="contentSide padded">
		<h1>blog entry login</h1>
	<?php
		echo '<p id="blogNav"><a href="blogindex.php" class="' . $blog . '">blog home</a> <a href="bloglist.php">blog list</a></p>';
	?>
		<h2>latest blog posts:</h2>
		<div class="blogContainer">
			<form action="blogaccount.php" method="POST">
				Login here:<br>
				<br>
				User name: *<br>
				<input type="text" name="user" required><br>
				Password: *<br>
				<input type="password" name="password" required><br>
				<input type="submit"><br>
				* = required
			</form>
		</div>
	</section>
</body>
</html>