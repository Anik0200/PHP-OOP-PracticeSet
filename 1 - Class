<?php

// EX 1 =================

class Fruit
{
    public $name;
    public $color;

    public function setName($name)
    {
        $this->name = $name;
    }

    public function getName()
    {
        return $this->name;
    }

    public function setColor($color)
    {
        $this->color = $color;
    }

    public function getColor()
    {
        return $this->color;
    }

}

$apple = new Fruit;
$apple->setName('apple');
$apple->setColor('Red');

echo "Name - {$apple->getName()}  Color - {$apple->getColor()}";

// EX 2 =================

class B
{
    public function setName()
    {
        return ["ANIK", "NABIL", "NAFIZ", "EMON"];
    }
}

class A
{
    public function getName($names) //problem
    {
        foreach ($names as $name) {
            echo "$name \n";
        }
    }
}

function show($d, $a)
{
    $a->getName($d);
}

$b = new B;
$a = new A;

show($b->setName(), $a);
