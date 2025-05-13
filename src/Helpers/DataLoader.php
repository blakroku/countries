<?php

namespace Blakroku\Countries\Helpers;

/**
 * DataLoader is a helper class to load and cache data from JSON files.
 *
 * This class provides a static method to load data from a JSON file and cache it for future use.
 * It ensures that the data is only loaded once, improving performance when accessing the same data multiple times.
 */
class DataLoader
{
    protected static $cache = [];

    public static function countryLoader(): array
    {
        $jsonFilePath = self::fileLoader('/../../data/countries.json');

        if (isset(self::$cache[$jsonFilePath])) {
            return self::$cache[$jsonFilePath];
        }

        if (!file_exists($jsonFilePath)) {
            throw new \Exception("Data file not found: " . $jsonFilePath);
        }

        $json = file_get_contents($jsonFilePath);
        $countriesJsonData = json_decode($json, true);

        // Ensures data parses correctly
        if (json_last_error() !== JSON_ERROR_NONE) {
            throw new \Exception("Invalid JSON in file: " . $jsonFilePath);
        }

        self::$cache[$jsonFilePath] = $countriesJsonData;

        return $countriesJsonData;
    }

    protected static function fileLoader(string $jsonFilePath): string
    {
        return __DIR__ . $jsonFilePath;
    }
}
