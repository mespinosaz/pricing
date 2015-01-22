<?php

namespace mespinosaz\Pricing\Currency;

class Euro extends AbstractCurrency
{
    const DECIMAL_PRECISION = 2;

    public function formatNumber($number)
    {
        return round($number, $this->getPrecision());
    }
}
