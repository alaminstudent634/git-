<?php

//================================================== Question 01: ==================================================




// [12,34,2,6,78] Indexed arrays 

$allNumber = [12,34,2,6,78];
$count = 0;
foreach($allNumber as $singlenumber){

    for($i=2; $i<$singlenumber; $i++){
          if($singlenumber%$i==0){
              $count++;
              break;
          }

    }
 if($count==0){
    echo "prime Number <br>";
 }else{
    echo "Not Prime <br>";
}


}





//============================================ Question 02: ===============================================


//this is Associative arrays type 

$allProductInfo = [
    ['Product Name ' => 'Hbq i7s tws', 'Brand ' => 'Non Brand', 'Pric e' => 264],
    ['Product Name ' => 'Nokia 105 DS 4G', 'Brand ' => 'Nokia Bangladesh', 'Price ' => 2,268],
    ['Product Name ' => 'Nokia 225 4G DS 2020 Phone', 'Brand ' => 'Nokia', 'Price ' => 3,505],
    ['Product Name ' => 'Nokia 8000 DS ', 'Brand' => 'Non Brand ', 'Price' => 6,701],
    ['Product Name ' => 'Nokia 150 DS 2020   ', 'Brand ' => 'Nokia Bangladesh', 'Price ' => 3,196],
];

foreach($allProductInfo as $singleproduct){
    echo "<br>";
    foreach($singleproduct as $key => $product){
        echo  $key, $product;
        
    }
}




//========================================Question 03: =============================================

// Find the maximum value from this array.
echo "<br>";
$number= array(0,10,80,67,60,89,91,56,45,30,95,83,99);
$num = 0;
foreach ($number as $key=>$val)
 {
    if ($val > $num ) {
        $num  = $val;
    }
}
echo $num;




// ================================================Question 04:======================================================= 

// 		Let’s traverse this array(0,10,80,67,60,89,91,56,45,30,95,83,99) and print 0 index then skip 1 index again print 2 skip 3….

$arr = array(0,10,80,67,60,89,91,56,45,30,95,83,99);

foreach($arr as $key=> $singleArr){

if ($key%2) {
    continue;
}
echo" $singleArr  <br>";


}

