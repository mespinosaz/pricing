<?php

namespace mespinosaz\Pricing\Tests;

use mespinosaz\Pricing\Price;
use mespinosaz\Pricing\Vat;
use mespinosaz\Pricing\Currency;

class PriceTest extends \PHPUnit_Framework_TestCase
{
    public function testBasicPrice()
    {
        $quantity = 12.73;
        $price = new Price($quantity);
        $expected = $quantity;
        $this->assertEquals($expected, $price->getGrossValue());
    }

    public function testBasicPriceWithVat()
    {
        $quantity = 11.50;
        $vatQuantity = 20;
        $price = new Price($quantity);
        $vat = new Vat($vatQuantity);
        $price->addVat($vat);
        $expectedNet = $quantity;
        $expectedGross = 13.80;
        $this->assertEquals($expectedNet, $price->getNetValue());
        $this->assertEquals($expectedGross, $price->getGrossValue());
    }

    public function testWithCurrencies()
    {
        $quantity = 12.33;
        $vatQuantity = 21;
        $price = new Price($quantity, new Currency\Euro());
        $vat = new Vat($vatQuantity);
        $price->addVat($vat);
        $expectedNet = $quantity;
        $expectedGross = 14.92;
        $this->assertEquals($expectedNet, $price->getNetValue());
        $this->assertEquals($expectedGross, $price->getGrossValue());
    }
}
