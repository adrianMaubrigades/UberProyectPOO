class main{
    public static void main(String[] args) {
        System.out.println("Hola Mundo");
        car car = new car("AMQ123", new account("Alfredo Herrera", "AND123"));
        car.passenger = 4;
        car.printDataCar();
        
        car car2 = new car("QWE567", new account("Andrea Herrera", "ANDA876"));
        car2.passenger = 3;
        car2.printDataCar();
    }
}