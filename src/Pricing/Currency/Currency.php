<?php

namespace mespinosaz\Pricing\Currency;

class Currency implements CurrencyInterface
{
    public function formatNumber($number)
    {
        return $number;
    }

    public function setPrecision($precision)
    {
        $this->precision = $precision;
    }
}
