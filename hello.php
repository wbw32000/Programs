<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN"
"http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
<title>Greetings!</title>
</head>
<body>
<?php // Script 3.7 - hello.php 
print "Ch3/hello.php, William BW (wbw(at)programmer.net)<br />";

ini_set ('display_errors', 1);  
 // Let me learn from my mistakes!
error_reporting (E_ALL | E_STRICT);  
 // Show all possible problems!
 // This page should receive a name value in the URL.
 // Send a value a "value":
 $name = $_GET['name'];
 //print "<p>Hello, <span style=\"font-weight: bold;\">$name
 $value= $_GET['value'];
 print "<p>Here's what you sent: <span style=\"font-weight: bold;\">Name: $name and Value: <span style=\"font-weight: bold;\">$value
 </span>!</p>";
?>
</body>
</html>
