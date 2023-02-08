<?php

require_once 'AppController.php';
require_once __DIR__ . '/../models/Car.php';
require_once __DIR__ . '/../repository/CarRepository.php';
class CarController extends AppController
{
    const MAX_FILE_SIZE = 1024 * 1024;
    const SUPPORTED_TYPES = ['image/png', 'image/jpeg'];
    const UPLOAD_DIRECTORY = '/../public/uploads/';

    private $message = [];
    private $carRepository;

    public function __construct()
    {
        parent::__construct();
        $this->carRepository = new CarRepository();
    }
    public function showCars()
    {

        $cars = $this->carRepository->getCars();
        $this->render('your-cars', ['cars' => $cars]);
    }

    public function addCar()
    {
        if ($this->isPost() && is_uploaded_file($_FILES['file']['tmp_name']) && $this->validate($_FILES['file'])) {
            move_uploaded_file(
                $_FILES['file']['tmp_name'],
                dirname(__DIR__).self::UPLOAD_DIRECTORY.$_FILES['file']['name']
            );


            $car = new Car($_POST['brand'], $_POST['model'],$_POST['register'], $_FILES['file']['name']);
            $this->carRepository->addCar($car);
            return $this->render('your-cars', [
                'messages' => $this->message,
                'cars' => $this->carRepository->getCars()]);       }
        return $this->render('add-car', ['messages' => $this->message]);
    }


    private function validate(array $file): bool
    {
        if ($file['size'] > self::MAX_FILE_SIZE) {
            $this->message[] = 'Plik jest za duży.';
            return false;
        }

        if (!isset($file['type']) || !in_array($file['type'], self::SUPPORTED_TYPES)) {
            $this->message[] = 'Niewspierany typ pliku.';
            return false;
        }
        return true;
    }


}