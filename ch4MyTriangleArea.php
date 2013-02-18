<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN"
 "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">
<head>
 <meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
 <title>Chapter 4 New Calculation: Area of a Triangle</title>

<style type="text/css" media="screen">
  .number { font-weight: bold; }
 </style>
</head>
<body>

<?php // ch4MyTriangleArea.php 
print "Ch4/ch4MyTriangleArea.php, written by William BW (wbw(at)programmer.net)<br />";
// This page receives the data from ch4MyTriangleArea.html.
// It will receive: a, b, c, units, in $_POST.

$a = $_POST['a'];
$b = $_POST['b'];
$c = $_POST['c'];
$units = $_POST['units'];

// Calculate semiperimeter
$s = ($a + $b + $c) / 2;
print "<p>To use Hero's (or Heron's) Formula for the area of a triangle,
 we need to calculate the semiperimeter of this triangle:
<br />s = (a + b + c) / 2 = $s";

// Calculate Area using Hero's (or Heron's) Formula 
// Area = Sq-rt of [ {s (s - a)(s - b)(s - c) ].
// $var1 = ($s - $a) * ($s - $b) * ($s - $c);
$inner = $s * ( ($s - $a) * ($s - $b) * ($s - $c) );
// sqrt(x) function returns the square root of a number
$area = sqrt($inner);

// Applying formatting
$area = number_format ($area, 2);

print "<p>Using Hero's (or Heron's) Formula for the area of a triangle,
<br />Area = Sqrt of [ {s (s - a)(s - b)(s - c) ]
<br /> the area of this triangle is:
<span class=\"number\">$area</span> $units squared.<br />";

?>
</body>
</html>
