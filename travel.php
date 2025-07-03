<?php
class customer
{
    public $customername;
    public $mobile_no;
    public $starting_destination;
    public $ending_destination;
    public $distance;
    public $vehicle_type;
    public $price_per_km;
    public $total_expenses;

    public function Accept($a, $b)
    {
        $this->customername = $a;
        $this->mobile_no = $b;
    }
}

class tours_n_travels extends customer
{
    public function destination($x, $y)
    {
        $this->starting_destination = $x;
        $this->ending_destination = $y;
    }

    public function vehicle_type($z)
    {
        switch ($z) {
            case 1:
                $this->vehicle_type = "MINIBUS";
                return "You chose vehicle: MINIBUS";
            case 2:
                $this->vehicle_type = "TRAVELLING VAN";
                return "You chose vehicle: TRAVELLING VAN";
            case 3:
                $this->vehicle_type = "REGULAR SLEEPER TRAVELS";
                return "You chose vehicle: REGULAR SLEEPER TRAVELS";
            default:
                $this->vehicle_type = "NONE";
                return "You didn't choose a valid option";
        }
    }
}

class expenses extends tours_n_travels
{
    public function distance_price()
    {
        if ($this->vehicle_type == "MINIBUS") {
            $this->price_per_km = 23;
        } elseif ($this->vehicle_type == "TRAVELLING VAN") {
            $this->price_per_km = 18;
        } elseif ($this->vehicle_type == "REGULAR SLEEPER TRAVELS") {
            $this->price_per_km = 30;
        } else {
            echo "<pre>YOU HAVEN'T CHOSEN A VALID VEHICLE YET</pre>";
        }
    }

    public function total_expenses($e)
    {
        $this->distance = $e;
        $this->distance_price(); // Set price_per_km first
        $this->total_expenses = $this->distance * $this->price_per_km;
    }

    public function display()
    {
        echo "Customer Name: " . $this->customername . "<br>";
        echo "Mobile No: " . $this->mobile_no . "<br>";
        echo "Starting Destination: " . $this->starting_destination . "<br>";
        echo "Ending Destination: " . $this->ending_destination . "<br>";
        echo "Distance: " . $this->distance . " km<br>";
        echo "Vehicle Type: " . $this->vehicle_type . "<br>";
        echo "Price per KM: ₹" . $this->price_per_km . "<br>";
        echo "Total Expenses: ₹" . $this->total_expenses . "<br>";
    }
}

// --------- Execution ---------
$cust_1 = new expenses();
$cust_1->Accept("Samruddhi Gawali", 9807548731);
$cust_1->destination("Ahmednagar", "Pune");
echo $cust_1->vehicle_type(3) . "<br>"; 
$cust_1->total_expenses(130); 
$cust_1->display();
?>
