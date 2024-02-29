<?php

// EXAMPLE 1 ======================

class Person{

    public $name;
    public $age;

    public function Show()
    {
        echo "NAME = {$this->name} | AGE = {$this->age}";
    }
}

$p = new Person();
$p->name = "ANIK";
$p->age = 20;

$p->Show();

// EXAMPLE 2 ======================

class Person
{
    public $name;
    public $age;

    public function __construct($n = null, $a = null)
    {
        $this->name = $n;
        $this->age  = $a;
    }

    public function Show()
    {
        echo "NAME = {$this->name} | AGE = {$this->age}";
    }
}

$p = new Person("anik", 10);
$p->Show();

// EXAMPLE 3 ======================

class Person
{
    public function Show()
    {
        echo "IM SHOW";
    }

    public function __construct()
    {
        echo "Hi IM CONS";
    }
}

$p = new Person();
$p->Show();
