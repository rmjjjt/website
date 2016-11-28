<!DOCTYPE html>
<?php include 'includes/ieIf.php';?>
<?php include 'includes/head.php';?>
<script src="js/walky.js"></script>
<body>
<?php
    $portfolio = 'activePage';
    include 'includes/navSideSection.php';
?>
<section class="contentSide padded">
    <div id="main">
        <h1>Welcome to Mr Walky Man game</h1>
        <h2>It doesn't do anything but just get your walk on, baby!</h2>
        <p>Just use the arrow keys! He's not perfect, but it's a start. Call him v1!</p>
        <canvas id="walkyArea" width="600" height="400" style="border:1px solid #000000;">
            <script>

            </script>
        </canvas>
    </div>
</section>
</body>
</html>