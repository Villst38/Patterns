<?php

namespace Vadim\Patterns\Observer;

class CurrentConditionsDisplay implements Observer, DisplayElement
{
    private WeatherData $weatherData;
    private Observable $observable;
    public float $temperature;
    private float $humidity;

    public function __construct(Observable $observable)
    {
        $this->observable = $observable;
        $observable->addObserver($this);
    }

    public function update(Observable $obs, ...$args): void
    {
        if ($obs instanceof WeatherData) {
            $this->weatherData = $weatherData = $obs;
            $this->temperature = $weatherData->getTemperature();
            $this->humidity    = $weatherData->getHumidity();
            $this->display();
        }
    }

    public function display(): void
    {
        echo "Температура: $this->temperature <br> Давление: $this->humidity <br><br>";
    }
}
