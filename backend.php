<?php
// backend.php
$cpf = filter_input(INPUT_POST, 'cpf', FILTER_SANITIZE_STRING);
$cpf = preg_replace('/[^0-9]/', '', $cpf);

if (strlen($cpf) === 11) {
    $url = "http://102.165.46.244:3000/base/$cpf";
    $ch = curl_init($url);
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
    $response = curl_exec($ch);
    curl_close($ch);

    setcookie('api_response', $response, time() + 3600, '/');
    header('Location: ./app/');
    exit;
} else {
    setcookie('api_response', json_encode(['Status' => 'error', 'msg' => 'CPF INVALIDO']), time() + 3600, '/');
    header('Location: ./');
    exit;
}
