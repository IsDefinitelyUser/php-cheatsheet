<?php
$a_bool = TRUE;   // a boolean
$a_str  = "foo";  // a string
$an_int = 12;     // an integer
$a_float = 4.1; // a float
$an_arr = ["Gabriel", "Cacayan"]; // an array
$a_null; // a null


echo gettype($a_bool) . "<br>"; // prints out:  boolean
echo gettype($a_str) . "<br>";  // prints out:  string
echo gettype($an_int) . "<br>";  // prints out:  interger
echo gettype($a_float) . "<br>"; // prints out: double
echo gettype($an_arr) . "<br>"; // prints out: array
echo gettype($a_null); // prints out: NULL