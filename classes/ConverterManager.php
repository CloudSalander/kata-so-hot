<?php
include('ITemperatureConverter.php');
include('KelvinConverter.php');
include('FarenheitConverter.php');
include('CelsiusConverter.php');
include('TemperatureScale.php');

class ConverterManager {
    
    //TODO: Maybe all info in one input?
    const ASK_DEGREES = "Quants graus fan?";
    const ASK_SCALE = "Escala?(C,F,K)";
    const VALID_SCALES = ["F","C","K"];
    
    private float $degrees;
    private TemperatureScale $scale;
  
    public function ask() {
        $this->degrees = $this->readDegrees();
        $this->scale = $this->readScale();
        $this->convert();
    }

    private function readDegrees(): float {
       do{
            $degrees = readline(self::ASK_DEGREES);
       }while(filter_var($degrees, FILTER_VALIDATE_FLOAT) === false);
       
       return floatval($degrees);
    }

    private function readScale(): TemperatureScale {
        do {
            $scale = readline(self::ASK_SCALE);
        }while(!in_array($scale,self::VALID_SCALES));
        
        return match($scale) {
            "C" => TemperatureScale::Celsius,
            "F" => TemperatureScale::Farenheit,
            "K" => TemperatureScale::Kelvin
        }; 
    }

    private function convert(): void {
        match($this->scale) {
            TemperatureScale::Celsius => CelsiusConverter::convert($this->degrees),
            TemperatureScale::Farenheit => FarenheitConverter::convert($this->degrees),
            TemperatureScale::Kelvin => KelvinConverter::convert($this->degrees)
        };
    }
}