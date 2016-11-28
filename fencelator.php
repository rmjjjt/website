<?php
require('functions.php');
$fence = $_POST['firstForm'];
$posts = $_POST['posts'];
$railings = $_POST['railings'];

$fenceLength = (int)$fence - 0.10;
$number = (int)($fenceLength / 1.60);
$correctedPosts = $number + 1;

$leftoverPosts = $posts - ($railings + 1);
$leftoverRailings = $railings - ($posts - 1);

if ($leftoverPosts >= 1) {
	$postExtra = ' and you will have ' . $leftoverPosts . ' posts leftover.';
}   else {
	$postExtra = '.';
}

if ($leftoverRailings >= 1) {
	$railingsExtra = ' and you will have ' . $leftoverRailings . ' railings leftover.';
}   else {
	$railingsExtra = '.';
}
?>
<!DOCTYPE html>
<?php include 'includes/ieIf.php';?>
<?php include 'includes/head.php';?>
<head>
	<title>THE FENCELATOR!</title>
</head>
<body>
<?php
	$portfolio = 'activePage';
	include 'includes/navSideSection.php';
?>	<section class="contentSide padded">
	<header id="fencelator">THE FENCELATOR</header>
	<p id="centred"><a href="spec.php">Challenge requirements</a></p>
	<div class="question">
		<section>
			<p>Tell me how long you would like your fence to be, and I will tell you how many posts and railings you will need:</p>
			<form method="post">
				<input type="number" name="firstForm" step='00.01' value='00.00' placeholder='00.00'>metres<br>
				<input type="submit">
			</form>
			<?php

			if (howLongIsTheFence($fence) == 1) {
				echo "Please enter a value.<br>";
			} elseif (howLongIsTheFence($fence) == 2) {
				echo "Your fence must have at least one railing and two posts (1.7m).";
			}   elseif (howLongIsTheFence($fence) == 3) {
				echo 'For your fence to be ' . $fence . 'm long, you will need ' . $number . ' railings and ' . $correctedPosts . ' posts';
			}

			?></section>
		<div class="divider">
		</div>
		<p>OR...you can tell me how many posts and railings you have, and I will tell you how long your fence will be:</p>
		<section>
			<form method="post">
				How many fence posts do you have?<br>
				<input type="number" name="posts" step='01' value='00' placeholder='00' required><br>
				<br>
				How many fence railings do you have?<br>
				<input type="number" name="railings" step='01' value='00' placeholder='00' required><br>
				<input type="submit">
			</form>
			<br>
			<?php

			if (validator($posts,$railings) == 1) {
				echo "You must enter at least two posts and one railing!<br>";
			} elseif (validator($posts,$railings) == 2) {
				echo "If you have 2 posts and 1 railings, the fence will be 1.7m long.";
			}   elseif (validator($posts,$railings) == 3) {
				if ((howManyRailingsAndPosts($posts, $railings)) == 1) {
					$fenceLength = ($railings * 1.5) + (($railings + 1) * 0.1);
					echo 'If you have ' . $posts . ' posts and ' . $railings . ' railings, the fence will be ' . $fenceLength . 'm long' . $postExtra;
				}   elseif ((howManyRailingsAndPosts($posts, $railings)) == 2) {
					$fenceLength = ($posts * 0.1) + (($posts - 1) * 1.5);
					echo 'If you have ' . $posts . ' posts and ' . $railings . ' railings, the fence will be ' . $fenceLength . 'm long' . $railingsExtra;
				}   elseif ((howManyRailingsAndPosts($posts, $railings)) == 3) {
					$fenceLength = ($posts * 0.1) + (($posts - 1) * 1.5);
					echo 'If you have ' . $posts . ' posts and ' . $railings . ' railings, the fence will be ' . $fenceLength . 'm long and you will have 1 railing leftover.';
				}
			}

			?></section>
	</div>
	</section>
</body>
</html>