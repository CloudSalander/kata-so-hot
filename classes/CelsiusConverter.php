<?php 

class CelsiusConverter implements ITemperatureConverter {

    private const KELVIN_INCREMENT = 273.15;

    static function convert(float $degrees): void {
        echo $degrees." Celsius degrees are".PHP_EOL;
        echo ($degrees + self::KELVIN_INCREMENT)." Kelvin degrees and".PHP_EOL;
        echo ($degrees*9/5 + 32)." Farenheit degreess".PHP_EOL;
    }
   
}

?>