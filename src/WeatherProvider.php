<?php

interface WeatherProvider
{
    /**
     * @param  string $city
     * @return return results results according to the given city
     */
    public function getForecast($city);
}