  <?php // ch9Pwelcome.php 
  print "<p>Ch9/ch9Pwelcome.php, William BW (wbw(at)programmer.net)</p>";

   /* This is the welcome page. The user is redirected here after they successfully log in. */

   // Give the session a custom name and start:
    session_name('YourVisit');
    session_start();

   // Set the page title and include the header file:
   define('TITLE', 'Welcome to the J.D. Salinger Fan Club!');
   include('templates/ch9Pheader.html');

   // Print a greeting:
   print '<h2>Welcome to the J.D. Salinger Fan Club!</h2>';

   print "<p>Hello, ";
   if ( isset($_SESSION['email']) ) {
    $msg = $_SESSION['email'] . ".</p>";
    print "$msg";
   } else {
    print "Note: _SESSION['email'] is not set. This server's session rights are not accessible beyond the initial file.";
   }

   // Print how long they've been logged in:
   date_default_timezone_set('America/New_York');
   $logtime_statement = "<p>You have been logged in since: " . date('g:i a', $_SESSION['loggedin']) . "</p>";
   //print '<p>You have been logged in since: ' . date('g:i a', $_SESSION['loggedin']) . '</p>';
   // print statement that indicates how long the user has been logged in also uses double quotation marks.
   print "$logtime_statement";

   // Make a logout link:
   print '<p><a href="ch9Plogout.php">Click here to logout.</a></p>';

   include('templates/ch9Pfooter.html'); // Need the footer.
   ?>
