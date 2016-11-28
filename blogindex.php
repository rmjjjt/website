<!DOCTYPE html>
<?php include 'includes/ieIf.php';?>
<?php include 'includes/head.php';?>
<?php include 'includes/classes/conn.php';?>
<body>
<?php
	$blog = 'activePage';
	include 'includes/navSideSection.php';
?>	<section class="contentSide padded">
		<h1>blog</h1>
	<?php
		echo '<p id="blogNav"><a href="blogindex.php" class="' . $blog . '">blog home</a> <a href="bloglist.php">blog list</a></p>';
	?>
		<div id="blogHeader">
			<p>Creating a blog was the project for the Basic PHP module (this portfolio site was the project for HTML and CSS
			module. The requirement was to build a blog using PHP that will show the three most recent posts on a specific
			page, have a page that lists all blog posts, then display each blog with a search engine friendly URL. <del>There
			is no database here - all posts are stored in text files and accessed using PHP</del> This was then updated from
			being stored in text files to using a MySQL database.</p>
		</div>
		<h2>latest blog posts:</h2>
		<div class="blogContainer">
			<?php
			// connect to database
			$db = new Connection();
			$conn = $db->connection;

			$sql = "SELECT `url`, `title`, `image`, `image_alt`, `summary` FROM `blog_posts` ORDER BY `id` DESC LIMIT 3;";
			$preparedStatement = $conn->query($sql);
			$result = $preparedStatement->fetchAll(PDO::FETCH_NUM);

			foreach($result as $key => $value) {
				echo '<div class="blogPost"><a href=blogarticles.php?blog=' . $value[0] . '>' . $value[1] . '</a><br><img src="' . $value[2] . '" alt="' . $value[3] . '"><p>' . $value[4] . '</p></div>';
			}
			?>
		</div>
	</section>
</body>
</html>