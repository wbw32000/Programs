  <?php // ch8Pregister.php
  print "<p>Ch8/ch8Pregister.php, William BW (wbw(at)programmer.net)</p>";

  /* This page lets people register for the site (in theory). */

  // Set the page title and include the header file:
   define('TITLE', 'Register');
   include('templates/ch8Pheader.html');

  // Print some introductory text:
   print '<h2>Registration Form</h2>
    <p>Register so that you can take advantage of certain features like this, that, and the other thing.</p>';

  // Add the CSS:
   print '<style type="text/css" media="screen">
     .error { color: red; }
     </style>';

  // Check if the form has been submitted:
   if ($_SERVER['REQUEST_METHOD'] == 'POST') {

     $problem = FALSE; // No problems so far.

     // Check for each value...
     if (empty($_POST['first_name'])) {
       $problem = TRUE;
       print '<p class="error">Please enter your first name!</p>';
     } else {
       $first_name = $_POST['first_name']; 
     }

     if (empty($_POST['last_name'])) {
       $problem = TRUE;
       print '<p class="error">Please enter your last name!</p>';
     } else {
       $last_name = $_POST['last_name']; 
     }

     // PURSUE - Tried to incorporate the filter_var() function to validate the email address
     //if ( empty($_POST['email']) OR !filter_var($_POST['email'], FILTER_VALIDATE_EMAIL) ) {
     // Fatal error: Call to undefined function: filter_var() in /srv/disk1/wbw/www/eclectichub.info/PHP/Ch8/ch8Pregister.php

     if (empty($_POST['email']) || (substr_count($_POST['email'], '@') != 1) ) {
       $problem = TRUE;
       print '<p class="error">Please enter your email address! (e.g. me@example.com)</p>';
     } else {
       $email = $_POST['email']; 
     }

     // PURSUE - Rewriting the password conditionals found in register.php as a nested pair of conditionals:
     if (empty($_POST['password1'])) {
       $problem = TRUE;
       print '<p class="error">Please enter a password! (e.g. testpass)</p>';
     } elseif ($_POST['password1'] != $_POST['password2']) {
       $problem = TRUE;
       print '<p class="error">Your password did not match your confirmed password!</p>';
     } else {
       $password1 = $_POST['password1'];
     }

     if (!$problem) { // If there weren't any problems...
      // PURSUE - Change the subject and body of the email sent upon (pseudo-) registration to something more interesting and informative.
      // Print a message:
       print "<p>Thank you $first_name $last_name ($email)!
         <br />You may be registered when we get a database! If our server host would allow it, you might receive an email message.</p>";

       // Send the email:
       $body = "Thank you for registering with the Cakes Fan Club!
       Your password is '{$_POST['password1']}'.";
       mail($_POST['email'], 'Registration Confirmation', $body, 'From: admin@example.com');
      $current_datetime = date("F n Y");
      echo "$current_datetime";
      $message = '<script type="text/javascript">alert("From: admin@example.com \nSubject: Registration Confirmation\n';
      //$message = $message . "Date: $current_datetime\n";
      //$message = $message . "To: $first_name $last_name $email\n";
      $message = $message . "Body: Tried to email $first_name $last_name at $email with password $password1";
      $message = $message . '")</script>';
      print "$message";

      // Clear the posted values:
      $_POST = array();

     } else { // Forgot a field.
         print '<p class="error">Please try again!</p>';
     }
   } // End of handle form IF.

   // Create the form:
   ?>
  <form action="ch8Pregister.php" method="post">

    <p>First Name: <input type="text" name="first_name" size="20"
     value="<?php if (isset($_POST['first_name'])) { print htmlspecialchars($_POST['first_name']); 
     } ?>" /></p>

     <p>Last Name: <input type="text" name="last_name" size="20"
     value="<?php if (isset($_POST['last_name'])) { print htmlspecialchars($_POST['last_name']); 
     } ?>" /></p>

     <p>Email Address: <input type="text" name="email" size="20"
      value="<?php if (isset($_POST['email'])) { print htmlspecialchars($_POST['email']); 
      } ?>" /> (e.g. me@example.com)</p>

     <p>Password: <input type="password" name="password1" size="20"
      value="<?php if (isset($_POST['password1'])) { print htmlspecialchars($_POST['password1']); } ?>" 
      /> (e.g. testpass)</p>
     <p>Confirm Password: <input type="password" name="password2" size="20"
      value="<?php if (isset($_POST['password2'])) { print htmlspecialchars($_POST 
      ['password2']); } ?>" /></p>

     <p><input type="submit" name="submit" value="Register!" /></p>

   </form>

  <?php
     include('templates/ch8Pfooter.html'); // Need the footer. ?>
