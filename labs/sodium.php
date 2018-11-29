<?php


// encrypt data and save to file

$data = "This is my secret message."
	$password = "password";

	$salt = random_bytes(SODIUM_CRYPTO_PWHASH_SALTBYTES);

	$key = sodium_crypto_pwhash(
			SODIUM_CRYPTO_SIGN_SEEDBYTES,
			$password,
			$salt,
			SODIUM_CRYPTO_PWHASH_OPSLIMIT_INTERACTIVE,
			SODIDIUM_CRYPTO_PWHASH_MEMLIT_INTERACTIVE
	);

	$nonce = random_bytes(SODIUM_CRYPTO_SECRETBOX_NONCEBYTES);

	$cypherText = sodium_crypto_secretbox($data, $nonce, $key);
	print	($cyphertext."\n");
	print(base64_encode($cyphertext)."\n");

	$fh = fopen("data.enc", "wb");
	fwrite($fh, $salt. $nonce. $cyphertext);
	fclose($fh);


		// decrypt




