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
$x  = (0.1+0.7)*10;
var_dump($x);
echo "<br>";
var_dump(floor($x));
#never compare two floats
#there is a value caled NAN that rebresents
echo "<br>";
echo "<br>";
echo "<br>";
echo "<br>";
echo "<br>";
echo "<br>";
