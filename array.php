<?php
// Step 1: Create an associative array for third-year diploma subjects
$subjects = array(
    "Subject1" => "Industrial Management",
    "Subject2" => "Environmental Engineering",
    "Subject3" => "Structural Design",
    "Elective" => "Renewable Energy"
);

// Step 2: Update the elective subject
$subjects["Elective"] = "Artificial Intelligence";

// Step 3: Access individual elements
echo "Core Subject: " . $subjects["Subject1"] . "<br>";
echo "Updated Elective: " . $subjects["Elective"] . "<br><br>";

// Step 4: Traverse the array using foreach
echo "All Subjects:<br>";
foreach ($subjects as $key => $value) {
    echo "$key: $value<br>";
}
?>
