<?php

class Speedometer
{
    public const KM_TO_MILES_RATIO = 0.621371192;

    public static function convertKmToMiles(float $distanceInKm)
    {
        $distanceInMiles = $distanceInKm * self::KM_TO_MILES_RATIO;
        return $distanceInMiles;
    }

    public static function convertMilesToKm(float $distanceInMiles)
    {
        $distanceInKm = $distanceInMiles / self::KM_TO_MILES_RATIO;
        return $distanceInKm;
    }
}