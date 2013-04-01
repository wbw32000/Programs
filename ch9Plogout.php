  <?php //  ch9Plogout.php 
  print "<p>Ch9/ch9Plogout.php, William BW (wbw(at)programmer.net)</p>";
   /* This is the logout page. It destroys the session information. */

   // Give the session a custom name and start:
    session_name('YourVisit');
    session_start();

   // Delete the session variable:
   unset($_SESSION);

   // Reset the session array:
   $_SESSION = array();

   // Define a page title and include the header:
   define('TITLE', 'Logout');
   include('templates/ch9Pheader.html');

   ?>

   <h2>Welcome to the J.D. Salinger Fan Club!</h2>
   <p>You are now logged out.</p>
   <p>Thank you for using this site. We hope that you liked it.<br />
   Blah, blah, blah...   Blah, blah, blah...</p>

   <?php include('templates/ch9Pfooter.html'); ?>
