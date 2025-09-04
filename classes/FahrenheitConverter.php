<?php

class FahrenheitConverter implements ITemperatureConverter {
    private const KELVIN_VALUE = 273.15;

    static function convert(float $degrees): void{
        echo $degrees." Fahrenheit degrees are".PHP_EOL;
        echo (($degrees -32)*5/9)." Celsius degrees and".PHP_EOL;
        echo ((($degrees -32)*5/9) + self::KELVIN_VALUE)." Kelvin degreess".PHP_EOL;
    } 
}