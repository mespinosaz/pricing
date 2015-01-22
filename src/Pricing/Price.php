<?php

namespace mespinosaz\Pricing;

class Price
{
    private $value;
    private $vats = array();

    public function __construct($value, Currency\CurrencyInterface $currency = null)
    {
        $this->value = $value;
        $this->currency = new Currency\Null();
        if ($currency) {
            $this->currency = $currency;
        }
    }

    public function getGrossValue()
    {
        $value = $this->value+$this->getVatValue();
        return $this->currency->formatNumber($value);
    }

    public function getNetValue()
    {
        return $this->currency->formatNumber($this->value);
    }

    public function addVat(Vat $vat)
    {
        $this->vats[] = $vat;
    }

    public function getVatValue()
    {
        $value = 0;
        foreach($this->vats as $vat) {
            $value += $this->value*$vat->getValue()/100;
        }
        return $value;
    }
}
