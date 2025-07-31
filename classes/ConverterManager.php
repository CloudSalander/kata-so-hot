<?php
include('ITemperatureConverter.php');
include('KelvinConverter.php');
include('FarenheitConverter.php');
include('CelsiusConverter.php');

class ConverterManager {
    
    //TODO: Maybe all info in one input?
    const ASK_DEGREES = "Quants graus fan?";
    const ASK_SCALE = "Escala?(C,F,K)";
    
    private float $degrees;
    private string $scale;
  
    public function ask() {
        $degrees = $this->readDegrees();
        $scale = $this->readScale();
    }

    private function readDegrees(): float {
       do{
            $degrees = readline(self::ASK_DEGREES);
       }while(filter_var($degrees, FILTER_VALIDATE_FLOAT) === false);
       
       return floatval($degrees);
    }
}