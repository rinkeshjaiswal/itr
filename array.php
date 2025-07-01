<?php
// Create an associative array for third-year diploma subjects
$subjects = array(
    "Subject1" => "Industrial Management",
    "Subject2" => "Environmental Engineering",
    "Subject3" => "Structural Design",
    "Elective" => "Renewable Energy"
);

//  Update the elective subject
$subjects["Elective"] = "Artificial Intelligence";

//  Access individual elements
echo "Core Subject: " . $subjects["Subject1"] . "<br>";
echo "Updated Elective: " . $subjects["Elective"] . "<br><br>";

// Traverse the array using foreach
echo "All Subjects:<br>";
foreach ($subjects as $key => $value) {
    echo "$key: $value<br>";
}
?>
