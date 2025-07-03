<?php
class employee 
{
    public $id;
    public $f_name;
    public $salary;

    public function display()
    {
        echo"<pre>";
        echo "id: " . $this->id . "<br>";
        echo "Name: " . $this->name . "<br>";
        echo "salary: " . $this->salary. "<br>";
        echo"</pre>";
    }
}

// First employee
$emp1 = new employee();
$emp1->id = "10000xxx";
$emp1->name = "nikhil";
$emp1->salary = "1000000";
$emp1->display();

//second employee
$emp2 = new employee();
$emp2->id = "12000xxx";
$emp2->name = "viren";
$emp2->salary = "10000000";
$emp2->display();




?>