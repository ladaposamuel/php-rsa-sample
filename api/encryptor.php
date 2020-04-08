<?php
// required headers
header("Access-Control-Allow-Origin: *");
header("Content-Type: application/json; charset=UTF-8");

require('../classes/rsa.class.php');

$crypt = new RsaCrypt;


if (isset($_POST['secret_word']) && $_POST['secret_word']  !== '') {
    $secret_word = $_POST['secret_word'];
    $crypt->genKeys(2048);
    $crypt->setPublicKey('../classes/public.pem');
    $crypt->setPrivateKey('../classes/private.pem');
    $data = $crypt->encrypt($secret_word);

    $response = [
  'status' => 'success',
  'payload' => [
    'input' => $secret_word,
    'output' => $data
  ]
];

    echo json_encode($response);
}