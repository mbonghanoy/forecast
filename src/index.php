<?php

require_once('../vendor/autoload.php');

class Forecaster
{
    protected $provider;

    public function __construct(WeatherProvider $provider)
    {
        $this->provider = $provider;
    }

    public function getForecast($city)
    {
        return $this->provider->getForecast($city);
    }
}

$forecaster = new Forecaster(new ApixuProvider('fe2e523a3bab437f89191431172505'));

var_dump($forecaster->getForecast('Quezon City'));
