<?php

namespace mespinosaz\Pricing\Currency;

class CurrencyMapper
{
    const EURO_ISO_CODE = 'EUR';
    const DOLLAR_ISO_CODE = 'USD';

    private $map;

    public function __construct()
    {
        $this->map = array(
            self::EURO_ISO_CODE => new Euro(),
            self::DOLLAR_ISO_CODE => new Dollar()
        );
    }

    public function map($isoCode)
    {
        $isoCode = $this->normalizeIsoCode($isoCode);

        if (empty($this->map[$isoCode])) {
            return new Null();
        }

        return $this->map[$isoCode];
    }

    private function normalizeIsoCode($isoCode)
    {
        return strtoupper($isoCode);
    }
}
