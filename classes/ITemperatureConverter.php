<?php

interface ITemperatureConverter {
    
    public const KELVIN_VALUE = 273.15;
    
    static function convert(float $degrees): void;
}