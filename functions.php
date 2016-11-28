<?php

/**
 * Calculates the minimum number of posts and railings the user will need to build the required length fence
 *
 * @param $fence
 *
 */
function howLongIsTheFence($fence)
{
    if ($fence === null) {
    } elseif ((float)$fence == 0) {
        return 1;
    } elseif ((round($fence, 2)) >= 00.01 && (round($fence, 2)) < '01.70'){
        return 2;
    } else {
        return 3;
    }
}

/**
 * Checks correct values have been entered. Returns a value that can be checked depending on what is entered
 *
 * @param $posts
 * @param $railings
 * @return int
 */
function validator($posts, $railings)
{
    if ($posts === null && $railings === null) {
    } elseif (((int)$posts <= 1) || (int)$railings == 0) {
        return 1;
    }   elseif ($posts == 2 && $railings == 1){
            return 2;
    }    else {
            return 3;
    }
}

/**
 * Comparisons and outputs - checks ratio of posts:railings and railings to posts. Calculates length and leftovers
 *
 * @param $posts
 * @param $railings
 */
function howManyRailingsAndPosts($posts, $railings)
{
        if ($posts > $railings) {
            return 1;
    }   elseif ($posts < $railings) {
            return 2;
    }   elseif ($posts == $railings) {
            return 3;
    }
}

?>