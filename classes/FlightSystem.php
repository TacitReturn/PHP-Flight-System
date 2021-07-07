<?php
declare(strict_types = 1);
include_once "./Manufacturer.php";

class Plane extends Manufacturer
{
    public ?string $role = null;
    public ?string $nationalOrigin = null;
    public ?Manufacturer $manufacturer = null;
    public ?int $numberBuilt = null;

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

