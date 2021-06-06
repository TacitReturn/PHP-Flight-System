<?php
declare(strict_types = 1);

// TODO: Make a class for manufacturer.

require __DIR__ . "../vendor/autoload.php";


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

class Plane extends Manufacturer
{
    public $role = null;
    public $nationalOrigin = null;
    public $manufacturer = null;
    public $numberBuilt = null;

    public function __construct(Manufacturer $manufacturer, string $role, string $nationalOrigin, int $numberBuilt)
    {
        $this->role = $role;
        $this->nationalOrigin = $nationalOrigin;
        $this->numberBuilt = $numberBuilt;
        $this->manufacturer = $manufacturer;
    }

    public function getManufacturer(Manufacturer $manufacturer): Manufacturer
    {
        return $manufacturer;
    }


}

$manufacturer = new Manufacturer(new DateTime("July 15, 1916"), "Renton, Washington, U.S.", "Worldwide", ["Stan Deal"], [737, 747, 767, 777, 787], 8_300_000_000);

$boeing747 = new Plane($manufacturer, "Wide Body Jet Airliner" ,"United States", 1_562,"Boeing Commercial Airplanes");


echo "Boeing 747" . PHP_EOL;

var_dump($boeing747);

