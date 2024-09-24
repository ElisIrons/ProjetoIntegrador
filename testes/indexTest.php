<?php
require 'vendor/autoload.php';

use Facebook\WebDriver\Remote\RemoteWebDriver;
use Facebook\WebDriver\Remote\DesiredCapabilities;
use Facebook\WebDriver\WebDriverBy;
use Facebook\WebDriver\Exception\NoSuchElementException; 

class indexTest {

    public function testHomePage() {
        $host = 'http://localhost:4444'; 
        $driver = RemoteWebDriver::create($host, DesiredCapabilities::chrome());

        $driver->get('http://localhost/ProjetoIntegrador/index.php');

        try{
            $paragraph = $driver->findElement(WebDriverBy::xpath("//p[contains(text(), 'OS MAIS ACESSADOS NOS ÚLTIMOS DIAS')]"));
            $paragraphText = $paragraph->getText();
                echo "Texto encontrado: " . $paragraphText . "\n";
            } catch (NoSuchElementException $e){
                echo "Texto não encontrado";
            }
        $driver->quit();
    }
}

$test = new indexTest();
$test->testHomePage();
