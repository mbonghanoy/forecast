<?php

class ApixuProvider implements WeatherProvider
{
    protected $key;

    protected $api = "http://api.apixu.com/v1/current.json";

    public function __construct($key)
    {
        $this->key = $key;
    }

    public function getForecast($city)
    {
        $url = sprintf('%s?key=%s&q=%s', $this->api, $this->key, $city);

        $response = json_decode(file_get_contents($url));

        return [
            'city' => $response->location->name,
            'temp_c' => $response->current->temp_c,
            'pressure' => $response->current->pressure_mb,
        ];
    }
}