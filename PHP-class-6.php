<?php

// ===============================================Question 01:=============================================


// How much product quantity you have purchased (total purchased qty = 67)

// Calculate the total amount of all purchased items (total amount = 2650 tk).

	

$purchased_products = array(

array('name' => 'banana',  'qty' => 10, 'total_price' => 550),

array('name' => 'apple',     'qty' => 50,  'total_price' => 1500),

array('name' => 'orange',  'qty' => 7,    'total_price' => 600),

);

$product_qty = array_column($purchased_products,'qty');
$product_qty_sum  = array_sum($product_qty);
echo "Total Purchased  = $product_qty_sum <br>";

$product_price = array_column($purchased_products,'total_price');
$product_total_amount = array_sum($product_price );
echo "Total Amount  = $product_total_amount <br>";

echo "<br>";




// ========================================Question 02: ============================================


// You have to make a single array from this two arrays

	$first_email_array = ["abc@gmail.com", "xyz@gmail.com", "demo@gmail.com"]; 
    $second_email_array = ["efg@gmail.com", "xyz@gmail.com", "dummy@gmail.com"];

$arrmarge = array_merge($first_email_array,$second_email_array );

foreach($arrmarge as $single_value){
    echo "$single_value ,";
     
}
echo "<br>";







// And don’t keep any value in multiple time

$first_email_array = ["abc@gmail.com", "xyz@gmail.com", "demo@gmail.com"]; 
$second_email_array = ["efg@gmail.com", "xyz@gmail.com", "dummy@gmail.com"];
$arr_diff = array_diff($first_email_array,$second_email_array);

foreach($arr_diff as $single_diff){
    echo "$single_diff ,";
}

echo "<br>";






// ========================================Question 03: ============================================


//Split this given array into chunks 4

$citylist = array( "Black Canyon City", "Chandler", "Flagstaff", "Gilbert", "Glendale", "Globe", "Mesa", "Miami", "Phoenix", "Peoria", "Prescott", "Scottsdale", "Sun City", "Surprise", "Tempe", "Tucson", "Wickenburg" );

print_r(array_chunk($citylist, 4));
