<?php

namespace Vadim\Patterns\Observer;

class WeatherData extends Observable
{
    protected array $observers;
    protected float $temperature;
    protected float $humidity;
    protected float $pressure;
    protected float $heatindex;

    public function setMeasurements(float $temperature, float $humidity, float $pressure)
    {
        $this->temperature = $t = $temperature;
        $this->humidity    = $rh = $humidity;
        $this->pressure    = $pressure;
        $this->heatindex   = ((16.923 + (0.185212 * $t) + (5.37941 * $rh) - (0.100254 * $t * $rh) + (0.00941695 * ($t
                        * $t)) + (0.00728898 * ($rh * $rh)) + (0.000345372 * ($t * $t * $rh)) - (0.000814971 * ($t * $rh
                        * $rh)) + (0.0000102102 * ($t * $t * $rh * $rh)) - (0.000038646 * ($t * $t * $t))
                + (0.0000291583 * ($rh * $rh * $rh)) + (0.00000142721 * ($t * $t * $t * $rh)) + (0.000000197483 * ($t
                        * $rh * $rh * $rh)) - (0.0000000218429 * ($t * $t * $t * $rh * $rh)) + 0.000000000843296 * ($t
                    * $t * $rh * $rh * $rh)) - (0.0000000000481975 * ($t * $t * $t * $rh * $rh * $rh)));
        $this->measurementsChanged();
    }

    public function getTemperature(): float
    {
        return $this->temperature;
    }

    public function getHumidity(): float
    {
        return $this->humidity;
    }

    public function getPressure(): float
    {
        return $this->pressure;
    }
}