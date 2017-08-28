<?php

namespace KickAss\ValueObjects\Geo;

use KickAss\ValueObjects\Geo\Country\CountryIso2Value;

class CountryObject
{
    protected $iso2;

    /**
     * CountryObject constructor.
     *
     * @param CountryIso2Value $iso2
     */
    public function __construct(
        CountryIso2Value $iso2
    )
    {
        $this->iso2 = $iso2;
    }

    /**
     * @return CountryIso2Value
     */
    public function iso2(): CountryIso2Value
    {
        return $this->iso2;
    }
}
