<?php
namespace App\Pustaka;

class Publisher
{
    public $name;
    public $address;
    private $phone;

    public function __construct($name, $address)
    {
        $this->name = $name;
        $this->address = $address;
    }

    public function setPhone($phone): void
    {
        $this->phone = $phone;
    }


    public function getPhone(): string
    {
        return $this->phone;
    }
}
