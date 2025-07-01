<?php

$customer_info = array(
"cust_1"=>array("cust_id"=>"111000xxx","name" => "abc", "mob_no" => "9087000000", "email" => "mmm@gmail.com","cust_product"=>"peanuts"),
"cust_2"=>array("cust_id"=>"167000xxx","name" => "xyz", "mob_no" => "9084300000", "email" => "nnn@gmail.com","cust_product"=>"almonds"),
"cust_3"=>array("cust_id"=>"117000xxx","name" => "pqr", "mob_no" => "9000090000", "email" => "ttt@gmail.com","cust_product"=>"oil"),
"cust_4"=>array("cust_id"=>"188000xxx","name" => "nmj", "mob_no" => "8760000000", "email" => "ooo@gmail.com","cust_product"=>"soyabean oil"),
"cust_5"=>array("cust_id"=>"199000xxx","name" => "shi", "mob_no" => "7000000000", "email" => "hhh@gmail.com","cust_product"=>"beans"),
);



foreach ($customer_info as $customer) {
    echo "Name: " . $customer["cust_id"] . "<br>";
    echo "Name: " . $customer["name"] . "<br>";
    echo "Mobile: " . $customer["mob_no"] . "<br>";
    echo "Email: " . $customer["email"] . "<br>";
    echo "cust_product: " . $customer["cust_product"] . "<br><br>";
}
$cust_6=array("cust_id"=>"1942000xxx","name" => "bhu", "mob_no" => "7008007000", "email" => "hoh@gmail.com","cust_product"=>"flour");

array_push($customer_info,$cust_6);
echo" after Adding an element in array using array_push():<br>";
//echo"<pre>";
// print_r($customer_info);
// echo "<br>";
// echo"</pre>";
foreach($customer_info as $customer){
    echo "Name: " . $customer["cust_id"] . "<br>";
    echo "Name: " . $customer["name"] . "<br>";
    echo "Mobile: " . $customer["mob_no"] . "<br>";
    echo "Email: " . $customer["email"] . "<br>";
    echo "cust_product: " . $customer["cust_product"] . "<br><br>";
}

array_pop($customer_info);
echo" after deleting an element in array using array_pop():<br>";
//echo"<pre>";
// print_r($customer_info);
// echo "<br>";
// echo"</pre>";
foreach($customer_info as $customer){
    echo "Name: " . $customer["cust_id"] . "<br>";
    echo "Name: " . $customer["name"] . "<br>";
    echo "Mobile: " . $customer["mob_no"] . "<br>";
    echo "Email: " . $customer["email"] . "<br>";
    echo "cust_product: " . $customer["cust_product"] . "<br>";
}echo"<hr>";
unset($customer_info["cust_1"]);
foreach($customer_info as $customer){
    echo "Name: " . $customer["cust_id"] . "<br>";
    echo "Name: " . $customer["name"] . "<br>";
    echo "Mobile: " . $customer["mob_no"] . "<br>";
    echo "Email: " . $customer["email"] . "<br>";
    echo "cust_product: " . $customer["cust_product"] . "<br><br>";
}

?>
