<?php


namespace App\classes;


trait Catagory
{
    public $a = 'Md.';
    public $b = 'Shofiullah';


    public function hello()
    {
        echo $this->a.' '.$this->b;
    }
}