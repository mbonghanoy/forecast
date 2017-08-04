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

$forecaster = new Forecaster(new ApixuProvider('9c8481c4543dce5886350c41f0835881'));

var_dump($forecaster->getForecast('Quezon City'));
