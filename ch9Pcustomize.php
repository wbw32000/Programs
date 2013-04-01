<?php // ch9Pcustomize.php 
  print "<p>Ch9/ch9Pcustomize.php, William BW (wbw(at)programmer.net)</p>";

   // Handle the form if it has been submitted:
   if (isset($_POST['font_size'], $_POST['font_color'])) {

     $cookies_sent = TRUE;
     $cookie_size = $_POST['font_size'];
     $cookie_color = $_POST['font_color'];

     // Send the cookies:
      setcookie('font_size', $_POST['font_size'], time()+10000000);
      setcookie('font_color', $_POST['font_color'], time()+10000000);

     // Message to be printed later:
      $msg = '<p>Your cookie settings have been entered!</p>';
     //Click <a href="view_settings.php">here</a> to see them in action.</p>';

   } // End of submitted IF.
   ?><!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN"
      "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
   <html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">
   <head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
    <title>Customize Your Settings</title>
    <style type="text/css">
     body {
     <?php 
       // Check for a font_size value:
       if ( isset($cookie_size) ) {
         print "\t\tfont-size: " . $cookie_size . ";\n";    
       } elseif (isset($_COOKIE['font_size'])) {
         print "\t\tfont-size: " . htmlentities($_COOKIE['font_size']) . ";\n";    
       } else {
         print "\t\tfont-size: medium;";
       }
       // Check for a font_color value:
       if ( isset($cookie_color) ) {
          print "\t\tcolor: #" . $cookie_color . ";\n";
          if ($cookie_color=="8B4513") {
           print "\t\tbackground-color: #D2691E" . ";\n";
           print "\t\tfont-family:'comic sans ms'" . ";\n";
          } elseif ($cookie_color=="2F4F4F") {
           print "\t\tbackground-color: #FFF8DC" . ";\n";
           print "\t\tfont-family:'comic sans ms'" . ";\n";
          }
       } elseif (isset($_COOKIE['font_color'])) {
        print "\t\tcolor: #" . htmlentities($_COOKIE['font_color']) . ";\n";
          if ($cookie_color=="8B4513") {
           print "\t\tbackground-color: #D2691E" . ";\n";
           print "\t\tfont-family:'comic sans ms'" . ";\n";
          } elseif ($cookie_color=="2F4F4F") {
           print "\t\tbackground-color: #FFF8DC" . ";\n";
           print "\t\tfont-family:'comic sans ms'" . ";\n";
          }
       } else {
          print "\t\tcolor: #000;";
       }
     ?>
     }
   </style>

   </head>
   <body>
   <?php // If the cookies were sent, print a message.
   if (isset($msg)) {
      print $msg;
   }
   ?>

   <p>Use this form to set your preferences:</p>

   <form action="ch9Pcustomize.php" method="post">
      Font Size:
      <select name="font_size">
      <option value="">Default</option>
      <option value="xx-small">xx-small</option>
      <option value="x-small">x-small</option>
      <option value="small">small</option>
      <option value="medium">medium</option>
      <option value="large">large</option>
      <option value="x-large">x-large</option>
      <option value="xx-large">xx-large</option>
      </select>
      Font Color:
      <select name="font_color">
      <option value="">Default</option>
      <option value="999">Gray</option>
      <option value="0c0">Green</option>
      <option value="00f">Blue</option>
      <option value="c00">Red</option>
      <option value="000">Black</option>
      <option value="8B4513">Chocolate Chocolate Chip</option>
      <option value="2F4F4F">Oatmeal Raisin</option>
      </select>
      <br /><input type="submit" name="submit" value="Set My Preferences (Or Default to Delete cookies)" />
   </form>
   </body>
   </html>
