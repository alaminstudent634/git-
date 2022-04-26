<?php

//====================================Question1===========================================
// Create a function that will return children, teenagers, young people, old people from the age


function age($age_from_user){

if($age_from_user<13){
return "you are still children";
}elseif($age_from_user<19){
return "you are teenagers";
}elseif($age_from_user<40){
return "you are young";
}else{
return "you are old";

}
}
echo age(21);
echo "<br>";

//====================================Question2===========================================

function rectangle($length, $width ){
    $rectangle_formula = $length * $width ;
    return "This Rectangle area is $rectangle_formula";
}
echo rectangle(4,2);

echo "<br>";

function square($side ){
    $square_formula = $side * $side;
    return "This Square area is $square_formula";
}
echo square(4);

echo "<br>";


function triangle($base, $height ){
    $triangle_formula = $base * $height / 2;
    return "This Triangle area is $triangle_formula ";
}
echo triangle(6,8);

echo "<br>";

//====================================Question3===========================================

// GPA function for result publishing

function result($marks){
$subjects = count($marks);
$totle_mark = array_sum($marks);
$avarage_mark = $totle_mark / $subjects;

if($avarage_mark >= 80 && $avarage_mark <= 100 ){
    return "You got A+"; 
}
elseif($avarage_mark >= 70 && $avarage_mark <= 79 )
{
    return "You got A"; 
}
elseif($avarage_mark >= 60 && $avarage_mark <= 69 )
{
    return "You got A-"; 
}
elseif($avarage_mark >= 50 && $avarage_mark <= 59 )
{
    return "You got B"; 
}
elseif($avarage_mark >= 40 && $avarage_mark <= 49 )
{
    return "You got c"; 
}
elseif( $avarage_mark <= 39 )
{
    return "You got f"; 
}
else{
 return "There is something wrong! check the information again";
}
}

echo result([70,99,64,97]);


echo "<br>";
//====================================Question4===========================================
// Create an age calculator function


 function yourAge($your_birth_year)
{
 $current_year = date("Y"); 
 $age_calculate =  $current_year - $your_birth_year;
 
return "You are $age_calculate Years old";
}
   
echo yourAge(1987);

echo "<br>";



//====================================Question5===========================================
// Create a BMI function for health

function bmi($weight, $height){

    $bmi_calculation = $weight / ($height * $height);
    if($bmi_calculation <= 18.5){
        return "Underweight"; 
    }
    elseif( $bmi_calculation >= 18.5 && $bmi_calculation <= 24.9 )
    {
        return "Healthy Weight"; 
    }
    elseif( $bmi_calculation >= 25 && $bmi_calculation <= 29.9 )
    {
        return "Overweight"; 
    }
    elseif( $bmi_calculation >= 30 && $bmi_calculation <= 34.9 )
    {
        return "Obese (class I)"; 
    }
    elseif( $bmi_calculation >= 35 && $bmi_calculation <= 39.9 )
    {
        return "Obese (class II)"; 
    }

    else{
        return "Obese (class III)"; 
    }
}
//height will be in meters like 1.7 meters
echo bmi(70,1.7);




echo "<br>";



//====================================Question5===========================================

// Create a currency converter function from taka to USD, CAD, POUND, EURO etc

function taka_convert( $amount, $currency){
$taka_to_usd = $amount * 0.012;
$taka_to_cad = $amount * 0.015;
$taka_to_pound = $amount * 0.0091;
$taka_to_euro = $amount * 0.011;
if(strToLower($currency) == "usd" ){
    return "$amount Taka is $taka_to_usd USD  ";
}
elseif(strToLower($currency) == "cad"){
    return "$amount Taka is $taka_to_cad CAD  ";
}
elseif(strToLower($currency) == "cad"){
    return "$amount Taka is $taka_to_pound  pound  ";
}
elseif(strToLower($currency) == "cad"){
    return "$amount Taka is $taka_to_euro EURO  ";
}else{
    return "this currency not supported";
}


}
echo taka_convert(167, "Usd")
    ?>