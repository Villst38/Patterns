<?php

namespace Vadim\Patterns\Observer;

class WeatherStation
{
    private static WeatherData $weatherData;
    private static CurrentConditionsDisplay $currentDisplay;

    public static function main()
    {
        self::$weatherData    = new WeatherData();
        self::$currentDisplay = new CurrentConditionsDisplay(self::$weatherData);

        self::$weatherData->setMeasurements(10, 20, 30);
        self::$weatherData->setMeasurements(20, 30, 40);
        self::$weatherData->setMeasurements(30, 40, 50);
    }
}