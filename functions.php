<?php

function encryptthis($data, $key)
{

    $encryption_key = base64_decode($key);
    $iv = openssl_random_pseudo_bytes(openssl_cipher_iv_length('AES-256-CBC'));
    $encrypted = openssl_encrypt($data, 'AES-256-CBC', $encryption_key, 0, $iv);

    return base64_encode($encrypted . '::' . $iv);
}

function decryptthis($data, $key)
{

    $encryption_key = base64_decode($key);
    list($encrypted_data, $iv) = array_pad(explode('::', base64_decode($data), 2), 2, null);

    return openssl_decrypt($encrypted_data, 'AES-256-CBC', $encryption_key, 0, $iv);
}