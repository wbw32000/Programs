<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN"
 "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/ 
1999/xhtml" xml:lang="en" lang="en">
<head>
 <meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
 <title>Your Feedback</title>
</head>
<body>

<?php 
print "Ch3/chapter3newtask.php, written by William BW (wbw(at)programmer.net)<br />";
// This page receives the data from chapter3newtask.html.
// It will receive: email, name, product, store, location, location, comments, and submit in $_POST.
$email= $_POST['email'];
$name = $_POST['name'];
$product = $_POST['product'];
$store = $_POST['store'];
$location = $_POST['location'];
$date = date("Y-m-d");
print "<p>Thank you, $name, for your submitted information:
 <br />email: $email
 <br />Name: $name
 <br />Product: $product
 <br />Store: $store
 <br />Location: $location
 <br />Today's Date: $date
</p>
<p>You stated the following:<br />$comments</p>";
?>
</body>
</html>
