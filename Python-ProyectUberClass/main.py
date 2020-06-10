from car import car
if __name__ == "__main__":
    car = car()
    car.license = "AMS234"
    car.driver = "Alfonso Herrera"
    print(vars(car))

    car2 = car()
    car2.license = "QWE567"
    car2.driver = "Martha"
    print(vars(car2))