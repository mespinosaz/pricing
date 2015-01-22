<?php

namespace mespinosaz\Pricing\Currency;

abstract class AbstractCurrency implements CurrencyInterface
{
    protected function getPrecision()
    {
        return $this->precision;
    }

    public function formatNumber($number)
    {
        return round($number, $this->getPrecision());
    }
}
