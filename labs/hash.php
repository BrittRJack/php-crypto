<?php

// TODO - Print the list of hash algorithms

// TODO - Hash a string using SHA256 https://secure.php.net/manual/en/function.hash.php
print (hash("sha256","mySecret")."\n");


// TODO - Hash a string using SHA512
print (hash("sha512", "mySecret")."\n");

// TODO - Hash the "password" parameter from a POST request

// TODO - Compare a stored password to the password that was received from a POST request

//SALTS  probably won't use perUser and system salt in your database
$perUser_salt = random_bytes(32);
$system_salt = "dhfdihdf387438e";
//take out post to get random bytes/
$salted_password = $_POST['password'] . random_bytes(32);
print($salted_password ."\n");

// generates randomness to password
print(hash("sha256","password0")."\n");
print(hash("sha256","password1")."\n");


//