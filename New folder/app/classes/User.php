<?php


namespace App\classes;


class User
{
    protected $name = 'shofi';
    protected $city = 'Dhaka';

    public function index()
    {
        echo 'User name is ' . $this->name . ' and city is ' . $this->city;
    }
}
