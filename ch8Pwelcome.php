   <?php // ch8Pwelcome.php
  print "<p>Ch8/ch8Pwelcome.php, William BW (wbw(at)programmer.net)</p>";
   /* This is the welcome page. The user is redirected here
   after they successfully log in. */

   // Set the page title and include the header file:
   define('TITLE', 'Welcome to the Cakes Fan Club!');
   include('templates/ch8Pheader.html');

   // Leave the PHP section to display lots of HTML:
   ?>

   <h2>Welcome to the Cakes Fan Club!</h2>
   <p>You've successfully logged in and can now take advantage of everything the site has to offer.</p>
   <p>Sic tempus fugit esperanto hiccup estrogen. Glorious baklava ex librus hup hey ad infinitum. Non sequitur condominium facile et geranium incognito. Epsum factorial non deposit quid pro quo hic escorol. Marquee selectus non provisio incongruous feline nolo contendre Olypian quarrels et gorilla congolium sic ad nauseum. Souvlaki ignitus carborundum e pluribus unum.</p>

   <?php include('templates/ch8Pfooter.html'); // Need the footer. ?>
