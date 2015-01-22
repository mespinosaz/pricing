<?php

namespace mespinosaz\Pricing\Currency;

class Null implements CurrencyInterface
{
    public function formatNumber($number)
    {
        return $number;
    }
}
