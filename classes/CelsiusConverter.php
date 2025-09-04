<?php 

class CelsiusConverter implements ITemperatureConverter {

    static function convert(float $degrees): void {
        echo $degrees." Celsius degrees are".PHP_EOL;
        echo ($degrees + self::KELVIN_VALUE)." Kelvin degrees and".PHP_EOL;
        echo ($degrees*9/5 + 32)." Fahrenheit degreess".PHP_EOL;
    }
   
}

?>