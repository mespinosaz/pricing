<?php

namespace mespinosaz\Pricing\Currency;

abstract class AbstractCurrency implements CurrencyInterface
{
    protected function getPrecision()
    {
        return static::DECIMAL_PRECISION;
    }
}
