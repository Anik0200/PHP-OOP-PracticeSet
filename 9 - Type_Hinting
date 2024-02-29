<?php

// EX 1 =================

function sum(int $val)
{
    echo $val + 10;
}

sum(10);

// EX 2 =================

class Hi
{
    public function sayHi()
    {
        echo "HI EVERYONE";
    }
}

class Bye
{
    public function sayBye()
    {
        echo "BYE EVERYONE";
    }
}

function c(Hi $c)
{
    $c->sayHi();
}

$test = new Hi;

c($test);

// EX 3 =================

class A
{
    public function getName(B $names)
    {
        foreach ($names->setName() as $name) {
            echo "$name \n";
        }
    }
}

class B
{
    public function setName()
    {
        return ["ANIK", "NABIL", "NAFIZ", "EMON"];
    }
}

$b = new B;
$a = new A;

$a->getName($b);
