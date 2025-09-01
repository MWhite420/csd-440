

<?php
/*
Mark White
CSD440
Mod4
*/

// Function to test if a string is a palindrome
function isPalindrome($string) {
    // Normalize: lowercase and remove spaces
    $normalized = strtolower(str_replace(' ', '', $string));
    // Reverse string
    $reversed = strrev($normalized);
    // Compare
    return $normalized === $reversed;
}

// Test strings (3 palindromes, 3 not)
$testString= [
    "level",        // palindrome
    "Racecar",      // palindrome (case insensitive)
    "Stanley Yelnats", // palindrome (removes spaces/case) From book/movies
    "hello",        // not
    "world",        // not
    "PHP coding"    // not
];

// Run tests
foreach ($testString as $text) {
    $normalized = strtolower(str_replace(' ', '', $text));
    $reversed = strrev($normalized);
    $result = isPalindrome($text) ? "Palindrome" : "Not a palindrome";

    echo "Original: $text<br>";
    echo "Reversed: $reversed <br>";
    echo "Result: $result<br><br>";
}
?>
