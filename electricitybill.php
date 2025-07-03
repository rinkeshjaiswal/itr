<?php  

class electricity {
    public $customername;
    public $meternumber;
    public $currentreading;
    public $lastreading;
    public $totalunit;
    public $unitprice;
    public $bill;

    public function Accept($customername, $meternumber, $currentreading, $lastreading)
    {
        $this->customername = $customername;
        $this->meternumber = $meternumber;
        $this->currentreading = $currentreading;
        $this->lastreading = $lastreading;
    }

    public function Calculate()
    {
        $this->totalunit = $this->currentreading - $this->lastreading;
        $this->unitprice = 15;
        $this->bill = $this->unitprice * $this->totalunit;
    }

    public function Display()
    {
       // echo "<pre>";
        echo "Name of customer : " . $this->customername . "<br>";
        echo "Meter number of customer: " . $this->meternumber . "<br>";
        echo "Current Reading of electricity meter: " . $this->currentreading . "<br>";
        echo "Last Reading of electricity meter: " . $this->lastreading . "<br>";
        echo "Total number of electricity's units consumed in this month: " . $this->totalunit . "<br>";
        echo "Price of each unit of meter: " . $this->unitprice . "<br>";
        echo "Amount to be paid for this month: " . $this->bill . "<br>";
        //echo "</pre>";
    } 
}

// Object creation and method calls
$cust_1 = new electricity();
$cust_1->Accept("Parth Kulkarni", 12588730, 4569, 4500);
$cust_1->Calculate();
$cust_1->Display();
?>
