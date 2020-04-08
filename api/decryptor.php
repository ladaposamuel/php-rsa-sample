<?php
// required headers
header("Access-Control-Allow-Origin: *");
header("Content-Type: application/json; charset=UTF-8");

require('../classes/rsa.class.php');

$crypt = new RsaCrypt;


if (isset($_POST['encrypted_word']) && $_POST['encrypted_word']  !== '') {
    $encrypted_word = $_POST['encrypted_word'];
    $crypt->genKeys(2048);
    $crypt->setPublicKey('../classes/public.pem');
    $crypt->setPrivateKey('../classes/private.pem');
   
    $response = [
  'status' => 'success',
  'payload' => [
    'input' => $encrypted_word,
    'output' => $crypt->decrypt($encrypted_word)
  ]
];

    echo json_encode($response);
} else {
    echo json_encode(
      array( "status" => 'error',
    "message" => "No inputs found.")
  );
}