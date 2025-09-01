

<?php
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
    "Never odd or even", // palindrome (ignores spaces)
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
    echo "Reversed: " . strrev($text) . "<br>";
    echo "Result: $result<br><br>";
}
?>
