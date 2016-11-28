<!DOCTYPE html>
<?php include 'includes/ieIf.php';?>
<?php include 'includes/head.php';?>
<body>
<?php
	$contact = 'activePage';
	include 'includes/navSideSection.php';

?>
	<section class="contentSide padded">
		<h1>contact</h1>
		<div id="formSection">
			<div id="email">
				<p>You can contact me for any information or requests at: <a href="mailto:admin@triplejdeveloping.com">admin@triplejdeveloping.com</a></p>
			</div>
			<div id="formContainer">
				<form action="email.php" method="POST">
					<p>If you would prefer, please complete the below form with any questions or requests:</p>
					<p>Name: <span id="red">*</span></p>
					<input type="text" name="name" required><br>
					<p>Email address: <span id="red">*</span></p>
					<input type="email" name="email" required><br>
					<p>Enter any questions or requests here: <span id="red">*</span></p>
					<textarea rows="05" cols="50" name="request" required></textarea><br>
					<input type="submit"><br>
					<p><span id="red">*</span> required field</p>
				</form>
			</div>
		</div>
	</section>
</body>
</html>