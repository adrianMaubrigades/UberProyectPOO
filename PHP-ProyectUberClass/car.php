<?php
require_once('account.php');
class car{
    public $id;
    public $driver;
    public $passenger;

    public function __construct($license, $driver)
    {
        $this->license = $license;
        $this->driver = $driver;
    }

    public function printDataCar()
    {
        echo "Licencia: $this->license Driver: ".$this->driver;
    }
}
?>