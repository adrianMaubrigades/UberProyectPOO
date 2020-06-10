import java.util.ArrayList;
import java.util.Map;

public class uberBlack extends car{
    Map<String, ArrayList<String>> typeCarAccepted;
    ArrayList<String> seatsMaterial;

    public uberBlack(String license, account driver, Map<String, ArrayList<String>> typeCarAccepted, ArrayList<String> seatsMaterial){
        super(license, driver);
        this.typeCarAccepted = typeCarAccepted;
        this.seatsMaterial = seatsMaterial;
    }
}