<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN"
  "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">
 <head>
  <meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
  <title>Forum Posting</title>
 </head>
 <body>
 <?php // ch5handle_strings.php
 print "<p>Ch5/ch5handle_strings.php, written by William BW (wbw(at)programmer.net)</p>";
 /* This script receives three values from ch5handle_strings.html:
   cat_names, string_type, submit */
 
 // Address error management
 
 // Get the values from the $_POST array.
 // Strip away extra spaces using trim():
 $cat_names = trim($_POST ['cat_names']);
 $string_type = trim($_POST ['string_type']);

 // handle any newlines with <br />:
 $cat_names = nl2br($cat_names);
 //print "cat_names: $cat_names";

 // get string length including any break tag:
 $string_length = strlen($cat_names);
 //print "<br />string_length: $string_length";

 // split into two names
 // locate break (<br />) position:
 $break_position1 = strpos($cat_names, "<br />");
 if ($break_position1 > 0)
 { // no problem
 } else {
  $break_position1 = $string_length;
 }
 //print "<br />break_position1: $break_position1";

 // get substring1:
 $cat_name1 = substr($cat_names, 0, $break_position1);
 //print "<br />cat_name1: $cat_name1";

 // get substring2:
 $break_position2 = $break_position1 + 6;
 $cat_name2 = substr($cat_names, $break_position2);
 $st2 = strlen($cat_name2);
 //print "<br />cat_name2: $cat_name2, st2: $st2";

  // concatenate the strings:
 if (strlen($cat_name2)>0)
  {
   $concat_string = $cat_name1 . " and " . $cat_name2;
   $concat_string .= " like ";
  } else {
   $concat_string = $cat_name1 . " likes ";
  }

 $st = strlen($string_type);
 //print "<br />st: $st";
  if ($string_type == "none")
  {
   $string_type = "no";
  }

 print "<br />Looks like $concat_string $string_type strings!";
 
 ?>
 </body>
 </html>
