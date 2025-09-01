<?php
/*
Mark White
CSD440
Mod4
*/

require 'palindromeTester.php';

// Test strings (3 palindromes, 3 not)
$testString= [
    "level",        // palindrome
    "Racecar",      // palindrome (case insensitive)
    "Stanley Yelnats", // palindrome (removes spaces/case) From book/movie holes
    "hello",        // not
    "world",        // not
    "PHP coding"    // not
];

foreach ($testString as $text) {
    $normalized = strtolower(str_replace(' ', '', $text));
    $reversed = strrev($normalized);
    $result = isPalindrome($text) ? "Palindrome" : "Not a palindrome";

    echo "Original: $text<br>";
    echo "Reversed: " . strrev($text) . "<br>";
    echo "Result: $result<br><br>";
}
?>
