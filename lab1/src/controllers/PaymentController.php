<?php

require_once 'AppController.php';
require_once __DIR__ . '/../models/Car.php';
require_once __DIR__ . '/../models/Payment.php';
require_once __DIR__ . '/../repository/CarRepository.php';
require_once __DIR__ . '/../repository/PaymentRepository.php';
class PaymentController extends AppController
{
    private $carRepository;
    private $paymentRepository;

    public function __construct()
    {
        parent::__construct();
        $this->carRepository = new CarRepository();
        $this->paymentRepository = new PaymentRepository();
    }
    public function payment(){

        $cars = $this->carRepository->getCars();
        $this->render('pay-page', ['cars' => $cars]);
    if ($this->isPost()){
                $payment = new Payment($_POST['payment_number'], $_POST['street_name'],$_POST['register_number'],$_POST['parking_time']);
        $this->paymentRepository->addPayment($payment);
        return $this->render('history', [
            'messages' => $this->message,
            'pays' => $this->paymentRepository->get()]);}
return $this->render('pay-page', ['messages' => $this->message]);
    }

    public function history()
    {
        $pays = $this->paymentRepository->getPays();
        $this->render('history', ['pays' => $pays]);

    }


}