<?php

namespace App\classes;
use App\classes\User;
use App\classes\ExampleOne;
use App\classes\ExampleTwo;
use App\classes\Catagory;
use App\classes\Teacher;

class Student extends Teacher implements ExampleOne,ExampleTwo
{
    use Catagory;
    protected $country = 'Bangladesh';

    public static $area = 'Azimpur';

    public function __construct()
    {
        $this->name = 'shofiullah';
        $this->city = 'lalbag';
    }

    public function manage()
    {
        echo self::$area;
//        echo $this->country;
        // echo $this->add;
        //echo "User name is $this->name and city is $this->city and country is $this->country";
    }

    public function one()
    {
        // TODO: Implement one() method.
        echo 'Hello One';
    }

    public function two()
    {
        // TODO: Implement two() method.
        echo 'Hello two';

    }

    public function three()
    {
        // TODO: Implement three() method.
        echo 'Hello three';

    }

    public function ten()
    {
        // TODO: Implement ten() method.
        echo 'form ten';
    }

    public function ten1()
    {
        // TODO: Implement ten1() method.
        echo 'from ten1';
    }

    public function test()
    {
        // TODO: Implement test() method.
    }

    public static function demo()
    {
        echo 'hello world from demo';
    }
}