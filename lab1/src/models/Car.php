<?php

class Car
{
    private $brand;
    private $model;
    private $register;
    private $image;

    public function __construct($brand, $model, $register, $image)
    {
        $this->brand = $brand;
        $this->model = $model;
        $this->register = $register;
        $this->image = $image;
    }


    public function getBrand():string
    {
        return $this->brand;
    }


    public function setBrand(string $brand): void
    {
        $this->brand = $brand;
    }


    public function getModel():string
    {
        return $this->model;
    }


    public function setModel(string $model): void
    {
        $this->model = $model;
    }


    public function getRegister():string
    {
        return $this->register;
    }


    public function setRegister(string $register): void
    {
        $this->register = $register;
    }


    public function getImage():string
    {
        return $this->image;
    }


    public function setImage(string $image): void
    {
        $this->image = $image;
    }


}