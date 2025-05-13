<?php

namespace Blakroku\Countries\Countries;

use Blakroku\Countries\Helpers\DataLoader;

class CountryManager
{
    private $countries = [];

    private $countriesByName = [];

    private $countriesByCode = [];

    private $countriesByDomainExtension = [];

    private $countriesByCallingCode = [];

    private $countriesByCurrency = [];

    private $countriesByCapital = [];

    public function __construct()
    {
        $this->loadCountries();
    }

    private function loadCountries(): void
    {
        $data = DataLoader::countryLoader();

        foreach ($data as $countryData) {
            $country = new Country($countryData);
            $this->countries[] = $country;
            $this->countriesByName[$country->name] = $country;
            $this->countriesByCode[$country->country_code] = $country;
            $this->countriesByDomainExtension[$country->domain_code] = $country;
            $this->countriesByCallingCode[$country->calling_code] = $country;
            $this->countriesByCurrency[$country->currency_code] = $country;
            $this->countriesByCapital[$country->capital] = $country;
        }
    }

    public function getAllCountries(): array
    {
        return $this->countries;
    }


    public function getCountryByName($name): ?Country
    {
        return $this->countriesByName[$name] ?? null;
    }

    public function getCountryByCode($code): ?Country
    {
        return $this->countriesByCode[$code] ?? null;
    }

    public function getCountryByDomainExtension($domainExtension): ?Country
    {
        return $this->countriesByDomainExtension[$domainExtension] ?? null;
    }

    public function getCountryByCallingCode($callingCode): ?Country
    {
        return $this->countriesByCallingCode[$callingCode] ?? null;
    }

    public function getCountryByCurrency($currencyCode): ?Country
    {
        return $this->countriesByCurrency[$currencyCode] ?? null;
    }

    public function getCountryByCapital($capital): ?Country
    {
        return $this->countriesByCapital[$capital] ?? null;
    }
}
