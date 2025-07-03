<?php
class movie
{
    public $movietype;
    public $ticketprice = 200;
    public $person;
    public $total;
    public $discount;

    public function Accept($a, $b)
    {
        $this->movietype = $a;
        $this->person = $b;
    }
}

class twodimensional extends movie
{
    public function discount()
    {
        if ($this->person >= 18) {
            $this->discount = $this->ticketprice * 0.2;
        } elseif ($this->person <= 12) {
            $this->discount = $this->ticketprice * 0.5;
        } else {
            $this->total = $this->ticketprice ;
            
        }

        $this->display();
    }

    public function display()
    {
        echo "<pre>";
        echo "Movie Type  : " . $this->movietype . "<br>";
        echo "Ticket Price: " . $this->ticketprice . "<br>";
        echo "Person Age  : " . $this->person . "<br>";
        echo "Total       : " . $this->discount . "<br>";
        echo "</pre>";
    }
}

class threedimensional extends movie
{
    public function discount3d()
    {
        $this->ticketprice += 50; // Add 3D extracharge

        if ($this->person >= 18) {
            $this->discount = $this->ticketprice * 0.2;
        } elseif ($this->person <=12) {
            $this->discount = $this->ticketprice * 0.5;
        } else {
            $this->total = $this->ticketprice ;
            
        }

        $this->display();
    }

    public function display()
    {
        echo "<pre>";
        echo "Movie Type  : " . $this->movietype . "<br>";
        echo "Ticket Price: " . $this->ticketprice . "<br>";
        echo "Person Age  : " . $this->person . "<br>";
        echo "Total       : " . $this->discount . "<br>";
        echo "</pre>";
    }
}

// Objects
$s_1 = new twodimensional();
$s_1->Accept("2D", 26);
$s_1->discount();

$p_1 = new threedimensional();
$p_1->Accept("3D", 11);
$p_1->discount3d();
?>
