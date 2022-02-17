<?php


namespace App\classes;


abstract class ExampleOne
{
    public $hello = "Arif";
    protected $helloOne = "Jenifar";
    private $helloTwo = "santo";


    public function helloFour()
    {
        echo "hello four";
    }
    abstract public function helloFive();

}