<?php

class Manufacturer
{
    public ?DateTime $founded;
    public string $headquarters;
    public string $areaServed;
    public array $keyPeople;
    public array $products;
    public int $equity;

    public function __construct(?DateTime $founded, string $headquarters, string $areaServed, array $keyPeople, array $products, int $equity)
    {
        $this->founded = $founded;
        $this->headquarters = $headquarters;
        $this->areaServed = $areaServed;
        $this->keyPeople = $keyPeople;
        $this->products = $products;
        $this->equity = $equity;
    }

}