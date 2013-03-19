 <?php // ch8Plogin.php 
  print "<p>Ch8/ch8Plogin.php, William BW (wbw(at)programmer.net)</p>";

 /* This page lets people log into the site (in theory). */
  // Set the page title and include the header file:
  define('TITLE', 'Login');
  include('templates/ch8Pheader.html');
  // Print some introductory text:
   print '<h2>Login Form</h2>
     <p>Users who are logged in can take advantage of certain features like this, that, and the other thing.</p>';
  // Check if the form has been submitted:
  if ($_SERVER['REQUEST_METHOD'] == 'POST') {
     // Handle the form:
     if ( (!empty($_POST['email'])) && (!empty($_POST['password'])) ) {
       if ( (strtolower($_POST['email']) == 'me@example.com') && ($_POST['password'] == 'testpass') ) { // Correct!
         // Redirect the user to the welcome page!
         //ob_end_clean(); // Destroy the buffer!  // WILL NOT WORK
         ob_end_flush(); // Destroy the buffer!  // WILL NOT WORK
         //header ('Location: http://www.eclectichub.info/PHP/Ch8/welcome.php');   // WILL NOT WORK
         //$headers_sent = headers_sent();
         //print "headers_sent: $headers_sent";
         echo "<meta http-equiv='refresh' content='0;url=ch8Pwelcome.php'>"; // WILL WORK 
         exit();
       } else { // Incorrect!
         print '<p>The submitted email address and password do not match those on file!<br />Go 
         back and try again.</p>';
        }
      } else { // Forgot a field.
        print '<p>Please make sure you enter both an email address and a password!
        <br />Go back and try again.</p>';
      }
   } else { // Display the form.
      print '<form action="ch8Plogin.php" method="post">
      <p>Email Address: <input type="text" name="email" size="20" /> (e.g. me@example.com)</p>
      <p>Password: <input type="password" name="password" size="20" /> (e.g. testpass)</p>
      <p><input type="submit" name="submit" value="Log In!" /></p>
      </form>';
   }
   include('templates/ch8Pfooter.html'); // Need the footer.
  ?>
