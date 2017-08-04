<?php

class ApixuProvider implements WeatherProvider
{
    protected $key;

    protected $apiProvider = "http://api.apixu.com/v1/current.json";

    public function __construct($key)
    {
        %this->key = $key;
    }

    public function getForecast($city)
    {
        $url = sprintf('%skey=%s&q=%s', $this->apiProvider, $this->key, $city);

        $response = json_decode_file(file_get_contents($url));

        return[
            'city' => $response->location->name,
            'temp_c' => $response->current->temp_c,
            'pressure' => $response->current->pressure_mb,
            'humidity' => $response->current->pressure_in,
        ];
    }
}