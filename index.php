<?php

//vid 6 boolean
/*$isboool = true ;
$isboool2 = (string) true ;

Var_dump($isboool);
Var_dump(is_bool($isboool));
echo "<br>";
Var_dump($isboool2);
Var_dump(is_bool($isboool2));*/

//because we cast it to string above
/**********************************************/
//vid 7 integer
/*$x = PHP_INT_MAX;
var_dump($x);*/
//int(9223372036854775807)

/*$x = PHP_INT_MAX + 1;
var_dump($x);
float(9.223372036854776E+18)*/

/*$x = 200_000_000;
var_dump($x);
int(200000000)*/

/*$x = (int) "2_000_000_000";
var_dump($x);
int(2)*/
/***********************************************/
//vid 8
//$x  = (0.1+0.7)*10;
//var_dump($x);
//echo "<br>";
//var_dump(floor($x));

#floor down the decimals after floating point
// ceil the opposite

//echo "<br>";

#never compare two floats
#there is a constant called NAN that represents such an undefined value like

//var_dump(log(-1));
//var_dump(is_nan(log(-1)));
//echo "<br>";

#there is also infinite value called INF like

//$somevalue =(PHP_FLOAT_MAX)*2;
//var_dump($somevalue);
//var_dump(is_infinite($somevalue));

/**************************************************/

//arrays
//echo "<pre>";
//print_r(
//    array(
//        0 => "nader",
//        "a" => "ahmed",
//        "b" => "mohsen"
//    ,
//        "showkat",
//        "sawsan",
//        8 => "e3temad",
//        11 => "mervat",
//        "kawthar",
//        9 => "shawaha"
//    ,
//        "shabah",
//        false => "override",
//        "schoolFrinds" => [
//            "saed" => [
//                "badawy",
//                "3omda",
//                "ghaly"
//            ],
//            "said" => [
//                "mahmoud",
//                "mohamed"
//            ],
//            "saad" => [
//                "elghalban",
//                "elmoftary"
//            ]
//        ]
//    )
//);
//echo "</pre>";

// we can use array_push(element) to push and also array[] = element

/*$someArray = ['absabour', 2=> 'medhat', 'a'=> 'shawcat', 50=>null,null=>'has null as a key'];
echo '<pre>';
print_r($someArray);
echo '</pre>';
$someArray[]= 'sawsan';
echo '<pre>';
print_r($someArray);
echo '</pre>';
array_push($someArray,'kawthar','some');
echo '<pre>';
print_r($someArray);
echo '</pre>';
array_pop($someArray);//to remove the last element
unset($someArray[null]);//remove any element by index
$m = 'what i am doing here ?!';
print_r((array)$m); // casting to an array
echo "<br>";
var_dump(isset($someArray['50']));// check if that index exists and not null or not
echo "<br>";
var_dump(array_key_exists(50,$someArray));// check if that index exists or not */

/***************************************************************/
# vid 14  operators
// ?: operator checks if the first value not defined or null and if not set the variable to it else set the variable to the second value

/*
* $x = 'medhat';
$y = isset($x) ? $x : 'momen';
echo $y;
echo "<br>";
 ++

$y = 'abc';
echo $y;
echo "<br>";
echo ++$y; // it's increases the last character from (c) to (d)
echo "<br>";

 and , or have low priority than assignment operators
$x = true ;
$y = false;
$z = $x and $y ;
var_dump($z);
$c = $x&& $y;
var_dump($c);
echo "<br>"; */

// array operators [ + , == , === , != , !=== ,<> ]

/*$x = [ 'a' =>1 , 'b'=> 2 , 'c' =>3];
$y = [ 'a' =>4 , 'd'=> 6 , 'e' =>7];
$p = [ 'a' =>1 , 'b'=> '2' , 'c' =>3];
$z = $x + $y;
print_r($z);
Array ( [a] => 1 [b] => 2 [c] => 3 [d] => 6 [e] => 7 )
echo "<br>";
var_dump($x == $y); // false
echo "<br>";
var_dump($x == $p); // true
echo "<br>";
var_dump($x === $p); // false */
/*****************************************************/
// vid 17 foreach

/*$user = [
    'name' => 'Mohamed Nasr',
    'email' => 'monasr@some.com',
    'skills'=> ['php','python','c++','c','js']
];
foreach ($user as $key => $value):
    if (is_array($value)):
        echo $key .' => ' . implode($value) /*or json_encode($value)*//*.'<br>';
    else:
        echo $key .' => '. $value .'<br>';
    endif;
endforeach;
*/
/*for ($i = 0  ; $i < 14 ; $i++):
    for ($j = 0;$j < 10; $j++, print $j):
        if ($j == 9):
            break 2; // quiet from the two loops
        endif;

    endfor;
    echo "<br>I pass here <br>";
endfor;
echo "<br>";*/
/****************************************************/
// switch , match use strict comparison
/*
 * $paymentStatus=2;
switch ($paymentStatus){
    case 1:
        echo 'paid';
        break;
    case '2':
    case 4:
        echo 'paid declined';
        break;
    case 3:
        echo 'pending paid';
        break;
    default :
        echo 'not paid';
        break;
}
echo '<br>';

function expressionn(){
    echo 'paid declined';
}

$payValue= match($paymentStatus){
    1 => 'paid',
    '2',4=> expressionn(),
    3, => 'pending paid',
    default => 'not paid'
};*/
/*****************************************************************/
// declare ticks
/*
 * function onTick()
 * {
    echo 'tick <br>';
    }
register_tick_function('onTick');
declare(ticks=3);
$i =0;
$n = 10;
while($i<$n){
    echo $i++ .'<br>';
}*/
/*******************************************************************/
//vid 21
// if you have html in file php , you include it to a variable and want that html to be strings
/*
 * ob_start();
$nav = include '.partials/nav.php';
ob_get_clean();*/
/**************************************************************************/
//vid 23 functions
/*function foo(...$numbers) : int{
    return array_sum($numbers);
}
$nums=[1,2,3,4,5,6,7,8,9];
var_dump(foo(...$nums));*/
/**********************************************************************/
// first Task 21 days late
function fetch_file_content($fileName):void
{
    $file=fopen($fileName,'r');
    while (($line=fgets($file))!== false) echo '<strong>'.$line . '</strong> '.'<br>';
    fclose($file);
}
function replace_file_content($fileName):void{
if (file_exists($fileName)){
    echo 'File content before updating : <br>';
    fetch_file_content($fileName);
    file_put_contents($fileName,'sorry for being late');
    echo 'File content after updating : <br>';
    fetch_file_content($fileName);
    return;
}
    echo 'Enter another file<br>';
}
replace_file_content('textFile.txt');
echo "<br>";
echo "<br>";
echo "<br>";
echo "<br>";
echo "<br>";