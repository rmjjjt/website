<!DOCTYPE html>
<?php include 'includes/ieIf.php';?>
<?php include 'includes/head.php';?>
<body>
<?php
$blog = 'activePage';
include 'includes/navSideSection.php';
?>	<section class="contentSide padded">
    <h1>blog entry page</h1>
    <?php
    session_start();
    if ($_SESSION['loggedIn'] == 1) {
        echo "Hi, " . $_SESSION['user'] . ", welcome back";
        echo "<br>";
        echo "<a href='bloglogout.php'>Log Out</a><br><br>";

        $url = $_POST['url'];
        $title = $_POST['title'];
        $image = $_POST['image'];
        $image_alt = $_POST['image_alt'];
        $body = $_POST['body'];
        $summary = $_POST['summary'];

        $servername = "localhost";
        $username = "cl57-rmjjjt";
        $password = "cc.mn3zB2";

        $conn = new PDO("mysql:host=$servername;dbname=cl57-rmjjjt", $username, $password);

        $sql = "INSERT INTO `blog_posts` (`url`, `title`, `image`, `image_alt`, `body`, `summary`) VALUES (?, ?, ?, ?, ?, ?);";
        $preparedStatement = $conn->prepare($sql);
        $preparedStatement->execute([$url, $title, $image, $image_alt, $body, $summary]);
    
        echo 'Blog Post successful!';
    }
    ?>
</section>
</body>
</html>