<?PHP
require_once('car.php');
class uberVan extends car{
    public $typeCarAccepted;
    public $seatsMaterial;
    public function __construct($typeCarAccepted, $seatsMaterial, $license, $driver)
    {
        parent::__construct($license, $driver);
        $this->typeCarAccepted->$typeCarAccepted;
        $this->seatsMaterial->$seatsMaterial;    
    }
}

?>