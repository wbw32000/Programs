<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN"
 "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">
 <head>
  <meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
  <title>A Multidimensional Array</title>
 </head>
 <body>
  <h2>A Multidimensional Array</h2>
  <?php // ch7multidimensional_array.php
  print "<p>Ch7/ch7multidimensional_array2.php, William BW (wbw(at)programmer.net)</p>";
  /* This script creates and prints out a multidimensional array. */
  // Address error management, if you want.

  // First interior array:
   $interior_array1 = array (1 => 'array1value1', 'array1value2', 'array1value3', 'array1value4');
  // Second interior array:
   $interior_array2 = array (1 => 'array2value1', 'array2value2', 'array2value3', 'array2value4');
  // Third interior array:
   $interior_array3 = array (1 => 'array3value1', 'array3value2', 'array3value3', 'array3value4');

  // Create the multidimensional array:
   $Big_array1 = array (
   'interior_array1' => $interior_array1,
   'interior_array2' => $interior_array2,
   'interior_array3' => $interior_array3
   );

  // Printing out Big_array1 values with print_r():
   print "<p>Printing out Big_array1 values with print_r():<br />";
   print_r($Big_array1);
   print "</p>";

  // Printing out Big_array1 values with with foreach:
   print "<p>Using foreach to print out Big_array1 values:<br />";
   foreach ($Big_array1 as $key => $value) {
   print "<br />Big_array1's $key:\n";
     foreach ($value as $k => $v) {
     print "<br />&nbsp;This interior array's key $k points to value $v\n";
    }
   print "</p>";
   }
  ?>
 </body>
</html>
