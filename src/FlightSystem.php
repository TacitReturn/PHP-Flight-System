<?php
require __DIR__ . "../vendor/autoload.php";

class Airplane implements Roleable
{

    public $role = null;

    public function getRole()
    {
        return $this->role;
    }

    public function __construct($role)
    {
        $this->role = $role;
    }
}


class Plane
{
    public $role = null;
    public $nationalOrigin = null;
    public $manufacturer = null;
    public $numberBuilt = null;

    public function __construct(string $role, string $nationalOrigin, string $manufaturer, string $numberBuilt): string
    {
        $this->role = $role;
        $this->$nationalOrigin = $nationalOrigin;
        $this->$manufaturer = $manufaturer;
        $this->$numberBuilt = $numberBuilt;
    }


}


$boeing747 = new Plane("Wide-Body Jet Airliner", "United States", "Boeing Commercial Airplanes", );


// TODO: Make a class for manufacturer.