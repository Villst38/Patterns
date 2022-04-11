<?php

namespace Vadim\Patterns\Observer;

class ForecastDisplay implements Observer, DisplayElement
{
    private float $currentPressure = 29.92;
    private float $lastPressure;
    private WeatherData $weatherData;
    private Observable $observable;

    public function __construct(Observable $observable)
    {
        $this->observable = $observable;
        $observable->addObserver($this);
    }

    public function update(Observable $obs, ...$args): void
    {
        if ($obs instanceof WeatherData) {
            $this->weatherData = $obs;
            $this->lastPressure = $this->currentPressure;
            $this->currentPressure = $this->weatherData->getPressure();
        }
    }

    public function display(): void
    {
        echo "Старое давление: $this->lastPressure <br> Новое давление: $this->purrentPressure <br>";
    }
}