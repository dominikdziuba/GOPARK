<?php

class Payment
{
    private $payment_number;
    private $street_name;
    private $register_number;
    private $parking_time;


    public function __construct($payment_number=616516, $street_name, $register_number,$parking_time)
    {
        $this->payment_number = $payment_number;
        $this->street_name = $street_name;
        $this->register_number = $register_number;
        $this->parking_time = $parking_time;
    }

    public function getParkingTime()
    {
        return $this->parking_time;
    }

    public function setParkingTime($parking_time): void
    {
        $this->parking_time = $parking_time;
    }


    public function getPaymentNumber():string
    {
        return $this->payment_number;
    }


    public function setPaymentNumber(string $payment_number): void
    {
        $this->payment_number = $payment_number;
    }
    public function getStreetName():string
    {
        return $this->street_name;
    }


    public function setStreetName(string $street_name): void
    {
        $this->street_name = $street_name;
    }


    public function getRegisterNumber():string
    {
        return $this->register_number;
    }


    public function setRegisterNumber(string $register_number): void
    {
        $this->register_number = $register_number;
    }
}