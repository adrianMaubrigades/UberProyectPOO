public class uberX extends car{
    String brand;
    String model;

    public uberX(String license, account driver, String brand, String model){
        super(license, driver);
        this.brand = brand;
        this.model = model;
    }
}