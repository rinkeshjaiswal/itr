<?php

// Define a class named Student

//class can only contain properties and methods!

class Student {
    // Properties (data members)
    public $name;
    public $roll;
    public $marks;

    // Method to set data
    public function setDetails($n, $r, $m)
     {
        $this->name = $n;
        $this->roll = $r;
        $this->marks = $m;
     }

//In PHP, $this is a special variable used inside a class to refer to the current object 
    
// (the object that is calling the method or accessing the property).
    
// Method to display data

       public function display()
        {
        echo "Name: " . $this->name . "<br>";
        echo "Roll No: " . $this->roll . "<br>";
        echo "Marks: " . $this->marks . "%<br>";
        }
}

// Create an object of the class

$student1 = new Student();  // Object creation
$student1->setDetails("Ravi", 101, 87.5);  // Setting values
$student1->display();  // Calling method
?>
