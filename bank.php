
<?php

class bank
{
    public $id;
    public $name;
    public $balance;
    public $depositamount;
    public $currentbalance;
    public $debitamount;

    // Accepts account id, name, and initial balance
    public function Accept($id, $name, $balance)
    {
        $this->id = $id;
        $this->name = $name;
        $this->balance = $balance;

        echo "<pre>";
        echo "ID of customer: " . $this->id . "<br>";
        echo "Name of customer: " . $this->name . "<br>";
        echo "Initial balance: " . $this->balance . "<br>";
        echo "</pre>";
    }

    public function deposit($amount)
    {
        echo "<pre>";
        $this->depositamount = $amount;
        $this->balance += $this->depositamount;
        echo "Deposited amount: " . $this->depositamount . "<br>";
        echo "Balance after deposit: " . $this->balance . "<br>";
        echo "</pre>";
    }

    public function withdrawl($amount)
    {
        echo "<pre>";
        $this->debitamount = $amount;
        echo "Amount to withdraw: " . $this->debitamount . "<br>";

        if ($this->debitamount > $this->balance) {
            echo "Your balance is lower than the debit amount.<br>";
        } else {
            $this->balance -= $this->debitamount;
            echo "Balance after withdrawal: " . $this->balance . "<br>";
        }
        echo "</pre>";
    }
}

// Object creation and method calls
$cust_1 = new bank();
$cust_1->Accept(983456000, "Nikhil Khate", 100000);
$cust_1->deposit(9000);
$cust_1->withdrawl(6000);

?>
