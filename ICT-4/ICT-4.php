<!Doctype html>
<html>
<head>

<title> </title>
</head>
<body>

<!--HTML FORM-->

<form action="form.php" method="GET">
<label>Name:</label>
<input type="text" name="name" placeholder="Enter your name">

<label><br>Username: </label>
<input type="Username:" name="username" placeholder="Enter your username">

<label><br>Password: </label>
<input type="Password:" name="Password" placeholder="Enter your password">
<br> <input type="Submit" value="Click Here to Submit">
</form>

<?php
$name = $_GET ['name'];
$Username = $_GET ['Username'];
$Password = $_GET ['Password'];
echo "Your name is : @name <br>Your Username is: $username is: <br>Your Password is: $password";
?>

</body>
</html>
