<?php
// Given string
$str = "madam";

// Remove spaces and convert to lowercase for accurate comparison
$cleanStr = strtolower(str_replace(' ', '', $str));

// Reverse the cleaned string
$revStr = strrev($cleanStr);

// Check if original and reversed strings are the same
if ($cleanStr === $revStr) {
    echo "$str is a palindrome.";
} else {
    echo "$str is not a palindrome.";
}
?>
