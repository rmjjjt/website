<!DOCTYPE html>
<?php include 'includes/ieIf.php';?>
<?php include 'includes/head.php';?>
<body>
<?php
	$blog = 'activePage';
	include 'includes/navSideSection.php';
?>	<section class="contentSide padded">
		<h1>blog</h1>
	<?php
	session_start();
	session_destroy();
	echo 'You are logged out.';
	echo "<br>";
	echo "Go back to <a href='bloglogin.php'>log in</a> page";
	?>
		</div>
	</section>
</body>
</html>