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

$forecasterApixu = new Forecaster(new ApixuProvider('25bbba1ee9ab4461a77111044170408'));

$forecasterOpenWeatherMap = new Forecaster(new OpenWeatherMapProvider('a5278f23f7f795a5d241ff22e36fa9b2'));

$forecastResultApixu = $forecasterApixu->getForecast('Cebu');
$forecastResultOpenWeatherMap = $forecasterOpenWeatherMap->getForecast('Manila');

echo "The Temperature today in {$forecastResultApixu['city']} is {$forecastResultApixu['temp_c']}&degC <br>";
echo "The Temperature today in {$forecastResultOpenWeatherMap['city']} is {$forecastResultOpenWeatherMap['temp_c']}";
