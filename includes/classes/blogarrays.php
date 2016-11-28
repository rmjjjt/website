<?php

// connect to blogpost class
require('blogpost.php');

// set initial array to contain blog posts
$array = [];

// blog post arrays title, image url, image ALT text, body, summary
$array['my-first-blog'] = new blogPost('First Post', 'images/1.jpg', 'one', file_get_contents('blogposts/blogpost1.txt'), 'This is the first blog post I have created in the new, shiny PHP-driven blog. Great stuff!');
$array['my-second-blog'] = new blogPost('Second Post', 'images/2.jpg', 'two', file_get_contents('blogposts/blogpost2.txt'), 'This is the second blog post I have created in the new, shiny PHP-driven blog. Great stuff!');
$array['my-third-blog'] = new blogPost('Third Post', 'images/3.png', 'three', file_get_contents('blogposts/blogpost3.txt'), 'This is the third blog post I have created in the new, shiny PHP-driven blog. Great stuff!');
$array['my-fourth-blog'] = new blogPost('Fourth Post', 'images/4.jpg', 'four', file_get_contents('blogposts/blogpost4.txt'), 'This is the fourth blog post I have created in the new, shiny PHP-driven blog. Great stuff!');
$array['my-fifth-blog'] = new blogPost('Fifth Post', 'images/5.jpg', 'five', file_get_contents('blogposts/blogpost5.txt'), 'This is the fifth blog post I have created in the new, shiny PHP-driven blog. Great stuff!');
$array['my-sixth-blog'] = new blogPost('Sixth Post', 'images/6.png', 'six', file_get_contents('blogposts/blogpost6.txt'), 'This is the sixth blog post I have created in the new, shiny PHP-driven blog. Great stuff!');

// set a reverse array for showing most recent first where required
$arrayReverse = array_reverse($array);

// takes the three latest entries from the reverse list of blog post arrays
$topThree = array_slice($arrayReverse, 0, 3 , true);

?>