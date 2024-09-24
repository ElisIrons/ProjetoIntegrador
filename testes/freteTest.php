<?php

require 'vendor/autoload.php';

use Facebook\WebDriver\Remote\RemoteWebDriver;
use Facebook\WebDriver\Remote\DesiredCapabilities;
use Facebook\WebDriver\WebDriverBy;
use Facebook\WebDriver\WebDriverWait;
use Facebook\WebDriver\WebDriverExpectedCondition;

$host = 'http://localhost:4444/wd/hub';
$capabilities = DesiredCapabilities::chrome();
$driver = RemoteWebDriver::create($host, $capabilities);

$driver->get('http://localhost/ProjetoIntegrador/index.php');

$dadosFrete = [
    '29178-282' => 20.00, 
    '37000-000' => 30.00, 
    '38000-000' => 50.00  
];

foreach ($dadosFrete as $cep => $valorFrete) {
    $driver->findElement(WebDriverBy::id('cep'))->clear(); 
    $driver->findElement(WebDriverBy::id('cep'))->sendKeys($cep);

    $form = $driver->findElement(WebDriverBy::id('freteForm'));
    $form->submit();

    $wait = new WebDriverWait($driver, 10);
    $wait->until(WebDriverExpectedCondition::visibilityOfElementLocated(WebDriverBy::id('resultadoFrete')));

    $resultado = $driver->findElement(WebDriverBy::id('resultadoFrete'))->getText();
    if (strpos($resultado, 'Frete: R$ ' . number_format($valorFrete, 2, '.', '')) !== false) {
        echo "Teste passou para o CEP $cep. Resultado: $resultado\n";
    } else {
        echo "Teste falhou para o CEP $cep. Resultado: $resultado\n";
    }
}

$driver->quit();
