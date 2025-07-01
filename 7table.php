<?php
$i = 1;
$number = 7;

echo "Multiplication Table of $number:<br>";

while ($i <= 10) {
    $result = $number * $i;
    echo "$number * $i = $result<br>";
    $i++;
}
?>
