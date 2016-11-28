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
		<?php
			echo '<p id="blogNav"><a href="blogindex.php">blog home</a> <a href="bloglist.php" class="' . $blog . '">blog list</a></p>';
		?>
		<h2>latest blog posts:</h2>
		<div class="blogContainer">
			<div class="blogSection">
				<?php
				// connect to database
				$db = new Connection();
				$conn = $db->connection;

				$sql = "SELECT `url`, `title`, `summary` FROM `blog_posts` ORDER BY `id` DESC;";
				$preparedStatement = $conn->query($sql);
				$result = $preparedStatement->fetchAll(PDO::FETCH_NUM);
				// extracts url, title and summary for all blog posts and lists them most recent first
				foreach($result as $key => $value) {
					echo '<div class="blogPost"><a href=blogarticles.php?blog=' . $value[0] . '>' . $value[1] . '</a><br><p>' . $value[2] . '</p>';
				}
				?>
		</div>
	</section>
</body>
</html>