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

?>