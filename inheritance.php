<?php
class student
{
public $roll_no;
public $name;

public function Accept($a,$b){
$this->roll_no=$a;
$this->name=$b;

}}
class total extends student{
public $m1;
public $m2;
public $m3;
public $total;
public $average;
public function Average($x,$y,$z){
$this->m1=$x;
$this->m2=$y;
$this->m3=$z;
$this->total=$this->m1+$this->m2+$this->m3;
$this->average=$this->total / 3;


}
public function display(){
        echo"<pre>";
        echo "Name  : " . $this->name . "<br>";
        echo "roll: " . $this->roll_no . "<br>";
        echo "m1: " . $this->m1 . "<br>";
        echo "m2: " . $this->m2 . "<br>";
        echo "m3: " . $this->m3 . "<br>";
        echo "total: " . $this->total . "<br>";
        echo "Average: " . $this->average . "<br>";
        echo"</pre>";
}


}


$stud_1=new total();
$stud_1->Accept(1,"abc");
$stud_1->Average(99,98,96);
$stud_1->display();