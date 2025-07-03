<?php
class order
 {
    public $productname;
    public $productprice;
    public $productquantity;
    public $totalamount;
    public $discountedamount;

    public function Accept($productname, $productquantity)
     {
        $this->productname = $productname;
        $this->productprice = 30; // fixed price
        $this->productquantity = $productquantity;

        echo "<pre>";
        echo "Name of product customer wants to buy: " . $this->productname . "<br>";
        echo "Price of product: " . $this->productprice . "<br>";
        echo "Quantity customer wants: " . $this->productquantity . "<br>";
        echo "</pre>";
    }

    public function total()
     {
        $this->totalamount = $this->productprice * $this->productquantity;

        echo "<pre>";
        echo "Total amount: " . $this->totalamount . "<br>";
        echo "</pre>";
    }

    public function discount()
     {
        echo "<pre>";
        if ($this->totalamount > 2000) {
            $this->discountedamount = $this->totalamount * 0.50;
            echo "50% Discount applied: " . $this->discountedamount . "<br>";
        } elseif ($this->totalamount > 1000) {
            $this->discountedamount = $this->totalamount * 0.20;
            echo "20% Discount applied: " . $this->discountedamount . "<br>";
        } elseif ($this->totalamount > 500) {
            $this->discountedamount = $this->totalamount * 0.05;
            echo "5% Discount applied: " . $this->discountedamount . "<br>";
        } else {
            $this->discountedamount = 0;
            echo "No discount available. Total amount too low.<br>";
        }
        echo "</pre>";
    }

    public function display()
     {
        echo "<pre>";
        echo "Product Name: " . $this->productname . "<br>";
        echo "Quantity: " . $this->productquantity . "<br>";
        echo "Total Amount (Before Discount): " . $this->totalamount . "<br>";
        echo "Discounted Amount: " . $this->discountedamount . "<br>";
        echo "Final Amount After Discount: " . ($this->totalamount - $this->discountedamount) . "<br>";
        echo "</pre>";
    }
}

// Object creation and method calls
$cust_1 = new order();
$cust_1->Accept("Dairy Products", 100);
$cust_1->total();
$cust_1->discount();
$cust_1->display();
?>
