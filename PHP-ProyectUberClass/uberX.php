<?php
require_once('car.php');
class uberX extends car{
    public $brand;
    public $model;

    public function __construct($license, $driver, $brand, $model){
        parent::__construct($license,$driver);
        $this->brand = $brand;
        $this->model =$model;
    }
}
?>