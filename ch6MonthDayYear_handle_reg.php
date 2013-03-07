<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN"
 "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">
 <head>
  <meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
   <title>Registration</title>
   <style type="text/css" media="screen">
      .error { color: red; }
   </style>
 </head>
 <body>
  <h1>Registration Results</h1>
   <?php // ch6MonthDayYear_handle_reg.php 
    print "<p>Ch6/ch6MonthDayYear_handle_reg.php, William BW (wbw(at)programmer.net)</p>";
   /* This script receives seven values from ch6MonthDayYear_register.html:
   email, password, confirm, year, terms, color, submit */

   // Address error management, if you want.

   // Flag variable to track success:
   $okay = TRUE;

   // Validate the email address:
   if (empty($_POST['email'])) {
    print '<p class="error">Please enter your email address.</p>';
    $okay = FALSE;
   }

   // Validate the password:
   if (empty($_POST['password'])) {
    print '<p class="error">Please enter your password.</p>';
    $okay = FALSE;
   }

   // Check the two passwords for equality:
   if ($_POST['password'] != $_POST['confirm']) {
    print '<p class="error">Your confirmed password does not match the original password.</p>';
    $okay = FALSE;
   }

   // Validate the year:
   if ( is_numeric($_POST['year']) AND (strlen($_POST['year']) == 4) ) {

   // Use a variable for the current year:
   $current_year =  date('Y');

   // Check that they were born before the current year.
   if ($_POST['year'] < $current_year) {
    $age = $current_year - $_POST['year']; // Calculate age this year.
   } else {
     print '<p class="error">Either you entered your birth year wrong or you come from the future!</p>';
     $okay = FALSE;
   } // End of 2nd conditional.

   } else { // Else for 1st conditional.

      print '<p class="error">Please enter the year you were born as four digits.</p>';
      $okay = FALSE;

   } // End of 1st conditional.

   // Validate the terms:
   if (!isset($_POST['terms'])) {
      print '<p class="error">You must accept the terms.</p>';
      $okay = FALSE; 
   }

   // Validate the color:
   switch ($_POST['color']) {
    case 'red':
     $color_type = 'primary';
     break;
    case 'yellow':
     $color_type = 'primary';
     break;
    case 'green':
     $color_type = 'secondary';
     break;
    case 'blue':
     $color_type = 'primary';
     break;
    default:
     print '<p class="error">Please select your favorite color.</p>';
     $okay = FALSE;
     break;
   } // End of switch.

   // Validate the month, day, year:
    $month = $_POST['month'];
    $day = $_POST['day'];
    $year = $_POST['year'];
    $valid_date = checkdate($month,$day,$year); // Returns TRUE or FALSE
    if (!$valid_date) {
      print '<p class="error">Invalid Date.</p>'; // If not valid date
      $okay = FALSE;
      if ($month<1 or $month>12)
      {
       print '<p class="error">Please enter a valid month.</p>';
      }
      if ($day<1 or $day>31)
      {
       print '<p class="error">Please enter a valid day.</p>';
      }
      if ($year<1892 or $year>$current_year)
      {
       print '<p class="error">Please enter a valid year.</p>';
      }
    }

   // If there were no errors, print a success message:
   if ($okay) {
    print '<p>You have been successfully registered (but not really).</p>';

   if ($month < 10)
   {
     $stringmonth = "0".$month;
   } else {
     $stringmonth = $month;
   }

   if ($day < 10)
   {
     $stringday = "0".$day;
   } else {
     $stringday = $day;
   }

    print "<p>You were born $stringmonth" . "/" . $stringday . "/" . $year . ".</p>";

    print "<p>You will turn $age this year.</p>";
    $user_color = $_POST['color'];
    print "<p>Your favorite color is a <span style=\"color:$color\">" . $color . "</span> color.</p>";

   }
 ?>
 </body>
</html>
