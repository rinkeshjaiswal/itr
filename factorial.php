<?php
//hw: function to calculate factorial of given number
function factorial($num) {
    $fact = 1;

    for ($i = 1; $i <= $num; $i++) {
        $fact = $fact * $i;
    }

    return $fact;
}

// Example usage
$number = 5;
echo "Factorial of $number is: " . factorial($number);

?>
