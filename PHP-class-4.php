<?php
/**
 *  
 * 
 *================================================Question 01:============================================

 *contains all days of the running month
 *
 * 
 */



$running_month_days = date("t");

for ($day = 1; $day<=$running_month_days; $day++){
  
  
    echo date("M")," $day  <br/>";
}





//==================================== Question 02:============================================

/**
 * 
 *  print out only the odd number within 1-100.
 * 
 */
$min = 1;
$hig = 100;

for($num=$min; $num<=$hig; $num = $num +=2){

echo "$num is a odd number<br/>";

}



//==================================== Question 03:============================================

/**
 * 
 * 
 * let’s calculate the factorial of 7.
 *  
 */
$num = 7;  
$fac = 1;  
for ($i=$num; $i>=1; $i--){  
$fac = $fac * $i;  
}  
echo "$num! = $fac";  



//==================================== Question 04:============================================

/**
 * 
 * 
 * Print out from 100 - 1 using a while loop. 
 *  
 */


$num = 100;

while($num>=1){
    echo "The number is $num <br/>";
    $num--;
}





//==================================== Question 05:============================================

/**
 * 
 * 
 * Show all products as a table list. 
 *  
 */
$arr = ['apple', 'orange', 'banana', 'mango'];

foreach($arr as $kye=> $single_item){

    $kye++;
    echo "SL-$kye and Product Name: $single_item <br/>";
}