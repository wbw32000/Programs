 <!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN"
  "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
 <html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">
 <head>
  <meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
  <title>Kilos and Pounds Converter</title>
 </head>
 <body>
 <?php // eclectichub.info/PHP/Ch10/ch10Pconverter.php 
  print "<p>Ch10/ch10Pconverter.php, William BW (wbw(at)programmer.net)</p>";

 /* This script displays and handles an HTML form. 
 It uses a function to convert between metric kilos and imperial pounds. */
 
 // Define conversion rates:
 // lbs / 2.2 = kilograms
 // kg x  2.2 = pounds 

 global $total;

 // This function performs the conversions.
 function calculate_total ($amount, $source) {
    if ($source=='kilos') {
       $total = $amount * 2.2;
    } elseif ( $source=='pounds' ) {
       $total = $amount / 2.2;
    }
    return $total; // Return the value, kilos or pounds.
  } // End of function.


 
 // Check for a form submission:
 if (isset($_POST['submitted'])) {
 
    // Check for values:
    if ( is_numeric($_POST['kilos']) OR is_numeric($_POST['pounds']) ) {

      if ( is_numeric($_POST['kilos']) ) {
        $kilos = $_POST['kilos'];
        // Call the function to convert from kilos to pounds and print the results:
        $source='kilos';
        $total = calculate_total($kilos, $source);
        print "<p>$kilos kilos is: <span style=\"font-weight: bold;\">$total pounds</span>.</p>";
      }  elseif ( is_numeric($_POST['pounds']) ) {
        $pounds = $_POST['pounds'];
        // Call the function to convert from pounds to kilos and print the results:
        $source='pounds';
        $total = calculate_total($pounds, $source);
        print "<p>$pounds pounds is: <span style=\"font-weight: bold;\">$total  kilos</span>.</p>";
      }

  } else { // Inappropriate values entered.
   print '<p style="color: red;">Please enter a valid quantity.</p>';
  }
  
 }
 ?>
 <form action="ch10Pconverter.php" method="post">
  <p>To convert kilograms (Metric) to pounds (Imperial) enter amount in kilograms:
   <input type="text" name="kilos" size="10" />
   <input type="submit" name="submit" value="Convert" /></p>
   <input type="hidden" name="submitted" value="true" />
 </form>
 <form action="ch10Pconverter.php" method="post">
  <p>To convert pounds (Imperial) to kilograms (Metric) enter amount in Pounds:
   <input type="text" name="pounds" size="10" />
   <input type="submit" name="submit" value="Convert" /></p>
   <input type="hidden" name="submitted" value="true" />
 </form>

 </body>
 </html>
