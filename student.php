<?php
class student {
    public $f_name;
    public $l_name;

    // Method to display student details
    public function display() {
        echo"<pre>";
        echo "F_Name: " . $this->f_name . "<br>";
        echo "L_Name: " . $this->l_name . "<br>";
        echo"</pre>";
    }
}

// First student
$student1 = new student();
$student1->f_name = "nikhil";
$student1->l_name = "kathe";
$student1->display();

// Second student (optional)
$student2 = new student();
$student2->f_name = "lorens";
$student2->l_name = "bishnoee";
$student2->display();

// Print object
//echo "<pre>";
//print_r($student1);
//print_r($student2);
//echo "</pre>";
?>
