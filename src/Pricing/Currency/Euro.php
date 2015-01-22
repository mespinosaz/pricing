<?php

namespace mespinosaz\Pricing\Currency;

class Euro implements CurrencyInterface
{
    public function formatNumber($number)
    {
        return round($number, 2);
    }
}
