<?php

class OpenWeatherMapProvider implements WeatherProvider
{
    /** @var string [will use this to passed keys to be used in url] */
    protected $key;

    protected $api = "http://api.openweathermap.org/data/2.5/weather?units=metric";
    /**
     * @param [string] $key
     */
    public function __construct($key)
    {
        $this->key = $key;
    }
    /**
     * [getForecast description]
     * @param  string $city [city to be use]
     * @return array
     */
    public function getForecast($city)
    {
        /**
         * $url is address to be use. query and city name divided by comma.
         * @var [string]
         */
        $url = sprintf("%s?&appid=%s&q=%s", $this->api, $this->key, $city);
        /**
         * get the contents of string and will decode
         * @var string
         */
        $response = json_decode(file_get_contents($url));
        /** returns results in array from $url that is stored in response*/
        return [
            'city' => $response->name,
            'temp_c' => $response->main->temp,
            'pressure' => $response->main->pressure,
        ];
    }
}