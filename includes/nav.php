<?php
if(empty($home)) {
    $home = '';
}

if(empty($portfolio)) {
    $portfolio = '';
}

if(empty($contact)) {
    $contact = '';
}

if(empty($about)) {
    $about = '';
}

if(empty($blog)) {
    $blog = '';
}

echo '<nav>' .
    '<a class="navLink ' . $home . '" href="index.php">home</a>' .
    '<a class="navLink ' . $portfolio . '" href="portfolio.php">portfolio</a>' .
    '<a class="navLink ' . $contact . '" href="contact.php">contact</a>' .
    '<a class="navLink ' . $about . '" href="about.php">about me</a>' .
    '<a class="navLink ' . $blog . '" href="blogindex.php">blog</a>' .
'</nav>';