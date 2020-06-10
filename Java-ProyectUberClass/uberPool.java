public class uberPool extends car{
    String brand;
    String model;

    public uberPool(String license, account driver, String brand, String model){
        super(license, driver);
        this.brand = brand;
        this.model = model;
    }
}