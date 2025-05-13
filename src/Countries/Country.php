<?php

namespace Blakroku\Countries\Countries;

class Country
{
    public $id;

    public $name;

    public $country_code;

    public $domain_code;

    public $calling_code;

    public $latitude;

    public $longitude;

    public $region_code;

    public $subregion_code;

    public $currency_code;

    public $capital;

    public $timezone;

    public $languages;

    public $population;

    public $flag;

    public $un_member;

    public $driving_side;

    public $postal_code_format;

    public function __construct($data)
    {
        $this->id = $data['id'];
        $this->name = $data['name'];
        $this->country_code = $data['country_code'];
        $this->domain_code = $data['domain_code'];
        $this->calling_code = $data['calling_code'];
        $this->latitude = $data['latitude'];
        $this->longitude = $data['longitude'];
        $this->region_code = $data['region_code'];
        $this->subregion_code = $data['subregion_code'];
        $this->currency_code = $data['currency_code'];
        $this->capital = $data['capital'];
        $this->timezone = $data['timezone'];
        $this->languages = $data['languages'];
        $this->population = $data['population'];
        $this->flag = $data['flag'];
        $this->un_member = $data['un_member'];
        $this->driving_side = $data['driving_side'];
        $this->postal_code_format = $data['postal_code_format'];
    }
}
