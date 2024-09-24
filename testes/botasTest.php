<?php
require 'vendor/autoload.php';

use Facebook\WebDriver\Remote\RemoteWebDriver;
use Facebook\WebDriver\Remote\DesiredCapabilities;
use Facebook\WebDriver\WebDriverBy;

class botasTest {
    public function testBotasPage() {
        $host = 'http://localhost:4444';
        $driver = RemoteWebDriver::create($host, DesiredCapabilities::chrome());

        $driver->get('http://localhost/ProjetoIntegrador/botas.php');

        $productName = $driver->findElements(WebDriverBy::xpath("//a[contains(text(), 'Bota Coturno')]"));
        if (count($productName) > 0) {
            echo "Nome do produto encontrado: " . $productName[0]->getText() . "\n";
        } else {
            echo "Nome do produto não encontrado.\n";
        }

        $driver->quit();
    }
}

$test = new botasTest();
$test->testBotasPage();
