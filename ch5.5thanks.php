<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN"
  "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">
<head>
  <meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
  <title>Forum Posting Thank You Greeting</title>
</head>
<body>
<?php // Chapter 5 - ch5.5thanks.php
print "Ch5/ch5.5thanks.php, William BW (wbw(at)programmer.net)<br />";
/* This script receives two values from ch5handle_post.html: name, email */
// Error Handling
ini_set('display_errors', 1);
error_reporting(E_ALL | E_STRICT);

// Get the values from the $_POST array:
 $name = trim($_GET ['name']);
 $email = trim($_GET ['email']);
 print "<p><div>Thanks again and greetings, $name ($email)</div></p>";

?>
</body>
</html>
