  <?php //  ch9Plogin.php 
  print "<p>Ch9/ch9Plogin.php, William BW (wbw(at)programmer.net)</p>";

   /* This page lets people log into the site (almost!). */

   // Set the page title and include the header file:
   define('TITLE', 'Login');
   include('templates/ch9Pheader.html');

   // Print some introductory text:
   print '<h2>Login Form</h2>
     <p>Users who are logged in can take advantage of certain features like this, 
        that, and the other thing.</p>';

   // Check if the form has been submitted:
   if ($_SERVER['REQUEST_METHOD'] == 'POST') {

      // Handle the form:
      if ( (!empty($_POST['email'])) && (!empty($_POST['password'])) ) {

         if ( (strtolower($_POST['email']) == 'me@example.com') && 
           ($_POST['password'] == 'testpass') ) { // Correct!

           // Give the session a custom name and start:
           session_name('YourVisit');
           session_start();

            $_SESSION['email'] = $_POST['email'];
            $_SESSION['loggedin'] = time();

            $msg = "<br /><b>_SESSION['email']:" . $_SESSION['email'] . " _SESSION['loggedin']:" . $_SESSION['loggedin'] . "</b><br />";
            echo "$msg";

            // Redirect the user to the welcome page!
            ob_end_clean(); // Destroy the buffer!  // WILL NOT WORK
            ob_end_flush(); // Destroy the buffer!  // WILL NOT WORK
            ob_flush(); // Destroy the buffer!  // WILL NOT WORK
            //header ('Location: http://www.eclectichub.info/PHP/Ch9/ch9Pwelcome.php'); // WILL NOT WORK
            echo "<meta http-equiv='refresh' content='0;url=ch9Pwelcome.php'>"; // WILL WORK 
            exit();

         } else { // Incorrect!

            $msg = "_POST['email']: " . $_POST['email'];
            $msg = $msg . ". _POST['password']: " . $_POST['password'] . "."; 
            echo "$msg";
            print '<p>The submitted email address and password do not match 
              those on file!<br />Go back and try again.</p>';

         }

      } else { // Forgot a field.

         print '<p>Please make sure you enter both an email address and a password!
           <br />Go back and try again.</p>';

      }

   } else { // Display the form.

      print '<form action="ch9Plogin.php" method="post">
      <p>Email Address: <input type="text" name="email" size="20" /> (e.g. me@example.com)</p>
      <p>Password: <input type="password" name="password" size="20" /> (e.g. testpass)</p>
      <p><input type="submit" name="submit" value="Log In!" /></p>
      </form>';

   }

   include('templates/footer.html'); // Need the footer.
   ?>
