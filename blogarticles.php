<!DOCTYPE html>
<?php include 'includes/ieIf.php';?>
<?php include 'includes/head.php';?>
<?php include 'includes/classes/conn.php';?>
<body>
<?php
	$blog = 'activePage';
	include 'includes/navSideSection.php';
	?>
	<section class="contentSide padded">
		<h1>blog</h1>
		<div id="blogText">
			<p id="blogNav"><a href="blogindex.php">blog home</a> <a href="bloglist.php">blog list</a></p>
			<?php
			// connect to database
			$postUrl = ($_GET['blog']);

			$db = new Connection();
			$conn = $db->connection;

			$sql = "SELECT `url`, `title`, `image`, `image_alt`, `body` FROM `blog_posts` WHERE `url` = ?;";
			$preparedStatement = $conn->prepare($sql);
			$preparedStatement->execute([$postUrl]);
			$result = $preparedStatement->fetch(PDO::FETCH_ASSOC);

			echo '<h1>' . $result['title'] . '</h1>';
			echo '<div class="blogPostSection">';
			echo '<img src="' . $result['image'] . '" alt="' . $result['image_alt'] . '">' . $result['body'];

			?>
		</div>
	</section>
</body>
</html>