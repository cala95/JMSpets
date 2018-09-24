<?php

//taken from db

$password="pwtester";

$newpassword = crypt($password,'$2a$09$anexamplestringforsalt$');
echo $newpassword;



$password = crypt($password,$newpassword); 
echo "<br>$password";

if ($password==$newpassword) {
   echo"<br>verified";
}
else
{
    echo"<br>Not verified"; 
}

?>