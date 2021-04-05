<?php


//DELETE a COOKIE
//Description: Deleting the Cookie we created in create_cookie.php file by just subtracting the time we set in that setcookie method, but it shows the cookie for the first time this file is opened as, for the first time existing cookie gets displayed aswell as gets deleted at the same time. Hence when this filed opened for the second time then only it will show the cookie is deleted.


//if else statement to display message as per the existence of cookie.(Note: for the first time it exits but after that it wonot as it gets deleted for the first time after displaying)
if(isset($_COOKIE["user"]))
{
    //Displaying cookie before it gets deleted
    echo "Cookie value is ".$_COOKIE["user"]." and it will get deleted";
}
else{
    echo "Cookie deleted successfully";
}


//Reversing  the time to delete cookie.
setcookie("user", "", time()-(604800), "/");


 
?>