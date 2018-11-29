<?php

$password = "password";
$salt = openssl_random_pseudo_bytes(32);
$iterations = 1000;


$hash = hash_pbkdf2(
'sha256',
$password,
$salt,
$iterations);

print("Before: $hash\n");

// user logs in after a  day
//inputs: $password
// from database: $salt, iteration
//
$password =  'password';
$verification = hash_pbkdf2(
	'sha256',
	$password,
	$salt,
	$iterations);
print ("verification: $verification\n")

	if(hash_equals($hash, $verification)){
		print ("Correct password.\n");
	} else{
		print ("Incorrect password.\n");
	}

	// encrypt an decrypt





