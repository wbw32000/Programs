 <!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN"
  "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
 <html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">
 <head>
  <meta http-equiv="content-type" content="text/html; charset=utf-8" />
  <title>Sticky Text Inputs</title>
 </head>
 <body>
 <?php // eclectichub.info/PHP/Ch10/ch10Psticky1.php 
  print "<p>Ch10/ch10Psticky2.php, William BW (wbw(at)programmer.net)</p>";
 /* This script defines and calls a function that creates a sticky text input. */
 
 // This function makes a sticky text input.
 // This function requires two arguments be passed to it.
 function make_text_input($name, $label) {
  
  // Begin a paragraph and a label:
  print '<p><label>' . $label . ': ';
  
  // Begin the input:
  if ($name=='password') {
   print '<input type="password" name="' . $name . '" size="20" ';
  } else {
   print '<input type="text" name="' . $name . '" size="20" ';
  }

  // Add the value:
  if      (isset($_POST[$name])) {
   print ' value="' . htmlspecialchars($_POST[$name]) . '"';
  } elseif (isset($_GET[$name])) {
   print ' value="' . htmlspecialchars($_GET[$name]) . '"';
  }
  // Complete the input, the label and the paragraph:
  print ' /></label></p>';
  
 } // End of make_text_input() function.
 
 // Make the form:
 print '<form action="ch10Psticky2.php" method="post">';

 // Create some text inputs:
 make_text_input('first_name', 'First Name');
 make_text_input('last_name', 'Last Name');
 make_text_input('email', 'Email Address');
 make_text_input('password', 'Password');

 print '<input type="submit" name="submit" value="Register" /></form>';
 
 ?>
 </body>
 </html>
