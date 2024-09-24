<?php
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $cep = $_POST['cep'];
    $frete = 0;

    error_log("CEP recebido: $cep");

    if (substr($cep, 0, 2) === '29') {
        $frete = 20.00;
    } elseif (substr($cep, 0, 2) === '37') {
        $frete = 30.00;
    } else {
        $frete = 50.00;
    }

    error_log("Frete calculado: R$ $frete");

    echo json_encode(['frete' => $frete]);
}
?>
