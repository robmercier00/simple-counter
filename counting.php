<?php
/**
 * Simple counting function that prints out 1 to 100.
 * For multiples of 3, instead print "Threes"
 * For multiples of 5, instead print "Fives"
 * For multiples of both 3 AND 5, print "Threes_Fives"
 */
for ($i = 1; $i <= 100; $i++) {
    $threes = false;
    $fives = false;
    if ((int) $i % 3 == 0) {
        $threes = true;
    }
    if ((int) $i % 5 == 0) {
        $fives = true;
    }
    if ($threes && !$fives) {
        echo "Threes\r\n";
    } elseif (!$threes && $fives) {
        echo "Fives\r\n";
    } elseif ($threes && $fives) {
        echo "Threes_Fives\r\n";
    } else {
        echo $i . "\r\n";
    }
}
