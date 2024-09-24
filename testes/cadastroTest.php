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

$driver->get('http://localhost/ProjetoIntegrador/cadastro.php');

$driver->findElement(WebDriverBy::id('nome'))->sendKeys('Elis');
$driver->findElement(WebDriverBy::id('email'))->sendKeys('elis@email.com');
$driver->findElement(WebDriverBy::id('senha'))->sendKeys('senha123');
$driver->findElement(WebDriverBy::id('data'))->sendKeys('18-04-1994');
$driver->findElement(WebDriverBy::xpath("//input[@name='sexo' and @value='F']"))->click();
$driver->findElement(WebDriverBy::id('estado'))->sendKeys('ES');
$driver->findElement(WebDriverBy::id('CEP'))->sendKeys('29178-282');

$form = $driver->findElement(WebDriverBy::id('cadastroForm')); 
$form->submit();

sleep(2);

$currentUrl = $driver->getCurrentURL();
if ($currentUrl === 'http://localhost/ProjetoIntegrador/dados_recebidos.php') {
    $wait = new WebDriverWait($driver, 20);
    $wait->until(WebDriverExpectedCondition::visibilityOfElementLocated(WebDriverBy::tagName('strong')));

    $successMessage = $driver->findElement(WebDriverBy::tagName('strong'))->getText();
    echo $successMessage; 
} else {
    $html = $driver->getPageSource();
    file_put_contents('pagina_debug.html', $html);
    echo "A URL não mudou. URL atual: $currentUrl";
}

$driver->quit();
