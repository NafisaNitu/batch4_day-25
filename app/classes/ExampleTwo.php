<?php


namespace App\classes;


trait ExampleTwo
{
    public $arif = "arif";
    protected $cr = "Sudipto";
    private $mamun = 'Mamun';

    public function santo()
    {
        echo "Hello santo";
    }

    protected function maruf()
    {
        echo "Hello Maruf";
    }
    private function shila()
    {
        echo "Hello shila";
    }
}