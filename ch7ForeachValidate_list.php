<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN"
 "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">
 <head>
  <meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
  <title>I Have This Sorted Out</title>
 </head>
 <body>
  <?php // ch7ForeachValidate_list.php
  print "<p>Ch7/ch7ForeachValidate_list.php, William BW (wbw(at)programmer.net)</p>";
  print "It uses foreach instead of implode(), but still prints each sorted word on its own line in the browser.
  Also, it adds form validation so that it only attempts to parse and sort the string if it has a value.";
  /* This script receives a string in $_POST['words']. It then turns it into an array,
   sorts the array alphabetically, and reprints it.
  It uses foreach instead of implode(), but still prints each sorted word on its own line in the browser.
  Also, it adds form validation so that it only attempts to parse and sort the string if it has a value. */

  $words = $_POST['words'];
  $words = trim($words);
  $empty_true_false = empty($words);
  if ($empty_true_false) { // empty words
   print "<p>Seems there were no string values sent.";
  } else {
  // Turn the incoming string into an array:
   $words_array = explode(' ' , $words);

  // Sort the array:
   sort($words_array);

  // Turn the array back into a string:
  // $string_words = implode('<br />', $words_array);
  // Print the results:
  // print "<p>An alphabetized version of your list is: <br /> $string_words</p>";

  // Using foreach() to turn the array back into a string:
   print "<p>An alphabetized version of your list is:";
   foreach ($words_array as $key => $value) {
    print "<br />$value\n";
   }
   print "</p>";
  } // else not empty words

 ?>
 </body>
</html>
