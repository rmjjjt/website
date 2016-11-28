<!DOCTYPE html>
<?php include 'includes/ieIf.php';?>
<?php include 'includes/head.php';?>
<?php include 'includes/classes/conn.php';?>
<body>
<?php
	$blog = 'activePage';
	include 'includes/navSideSection.php';
?>	<section class="contentSide padded">
		<h1>blog entry page</h1>
	<?php
	session_start();

	$_SESSION['user'] = $_POST['user'];
	$_SESSION['password'] = $_POST['password'];

	$user_name = $_POST['user'];
	$pass = $_POST['password'];

	$db = new Connection();
	$conn = $db->connection;

	$sql = "SELECT `user_name`, `password` FROM `users` WHERE `user_name` = ?;";
	$preparedStatement = $conn->prepare($sql);
	$preparedStatement->execute([$user_name]);
	$result = $preparedStatement->fetchAll(PDO::FETCH_ASSOC);
	if ($user_name == NULL) {
		$_SESSION['loggedIn'] = 0;
		echo "You are not logged in. Go back to <a href='bloglogin.php'>log in</a> page and try again.";
	} elseif (($_SESSION['loggedIn'] == 1) ||((($user_name == $result[0]['user_name']) && (9182 . sha1($pass) == $result[0]['password'])))) {
		$_SESSION['loggedIn'] = 1;
		echo "Hi, " . $_SESSION['user'] . ", welcome back";
		echo "<br>";
		echo "<a href='bloglogout.php'>Log Out</a><br><br>";
		include 'includes/blogForm.php';
		}   elseif (($user_name != $result[0]['user_name'])) {
		$_SESSION['loggedIn'] = 0;
		echo "Go away - you aren't registered here!";
		echo "<br>";
		echo "Go back to <a href='bloglogin.php'>log in</a> page";

	} 	   else {
			$_SESSION['loggedIn'] = 0;
			echo "Password is incorrect. Go back to <a href='bloglogin.php'>log in</a> page and try again.";
		}
	?>
	</section>
</body>
</html>