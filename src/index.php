<?php

require_once('../vendor/autoload.php');

class Forecaster
{
    protected $provider;

    public function __construct(WeatherProvider $provider)
    {
        $this->provider = $provider;
    }
    /**
     * @param  string $city [passed location]
     */
    public function getForecast($city)
    {
        return $this->provider->getForecast($city);
    }
}

$forecaster = new Forecaster(new ApixuProvider('fe2e523a3bab437f89191431172505'));

$forecastResult = $forecaster->getForecast('Cebu');

echo "The Temperature today in {$forecastResult['city']} is {$forecastResult['temp_c']}&degC";
