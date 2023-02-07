<?php


require_once 'Repository.php';
require_once __DIR__.'/../models/Car.php';

class CarRepository extends Repository
{

    public function getProject(int $id): ?Car
    {
        $stmt = $this->database->connect()->prepare('
            SELECT * FROM public.cars WHERE id = :id
        ');
        $stmt->bindParam(':id', $id, PDO::PARAM_INT);
        $stmt->execute();

        $car = $stmt->fetch(PDO::FETCH_ASSOC);

        if ($car == false) {
            return null;
        }

        return new Car(
            $car['brand'],
            $car['model'],
            $car['register'],
            $car['picture']
        );
    }

    public function addCar(Car $car): void
    {
        $stmt = $this->database->connect()->prepare('
            INSERT INTO cars (brand, model, register, picture)
            VALUES (?, ?, ?, ?)
        ');

        $stmt->execute([
            $car->getBrand(),
            $car->getModel(),
            $car->getRegister(),
            $car->getImage()
        ]);
    }
}