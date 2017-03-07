<?php

// Symmetric Encryption

// Cipher method to use for symmetric encryption
$CIPHER_METHOD = array('AES-256-CBC', 'AES-192-CBC','AES-128-CBC', 'DES-EDE3-CBC', 'BF-CBC');

function key_encrypt($string, $key, $cipher_method) {
  if($cipher_method == 'AES-256-CBC'){
    $key = str_pad($key, 32, '*');
  }
  else if($cipher_method == 'AES-192-CBC'){
    $key = str_pad($key, 24, '*');
  }
  else if($cipher_method == 'AES-128-CBC'){
    $key = str_pad($key, 16, '*');
  }
  else if($cipher_method == 'DES-EDE3-CBC'){
    $key = str_pad($key, 24, '*');
  }
  else {
    $key = str_pad($key, 56, '*');
  }
  $iv_length = openssl_cipher_iv_length($cipher_method);
  $iv = openssl_random_pseudo_bytes($iv_length);
  $encrypted = openssl_encrypt($string, $cipher_method, $key, OPENSSL_RAW_DATA, $iv);
  $message = $iv . $encrypted;
  return base64_encode($message);
}

function key_decrypt($string, $key, $cipher_method) {
  if($cipher_method == 'AES-256-CBC'){
    $key = str_pad($key, 32, '*');
  }
  else if($cipher_method == 'AES-192-CBC'){
    $key = str_pad($key, 24, '*');
  }
  else if($cipher_method == 'AES-128-CBC'){
    $key = str_pad($key, 16, '*');
  }
  else if($cipher_method == 'DES-EDE3-CBC'){
    $key = str_pad($key, 24, '*');
  }
  else {
    $key = str_pad($key, 56, '*');
  }
  $message = base64_decode($string);
  $iv_length = openssl_cipher_iv_length($cipher_method);
  $iv = substr($message, 0, $iv_length);
  $ciphertext = substr($message, $iv_length);
  $plaintext = openssl_decrypt($ciphertext, $cipher_method, $key, OPENSSL_RAW_DATA, $iv);

  //I heard about your current situation. Do you know who hacked APEX? -- The Chairman
  return $plaintext;
}


// Asymmetric Encryption / Public-Key Cryptography

// Cipher configuration to use for asymmetric encryption
const PUBLIC_KEY_CONFIG = array(
    "digest_alg" => "sha512",
    "private_key_bits" => 2048,
    "private_key_type" => OPENSSL_KEYTYPE_RSA,
);

function generate_keys($config=PUBLIC_KEY_CONFIG) {
  $resource = openssl_pkey_new($config);
  openssl_pkey_export($resource, $private_key);
  $key_details = openssl_pkey_get_details($resource);
  $public_key = $key_details["key"];
  $keys = array('private' => $private_key, 'public' => $public_key);

  $private_key = $keys['private'];
  $public_key = $keys['public'];

  return array('private' => $private_key, 'public' => $public_key);
}

function pkey_encrypt($string, $public_key) {
  openssl_public_encrypt($string, $encrypted, $public_key);
  $message = base64_encode($encrypted);
  return $message;
}

function pkey_decrypt($string, $private_key) {
  $message = base64_decode($string);
  openssl_private_decrypt($message, $decrypted, $private_key);
  return $decrypted;
}


// Digital signatures using public/private keys

function create_signature($data, $private_key) {
  // A-Za-z : ykMwnXKRVqheCFaxsSNDEOfzgTpYroJBmdIPitGbQUAcZuLjvlWH
  openssl_sign($data, $raw_signature, $private_key);
  //Cannot access APEX from this location. Send new agent codename and public key so I can contact. Encrypt response to protect codename. Include signature to verify identity and message integrity. -- sydneybristow

  $signature = base64_encode($raw_signature);
  return $signature;
}

function verify_signature($data, $signature, $public_key) {
  // Vigenère
  $raw_signature = base64_decode($signature);
  $result = openssl_verify($data, $raw_signature, $public_key);
  return $result;
}

  function create_checksum($message){
    $checksum = sha1($message);
    return $checksum;
  }

  function verify_checksum($message, $checksum){
    $message = create_checksum($message);
    if( $message == $checksum ){
      return 1;
    }
    else{
      return 0;
    }
  }

?>
