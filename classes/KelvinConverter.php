<?php

class KelvinConverter implements ITemperatureConverter {
    private const KELVIN_VALUE = 273.15;

    static function convert(float $degrees): void{
        echo $degrees." Kelvin degrees are".PHP_EOL;
        echo ($degrees - self::KELVIN_VALUE)." Celsius degrees and".PHP_EOL;
        echo (($degrees - self::KELVIN_VALUE)*9/5+32)." Farenheit degreess".PHP_EOL;
    }  
}