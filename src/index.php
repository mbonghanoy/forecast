<?php

require_once('../vendor/autoload.php');

class Forecaster
{
    protected $provider;

    public function __construct(Weather Provider $provider)
    {
        $this->provider = $provider;
    }

    public function getForecast($city)
    {
        return $this->provider->getForecast($city);
    }
}

$forecaster = new Forecaster(new ApixuProvider('9c8481c4543dce5886350c41f0835881'));

$forecast = $forecaster->getForecast('Quezon City');

echo "The temperature in {$forecast['city']}";