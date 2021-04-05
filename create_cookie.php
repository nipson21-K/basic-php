<?php
//CREATE COOKIE

$cookie_name="user";   //creating a variable to hold cookie name
$cookie_value="NKC"; //creating a variable to hold cookie value

//creating a cookie with the name & value we created above and time with 604800 seconds which is 1 week and path / means it can be accessed from anywhere.
setcookie($cookie_name, $cookie_value, time()+(604800), "/");

?>

<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Creating a cookie</title>
</head>
<body>

<?php

//READ COOKIE
if(!isset($_COOKIE[$cookie_name]))
{
    echo "Cookie is not set";
}
else{
    echo "Cookie is set and its value is ".$_COOKIE[$cookie_name];
}

?>
<form action="delete_cookie.php">
<input type="submit" name="delete_cookie" value="Delete cookie">
</form>

</body>
</html>