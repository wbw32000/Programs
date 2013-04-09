<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN"
 "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">
 <head>
  <meta http-equiv="content-type" content="text/html; charset=utf-8" />
  <title>Date Menus</title>
 </head>
 <body>

 <?php // eclectichub.info/PHP/Ch10/ch10Pmenus.php 
  print "<p>Ch10/ch10Pmenus.php, William BW (wbw(at)programmer.net)</p>";
 /* This script defines and calls a function. */
 
 // This function makes three pull-down menus for the months, days, and years.
 // Pursue 1.1 - Make the function in menus.php take arguments to indicate the starting year and the number of years to generate.
 // Pursue 1.2 - Make the later argument have a default value.

 function make_date_menus($starting_year, $number_of_years='6') {
 
  // Array to store the months:
   $months = array (1 => 'January', 'February', 'March', 'April', 'May', 'June', 'July', 'August', 'September', 'October', 'November', 'December');
  // Make the month pull-down menu:
  print '<select name="month">';
  foreach ($months as $key => $value) {
   print "\n<option value=\"$key\">$value</option>";
  }
  print '</select>';
  
  // Make the day pull-down menu:
  print '<select name="day">';
  for ($day = 1; $day <= 31; $day++) {
    print "\n<option value=\"$day\">$day</option>";
  }
  print '</select>';

  // Make the year pull-down menu:
  print '<select name="year">';

  // Pursue 1.3 - Then rewrite the function body so that it uses these values in the year for loop.
  // get possible start date
 if ( isset($_POST['starting_year']) AND ($_POST['starting_year']!='') ) {
  $start_year = $_POST['starting_year'];
 } else {
  $start_year = date('Y');
 }

 if (isset($_POST['number_of_years'])) {
  $number_of_years = $_POST['number_of_years'];
 } else {
  $number_of_years = 6;
  print "number_of_years: $number_of_years";
 }

  for ($y = $start_year; $y <= ($start_year + $number_of_years); $y++) {
    print "\n<option value=\"$y\">$y</option>";
  }
  print '</select>';

 } // End of make_date_menus() function.
 
 // Make the form:
 print '<form action="" method="post">';
 print "Please enter a starting year: <input type='text' name='starting_year' ><br />";
 print "Please enter a number of years to generate: <input type='text' name='number_of_years' ><br />";
 make_date_menus();
 print "<input type='submit' name='submit' value='Send my info' />";
 print '</form>';
 
 ?>
 </body>
 </html>
